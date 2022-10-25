<html>  
<head>  
    <title>User Login</title>  
    <link rel = "stylesheet" type = "text/css" href = "Css/style.css">
    <link rel = "stylesheet" type = "text/css" href = "Css/captcha.css">   
</head>  
<body>  
    <!-- include navbar -->
    <?php
    include("./navbar.html");
    ?>
    <div id = "frm">  
        <h1>Welcome!</h1>  
        <form name="f1" method="POST" action="login.php" >  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="username" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <a href="test.php">Register here</a>
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
        
        <div class="wrapper">
            
            <div class="captcha-area">
              <div class="captcha-img">
                <img src="images/captcha-bg.png" alt="Captch Background">
                <span class="captcha"></span>
              </div>
              <button class="reload-btn"><i class="fas fa-redo-alt"></i>Retry</button>
            </div>
            <form action="#" class="input-area">
              <input type="text" placeholder="Enter captcha" maxlength="6" spellcheck="false" required>
              <button class="check-btn">Check</button>
            </form>
            <div class="status-text"></div>
          </div>
          <?php
          $_SESSION["username"] = "gay";
          ?>
    </div>  
    

    <script src="Scripts/login.js"> </script>
    <script src="Scripts/captchascript.js"> </script>    
</body>     
</html>  