<?php
ob_start();
?>

<section id="bgSection">
    <div>
        <ul class="bubble-boxes">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 middlelogin">
                <span class="homelogin"><a href="./index.php"><i class="fas fa-home fa-3x homeicon"></i></a></span>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- <b>session:</b><?= $_SESSION['user_log']; ?><br /> -->
        <div class="col-md-4 col-12 heading-image text-white border mt-5">
            <div id="visLogin">
                <span class="visLogin"><i class="fas fa-sign-in-alt fa-3x "></i></span>
            </div>
            <div id="visRegister">
                <span class="visRegister"><i class="fas fa-plus-circle fa-3x"></i></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4 col-10 offset-1 login-main border rounded">
                <div class="text-center pt-3">
                    <button type="button" id="btn-color-log" class="btn rounded-pill choose" onclick="login()">Login</button>
                    <button type="button" id="btn-color-reg" class="btn rounded-pill choose" onclick="register()">Register</button>
                </div>
                <div class="form-box pt-5">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="f1" id="partlogin" class="input-group Login" method="POST">
                        <div class="col-12">
                            <div class="w-75">
                                <label for="Username" class="text-white">Username</label>
                                <input type="text" class="form-control" id="Username" name="user_log">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="w-75">
                                <label for="password" class="text-white">Paasword</label>
                                <input type="password" class="form-control" id="password" name="password_log">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button class="btn btn-primary" type="submit" name="login">Login</button>
                        </div>
                    </form>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="f2" id="partRegister" class="input-group Register inner toTop" method="POST">
                        <div class="col-12">
                            <div class="w-75">
                                <label for="Username" class="text-white">Username</label>
                                <input type="text" class="form-control" id="Username" name="user_reg">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="w-75">
                                <label for="password" class="text-white">Paasword</label>
                                <input type="password" class="form-control" id="password" name="password_reg">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="w-75">
                                <label for="email" class="text-white">Email</label>
                                <input type="email" class="form-control" id="email" name="email_reg">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button class="btn btn-primary" type="submit" name="register" data-target="#Register">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$page = ob_get_clean();
include("layoutlogin.php");
