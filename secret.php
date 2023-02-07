<?php
require_once 'logic.php';
require_once 'db.php'
?>

<?php if (isset($_SESSION['loggedUser'])) : ?>
    <?php include 'header.php' ?>

    <div class="containertable">
        <div class="dropdown top_margin" id="filter">
            <a class="drop title" href="#" role="button" data-toggle="dropdown" aria-expanded="true" aria-controls="collapseOne">
                Фильтры
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="container padding">
                    <form action="" method="get">
                        <label>Фильтрация результатов поиска</label>
                        <div class="mb-3 small_top_margin">
                            <label class=>По количеству вагонов:</label>
                            <input type="number" class="form-control" name="min" placeholder="Количество вагонов от" value="">
                            <input type="number" class="form-control" name="max" placeholder="Количество вагонов до" value="">
                        </div>

                        <div class="mb-3">
                            <label>По точке прибытия:</label>
                            <select name="Point2" class="form-control" type="button">
                                <option value="" selected="">Точка прибытия:</option>
                                <?php if (count($dataFlight) > 0): ?>
                                    <?php foreach ($dataFlight as $item): ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['Arrival_point'] ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div>
                            <input type="submit" name="filter_on" value="Применить фильтр" class="white_button">
                            <input type="submit" name="filter_off" value="Очистить фильтр" class="white_button">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php if (count($data) > 0): ?>
            <table class="table top_margin">
                <thead>
                <tr>
                    <th class="scope">Изображение</th>
                    <th class="scope">Название поезда</th>
                    <th class="scope">Состав поезда</th>
                    <th class="scope">Количество вагонов</th>
                    <th class="scope">Точка отправления</th>
                    <th class="scope">Точка прибытия</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $item): ?>
                    <tr class="small_top_margin">
                        <th scope="row"><img src="train_image/<?= $item['Img_train'] ?>" style="max-width: 150px;"></th>
                        <td><?= $item['Name'] ?></td>
                        <td><?= $item['Train_composition'] ?></td>
                        <td><?= $item['Number_of_train_cars'] ?></td>
                        <td><?= $item['Point1'] ?></td>
                        <td><?= $item['Point2'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>


    <?php include 'footer.php' ?>

<?php else : ?>
    <?php header('Location: http://localhost/LR3/login.php ');?>
<?php endif; ?>

