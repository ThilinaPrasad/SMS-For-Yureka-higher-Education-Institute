<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yurekha | Signup</title>
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/up_in.css" rel="stylesheet">
    <link rel="icon" href="../img/favicon.png">

</head>
<body bgcolor="#e3e6ea" class="container demo-1">
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

                <li><a href="#">Site 3</a>        </li>


                <li><a href="#">Site 2</a></li>
                <li class="active"><a href="#"><img src="../img/nav/nav_signup.png" style="vertical-align: bottom">&nbsp;Sign Up</a>
                </li>
                <li><a href="login.php"><img src="../img/nav/nav_login.png" style="vertical-align: bottom">&nbsp;Log In</a>
                </li>
            </ul>
            <!--navigation bar end-->
        </header>

        <!--body content section-->
        <section class="bodyInner">

            <!--sign up forum -->
            <div class="signup_container">
                <form id="signup">
                    <h1 align="center">Sign Up</h1>
                    <Lable>Name</Lable><br>
                    <input type="text" id="firstName"  placeholder="First Name">
                    <input type="text" id="lastName"  placeholder="Last Name"><br>
                    <Lable>Address</Lable><br>
                    <textarea rows="4" columns="40" id="address"></textarea>
                    <br>
                    <Lable>Birthday</Lable><br>
                    <input type="date" id="bDay" >

                    <br>
                    <Lable>Gender</Lable><br>
                    <select id="gender">
                        <option hidden>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>

                    <br>
                    <Lable>Email</Lable><br>
                    <input type="email" id="email" >

                    <br>
                    <Lable>Telephone</Lable><br>
                    <input type="tel" id="telephoneNo" >


                    <br>
                    <Lable>Create a Password</Lable><br>
                    <input type="password" id="password">

                    <br>
                    <Lable>Confirm Password</Lable><br>
                    <input type="password" id="confirmPassword" >

                    <Lable>Index Number</Lable><br>
                    <input type="text" id="index"  placeholder="Index Number">

                    <input type="checkbox" id="agreement" checked><label for="agreement"> I agree with the conditions of Yureka Institute.</label>
                    <br>
                    <button onclick="submitOnclick()">Submit</button>
                </form>
            </div>
            <!--sign up forum -->
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
<script src="../javascript/Validations.js"></script>
</body>
</html>