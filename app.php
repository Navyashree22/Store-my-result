<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result (database)</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Store My Result (Database)</h1></a>
                <br><p>Enter your data so that we can store it in our database.</p>
            </div>
   
</div>
<div class="container">
        <div class="title">Enter Your Marks</div><br>
        <form action="" method="POST" autocomplete="off">
            <div class="info">
                <div class="details">
                    <div class="input-box">USN</div>
                    <input type="text" placeholder="Enter Your USN" name="usn" required>
                </div>
                <div class="details">
                    <div class="input-box">Name</div>
                    <input type="text" placeholder="Enter Your Name" name="name" required>
                </div>
                <div class="details">
                    <div class="input-box">E-mail</div>
                    <input type="email" placeholder="Enter Your E-mail" name="email" required>
                </div>
            </div>
            <div class="sub">
                <div class="input-box">
                    <span class="details">Subject 1</span>
                    <input type="text" placeholder="" name="sub1">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk1">
                </div>
                <div class="input-box">
                    <span class="details">Subject 2</span>
                    <input type="text" placeholder="" name="sub2">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk2">
                </div>
                <div class="input-box">
                    <span class="details">Subject 3</span>
                    <input type="text" placeholder="" name="sub3">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk3">
                </div>
                <div class="input-box">
                    <span class="details">Subject 4</span>
                    <input type="text" placeholder="" name="sub4">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk4">
                </div>
                <div class="input-box">
                    <span class="details">Subject 5</span>
                    <input type="text" placeholder="" name="sub5">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk5">
                </div>
                <div class="input-box">
                    <span class="details">Subject 6</span>
                    <input type="text" placeholder="" name="sub6">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk6">
                </div>
                <div class="input-box">
                    <span class="details">Subject 7</span>
                    <input type="text" placeholder="" name="sub7">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk7">
                </div>
                <div class="input-box">
                    <span class="details">Subject 8</span>
                    <input type="text" placeholder="" name="sub8">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk8">
                </div>
                <div class="input-box">
                    <span class="details">Subject 9</span>
                    <input type="text" placeholder="" name="sub9">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk9">
                </div>
                <div class="input-box">
                    <span class="details">Subject 10</span>
                    <input type="text" placeholder="" name="sub10">
                </div>
                <div class="input-box">
                    <span class="details">Marks Obtained</span>
                    <input type="text" placeholder="" name="mrk10">
                </div>
                 <div class="input-box">
                    <span class="total">Total Marks Obtained</span>
                    <input type="text" placeholder="" name="total">
                </div>
            </div>
            <div class="submit">
                <input type="submit" name="Submit">
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['Submit']))
    {

        $usn=$_POST['usn'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sub1=$_POST['sub1'];
        $mrk1=$_POST['mrk1'];
        $sub2=$_POST['sub2'];
        $mrk2=$_POST['mrk2'];
        $sub3=$_POST['sub3'];
        $mrk3=$_POST['mrk3'];
        $sub4=$_POST['sub4'];
        $mrk4=$_POST['mrk4'];
        $sub5=$_POST['sub5'];
        $mrk5=$_POST['mrk5'];
        $sub6=$_POST['sub6'];
        $mrk6=$_POST['mrk6'];
        $sub7=$_POST['sub7'];
        $mrk7=$_POST['mrk7'];
        $sub8=$_POST['sub8'];
        $mrk8=$_POST['mrk8'];
        $sub9=$_POST['sub9'];
        $mrk9=$_POST['mrk9'];
        $sub10=$_POST['sub10'];
        $mrk10=$_POST['mrk10'];
        $total=$_POST['total'];
      
        $result=mysqli_query($mysqli,"INSERT into student values('$usn','$name','$email','$sub1','$mrk1','$sub2','$mrk2','$sub3',' $mrk3','$sub4','$mrk4','$sub5','$mrk5','$sub6','$mrk6','$sub7','$mrk7','$sub8','$mrk8','$sub9','$mrk9','$sub10','$mrk10','$total')");

if($result)
{
    //echo "Sucess";
}
else{
    //echo"failed";
}
    }
 ?>
  
  <a href="next.php"><B><h1>Click here to Download your Marks Details.</h1></B></a>
    
</body>
</html>