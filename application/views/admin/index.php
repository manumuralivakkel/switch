<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Login</title>
<link href="<?=base_url()?>assets/css/admin/re.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?=base_url()?>assets/images/favicon.ico" type="image/x-icon">
</head>

<body>

<div align="center" style="padding:0; margin:0;"><img src="<?=base_url()?>assets/images/admin/anathoth.fw.png" width="175" height="92" /></div>
				
<div align="center" style="font-size:22px; padding-top:15px; font-family:Georgia, 'Times New Roman', Times, serif; font-style:italic;">Site Name - Admin Control Panel</div>







<div id="login_bg">
          
  
  
     <? // form_open('page/user' )?>     
      <form id="login" name="Frmlogin" action="<?=base_url().'admin/user/login'?>" method="post">
      <fieldset id="inputs">
      <input id="username" name="mm_user_name" type="text" placeholder="Username" autofocus required />
      <input id="password" name="mm_user_password" type="password" placeholder="Password" required>
      </fieldset>
      <fieldset id="actions">
      <input class="form-btn03" type="submit" value="" />
        <a href="" style="text-decoration:none; margin-left:32px; font-weight:normal;"><span class="small_bold">Can't access your account?</span></a>
      </fieldset>
     

      </form>
    
    </div>




<div id="bottom_login_page">
    	
    <div id="bottom_wrapper">
    	<p>www.websitename.com. All rights reserved. Powered By Design Master</p>
    </div>
    
</div>

</body>
</html>
</body>
</html>
