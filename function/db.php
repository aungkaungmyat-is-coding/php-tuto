<?php
$conn = new PDO("mysql:host=localhost;dbname=stock_management", 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function query($sql, $params = [])
{
    global $conn;
    $stmt = $conn->prepare($sql);
    return $stmt->execute();
}

function getAll($sql, $params = [])
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function getOne($sql, $params = [])
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetch(PDO::FETCH_OBJ);
}

$data = getOne("select * from users");
print_r($data);