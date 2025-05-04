<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Товари</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container bg-white p-4 rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Список товарів</h2>
        <a href="/?action=create" class="btn btn-success">Додати товар</a>
    </div>

    <a href="/?group_action=index" class="btn btn-outline-primary mb-3">Перейти до груп товарів</a>

    <table class="table table-bordered table-hover">
        <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Назва товару</th>
            <th>Ціна</th>
            <th>Дії</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= $product['price'] ?></td>
                <td>
                    <a href="/?action=edit&id=<?= $product['id'] ?>" class="btn btn-sm btn-warning">Редагувати</a>
                    <a href="/?action=delete&id=<?= $product['id'] ?>" class="btn btn-sm btn-danger"
                       onclick="return confirm('Ви впевнені, що хочете видалити цей продукт?')">Видалити</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
