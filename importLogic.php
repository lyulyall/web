<?php

require_once 'db.php';

if (isset($_POST['import']) && $_POST['import'] == 'Загрузить') {
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name']; // Временный путь загруженного файла
    $name = basename($_FILES["uploadedFile"]["name"]); // Имя загруженного файла
    $fileName = $_FILES['uploadedFile']['name'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;// Сгенерированное новое имя файла

    $allowedFileExtensions = array('xml'); // Допустимые разрешения файлов
    if (in_array($fileExtension, $allowedFileExtensions)) {
        $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . '\LR5\bd\import'; // Папка для перемещения
        if (!file_exists($uploadFileDir)) {
            mkdir($uploadFileDir);
        }

        if (is_dir($uploadFileDir)) {
            move_uploaded_file($fileTmpPath, "$uploadFileDir/$newFileName"); // Перемещаем загружаемый файл в папку на сервере

            $xml = simplexml_load_file("$uploadFileDir/$newFileName"); // Открываем xml файл
            foreach ($xml->table as $item) {
                $data['Name'] = $item->name;
                $data['Img_train'] = $item->img_train;
                $data['Train_composition'] = $item->train_composition;
                $data['Number_of_train_cars'] = $item->number_of_train_cars;
                $data['Flight_id'] = $item->flight_id;

                $sql = "INSERT INTO `trains_imported` (`Name`, `Img_train`, `Train_composition`, `Number_of_train_cars`, `Flight_id`)
                    VALUES (:Name, :Img_train, :Train_composition, :Number_of_train_cars, :Flight_id)";
                $query = $pdo->prepare($sql);
                $res = $query->execute($data);
                $message = 'Загрузка прошла успешно.';
            }
        } else {
            $message = 'Произошла ошибка при загрузке файла на сервер';
        }
        echo $message;
    }
}
