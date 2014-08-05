<?php
header('Content-Type: text/html; charset=utf-8');
//echo $error;
?>
<head>
    <link rel="stylesheet" type="text/css" href="http://rap.int/ci_rap/bootstrap/login_style.css" />    
    <link rel="stylesheet" href="http://rap.int/ci_rap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://rap.int/ci_rap/bootstrap/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container" style="width:500;">
<div class="row">
  <div class="page-header"><h2>Login</h2></div>
  <form class="form-horizontal" method='post'action="http://rap.int/ci_rap/index.php/adminsignctrl/authentification">
    <fieldset>     
      <div class="form-group">
        <label class="col-md-1 control-label" for="username"></label>  
        <div class="col-md-12">
          <input id="login" name="login" type="text" placeholder="Username" class="form-control input-md">
        </div>
      </div>     
      <div class="form-group">
        <label class="col-md-1 control-label" for="password"></label>
        <div class="col-md-12">
          <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
        </div>
      </div>     
      <div class="form-group">
        <label class="col-md-1 control-label" for="login"></label>
      <div class="col-md-5">
        <button id="login-key" name="login-key" class="btn btn-block login_button">Login</button>
      </div>      
    </fieldset>
  </form>
</div> 
</div> 
</body>