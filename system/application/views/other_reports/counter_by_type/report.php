<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Количество счетчиков по типам</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/fullpage.css'; ?>">
</head>
<body>

<table class="border-table">
    <caption>Количество счетчиков по типам</caption>
    <thead>
    <tr>
        <th>№</th>
        <th>Тип счетчика</th>
        <th>Количество</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($report as $r): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $r->type_name; ?></td>
            <td><?php echo $r->counter_count; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>