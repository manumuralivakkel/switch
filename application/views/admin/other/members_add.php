<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Site name</title>
<link href="<?=base_url()?>css/admin/re.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?=base_url()?>images/favicon.ico" type="image/x-icon">
</head>

<body class="inn">
<!--tooooooop-->
<div id="wrapper">

	<div id="headr">

	<div id="logoo">
	<h1><a href="index.php"><img src="<?=base_url()?>images/admin/anathoth.fw.png" width="144" height="75"  alt=""/></a></h1>
	</div>

	<div id="lgright">
	<h1>Welcome to Admin Page, Help Desk :<a href="#">help@anathothonline.com</a></h1>
	<h2><a href="change_password.php"><img src="<?=base_url()?>images/admin/log_out_button.png" width="73" height="23"  alt=""/> <img src="<?=base_url()?>images/admin/completed_project.png" width="140" height="23"  alt=""/></a></h2>	</div>
	</div>




		<div id="menubar">
		<ul id="menu">
		<li style="padding-left:15px;"><a href="manage_members.php">Manage Members</a></li>
		<li><img src="<?=base_url()?>images/admin/b.png" width="2" height="23"  alt=""/></li>
		<li><a href="add_members.php"  class="active">Add New Members</a></li>
		<li><img src="<?=base_url()?>images/admin/b.png" width="2" height="23"  alt=""/></li>
		<li><a href="active_members.php">Member Status</a></li>
		
		<li><img src="<?=base_url()?>images/admin/b.png" width="2" height="23"  alt=""/></li>
		<li class="ac"><a href="admin_home.php">Back to Admin Home</a></li></ul>
		</div>

		<p style="width:950px; float:left; margin:-10px auto 0 auto;"><img src="<?=base_url()?>images/admin/arw.png" style="margin:18px 0 -23px 210px; z-index:1000px; position:absolute;" width="26" height="13"  alt=""/></p>




		<div id="reportbox">

		
		<!--<div id="datee"><p>22nd August 2014</p></div>-->
		Full Name of New Member &nbsp; <input class="inpuu" type="text"><br /><br />

		Designation&nbsp; <input class="inpuu" type="text"><br /><br />

		Email ID Created&nbsp; <input class="inpuu" type="text"><br /><br />

		
		Contact Number&nbsp; <input class="inpuu" type="text">

		
		<br /><br />
		<input name="Send" value="Send" class="btn" type="button">




<!--
<div id="datee"><p>22nd August 2014</p></div>
		<table class="task" style="margin-bottom:15px;" width="100%" border="0" cellspacing="0" cellpadding="0">
  		<tr>
        <th width="3%" style="border-left:1px solid #b8b8b8;">No.</th>
        <th width="19%">Project</th>
        <th width="14%">Task Title</th>
        <th width="9%">Employee</th>
        <th width="23%">Report</th>
        <th width="8%">Start Time</th>
        <th width="8%">End Time</th>
        <th  width="11%">Status</th>
        <th  width="5%">Action</th>
    
        </tr>
      <tr>
        <td style="border-left:1px solid #b8b8b8;">01</td>
        <td>Way4indians</td>
        <td>News Updation</td>
        <td>Saajan</td>
        <td>Youth News updation</td>
        <td>9.30 AM</td>
        <td>11.15 AM</td>
        <td>Completed</td>
        <td width="5%"><img src="<?=base_url()?>images/admin/b_drop.png" width="16" height="16"  alt=""/></td>
      </tr>

		<tr>
        <td style="border-left:1px solid #b8b8b8;">01</td>
        <td>Way4indians</td>
        <td>News Updation</td>
        <td>Saajan</td>
        <td>Youth News updation</td>
        <td>9.30 AM</td>
        <td>11.15 AM</td>
        <td>Completed</td>
        <td width="5%"><img src="<?=base_url()?>images/admin/b_drop.png" width="16" height="16"  alt=""/></td>
      </tr>

		<tr>
        <td style="border-left:1px solid #b8b8b8;">01</td>
        <td>Way4i</td>
        <td>News Updation</td>
        <td>Saajan</td>
        <td>Youth News updation</td>
        <td>9.30 AM</td>
        <td>11.15 AM</td>
        <td>Completed</td>
        <td width="5%"><img src="<?=base_url()?>images/admin/b_drop.png" width="16" height="16"  alt=""/></td>
      </tr>
        
    
    </table>





<div id="datee"><p>22nd August 2014</p></div>
		<table class="task" style="margin-bottom:15px;" width="100%" border="0" cellspacing="0" cellpadding="0">
  		<tr>
        <th width="3%" style="border-left:1px solid #b8b8b8;">No.</th>
        <th width="19%">Project</th>
        <th width="14%">Task Title</th>
        <th width="9%">Employee</th>
        <th width="23%">Report</th>
        <th width="8%">Start Time</th>
        <th width="8%">End Time</th>
        <th  width="11%">Status</th>
        <th  width="5%">Action</th>
    
        </tr>
      <tr>
        <td style="border-left:1px solid #b8b8b8;">01</td>
        <td>Way4indians</td>
        <td>News Updation</td>
        <td>Saajan</td>
        <td>Youth News updation</td>
        <td>9.30 AM</td>
        <td>11.15 AM</td>
        <td>Completed</td>
        <td width="5%"><img src="<?=base_url()?>images/admin/b_drop.png" width="16" height="16"  alt=""/></td>
      </tr>

		<tr>
        <td style="border-left:1px solid #b8b8b8;">01</td>
        <td>Way4indians</td>
        <td>News Updation</td>
        <td>Saajan</td>
        <td>Youth News updation</td>
        <td>9.30 AM</td>
        <td>11.15 AM</td>
        <td>Completed</td>
        <td width="5%"><img src="<?=base_url()?>images/admin/b_drop.png" width="16" height="16"  alt=""/></td>
      </tr>

		<tr>
        <td style="border-left:1px solid #b8b8b8;">01</td>
        <td>Way4i</td>
        <td>News Updation</td>
        <td>Saajan</td>
        <td>Youth News updation</td>
        <td>9.30 AM</td>
        <td>11.15 AM</td>
        <td>Completed</td>
        <td width="5%"><img src="<?=base_url()?>images/admin/b_drop.png" width="16" height="16"  alt=""/></td>
      </tr>
        
    
    </table>


-->







		</div>




</div>
<!--tooooooop-->
<div id="bottom_login_page">  	   
<div id="bottom_wrapper">
<p>www.websitename.com. All rights reserved. Powered By Anathoth</p>
</div>
</div>

</body>
</html>
</body>
</html>
