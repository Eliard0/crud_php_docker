<?php
require 'db.php';

$query = $pdo->query('SELECT * FROM professores ORDER BY created_at');
$data = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>ola mundo</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-end mt-5">
            <a href="create.php" class="btn btn-primary">Adicionar novo professor</a>
        </div>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope='col'>Nome</th>
                    <th scope='col'>Materia</th>
                    <th scope='col'>Data de criação</th>
                    <th scope='col'>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $value): ?>

                    <tr>
                        <td> <?= htmlspecialchars($value['nome']) ?> </td>
                        <td> <?= htmlspecialchars($value['materia']) ?> </td>
                        <td> <?= htmlspecialchars($value['created_at']) ?> </td>
                        <td>
                            <button type="button" class="btn btn-success">Editar</button>
                            <button type="button" class="btn btn-danger">Apagar</button>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>