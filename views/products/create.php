<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?= isset($product) ? 'Редагувати товар' : 'Додати товар' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container bg-white p-4 rounded shadow-sm">
    <h3 class="mb-4"><?= isset($product) ? 'Редагувати товар' : 'Додати товар' ?></h3>

    <form action="/?controller=product&action=<?= isset($product) ? 'update' : 'store' ?>&id=<?= $product['id'] ?? '' ?>" method="post">
        <div class="mb-3 w-50">
            <label for="name" class="form-label">Назва товару</label>
            <input type="text" name="name" id="name" class="form-control" required
                   value="<?= isset($product) ? htmlspecialchars($product['name']) : '' ?>">
        </div>

        <div class="mb-3 w-50">
            <label for="price" class="form-label">Ціна</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required
                   value="<?= isset($product) ? $product['price'] : '' ?>">
        </div>

        <div class="mt-4 mb-3 w-50">
            <select class="form-select" name="group_id" id="group_id" required>
                <option value="">Оберіть групу товару</option>
                <?php foreach ($groups as $group): ?>
                    <option value="<?= $group['id'] ?>"
                        <?= isset($product) && $product['group_id'] == $group['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($group['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <a href="/" class="btn btn-secondary">Назад</a>
            <div class="w-50">
            <button type="submit" class="btn btn-primary"><?= isset($product) ? 'Оновити' : 'Додати' ?></button>
            </div>
        </div>
    </form>
</div>
</body>
</html>