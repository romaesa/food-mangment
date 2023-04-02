<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <li><a href="">ABOUT</a></li>
        <div class="dropdown">
  <button class="dropbtn">VEIIW AS</button>
  <div class="dropdown-content">
    <a href="#">ABOUT VEGETABLE</a>
    <a href="#">ABOUT FRUITS</a>
    <a href="#">ABOUT JUNG FOOD</a>
  </div>
</div>
    </nav>
    </header>
    <div class="jumbotron text-center">
        <h2>HELPING PEOPLE BY GOOD QUALITY FOOD!</h2>
        <button onclick="myFunction()">WELCOME TO REASIONABLE FOOD SINGUP PAGE</button>

        <b><p id="demo"></p></b>
        
        <script>
        function myFunction() {
          document.getElementById("demo").innerHTML = " AIM TO HELP POOR PEOPLE";
        }
        </script>
        
      </div>
      <div id = "frm">  
        <h1>signin</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "signin" />  
            </p>  
        </form>  
    </div>  
    // validation for empty field   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }
                    if(id.length==ps.length && ps.length==id.length) {  
                    alert(" Name and email pass are invaled");  
                    return false; 
                     }  
                }                             
            }  
        </script> 
      <style>
        body{
            background-image: url('https://media.gettyimages.com/id/1028119366/photo/grilled-chicken-breast-with-mediterranean-ingredients-sauce.jpg?s=170667a&w=gi&k=20&c=bhBwZs1aFhXHS-UUa2RaeiTBGaezYGMEpfnc0QhX7VE=');

        }
        .jumbotron {
            background-color: gray;
            color: black;
            text-decoration: solid;
            margin-bottom: 10px;
            margin-top: 50px;
            width: 60%;
            margin-left: 260px;
            border: solid BLACK 2px;  
        }
        .container {
          background-color: white;
          margin-top: 20px;
        }
        #frm{  
    border: solid BLACK 2px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
}  
#btn{  
    color: black;  
    background: white;  
    padding: 7px;  
    margin-left: 70%;  
}  
header * {
    display: inline;
}

header li {
    margin: 10px;
}

header li a {
    color: black;
    text-decoration: none;
}
.dropbtn {
    background-color: #3e8e41;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
    margin-top: 20px;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
       
       
       
      </style>
</body>
</html>