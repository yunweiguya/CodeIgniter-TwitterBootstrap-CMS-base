<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		
	<title><?php echo $title ?></title>
	
    <link rel="stylesheet" href="/_includes/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/_includes/css/style.css" />
    
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
		//<!--
		google.load('jquery', '1.7.1');
		//-->
	</script>
  <script type="text/javascript" src="/_includes/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="/_includes/js/script.js" ></script>

</head>

<body id="<?php echo isset($bodyID) ? $bodyID : ''; ?>">
  <div class="container">
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <div class="container">
            <a class="brand" href="#"><?php echo $title ?></a>
            <div class="nav-collapse navbar-responsive-collapse collapse" style="height: 0px;">
              <?php if($loggedIn){ ?>
              <ul class="nav">
               <li class="<?php echo ($bodyID == 'home-index') ? 'active' : ''; ?>"><a href="/">Home</a></li>
              </ul>
              <ul class="nav pull-right">
                <li><a href="/auth/logout">Logout</a></li>
              </ul>
              <?php } ?>
            </div><!-- /.nav-collapse -->
          </div>
        </div><!-- /navbar-inner -->
      </div>