<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Document</title>
    <style>
    body{
        text-transform: uppercase;
        margin-top: 50px;
        line-height: 2em;
        background: radial-gradient(#0000,#004080);
        color:#ffffff;
    }
    </style>
</head>
<body>
<div class="container">
<h1>Registration Form</h1>
<hr>
    <form action="fun.php" method="post">
    <input class="form-control" type="text" name="name" placeholder="Candidate Name" minlength="3" maxlength="25" required><br>
    <input class="form-control" type="text" name="faname" placeholder="Candidtae's father name " minlength="3" maxlength="25" required><br>
    <input class="form-control" type="text" name="occu" placeholder="Occupation of father" minlength="3" maxlength="50" required><br>
    Gender:
    <input  type="radio" name="gender"
   <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female"> Female
    <input type="radio" name="gender"
   <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male"> Male<br>
    <br><input class="form-control" type="email" name="email" placeholder="Candidate's email address" required="@gmail.com"><br>
    <input class="form-control" type="date" name="dob" placeholder="Select your birthdate" required><br>
    <input class="form-control" type="text"name="add" minlength="20" maxlength="40" placeholder="Enter your address" required><br>
    <input class="form-control" type="number" name="num" minlength="11" maxlength="11" placeholder="Candidate's contact number" required><br>
    <input class="form-control" type="text"name="city" placeholder="Enter your home city"  minlength="3" maxlength="50" required><br>
    <input class="form-control" type="text"name="country" placeholder="Enter your home country"  minlength="3" maxlength="50" required><br>
    <input class="form-control btn btn-dark" type="submit" name="btn_submit">
    </form>
  
<?php
    $name=$_POST['name'];
    $fathername=$_POST['faname'];
    $occupation=$_POST['occu'];
    $email=$_POST['email'];
    $address=$_POST['add'];
    $birthdate=$_POST['dob'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $gender=$_POST['gender'];
    $number=$_POST['num'];
    ?>
    <hr>
    <h1 class="text-dark">Showing data your entered in form</h1>
    <?php
      //showing data entered in form through function//
    function get_data($name,$fathername,$occupation,$email,$address,$birthdate,$gender,$city,$country,$number){
        echo "<textarea  cols='30' rows='10'>
        Name:".$name,"
        Father name: ".$fathername,"
        Occupation: ".$occupation,"
        Email: ".$email,"
        Address: ".$address,"
        Birth Date: ".$birthdate,"
        Gender ". $gender," City: ".$city,"
        Country: ".$country,"
        Contact number: ".$number."</textarea>";
      echo"<br><b>YOUR FORM SUBMISSION DATE & TIME IS: </b>";
      echo date("D-M-Y | ");
      date_default_timezone_set("Asia/Karachi");
      echo  date("H:i:s ");
    }
    get_data($name,$fathername,$occupation,$email,$address,$birthdate,$gender,$city,$country,$number);

?>
  </div>
</body>
</html>
