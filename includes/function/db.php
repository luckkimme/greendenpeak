<?php

date_default_timezone_set('Asia/Manila');

$host = 'localhost';
$port = 3306;
$dbname = 'greendenpeak-opc';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($host, $user, $pass, $dbname, $port);
    $conn->set_charset($charset);
    $conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
} catch (\mysqli_sql_exception $e) {
    throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
}
unset($host, $dbname, $user, $pass, $charset, $port);

function dml_stmt(mysqli $conn, $query, $types, $arr)
{
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, $types, ...$arr);
    mysqli_stmt_execute($stmt);
    return;
}

function select_stmt(mysqli $conn, $query, $types, $arr)
{
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, $types, ...$arr);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}