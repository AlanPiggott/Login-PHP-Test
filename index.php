<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>

  </head>

  <body>

    <header class="header">

      <h1>Test Website</h1>

    </header>

    <?php


    $emailError = $passwordError = '';

    if($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["email"])) {
        $emailError = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
}

      if(empty($_POST["password"])) {
        $passwordError = "Password is required";
      } else {
        $password = test_input($_POST["password"]);
      }


    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

     ?>


      <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="container">
          <div class="logInTitle">
            <h2>Login Details</h2>
          </div>

          <div class="form-group row">
            <div class="col-sm-4">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" placeholder="Enter email" name="email">
              <span class="error"><?php echo $emailError;?></span>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
          </div>


        <div class="form-group row">
          <div class="col-sm-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control"placeholder="Password" name="password">
            <span class="error"><?php echo $passwordError;?></span>
          </div>
        </div>

        <div class="submitButton">
          <button type="submit" class="btn btn-light">Submit</button>
        </div>

      </form>

  </body>

</html>
