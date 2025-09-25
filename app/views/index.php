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
            <a href="index.php?action=create" class="btn btn-primary">Adicionar novo professor</a>
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
                <?php foreach ($teachers as $teacher): ?>

                    <tr class="align-middle">
                        <td> <?= htmlspecialchars($teacher['nome']) ?> </td>
                        <td> <?= htmlspecialchars($teacher['materia']) ?> </td>
                        <td> <?= htmlspecialchars(date('d/m/Y', strtotime($teacher['created_at']))) ?> </td>
                        <td>
                            <a href="index.php?action=edit&id=<?= $teacher['id'] ?>" type="button" class="btn btn-success">Editar</a>
                            <form action="index.php?action=delete" method="post" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $teacher['id'] ?>">
                                <button type="submit" class="btn btn-danger">Apagar</button>
                            </form>
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