<?php

$data_colName = '';
$data_values = '';
foreach ($_POST as $key => $value) {
    $data_colName .=  $key . ",";
    $data_values .= $value . ",";
}
$data = $data_colName . PHP_EOL . $data_values . PHP_EOL;


try {

    require_once("connect.php");

    $sql = "INSERT INTO forms (forms) VALUES ('$data')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

header("Location: ../../../");
