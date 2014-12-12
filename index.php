
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Cheapo Mail: Login</title>

    <link rel="stylesheet" href="css/login.css" media="screen" type="text/css" />

</head>

<body>

  <div class="container">

  <div id="login-form">

    <h3>Cheapo Mail: Login</h3>

    <fieldset>

      <form action="checklogin.php" method = "post">

        <input name = "username" type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "> <!-- JS because of IE support; better: placeholder="Username" -->

        <input name = "password" type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

        <input type="submit" value="Login">
        <footer class="clearfix">

          <p><span class="info">?</span><a href="#">Forgot Password</a></p>

        </footer>

      </form>

    </fieldset>

  </div> <!-- end login-form -->

</div>

</body>

</html>