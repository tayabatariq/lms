<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            background-image: url(img/img.jpg);
            background-repeat: no-repeat;
            background-size:cover ;
            background-position: center;
        }
        #navigationbar{
            display: flex;
            background-color:rgba(3, 15, 56, 0.479);
            width: 500;
            color: white;
            
        }
        .primary,ul{
            margin: 10px 40px;
            display: flex;
            float: right;
         
        }
        .primary2{
            margin: 40px 40px;
            flex: auto;
            letter-spacing: 1.8px;
        }
    nav ul{
        float: right;
        margin: 33px 4px;
    }
    nav li{
            display: inline-block;
            list-style: none;
        }
        nav ul li a{
            font-size: 15px;
            text-transform: uppercase;
            padding: 30px 30px;
            color: rgb(248, 239, 239);
            text-decoration: none;
            
        }
 nav li a:hover{
    color: rgba(160, 160, 240, 0.767);
    transition: all 0.7sec ease 0%;
 }
        
#seconddiv{
  position: relative;
  padding: 100px 45px;
    text-align: center;
    color: white;
    font-family:Arial, Helvetica, sans-serif;
}
.btn{
    border: 1px solid white;
    border-radius: 20px;
    background-color: rgba(3, 50, 65, 0.911);
    color: white;
    padding: 10px 20px;
    font-size: 15px;
}

.btn:hover{
        border: 1px solid white;
    border-radius: 20px;
    background-color: rgba(1, 28, 37, 0.932);
    color: white;
    padding: 10px 20px;

}
.item{
margin: auto;
    

}

h1{
    font-size: 50px;
}
    </style>
</head>
<body>  
   <header>
        <nav id="navigationbar">
          <div class="primary2">
            Learn&nbsp;&nbsp;&nbsp; Dash <br>A &nbsp;c&nbsp;a&nbsp;d&nbsp;m&nbsp;e&nbsp;y
          </div>
          <div class="primary">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Srvices</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
          </div>
        </nav>

        <div id="seconddiv">
            <h1>Learn From Industry Experts</h1>
            <p>Lnsectetur, adipisici. Nihil iure nostrum a, sapiente quos repellendus molestiae doloremque <br>arum quod adipisci. Labore! Lorem ipsum dolor sit amet.</p> <br>
            <button type="button" class="btn">View all courses</button>


          </div>
   </header>
</body>
</html>