<?php session_start();
if(isset($_POST['car'])){ 
    $input=$_POST['input']; 
    if(($input) == "Audi")
    { header("Location: audi.html"); 
    }else{ $_SESSION['input']=$input; 
    echo "Nuk kem informacione ne kete veture"; 
    }
    if(($input) == "Bmw")
    { header("Location: bmw.html"); 
    }else{ $_SESSION['input']=$input; 
    echo "Nuk kem informacione ne kete veture"; 
    } 
    if(($input) == "Mercedes Benz")
    { header("Location: mercedes.html"); 
    }else{ $_SESSION['input']=$input; 
    echo "Nuk kem informacione ne kete veture"; 
    }} ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Document</title>
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
   
    padding: 10px 28px;

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
    width: 200px;
    height: 200px;
    position: absolute;
    top: 12%;
    right: 38%;
    background: rgb(32, 31, 31);
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
    border-bottom: 2px solid yellow;
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
.img{
    height: 10px;
    width: 10px;
    margin-left: 1000px;
}
</style>
<body><form method="post"> 
  



        <div class="C">
            <nav>
                <div class="logo">
                    <h3>Cars Hub</h3>
                </div>
                <div class="nav_links">
                    <a href="#">Explore Cars</a>
             <a href="loginn.php" class="btn"><button>Login</button></a>
                </div>
            </nav>
            <div class="content">
               <marquee><h1>Buy the best <br> Quality Cars</h1></marquee>
                <div class="search">
                    <input type="text" placeholder="Search Any Car" name="input" >
                </div>
                <a href="button.html"><button type="submit" name="car">Search</button></a>
            </div>
        </div>
    </form>
     </body>
</html>