<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yurekha | Login</title>
    <link rel="icon" href="../img/favicon.png">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/up_in.css" rel="stylesheet">
</head>
<body bgcolor="#e3e6ea"  class="container demo-1">
<div class="content">
    <div id="large-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
        <!--header section-->
        <header>
            <center><img src="../img/Yureka%20logo.png" id="mainLogo"></center>
            <!--navigation bar start-->
            <ul class="nav">
                <li><a href="../index.php"><img src="../img/nav/nav_yureka_logo.png"></a></li>
                <li><a href="courses.php">Courses</a></li>

                <li class="dropdown"><a href="#">Site 3</a></li>

                <li><a href="#">Site 2</a></li>
                <li><a href="signup.php"><img src="../img/nav/nav_signup.png" style="vertical-align: bottom">&nbsp;Sign Up</a>
                </li>
                <li class="active"><a href="login.php"><img src="../img/nav/nav_login.png" style="vertical-align: bottom">&nbsp;Log
                        In</a></li>
            </ul>
            <!--navigation bar end-->
        </header>

        <!--body content section-->
        <section class="bodyInner">
            <!--Log In forum -->
            <div class="wrapper">
                <form>
                    <h1 align="center">Log In</h1>
                    <center><img src="../img/avatar.png" id="avatar" width="50%" height="50%"></center>
                    <br>
                    <input type="text" id="login_username" placeholder="Username" required><br>
                    <input type="password" id="login_password" placeholder="Password" required><br>
                    <input type="checkbox" id="keepMeLogin" checked><label for="keepMeLogin">Remember me</label>
                    <a href="#" class="forgetpsw" title="Frogot your password ?">Forget Password?</a><br>
                    <input type="submit" value="Log In"><br>

                </form>
            </div>
            <!--Log In forum -->
        </section>
        <!--footer section-->
        <footer>
            <hr class="hr1">
            <hr class="hr2">
            <p align="center" style="font-size: small;" title="Yureka Higher Education Institute"><a href="../index.php" >Yureka Higher Education Institute</a> All Rights Reserved.</p>
        </footer>
    </div>
</div>

<script src="../javascript/backgroundCanvas/TweenLite.min.js"></script>
<script src="../javascript/backgroundCanvas/EasePack.min.js"></script>
<script src="../javascript/backgroundCanvas/particles.js"></script>
<script src="../javascript/backgroundCanvas/rAF.js"></script>
</body>
</html>