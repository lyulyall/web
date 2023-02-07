<?php

require_once 'db.php';


$sql = "SELECT trains.id, trains.Name, trains.Img_train, trains.Train_composition, trains.Number_of_train_cars, flight_of_train.Departure_point as 'Point1',
        flight_of_train.Arrival_point as 'Point2', trains.Flight_id
    FROM `trains`
    JOIN `flight_of_train` ON trains.Flight_id = flight_of_train.id";

$arBinds = [];

$stmt = $pdo->prepare($sql);
$data = $stmt->execute($arBinds);
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$sqlFlight = "SELECT flight_of_train.id, flight_of_train.Arrival_point from `flight_of_train`";

$stmtFlight = $pdo->prepare($sqlFlight);
$dataFlight = $stmt->execute($arBinds);
$dataFlight = $pdo->query($sqlFlight)->fetchAll(PDO::FETCH_ASSOC);


if (key_exists('filter_off', $_GET)) {
    if (count($_GET) > 0) {
        $sql .= " WHERE";
    }
}

if (key_exists('filter_on', $_GET)) {
    if (count($_GET) > 0) {
        $sql .= " WHERE";
        if (isset($_GET['max']) && ($max = $_GET['max'])) {
            $sql .= " trains.Number_of_train_cars <= $max AND";
            $arBinds['max'] = htmlspecialchars($_GET['max']);
        }
        if (isset($_GET['min']) && ($min= $_GET['min'])) {
            $sql .= " trains.Number_of_train_cars >= $min AND";
            $arBinds['min'] = htmlspecialchars($_GET['min']);
        }
        if (isset($_GET['Point2']) && ($Point2 = $_GET['Point2'])) {
            $sql .= " trains.Flight_id = $Point2 AND";
            $arBinds['Point2'] = htmlspecialchars($_GET['Point2']);
        }
        $test = substr($sql, 0, -3);
        $sql = $test;
        $stmt = $pdo->prepare($sql);
        $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
function deleteCookies()
{
    setcookie("blood_group", "",time()-3600);
    setcookie("rh_factor", "",time()-3600);
    setcookie("login", "",time()-3600);
    setcookie("name", "",time()-3600);
    setcookie("surname", "",time()-3600);
    setcookie("patronymic", "",time()-3600);
    setcookie("b_date", "",time()-3600);
    setcookie("VK_link", "",time()-3600);
    setcookie("error", "",time()-3600);
    setcookie("error_log", "",time()-3600);
}


