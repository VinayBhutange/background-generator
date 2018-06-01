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
        <h1>Register FIR</h1>
        <?php

if(isset($_POST["submit"])){
    $name = $fname = $mobile = $email = $address = $pstation = $date = $time = $place = $details = "";
    $x = 1;    
    $name = $_POST["name"];
        $fname = $_POST["fname"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $pstation = $_POST["pstation"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $place = $_POST["place"];
        $details = $_POST["details"];
    
    $conn = new mysqli("localhost","ristri","crms123","CRMS");
    if($conn->connect_error){
        die($conn->connect_error);
    }
    $sql = "INSERT INTO fir(Name, FName, Mobile,Email,Address,Pstation,Date,Time,Place,Details) VALUES ('".$name."','".$fname."',".$mobile.",'".$email."','".$address."','".$pstation."','".$date."','".$time."','".$place."','".$details."');"; 
    $result= $conn->query($sql); 
    if($conn->query($sql)==TRUE){
        echo '<div class="card text-center">
        <div class="card-header success-color white-text">
            FIR Registered Successfully
        </div>
        </div>';
    }
    else{
        echo $conn->error;
    }

    $conn->close();
}

?>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="md-form form-group mt-5">
     <input type = "text" name = "name" id="name" class="form-control validate">
     <label for="name">Name</label>
</div>
<div class="md-form form-group mt-5">
    <input type = "text" name = "fname" id="fname" class="form-control validate" >
    <label for="fname">Father's Name</label>
</div>
<div class="md-form form-group mt-5">
     <input type = "text" id="mobile" name = "mobile" class="form-control validate" >
     <label for="mobile">Mobile</label>
     </div>
     <div class="md-form form-group mt-5">
     <input type = "email" name = "email" id="email" class="form-control validate" >
     <label for="email">E-Mail</label>
     </div>
     <div class="md-form form-group mt-5">
   <input type = "text" name = "address" id = "address" class="form-control validate" >
   <label for="address">Address</label>
   </div>
   <div class="md-form form-group mt-5">
     <input type = "text" name = "pstation" id = "pstation" class="form-control validate">
     <label for="pstation">Police Station</label>
     </div>
     <div class="md-form form-group mt-5">
     <input type = "date" name = "date" id = "date" class="form-control validate">
     <label class="active" for="date">Date</label>
     </div>
     <div class="md-form form-group mt-5">
    <input type = "time" name = "time" id = "time" class="form-control validate">
    <label class="active" for="time">Time</label>
</div>
    <div class="md-form form-group mt-5">
   <input type = "text" name = "place" id="place" class="form-control validate">
   <label for="place">Place</label>
</div>
   <div class="md-form form-group mt-5">
     <textarea type = "textbox" name = "details" id = "details" class="form-control validate md-textarea"></textarea>
     <label for="details">Details</label>
</div>
     <div class="md-form form-group mt-5">
    <input class="btn btn-success" type = "submit" name = "submit">
</div>
</div>
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
