<?php session_start(); 
if(isset($_POST['kyqu'])){ 
    $emri=$_POST['emri']; 
    $password=$_POST['pass']; 
    if(($emri) == "Anes Shabani"|| ($password) == 1234)
    { header("Location: login.html"); 
    }else{ $_SESSION['emri']=$emri; 
    $_SESSION['pass']=$password; 
    echo "Passwordi ose Emri nuk jan te sakt"; 
    } } ?> 
    <!DOCTYPE html> 
    <html lang="en"> 
        <head> 
            <meta charset="UTF-8"> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <link rel="stylesheet"> 
            <title> Sign in Log in System</title> 
        </head> 
        <style>
            *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
body{
    background: rgba(0,0, 0, 0.5) url('c.jpg') center center fixed;
    background-blend-mode: darken;
    background-size: cover;
    background-position: center;
}
.main{
    padding: 0 8%;
}
nav{
    padding: 24px 0;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.logo h3{
    width: 150px;
    font-size: 30px;
    cursor: pointer;
    color: yellow;
}

.nav_links{
    display: flex;
    flex: 1;
    align-items: center;
    justify-content: space-between;
}
.nav_links a{
    margin-left: 36px;
    text-decoration: none;
    color: #fff;
    transition: 2s;
}

.nav_links a:hover{
    padding: 11px;
    background-color: #000;
}

.nav_links .btn{
    background: yellow;
    color: #000;
    padding: 10px 28px;
    border-radius: 5px;
}

.content{
    margin-top: 150px;
    margin-left: 150px;
    color: #fff;
}

.content h1{
    font-size: 60px;
}

.search{
    background: #fff;
    width: fit-content;
    margin: 20px 0;
    padding: 20px 20px;
    align-items: center;    
}

.search input{
    background: transparent;
    width: 500px;
    border: 0;
    outline: none;
}

button{
    padding: 10px 28px;
    margin-left: 18%;
    background-color: yellow;
    cursor: pointer;
}

.form{
    width: 300px;
    height: 300px;
    position: absolute;
    top: 30%;
    right: 42%;
    background: darkgrey;
}

.form::placeholder{
    color: #fff;
}

.box input{
    width: 75%;
    margin: 10px;
    margin-top: 18px;
    margin-left: 21px;
    padding: 13px 18px;
    background: transparent;
    border-bottom: 2px solid black;
}

.link{
    width: 75%;
    text-align: center;
    
    margin-top: 10px;
    margin-left: 15px;
    padding: 11px;
    border-radius: 7px;
}
.audi{
    color: white;
}
.imgg{
    height: 10px;
    width: 10px;
    }

.link1{
    text-align: center;
    margin-top: 8px;
}
        </style>
        <body> <form method="post"> 
            <div class="form"> 
                <div class="box"> 
                    <input type="text" name="emri" placeholder="Emri"> 
                    <input type="Password" name="pass" placeholder="Password"> 
                </div> 
                <div class="link"> 
                    <a href="login.php">
                        <button name="kyqu">Log In</button></a>
                     </div> 
                     <div class="link1">
                <a href="forget.php">Forgotten Password</a>
            </div>
        </div>
</form>
</body>
</html>