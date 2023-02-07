<?php
require_once 'logic.php';
require_once 'signUpLogic.php';
require_once 'db.php'
?>

<?php include 'trains.php' ?>
<script>
    document.body.classList.add('dark_background');
</script>

<div class="container w-50 small_top_margin login">
    <form name="doSignUp" method="POST">
        <a href="trains.php" class="black_text close">&times;</a>
        <div class="row"><div class="col text-center"><h2>Register</h2></div></div>
        <div class="row top_margin">
            <div class="col">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="name" value="<?php if (isset($_COOKIE["name"])) {echo $_COOKIE["name"];} ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="surname" value="<?php if (isset($_COOKIE["surname"])) {echo $_COOKIE["surname"];} ?>">
                </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Patronymic</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="patronymic" value="<?php if (isset($_COOKIE["patronymic"])) {echo $_COOKIE["patronymic"];} ?>">
                </div>
            </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="login" value="<?php if (isset($_COOKIE["login"])) {echo $_COOKIE["login"];} ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="password">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Repeat the password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="password_rep">
                </div>

            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link to VK profile</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="VK_link" value="<?php if (isset($_COOKIE["VK_link"])) {echo $_COOKIE["VK_link"];} ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Blood group</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blood_group" id="flexRadioDefault1" value="1" checked>
                        <label class="form-check-label" for="flexRadioDefault1" name="blood_group">
                            1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blood_group" id="flexRadioDefault1" value="2" <?php if (isset($_COOKIE["blood_group"]))if ($_COOKIE["blood_group"]==="2"):?> checked <?php endif ?>>
                        <label class="form-check-label" for="flexRadioDefault1" name="blood_group">
                            2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blood_group" id="flexRadioDefault1" value="3" <?php if (isset($_COOKIE["blood_group"]))if ($_COOKIE["blood_group"]==="3"):?> checked <?php endif ?>>
                        <label class="form-check-label" for="flexRadioDefault3" name="blood_group">
                            3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blood_group" id="flexRadioDefault2" value="4" <?php if (isset($_COOKIE["blood_group"]))if ($_COOKIE["blood_group"]==="4"):?> checked <?php endif ?>>
                        <label class="form-check-label" for="flexRadioDefault4">
                            4
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Rh_factor</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rh_factor" id="flexRadioDefault1" value="+" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            +
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rh_factor" value="-" id="flexRadioDefault2" <?php if (isset($_COOKIE["rh_factor"]))if ($_COOKIE["rh_factor"]==="-"):?> checked <?php endif ?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                            -
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div style="color: red;">
                <?php if (isset($_COOKIE["error"])) {echo $_COOKIE["error"];} ?>
            </div>
        </div>
        <div class="text-center"><button type="submit" class="white_button w-25" name="doSignUp">Register</button></div>
    </form>
    <div class="row small_top_margin">
        <span>Already have an account?<a class="black_text underline" href="login.php">Log in</a></span>
    </div>
</div>
