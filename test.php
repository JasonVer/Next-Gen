<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lfi3WkiAAAAAJ6gOLZWHGiwhnD6Whz8UAamD1oT"></script>

    <title>test page</title>
</head>
<body>
<main>
    
    <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
                
            </label>
            
        </div>
        <div>
        
        <input type="submit" />
        <script src="https://www.google.com/recaptcha/api.js"></script>
   <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
        </div>
        <div>
        <button type="submit"
        class="g-recaptcha" 
        data-sitekey="6Lfi3WkiAAAAAJ6gOLZWHGiwhnD6Whz8UAamD1oT" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="index.html">Login here</a></footer>
        <?php
                    include("captcha.php")
                ?>
    </form>
</main>
</body>
</html>