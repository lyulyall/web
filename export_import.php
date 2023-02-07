<?php
require_once 'exportLogic.php';
require_once 'importLogic.php';
?>

<?php include 'trains.php' ?>
<script>
    document.body.classList.add('dark_background');
</script>

<div class="container w-25 small_top_margin login">
    <a href="trains.php" class="black_text close">&times;</a>
    <div class="row"><div class="col text-center"><h2>Работа с файлами</h2></div></div>
    <div class="row">
            <form method="POST" enctype="multipart/form-data">
                <div class="my-4">
                    <input type="submit" name="export" value="Скачать"/>
                    <div class="row">
                        <?php if (isset($msg)) echo $msg?>
                    </div>
                    <div class="my-4">
                        <input type="file" name="uploadedFile"/>
                        <input type="submit" name="import" value="Загрузить"/>
                        <div class="row">
                            <?php if (isset($message)) echo $message?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>