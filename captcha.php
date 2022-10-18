<?php
  require_once('recaptchalib.php');
  $privatekey = "6Lfi3WkiAAAAAJ6gOLZWHGiwhnD6Whz8UAamD1oT";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
  }
  ?>
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
 <button class="g-recaptcha" 
        data-sitekey="6Lfi3WkiAAAAAJ6gOLZWHGiwhnD6Whz8UAamD1oT" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>