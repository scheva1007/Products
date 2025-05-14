<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Групи товарів</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container mt-5">
<h2 class="mb-4">Групи товарів</h2>

<a href="/?controller=group&action=create" class="btn btn-primary mb-3">Додати групу</a>
<a href="/" class="btn btn-secondary mb-3 ml-2">← Назад до товарів</a>

<table class="table table-bordered">
    <thead class="thead-light">
    <tr>
        <th>ID</th>
        <th>Назва</th>
        <th>Батьківська група</th>
        <th>Дії</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($groups as $group): ?>
        <tr>
            <td><?= $group['id'] ?></td>
            <td><?= htmlspecialchars($group['name']) ?></td>
            <td><?= $group['parent_id'] ?? '—' ?></td>
            <td>
                <a href="/?controller=group&action=edit&id=<?= $group['id'] ?>" class="btn btn-sm btn-warning">Редагувати</a>
                <a href="/?controller=group&action=delete&id=<?= $group['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ви впевнені?')">Видалити</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>