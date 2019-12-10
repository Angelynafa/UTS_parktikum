<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Login</title>

    <link rel="stylesheet" href="<?= base_url('assets/bs/');?>css/style.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="<?= base_url('assets/bs/');?>http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text" name="username" placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="password" placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p>

          </fieldset>

        </form>

        <p>Not a member? <a href="#">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>