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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fullpage.css" rel="stylesheet">
</head>

<body>
<div class="navigation">
    <?php
    $conn = new mysqli("localhost","ristri","crms123","CRMS");
    if($conn->connect_error){
        die($conn->connect_error);
    }
    $sql = "SELECT logged_in FROM login;";
    $result = $conn->query($sql);
        if($conn->query($sql) == TRUE)
        {
            while ($row = $result->fetch_assoc()) {
                if($row['logged_in']==1){
                   echo '<a href="pages/admin.php"><button type="button" class="btn btn-primary">Go to Dashboard</button></a>';
                }
                else{
                    echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Admin Login
                </button>';
                }
            }
            
        }
    else{
        echo "error";
    }
    $conn->close();
    ?>
    <?php
    if(isset($_POST['signout'])){
        $conn = new mysqli("localhost","ristri","crms123","CRMS");
        if($conn->connect_error){
            die($conn->connect_error);
        }
        $z = 0;
        $sql = "UPDATE login set logged_in =".$z.";";
        $result = $conn->query($sql);
        if($conn->query($sql)==TRUE){
            echo"LOGGED OUT";
        }
        else{
            echo "TROUBLE LOGGING OUT";
        }
        $conn->close();
    }
?>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
<!-- Material form login -->
<?php   
        if(isset($_POST["submit"])){

        
            $email = $password = "";
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(empty($_POST["email"])){
                    echo "Enter email id";
                }
                else{
                    $email = $_POST["email"];
                }
                
                if(empty($_POST["password"])){
                    echo "Enter password";
                }
                else{
                    $password = $_POST["password"];
                }
            }
            $islogged = 0;
            /*$alrlogged = 1;*/
            $conn = new mysqli("localhost","ristri","crms123","CRMS");
            if($conn->connect_error){
                die($conn->connect_error);
            }
            $sql = "SELECT email_id , password,logged_in FROM login where email_id = '".$email."' AND password = '".$password."' AND logged_in = ".$islogged."; ";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                $pql = "UPDATE login SET logged_in = 1 WHERE email_id = '".$email."' ;" ;
                $result1 = $conn->query($pql);
                echo "YOU ARE LOGGED IN SUCCESSFULLY";
                header('Location: pages/admin.php');
            }
            else{ 
                echo "INVALID USERNAME OR PASSWORD";
                /*header('Location: login_form.php');*/
            }
            $conn->close();
        }
        ?>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p class="h4 text-center mb-4">Sign in</p>

    <!-- Material input email -->
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="email" id="materialFormLoginEmailEx" class="form-control" name = "email">
        <label for="materialFormLoginEmailEx">Your email</label>
    </div>

    <!-- Material input password -->
    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="materialFormLoginPasswordEx" class="form-control" name = "password">
        <label for="materialFormLoginPasswordEx">Your password</label>
    </div>

    <div class="text-center mt-4">
        <button id="#button1" class="btn btn-default" type="submit" name ="submit">Login</button>
    </div>
</form>
<!-- Material form login -->
                      
            </div>
        </div>
    </div>
</div>
    <div id="fullpage">
        <div class="section" id="mainpage" data-anchor="home">
            <div class="row">
                <div class="col-6 intro">
               <h1 class="heading">Criminal Record Management System</h1>
               <p>“We sometimes encounter people, even perfect strangers, who begin to interest us at first sight, somehow suddenly, all at once, before a word has been spoken.” </p>
                <a href="#fir"><button type="button" class="btn btn-outline-default waves-effect px-3"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button></a>
               </div>
            </div>
            <div class="footer">
            Developed By Rishabh Tripathi,Vinay Bhutange,Prerit Khandelwal
    </div> 
        </div>
        <div class="section" id="firpage" data-anchor="fir">
            <div class="row">
            <div class="firinfo col-6">
                <h2 class="heading">File Online FIR</h2>
                <p>An  FIR  is  a  very  important document as it sets the process of criminal justice in motion. It is only after  the  FIR  is  registered  in  the police station that the police takes up investigation of the case</p>
                <a href="pages/fir_register.php"><button class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> File Online FIR</button></a>
                <a href="pages/fir_status.php"><button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View FIR Status</button></a>
                <br>
                <a href="#cr"><button type="button" class="btn btn-outline-default waves-effect px-3"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button></a>
            </div>
            </div>
            <div class="footer">
          Developed By Rishabh Tripathi,Vinay Bhutange,Prerit Khandelwal
    </div>
        </div>
        <div class="section" id="recordpage" data-anchor="cr">
                <div class="row">
                        <div class="cright col-6">
                       <h2 class="heading">View Criminal Records</h2>
                       <p>To capture a criminal in these highly mobile times, it is of utmost importance for the police to promptly obtain an accurate description</p>
                        <a href="pages/criminal_info.php"><button class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i>View Criminal Records</button></a>
                        <br>
                        <a href="#home"><button type="button" class="btn btn-outline-default waves-effect px-3"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button></a>
                       </div>
                    </div>
                    <div class="footer">
                    Developed By Rishabh Tripathi,Vinay Bhutange,Prerit Khandelwal
    </div>
        </div>
       

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/fullpage.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
    $(document).ready(function() {
	$('#fullpage').fullpage(
        {}
    );
    });
    </script>
</body>

</html>
