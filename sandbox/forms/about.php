<?phpsession_start();if (!isset($_SESSION['SESSION'])) require ( "global/global_vars.php");//print_r($_SESSION);?><!DOCTYPE html><html>  <head>    <title>Purchase Monitoring App</title>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- Bootstrap -->    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->	<link href="../styles/css/mod.bootstrap.css" rel="stylesheet">    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->    <!--[if lt IE 9]>      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>    <![endif]-->  </head>  <body><!--Navigation Bar START -->  <nav class="navbar navbar-default" role="navigation">  <!-- Brand and toggle get grouped for better mobile display -->  <div class="navbar-header">    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">      <span class="sr-only">Toggle navigation</span>      <span class="icon-bar"></span>      <span class="icon-bar"></span>      <span class="icon-bar"></span>    </button>    <a class="navbar-brand" href="#">Purchase Monitor</a>  </div>  <!-- Collect the nav links, forms, and other content for toggling -->  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    <ul class="nav navbar-nav">      <li class="active"><a href="#">Home</a></li>      <li><a href="#" id="example" data-content="It's so simple to create a tooltop for my website!" data-original-title="">About</a></li>	  	  <!--<li><a class="collapse" rel="popover" data-title="Purchase Monitor" data-content="This button was specified in the initial HTML document" data-placement="bottom">About</a></li>-->      <li class="dropdown">        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>        <ul class="dropdown-menu">          <li><a href="#">Action</a></li>          <li><a href="#">Another action</a></li>          <li><a href="#">Something else here</a></li>          <li class="divider"></li>          <li><a href="#">Separated link</a></li>          <li class="divider"></li>          <li><a href="#">One more separated link</a></li>        </ul>-->      </li>    </ul>    <!--<form class="navbar-form navbar-left" role="search">      <div class="form-group">        <input type="text" class="form-control" placeholder="Search">      </div>      <button type="submit" class="btn btn-default">Submit</button>    </form>	-->    <ul class="nav navbar-nav navbar-right">      <li><a href="#">Register</a></li>      <li class="dropdown">        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>        <ul class="dropdown-menu">          <li><a href="#">Reset Password</a></li>          <li><a href="#">Another action</a></li>          <li><a href="#">Something else here</a></li>          <li class="divider"></li>          <li><a href="#">Separated link</a></li>        </ul>      </li>    </ul>  </div><!-- /.navbar-collapse --></nav><!--Navigation Bar END --><!--Start Contents--><div class="container">      <form class="form-signin" role="form" name="login-form" action="scripts/login_action.php" method="post">        <h2 class="form-signin-heading">Please sign in</h2>        <input type="text" class="form-control" value="<?php if (isset ($_SESSION['MEMBER_USRNAME'])) echo ($_SESSION['MEMBER_USRNAME']) ?>" name="Username" placeholder="Username" required autofocus>        <input type="password" class="form-control" placeholder="Password" name="Userpwd" required>        <label class="checkbox">          <input type="checkbox" value="remember-me"> Remember        </label>        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Sign in</button>      </form><div class="navbar-default"><div class="login_message"><?php if (isset ($_SESSION['LOGIN_ERROR'])) {	echo ($_SESSION['LOGIN_ERROR']);	}?></div></div>	  </div><!--End Contents-->      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->    <script src="../styles/js/jquery.js"></script>    <!-- Include all compiled plugins (below), or include individual files as needed -->    <script src="../styles/js/bootstrap.min.js"></script>	<script>	$(function ()	{ $("#example").popover({title: 'Look! A bird!', placement:'bottom',container: 'body',animation:'true'});	});	</script>  </body></html>