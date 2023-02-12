<?php 
include_once 'loginControllerAdmin.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./css/loginStyle.css?v=<?php echo time(); ?>">
    <title>Login</title>
  </head>

  <body>
    
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Kyçu si admin</span></div>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post" onsubmit="return validateform()">

          <div class="row">
            <i class="fas fa-user"></i>
            <input
              type="text"
              placeholder="Email*"
              name="email"
            />
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Fjalkalimi*" />
          </div>

          <div class="row button">
          <input type="submit" value="login" name="loginBtn">
          </div>
          <div class="signup-link">
            Nuk keni llogari? <a href="register.php">Krijoni nje llogari</a>
          </div>
          <div class="signup-link">
            <a href="registerAdmin.php">Krijoni nje llogari si admin </a>
          </div>
          <div class="signup-link">
            <a href="login.php">Kyçuni si perdorues</a>  
            <!-- linkun si admin lart 2 here -->
          </div>
        </form>
      </div>
    </div>

    <footer id="footer" class="bg-dark text-center">
    </footer>
    <script>
      function validateform() {
        var email = document.myform.email.value;
        var password = document.myform.password.value;
        if (email == null || email == "") {
          alert("Ju lutem plotesoni Numrin Personal");
          return false;
        } else if (password.length < 6) {
          alert("Passwordi duhet te jete me shume se 6 karkatere");
          return false;
        } 
      }
    </script>
    
  </body>
</html>
