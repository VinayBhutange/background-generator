<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Criminal Record Management System</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/fullpage.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        body{
    background-color: #EEE;
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="#">CRMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a href="../index.php"><button type="button" class="btn btn-primary btn-sm">Home</button></a>
            </li>
            <li class="nav-item">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Sign Out
                </button>
            </li>
        </ul>
    </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="text-center mt-4">
               <p> Are you sure? </p>

    <?php
    if(isset($_POST['signout'])){
        $conn = new mysqli("localhost","ristri","crms123","CRMS");
        if($conn->connect_error)
        {
            die($conn->connect_error);
        }
        $log_out = 0;
        $email = "admin@xyz.com";
        $sql = "UPDATE login set logged_in = ".$log_out." where email_id = '".$email."' ;";
        $result = $conn->query($sql);
        header('Location: ../index.php');
        $conn->close();
    }
    ?>
               <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input id="#button1" class="btn btn-default" type="submit" name ="signout" value="Sign Out"/>
</form>
    </div>
    </div>
    </div>
    </div>
    </div>

<div class="row">
<div class="col-8 calign">
<!--Card group-->
<div class="card-deck">

    <!--Card-->
    <div class="card mb-4">

        <!--Card image-->
        <div class="view overlay">
            <img class="img-fluid" src="../img/pg1.jpg" alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body">

            <!--Title-->
            <h4 class="card-title">Wanted Criminals</h4>

            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-blue btn-md">Visit</button>
        </div>
        <!--Card content-->

    </div>
    <!--Card-->

    <!--Card-->
    <div class="card mb-4">

        <!--Card image-->
        <div class="view overlay">
            <img class="img-fluid" src="../img/pg2.jpg" alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <h4 class="card-title">Edit FIR Status</h4>

            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="fir_edit_sta.php"<button type="button" class="btn btn-blue btn-md">Visit</button></a>
        </div>
        <!--Card content-->

    </div>
    <!--Card-->

    <!--Card-->
    <div class="card mb-4">

        <!--Card image-->
        <div class="view overlay">
            <img class="img-fluid" src="../img/pg1.jpg" alt="Card image cap">
            <a href="#!">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <!--Card image-->

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <h4 class="card-title">Edit Criminal Records</h4>

            <!--Text-->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <a href="criminal_info.php"><button type="button" class="btn btn-blue btn-md">Visit</button></a>
        </div>
        <!--Card content-->

    </div>
    <!--Card-->

</div>
<!--Card group-->
</div>
</div>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/fullpage.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
</body>
</html>