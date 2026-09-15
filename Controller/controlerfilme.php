<?php

namespace Controller;

use Model\Movie;

class MovieController {
    private $movieModel;

    public function __construct() {
        $this->movieModel = new Movie();
    }

    public function index() {
        // Garante que o usuário está logado
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?action=login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action_type']) && $_POST['action_type'] === 'create') {
            $title = trim($_POST['title']);
            $genre = trim($_POST['genre']);
            $available = isset($_POST['available']) ? 1 : 0;

            if (!empty($title) && !empty($genre)) {
                $this->movieModel->create($title, $genre, $available);
                header('Location: index.php?action=home');
                exit;
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action_type']) && $_POST['action_type'] === 'delete') {
            $id = intval($_POST['movie_id']);
            if ($id > 0) {
                $this->movieModel->delete($id);
                header('Location: index.php?action=home');
                exit;
            }
        }
        $movies = $this->movieModel->getAll();
        require_once __DIR__ . '/../View/home.php';
    }
}
