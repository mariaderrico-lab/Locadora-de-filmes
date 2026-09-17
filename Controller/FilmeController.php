<?php

namespace Controller;

class FilmeController
{
    public function index()
    {
        session_start();

        if (!isset($_SESSION["user_id"])) {
            header("Location: index.php");
            exit;
        }

        require_once __DIR__ . "Catalogo.php";
    }
    public function adicionar()
    {
        require_once __DIR__ . "Add.php";
    }

    public function alugar()
    {
        require_once __DIR__ . "Alugar.php";
    }
}
// class FilmeController {
//     private $filmeModel;

//     public function __construct() {
//         $this->filmeModel = new Filme();
//     }

//     public function index() {
        
//         if (!isset($_SESSION['user_id'])) {
//             header('Location: index.php?action=login');
//             exit;
//         }

//         if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action_type']) && $_POST['action_type'] === 'create') {
//             $title = trim($_POST['title']);
//             $genre = trim($_POST['genre']);
//             $available = isset($_POST['available']) ? 1 : 0;

//             if (!empty($title) && !empty($genre)) {
//                 $this->filmeModel->create($title, $genre, $available);
//                 header('Location: index.php?action=home');
//                 exit;
//             }
//         }

//         if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action_type']) && $_POST['action_type'] === 'delete') {
//             $id = intval($_POST['filme_id']);
//             if ($id > 0) {
//                 $this->filmeModel->delete($id);
//                 header('Location: index.php?action=home');
//                 exit;
//             }
//         }
//         $filmes = $this->filmeModel->getAll();
//         require_once __DIR__ . 'View/home.php';
//     }

// }
