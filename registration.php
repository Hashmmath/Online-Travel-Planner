<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/registration.css" />
    <title>Document</title>
  </head>
  <body>
    <div id="bg"></div>
    <div class="login-container">
      <div class="login-box">
        <h3>USER REGISTRATION</h3>
        <br />
        <form action="./reg.php" method="post">
        <div class="input-container">
            <label for="exampleInputEmail1"><b>User Id</b></label>
            <br />
            <input
              type="text"
              class="form-control"
              id="userid"
              aria-describedby="userhelp"
              name="Userid"
              placeholder="Enter your Fav Id here"
              required
            />
          </div>
          <div class="input-container">
            <label for="exampleInputEmail1"><b>Username</b></label>
            <br />
            <input
              type="text"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              name="Username"
              placeholder="Enter your Username here"
              required
            />
          </div>
          <div class="input-container">
            <label for="exampleInputEmail1"><b>Mail ID</b></label
            ><br />
            <input
              type="text"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              name="mailid"
              placeholder="Enter your mail id"
              required
            />
          </div>
          <div class="input-container">
            <label for="exampleInputPassword1"><b>Password</b></label
            ><br />
            <input
              type="password"
              class="form-control"
              id="exampleInputpassword1"
              name="password"
              placeholder="Enter your Password"
            />
          </div>
          <div class="input-container">
            <label for="exampleInputPassword1"><b>Confirm Password</b></label>
            <input
              type="password"
              class="form-control"
              id="exampleInputpassword1"
              name="c_password"
              placeholder="Confirm your Password"
            />
          </div>
          <div class="input-container">
            <button type="submit" name="registration">REGISTER</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
