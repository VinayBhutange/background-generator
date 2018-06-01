<!DOCTYPE HTML>
<html>
<head><title>
    Fir Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/fullpage.css" rel="stylesheet">
    <style>
        body{
    background-color: #EEE;
}
</style>
    </head>

<body>

<div class="row">
    <div class="col-8 calign card">
    <h1>Edit FIR Status </h1>
    <?php
    if(isset($_POST["edit"])){
        $firn = $_POST["firno"];
        $status = $_POST["status"];
        $conn = new mysqli("localhost","ristri","crms123","CRMS");
        if($conn->connect_error)
        {
            die($conn->connect_error);
        }
        $sql = "UPDATE fir_status set fir_status = '".$status."' where fir_no = ".$firn." ;";
        $result = $conn->query($sql);
        if($conn->query($sql) == TRUE)
        {
            echo '<div class="card text-center">
            <div class="card-header success-color white-text">
                FIR Status Edited Successfully
            </div>
            </div>';
        }
        else{
            echo $conn->error; 
         }
        $conn->close();
    }
?>
    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    <div class="md-form form-group mt-5">
        <input class="form-control validate" type = "text" name = "firno">
        <label for="firno">FIR Number</label>
        </div>
        <div class="md-form form-group mt-5">
       <input class="form-control validate" type = "text" name = "status" >
       <label for="status">FIR Status</label>
       </div>
        <input class="btn btn-success" type = "submit" name = "edit" value = "EDIT">
    </form>
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