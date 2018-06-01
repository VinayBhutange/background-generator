<!DOCTYPE HTML>
<html>
<head>
<!-- Font Awesome -->
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
    <h1>View FIR Status </h1>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="md-form form-group mt-5">
<input type = "text" name = "fir_no" class="form-control validate">
<label for="fir_no">FIR Number</label>
</div>
<div class="md-form form-group mt-5">
<input type = "date" name = "date" class="form-control validate">
<label class="active" for="date">Date</label>
</div>
<input class="btn btn-success" type = "submit" name = "submit" value = "show status">
</form>




<?php 
    if(isset($_POST["submit"])){
        $FIR_NO = $dATE = "";
        $FIR_NO = $_POST["fir_no"];
        $dATE = $_POST["date"];
        $conn = new mysqli("localhost","ristri","crms123","CRMS");
        if($conn->connect_error)
        {
            die($conn->connect_error);
        }
        $sql = "SELECT * FROM fir_status WHERE fir_no = ".$FIR_NO." ;";
        $result = $conn->query($sql);
        if($conn->query($sql) == TRUE)
        {
            while ($row = $result->fetch_assoc()) {
                echo '<table class="table">

                <!--Table head-->
                <thead class="mdb-color darken-3">
                    <tr class="text-white">
                        <th>FIR Number</th>
                        <th>FIR Status</th>
                    </tr>
                </thead>';
                echo '  <tbody>
                <tr>
                    <td>'.$row['fir_no'].'</td>
                    <td>'.$row['fir_status'].'</td>
                </tr>
                </tbody>
                </table>';
            }
            
        }
        else{
            echo "error";
        }
        $conn->close();
    }
?>
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
