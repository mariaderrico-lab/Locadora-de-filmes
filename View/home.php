
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Catálogo da Locadora</title>
    <link rel="stylesheet" href="templates/css/global.css">
    <link rel="stylesheet" href="templates/css/index.css">
    <style>
        .container { display: flex; gap: 20px; padding: 20px; }
        .catalog { flex: 2; }
        .sidebar { flex: 1; background: #f4f4f4; padding: 15px; border-radius: 8px; height: fit-content; }
        .movie-card { border: 1px solid #ccc; padding: 15px; border-radius: 5px; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center; }
        .status-badge { padding: 4px 8px; border-radius: 4px; font-weight: bold; }
        .available { background-color: #d4edda; color: #155724; }
        .unavailable { background-color: #f8d7da; color: #721c24; }
        .btn-delete { background: #dc3545; color: #fff; border: none; padding: 5px 10px; cursor: pointer; border-radius: 4px; }
    </style>
</head>
<body>

    <header style="padding: 10px 20px; background: #333; color: #fff; display: flex; justify-content: space-between; align-items: center;">
        <h1>Locadora de Filmes</h1>
        <a href="index.php?action=logout" style="color: #fff; text-decoration: none;">Sair</a>
    </header>

    <div class="container">
        <main class="catalog">
            <h2>Catálogo de Filmes</h2>
            <?php if (empty($movies)): ?>
                <p>Nenhum filme cadastrado no momento.</p>
            <?php else: ?>
                <?php foreach ($movies as $movie): ?>
                    <div class="movie-card">
                        <div>
                            <h3><?= htmlspecialchars($movie['title']) ?></h3>
                            <p><strong>Gênero:</strong> <?= htmlspecialchars($movie['genre']) ?></p>
                            <p><strong>Valor:</strong> R$ <?= number_format($movie['price'], 2, ',', '.') ?></p>
                            <p><strong>Status:</strong> 
                                <span class="status-badge <?= $movie['available'] ? 'available' : 'unavailable' ?>">
                                    <?= $movie['available'] ? 'Disponível' : 'Indisponível' ?>
                                </span>
                            </p>
                        </div>
                        <div>
                            <form method="POST" action="index.php?action=home" onsubmit="return confirm('Deseja realmente excluir este filme?');">
                                <input type="hidden" name="action_type" value="delete">
                                <input type="hidden" name="movie_id" value="<?= $movie['id'] ?>">
                                <button type="submit" class="btn-delete">Excluir</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </main>

        <aside class="sidebar">
            <h3>Cadastrar Novo Filme</h3>
            <form method="POST" action="index.php?action=home">
                <input type="hidden" name="action_type" value="create">
                
                <div style="margin-bottom: 10px;">
                    <label for="title">Título do Filme:</label><br>
                    <input type="text" id="title" name="title" required style="width: 100%; padding: 8px;">
                </div>

                <div style="margin-bottom: 10px;">
                    <label for="genre">Gênero:</label><br>
                    <input type="text" id="genre" name="genre" required style="width: 100%; padding: 8px;">
                </div>

                <div style="margin-bottom: 15px;">
                    <label>
                        <input type="checkbox" name="available" value="1" checked>
                        Disponível para alugar
                    </label>
                </div>

                <button type="submit" style="width: 100%; padding: 10px; background: #28a745; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
                    Cadastrar Filme (R$ 10,00)
                </button>
            </form>
        </aside>
    </div>

</body>
</html>