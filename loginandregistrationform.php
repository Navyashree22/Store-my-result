<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login and Registration Form </title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Store My Result</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    
                    
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button></li>
                </ul>
            </nav>
        </div>
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p style ="color:black">Difficult to remember your result.<br> Store Here</p>
            </div>
        </div>
        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <h1 class="main-heading">Login Form</h1>
				        <input type="email"name='emailid' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="Password", required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                        <h1 class="main-heading">Register Form</h1>
				        <input type="text" name='user'placeholder="User Name" required/>
				        <input type="email" name='emailid'placeholder="Email-ID" required/>
				        <input type="password"name='password' placeholder="Password" required/>
                        <p style="color:white">Go to Login Form after Register</p>
				        <button>REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
