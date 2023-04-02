
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <img src="https://codetheweb.blog/assets/img/icon2.png">
<nav>
    <li><a href="">ABOUT</a></li>
    <li><a href="">SIGN UP</a></li>
    <li><a href="">HOME</a></li>
    <li><a href="">INFO</a></li>
</nav>
</header>
<h1>LOGIN FORM</h1>
   <div class="container">
   <form name="f1" action = "authentication1.php" onsubmit = "return validation()" method = "POST">  
    <div>
        <label for="fname">NAME</label>
        <input type="text"name='NAME' placeholder="NAME">
    </div>
    <div>
        <label for="fname">EMAIL</label>
        <input type="text"name='EMAIL' placeholder="EMAIL">
    </div>
    <div class=" btn">
        <button type="submit">SUBMIT </button>
    </div>
   </form>
   </div>
   <script>  
            function validation()  
            {  
                var id=document.f1.NAME.value;  
                var ps=document.f1.EMAIL.value;  
                if(id.length=="" && ps.length=="") {  
                    alert(" Name and email fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert(" Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("email field is empty");  
                    return false;  
                    } 
                    if(id.length==ps.length && ps.length==id.length) {  
                    alert(" Name and email feild are invaled");  
                    return false; 
                     }
                }                             
            }  
        </script> 
 
    <Style>
        input[type=text] {
            width: 25%;
            padding: 10px;
            margin: 8px ;
            box-sizing: border-box;
            border: 2px solid red;
            border-radius: 4px;
            box-sizing: content-box;
}

         body {
            text-align: bottom;
            color: red;
            font-size: 20px;
            background-image: url('https://images.pexels.com/photos/2002719/pexels-photo-2002719.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        }
       ::placeholder {
            text-align: center;
        
        }
        .gender {
            width: 20%;
        }
        label {
            padding: 10px;
            text-decoration: bold;
        }
        .btn {
            text-align: bottom;
            margin: 10PX;
            margin-left: 350px;
        }
        Button {
            padding: 10px;
            width: 10%;
            border-radius: 15px;
            background-color: red;
        }   
        header {
            margin-top: 10px;
        background-color: yellow;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 80px;
        display: flex;
        align-items: center;
        border: #333;
        box-sizing: content-box;
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
    header img {
    height: 100px;
}

    </Style>
</body>
</html>