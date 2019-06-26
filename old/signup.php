<?php require_once ('conection.php')?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Plugin/Plug/css/bootstrap.min.css">
    <link rel="icon" href="Plugin/Pic/images.jfif"><title> World Handle</title></link>
    <link rel="stylesheet" href="Plugin/Font/all.min.css">





</head>

<body>

<div class="nav justify-content-end bg-dark">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="home.php"><button type="button" class="btn btn-outline-success">Home</button></a>
        </li>
    </ul>
    <div class="ml-auto">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="log.php"><button type="button" class="btn btn-outline-primary">Sin in</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php"><button type="button" class="btn btn-outline-primary">Sign up</button></a>
            </li>
        </ul>
    </div>
</div>


<div class="container justify-content-center mt-3">
        <center>
            <img src="Plugin/Img/oregonian-o-logo-240w.png" width="90px" alt="">
            <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>

            <?php

            if(isset($_GET['empty']))
            {
                $Message = $_GET['empty'];
                $Message ="Please fill the blank";
            ?>
                <div class="alert alert-danger col-md-6"><?php echo $Message?></div>
            <?php
                }
            ?>


        </center>
    <div class="row main">
        <div class="main-login m-auto col-md-6">
            <form class="form-horizontal" method="post" action="signup-code.php">
                <div class="form-group">
                    <label class="cols-sm-2 control-label" for="first name">First name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="first name"   placeholder="Enter your first name">
                        </div>
                        <div class="message" id="message_username">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="last name" class="cols-sm-2 control-label">Last Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="last name"  placeholder="Enter your last name">
                        </div>
                        <div class="message" id="message_name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="cols-sm-2 control-label" for="lastname">Gender:</label>
                        <div class="col-sm-10">
                            <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                            <label class="radio-inline ml-2"><input type="radio" name="gender" value="Female">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        </div>
                        <div class="message" id="message_mail">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                        </div>
                        <div class="message" id="message_password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="sign-up" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>



</body>
</html>




