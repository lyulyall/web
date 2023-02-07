<?php
require_once 'logic.php';
require_once 'loginLogic.php';
require_once 'db.php'
?>

<?php include 'trains.php' ?>
<script>
    document.body.classList.add('dark_background');
</script>

<div class="container w-25 small_top_margin login">
    <form name="doLogin" method="POST">
        <a href="trains.php" class=" close">&times;</a>
        <div class="row"><div class="col text-center"><h2>Log in</h2></div></div>
        <div class="mb-3 small_top_margin">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   name="login" value="<?php if (isset($_COOKIE["login"])) {echo $_COOKIE["login"];} ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword" aria-describedby="emailPass"
                   name="password">
        </div>
        <div class="row small_top_margin">
            <div style="color: red;">
                <?php if (isset($_COOKIE["error_log"])) {echo $_COOKIE["error_log"];} ?>
            </div>
        </div>
        <div class="text-center"><button type="submit" class="white_button w-50" name="doLogin">Log in</button></div>
    </form>
    <div class="row small_top_margin">
        <span>No account? <a class="black_text underline" href="signup.php">Register</a></span>
    </div>
</div>



