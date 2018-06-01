<html>
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
    <h1>Edit Criminal Record</h1>
    <?php
 if(isset($_POST["submit"]))
 {
     $id= $name = $sex = $age = $occu = $crty = $address = $want = $bounty = "";
     $id = $_POST["id"];
     $name = $_POST["name"];
     $sex = $_POST["sex"];
     $age = $_POST["age"];
     $occu = $_POST["occu"];
     $crty = $_POST["crty"];
     $address = $_POST["address"];
     $want = $_POST["wanted"];
     $bounty = $_POST["bounty"];

     $conn = new mysqli("localhost","ristri","crms123","CRMS");
     if($conn->connect_error)
     {
        die($conn->connect_error);
     }

     $sql = "INSERT INTO criminal_info(ID,NAME,SEX,AGE,OCCUPATION,CRIME_TYPE,ADDRESS,WANTED,BOUNTY) values(".$id.",'".$name."','".$sex."',".$age.",'".$occu."','".$crty."','".$address."','".$want."',".$bounty.");";
     if($conn->query($sql)==TRUE){
        echo '<div class="card text-center">
        <div class="card-header success-color white-text">
            FIR Registered Successfully
        </div>
        </div>'; 
    }
    else{
        echo "ERROR";
    }
    $conn->close();
 }
?>
<form method ="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="md-form form-group mt-5">
    <input type="text"  name = "id" id="idno" class="form-control validate" >
    <label for="idno">ID</label>
</div>

<div class="md-form form-group mt-5">
    <input type = "text" name = "name" class="form-control validate" >
    <label for="name">Name</label>
</div>
<div class="md-form form-group mt-5">
    <label for="details">Sex</label>
    <input type = "radio" name ="sex" value = "male" class="form-control validate di"> Male
    <input type = "radio" name ="sex" value = "female" class="form-control validate"> Female
    </div>
<div class="md-form form-group mt-5">
    <label for="age">Age</label>
    <input type="text" name = "age" class="form-control validate" >
    </div>
<div class="md-form form-group mt-5">
    <label for="occu">Occupation</label>
    <input type = "text" name = "occu" class="form-control validate" >
    </div>
<div class="md-form form-group mt-5">
    <label for="crty">Crime Type</label>
    <input type = "text" name = "crty" class="form-control validate" >
    </div>
<div class="md-form form-group mt-5">
    <label for="address">Address</label>
    <input type = "text" name = "address" class="form-control validate" >
    </div>
<div class="md-form form-group mt-5">
    <label for="wanted">Wanted</label>
    <input type = "radio" name = "wanted" value = "yes" class="form-control validate di"> Yes
    <input type = "radio" name = "wanted" value = "no" class="form-control validate"> No
    </div>
<div class="md-form form-group mt-5">
    <label for="details">Bounty</label>
    <input type = "text" name = "bounty" class="form-control validate" >
    </div>

<!--IMAGE <div class="md-form form-group mt-5">
    <label for="details">Details</label>
    <input type = "text" name = "name" >
-->
<div class="md-form form-group mt-5">
    <input class="btn btn-success" type = "submit" name = "submit" value = "SUBMIT">
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