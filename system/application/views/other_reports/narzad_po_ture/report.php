<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Наряд-задание по ТУРЭ</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/fullpage.css'; ?>">
</head>
<body>
<table class="border-table">
    <caption>Наряд-задание по ТУРЭ</caption>
    <thead>
    <tr>
        <th>№</th>
        <th>Абонент</th>
        <th>ТП</th>
        <th>Тип счетчика</th>
        <th>Гос.номер счетчика</th>
        <th>Дата гос.проверки</th>
        <th>Пломба</th>
        <th>Примечание</th>
        <th>Роспись потребителя</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($report as $r): ?>
    <tr>
        <td><?php echo $i++; ?></td>        
        <td><?php echo $r->dogovor." ".$r->firm_name; ?></td>
		<td>ТП-<?php echo $r->tp_name; ?></td>
        <td><?php echo $r->counter_type; ?></td>
        <td><?php echo $r->gos_nomer; ?></td>
        <td><?php echo $r->data_gos_proverki; ?></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>