<?php
include_once 'registerController.php';

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
    <link rel="stylesheet" href="./css/register.css?v=<?php echo time(); ?>">
    <title>Regjistrohu</title>
  </head>

  <body>




    <div class="container">
      <div class="wrapper card1">
        <div class="title"><span>Regjistrohu</span></div>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="post" >
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Emri*" name="name" value="<?=$name?>" />
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="surname*" name="surname" value="<?=$surname?>" />
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input
              type="text"
              placeholder="Email*"
              name="email"
              value="<?=$email?>"
            />
          </div>


          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" value="<?=$password?>" placeholder="Fjalkalimi*" />
          </div>



          <div class="row button">
<input type="submit" value="register" name="registerBtn">    
      </div>

          <div class="signup-link">
            Fushat me "<span style="color: red">*</span>" duhet te plotesohen
          </div>
          <div class="signup-link">
            Keni llogari? <a href="login.php">Kyçuni ketu</a>
          </div>
        </form>

      </div>
    </div>
  </body>
</html>
