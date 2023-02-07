<?php
require_once 'trainsTableLogic.php';
$flightsList = TrainsTable::getItemsFromDBTable('flight_of_train');
TrainsTable::createTrain();
?>

<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="main-part">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="trainsTable.php">Поезда</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Новый поезд</li>
                </ol>
            </nav>
            <form action="trainsCreate.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="">
                        <div class="col-md-6">
                            <span>Тип поезда</span>
                            <input class="form-control" type="text" name="Name"/>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6">
                            <span>Состав поезда</span>
                            <input class="form-control" type="text" name="Train_composition"/>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6">
                            <span>Число вагонов</span>
                            <input class="form-control" type="number" name="Number_of_train_cars"/>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-md-6">
                            <span>Загрузка новой фотографии</span>
                            <input class="form-control" type="file" name="newImg_train"
                                   value="Загрузить"/>
                        </div>
                    </div>
                    <div class="col-md-6 py-4">
                        <select required name="Flight_number" class="form-select">
                            <option selected value="">Номер рейса</option>
                            <?php foreach ($flightsList as $item): ?>
                                <option value="<?= $item['id'] ?>"><?= $item['Unique_number'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="btn btn-primary w-25" type="submit" name="createTrain">Создать</button>
                </div>

        </div>


        </form>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>