<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Редагувати групу</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container mt-5">
<h2 class="mb-4">Редагувати групу</h2>

<form action="/?controller=group&action=update&id=<?= $group['id'] ?>" method="post">
    <div class="form-group w-50">
        <label for="name">Назва групи</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= htmlspecialchars($group['name']) ?>" required>
    </div>

    <div class="form-group w-50">
        <label for="parent_id">Батьківська група</label>
        <select name="parent_id" id="parent_id" class="form-control">
            <option value="">—</option>
            <?php foreach ($groups as $g): ?>
                <option value="<?= $g['id'] ?>" <?= $g['id'] == $group['parent_id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($g['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Оновити</button>
    <a href="/?controller=group&action=index" class="btn btn-secondary ml-5">Назад</a>
</form>
</body>
</html>
