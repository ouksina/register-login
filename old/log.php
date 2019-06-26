

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
    <link rel="icon" href="Plugin/Img/images.jfif"><title> World Handle</title></link>


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



    <div class="container-fluid justify-content-center col-md-4 mt-3">
        <form class="form-sign in" action="login-code.php" method="post">
            <center>
                <img src="Plugin/Pic/oregonian-o-logo-240w.png" width="90px" alt="">
                <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>

                <?php

                if(isset($_GET['invalid']))
                {
                    $Message = $_GET['invalid'];
                    $Message ="Invalid password or email!!";
                    ?>
                    <div class="alert alert-danger col-md-12"><?php echo $Message?></div>
                    <?php
                }
                ?>

                <?php

                if(isset($_GET['empty']))
                {
                    $Message = $_GET['empty'];
                    $Message ="Input your Email or Password";
                    ?>
                    <div class="alert alert-danger col-md-12"><?php echo $Message?></div>
                    <?php
                }
                ?>


            </center>
            <div class="form-group">
                <label >Email</label>
                <input type="text" name="Email" class="form-control" placeholder="Email" autofocus="" >
            </div>
            <div class="form-group">
            <label>Password</label>
                <input type="password" name="Password" class="form-control" placeholder="Password"  >
            </div>
            <div class="checkbox mb-3">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
        </form>
    </div>


</body>
</html>




