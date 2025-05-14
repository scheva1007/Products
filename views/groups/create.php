<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Додати групу</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container mt-5">
<h2 class="mb-4">Додати нову групу</h2>

<form action="/?controller=group&action=store" method="post">
    <div class="form-group w-50">
        <label for="name">Назва групи</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group w-50">
        <label for="parent_id">Батьківська група</label>
        <select name="parent_id" id="parent_id" class="form-control">
            <option value="">—</option>
            <?php foreach ($groups as $g): ?>
                <option value="<?= $g['id'] ?>"><?= htmlspecialchars($g['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success mr-5">Зберегти</button>
    <a href="/?controller=group&action=index" class="btn btn-secondary">Назад</a>
</form>
</body>
</html>
