<?php
require_once 'trainsTableLogic.php';
$flightsList = TrainsTable::getItemsFromDBTable('flight_of_train');
$trainInfo = TrainsTable::changeTrain();
?>

<?php include 'header.php'; ?>
<div class="container">
    <div class="row">
        <div class="main-part">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="trainsTable.php">Поезда</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Изменение поездов</li>
                </ol>
            </nav>
            <form action="trainsChange.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="">
                        <div class="col-md-6">
                            <span>Тип поезда</span>
                            <input class="form-control" type="text" name="new_Name" value="<?= $trainInfo['Name'] ?>"/>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6">
                            <span>Состав поезда</span>
                            <input class="form-control" type="text" name="new_Train_composition"
                                   value="<?= $trainInfo['Train_composition'] ?>""/>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6">
                            <span>Количество вагонов</span>
                            <input class="form-control" type="number" name="new_Number_of_train_cars"
                                   value="<?= $trainInfo['Number_of_train_cars'] ?>"/>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6">
                            <span>Загрузка новой фотографии</span>
                            <input class="form-control" type="file" name="new_Img_train"
                                   value="Загрузить"/>
                        </div>
                    </div>

                    <div class="col-md-6 py-4">
                        <select name="new_Flight" class="form-select">
                            <option selected value="">Выберите новый рейс</option>
                            <?php foreach ($flightsList as $item): ?>
                                <?php if ($item['id'] === $trainInfo['Flight_id']): ?>
                                    <? continue; ?>
                                <?php else: ?>
                                    <option value="<?= $item['id'] ?>"><?= $item['Unique_number'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>


                <button class="btn btn-primary w-25" value="<?= $_GET['changeTrain'] ?>" type="submit" name="saveTrain">
                    Сохранить
                </button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>