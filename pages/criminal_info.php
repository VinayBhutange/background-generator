<!Doctype html>
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
    <div class="col-6 calign card">
    <h1>View Criminal Record </h1>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="md-form form-group mt-5">
<input type = "text" name = "cno" class="form-control validate">
<label for="cno">Criminal Number</label>
</div>
<input class="btn btn-success" type = "submit" name = "submit" value = "VIEW RECORD">
</form>

<?php
if(isset($_POST["submit"]))
{
    $cno = "";
    $cno = $_POST["cno"];
    $conn = new mysqli("localhost","ristri","crms123","CRMS");
        if($conn->connect_error)
        {
            die($conn->connect_error);
        }
    $sql = "SELECT * FROM criminal_info WHERE ID = ".$cno.";";
    $result = $conn->query($sql);
    if($conn->query($sql) == TRUE)
        {
            while ($row = $result->fetch_assoc()) {
                echo '<table class="table table-striped">
                <tbody>
                <tr>
            
            <td>Criminal Id</td>
            <td>'.$row['ID'].'</td>
        </tr>
                ';
                echo '
                <tr>
            
            <td>Name</td>
            <td>'.$row['NAME'].'</td>
        </tr>
                ';
                echo '
                <tr>
            
            <td>Sex</td>
            <td>'.$row['SEX'].'</td>
        </tr>
                ';
                echo '
                <tr>
            
            <td>Age</td>
            <td>'.$row['AGE'].'</td>
        </tr>
                ';
                echo '
                <tr>
            
            <td>Occupation</td>
            <td>'.$row['OCCUPATION'].'</td>
        </tr>
                ';
                echo '
                <tr>
            
            <td>Crime</td>
            <td>'.$row['CRIME_TYPE'].'</td>
        </tr>
                ';
                echo '
                <tr>
            
            <td>Address</td>
            <td>'.$row['ADDRESS'].'</td>
        </tr>
                ';
                echo '
                <tr>
            
            <td>Wanted</td>
            <td>'.$row['WANTED'].'</td>
        </tr>
                ';
                echo '
                <tr>
            
            <td>Bounty</td>
            <td>'.$row['BOUNTY'].'</td>
        </tr>
                ';
        echo '</tbody>
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
