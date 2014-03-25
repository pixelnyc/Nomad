<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOMAG || </title>
	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/reset.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/root.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/grid.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/typography.css" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/jquery-plugin-base.css" />
    
    <!--[if IE 7]>	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/ie7-style.css" />	<![endif]-->
    
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.11.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-settings.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/toogle.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/raphael.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/analytics.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/popup.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.tabs.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.accordion.js"></script>
</head>
<body>





    <div class="loginform">
    	<div class="title"> <img src="<?php echo base_url();?>img/logo.png" width="112" height="35" /></div>
        <div class="body">
        <?php if (isset($error) && $error): ?>
          <div class="alert alert-error">
            <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
          </div>
        <?php endif; ?>
        
       	  <?php echo form_open('login/login_user') ?>
          	<label class="log-lab">Email</label>
            <input name="email" type="text" class="login-input-user" id="textfield" value="admin@nomad.com"/>
          	<label class="log-lab">Password</label>
            <input name="password" type="password" class="login-input-pass" id="textfield" value="Password"/>
            <input type="submit" name="button" id="button" value="Login" class="button"/>
       	  </form>
        </div>
    </div>
    
    </div>
</body>
</html>