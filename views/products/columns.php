
<h4>Назва колонок таблиці 'products'</h4>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
    <tr>
        <th>#</th>
        <th>Назва колонки</th>
        <th>Тип</th>
        <th>NULL</th>
        <th>Ключ</th>
        <th>DEFAULT</th>
        <th>Додатково</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($columns as $index => $column): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= htmlspecialchars($column['Field']) ?></td>
            <td><?= htmlspecialchars($column['Type']) ?></td>
            <td><?= htmlspecialchars($column['Null']) ?></td>
            <td><?= htmlspecialchars($column['Key']) ?></td>
            <td><?= htmlspecialchars($column['Default']) ?></td>
            <td><?= htmlspecialchars($column['Extra']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>