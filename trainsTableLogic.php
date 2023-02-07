<?php
require_once "db.php";

class TrainsTable
{
    public static function getTrains()
    {
        $sql = "SELECT trains.id, trains.Name, trains.Img_train, trains.Train_composition, trains.Number_of_train_cars, flight_of_train.Unique_number as 'Flight_number', trains.Flight_id
        FROM `trains`
        JOIN `flight_of_train` ON trains.Flight_id = flight_of_train.id";
        $pdo = DBConnect();
        $result = $pdo->query($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function createTrain()
    {
        if (key_exists('createTrain', $_POST)) {
            if (!empty($_POST['Name']) && !empty($_POST['Flight_number']) && !empty($_POST['Train_composition'])  && !empty($_POST['Number_of_train_cars']) && !empty($_FILES["newImg_train"]["name"])) {
                $serv['Img_train'] = $_FILES["newImg_train"]["name"];
                $pathForImg = "train_image/" . $_FILES["newImg_train"]["name"];
                move_uploaded_file($_FILES["newImg_train"]["tmp_name"], $pathForImg);

                $serv['Name'] = htmlspecialchars($_POST['Name']);
                $serv['Flight_number'] = htmlspecialchars($_POST['Flight_number']);
                $serv['Train_composition'] = htmlspecialchars($_POST['Train_composition']);
                $serv['Number_of_train_cars'] = htmlspecialchars($_POST['Number_of_train_cars']);
                $sql = "INSERT INTO `trains` (`Img_train`, `Name`, `Flight_id`, `Train_composition`, `Number_of_train_cars`) VALUES (:Img_train, :Name, :Flight_number, :Train_composition, :Number_of_train_cars)";
                $pdo = DBConnect();
                $stmt = $pdo->prepare($sql);
                $stmt->execute($serv);
                header('Location: trainsTable.php ');
            } else {
                echo "<script>alert(\"Ошибка! Все поля должны быть заполнены\");</script>";
            }
        }
    }

    public static function deleteTrain()
    {
        if (key_exists('deleteTrain', $_GET)) {
            if (isset($_GET['deleteTrain'])) {
                $serv['trainId'] = htmlspecialchars($_GET['deleteTrain']);
                $img = "SELECT * FROM `trains` WHERE trains.id = :trainId LIMIT 1";
                $pdo = DBConnect();
                $img_name = $pdo->prepare($img);
                $img_name->execute($serv);
                $img_name = $img_name->fetchAll(PDO::FETCH_ASSOC);
                unlink("train_image/".$img_name[0]['Img_train']);
                $sql = "DELETE FROM `trains` WHERE trains.id = :trainId";
                $stmt = $pdo->prepare($sql);
                $stmt->execute($serv);
                header('Location: trainsTable.php ');
            } else {
                echo "Ошибка!";
            }
        }
    }

    public static function changeTrain()
    {
        if (key_exists('changeTrain', $_GET)) {
            if (isset($_GET['changeTrain']) && !empty($_GET['changeTrain'])) {
                $trainInfo = [];
                $trainId['trainId'] = htmlspecialchars($_GET['changeTrain']);
                $sql = "SELECT trains.Img_train, trains.id, trains.Train_composition, trains.Name, trains.Number_of_train_cars, trains.Flight_id  FROM trains, flight_of_train WHERE flight_of_train.id = trains.Flight_id AND trains.id = :trainId";
                $pdo = DBConnect();
                $stmt = $pdo->prepare($sql);
                $stmt->execute($trainId);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result[0] as $valueKey => $item) {
                        $trainInfo["$valueKey"] = $item;
                    }
                return $trainInfo;
            } else {
                echo "Параметр не может быть пустым";
            }
        }
        if (key_exists('saveTrain', $_POST)) {
            if (!empty($_POST['saveTrain'])) {
                $pdo = DBConnect();

                $train_id = [];
                $train_id['trainId'] = htmlspecialchars($_POST['saveTrain']);
                $item = "SELECT * FROM `trains` WHERE trains.id = :trainId LIMIT 1";
                $train = $pdo->prepare($item);
                $train->execute($train_id);
                $train = $train->fetchAll(PDO::FETCH_ASSOC);

                $newTrainInfo['trainId'] = htmlspecialchars($_POST['saveTrain']);
                if(!empty($_POST['new_Name']))
                    $newTrainInfo['Name'] = htmlspecialchars($_POST['new_Name']);
                else
                    $newTrainInfo['Name'] = $train[0]['Name'];

                if(!empty($_POST['new_Train_composition']))
                    $newTrainInfo['Train_composition'] = htmlspecialchars($_POST['new_Train_composition']);
                else
                    $newTrainInfo['Train_composition'] = $train[0]['Train_composition'];

                if(!empty($_POST['new_Flight']))
                    $newTrainInfo['Flight_id'] = htmlspecialchars($_POST['new_Flight']);
                else
                    $newTrainInfo['Flight_id'] = $train[0]['Flight_id'];

                if(!empty($_POST['new_Number_of_train_cars']))
                    $newTrainInfo['Number_of_train_cars'] = htmlspecialchars($_POST['new_Number_of_train_cars']);
                else
                    $newTrainInfo['Number_of_train_cars'] = $train[0]['Number_of_train_cars'];

                if(!empty($_FILES["new_Img_train"]["name"]))
                {
                    $newTrainInfo['Img_train'] = $_FILES["new_Img_train"]["name"];
                    unlink('train_image/' . $train[0]['Img_train']);
                    $pathForImg = "train_image/" . $_FILES["new_Img_train"]["name"];
                    move_uploaded_file($_FILES["new_Img_train"]["tmp_name"], $pathForImg);
                }
                else
                    $newTrainInfo['Img_train'] = $train[0]['Img_train'];

                $sql = "UPDATE trains SET trains.Img_train = :Img_train, trains.Name = :Name, trains.Train_composition = :Train_composition, trains.Number_of_train_cars = :Number_of_train_cars , trains.Flight_id = :Flight_id WHERE trains.id = :trainId";

                $stmt = $pdo->prepare($sql);
                $stmt->execute($newTrainInfo);
                header('Location: trainsTable.php ');
            } else {
                echo "Параметр не может быть пустым";
            }
        }

    }

    public static function getItemsFromDBTable($table)
    {
        $sql = "SELECT * FROM $table";
        $pdo = DBConnect();
        $result = $pdo->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}