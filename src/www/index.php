<?php
spl_autoload_register(function($class) {
    $path =  str_replace('\\', '/', dirname(__DIR__)  . '/' . $class. '.php');
    require $path;
});


use dto\TariffDto;
use enum\TariffTypes;


$tariffs = [];


$tariffs[] = new TariffDto(
    'Actually',
    strtotime(date('2025-10-20 00:00:00')),
    100,
    TariffTypes::Actually
);

$tariffs[] = new TariffDto(
    'System',
    strtotime(date('2026-12-31 00:00:00')),
    200,
    TariffTypes::System
);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Название</th>
                <th>Срок действия</th>
                <th>Скорость</th>
                <th>Тип тарифа</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tariffs as $tariff): ?>
            <tr>
                <td><?= $tariff->name ?></td>
                <td><?= date('d.m.Y', $tariff->expired) ?></td>
                <td><?= $tariff->speed  ?> мб/с</td>
                <td><?= $tariff->type->name ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
