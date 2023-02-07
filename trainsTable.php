<?php
require_once 'trainsTableLogic.php';
TrainsTable::deleteTrain();
$TrainsList = TrainsTable::getTrains();

include 'header.php';

if (count($TrainsList) > 0): ?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <table class="table">
                <thead>
                <tr>
                    <th class="scope">Изображение</th>
                    <th class="scope">Тип поезда</th>
                    <th class="scope">Состав поезда</th>
                    <th class="scope">Количество вагонов</th>
                    <th class="scope">Номер рейса</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($TrainsList as $item): ?>
                    <tr>
                        <th scope="row"><img src="train_image/<?= $item['Img_train'] ?>" class="w-25"></th>
                        <td><?= $item['Name'] ?></td>
                        <td><?= $item['Train_composition'] ?></td>
                        <td><?= $item['Number_of_train_cars'] ?></td>
                        <td><?= $item['Flight_number'] ?></td>
                        <td>
                            <div class="row">
                                <div class="col-auto">
                                    <form action="trainsChange.php" method="get">
                                        <button type="submit" class="btn btn-primary" name="changeTrain"
                                                value="<?= $item['id'] ?>">Изменить
                                        </button>
                                    </form>
                                </div>
                                <div class="col-auto py-1">
                                    <form action="trainsTable.php" method="get">
                                        <button type="submit" class="btn btn-danger" name="deleteTrain"
                                                value="<?= $item['id'] ?>">Удалить
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
            <a href="trainsCreate.php">
                <button class="btn btn-primary w-25" name="create">Создать</button>
            </a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>