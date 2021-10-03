<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download your result</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Store My Result (Download PDF)</h1></a>
                <br><p>Enter the Details that you like to DOWNLOAD.</p>
            </div>
   
<nav>
                <ul id='MenuItems'>
                    <li><a href='loginandregistrationform.php'>Logout</a></li>
</ul>
</nav> 
</div>
<div class="container">
        <div class="title">Enter Your Marks</div><br>
        <form action="pdf.php" method="POST" autocomplete="off">
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
</body>
</html>