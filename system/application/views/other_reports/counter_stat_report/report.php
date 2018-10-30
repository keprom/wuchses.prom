<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Стат отчет по счетчикам</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/fullpage.css" type="text/css" media="screen,projection"/>
</head>
<body>
<table class="border-table">
    <thead>
    <tr>
        <th rowspan="2">№</th>
        <th rowspan="2">Договор</th>
        <th rowspan="2">Организация</th>
        <th colspan="4">Действующие</th>
        <th colspan="4">Отключенные</th>
        <th rowspan="2">Итого</th>
    </tr>
    <tr>
        <th>Однофазные</th>
        <th>Трехфазные</th>
        <th>Из них многотариф.</th>
        <th>Всего</th>
        <th>Однофазные</th>
        <th>Трехфазные</th>
        <th>Из них многотариф.</th>
        <th>Всего</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 1;
    ?>
    <?php foreach ($report as $r): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $r->dogovor; ?></td>
            <td><?php echo $r->firm_name; ?></td>
            <td class="td-number"><?php echo $r->p1_ecc; ?></td>
            <td class="td-number"><?php echo $r->p3_ecc; ?></td>
            <td class="td-number"><?php echo $r->multi_ecc; ?></td>
            <td class="td-number"><?php echo $r->p1_ecc + $r->p3_ecc; ?></td>
            <td class="td-number"><?php echo $r->p1_dcc; ?></td>
            <td class="td-number"><?php echo $r->p3_dcc; ?></td>
            <td class="td-number"><?php echo $r->multi_dcc; ?></td>
            <td class="td-number"><?php echo $r->p1_dcc + $r->p3_dcc; ?></td>
            <td class="td-number"><?php echo $r->p1_dcc + $r->p3_dcc + $r->p1_ecc + $r->p3_ecc; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>