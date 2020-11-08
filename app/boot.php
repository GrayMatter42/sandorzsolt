<?php
/**
 * launch script
 */
declare(strict_types = 1);

$payload = [
    'status' => '42',
    'message' => 'hello heroku world ? php file from github served through heroturko'
];

header('Content-Type: text/html; charset=utf-8');

$layout = include __DIR__ . '/template/layout.php';

exit;



/*
use Atlas\Pdo\Connection;

$connection = Connection::new(
    'pgsql:host=localhost;dbname=',
    '',
    ''
);

$stm  = 'SELECT * FROM project WHERE published = :published';
$bind = ['published' => 1];
$mth = $connection->prepare($stm);
$mth->execute($bind);
$result = $mth->fetchAll(PDO::FETCH_ASSOC);

print_r($result);

echo 'YIELDING';
echo '<hr>';
foreach ($connection->yieldAll($stm, $bind) as $row) {
    print_r($row);
}
echo '<hr>';
*/