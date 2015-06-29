<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
<link href="<?=base_url()?>assets/css/admin/re.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=base_url()?>assets/images/admin/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?=base_url()?>assets/images/admin/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="<?=base_url()?>assets/js/admin/menu.js"></script>


</head>

<body class="inn">
<!--tooooooop-->
<div id="wrapper">

	<div id="headr">

	<div id="logoo">
	<h1><a href="index.php"><img src="<?=base_url()?>assets/images/admin/anathoth.fw.png" width="144" height="75"  alt=""/></a></h1>
	</div>

	<div id="lgright">
	<h1> Help Desk :<a href="#">help@design-master.com</a></h1>
	<!--  
	<h2><a href="change_password.php"><img src="assets/images/admin/log_out_button.png" width="73" height="23"  alt=""/> <img src="<?=base_url()?>assets/images/admin/completed_project.png" width="140" height="23"  alt=""/></a></h2>	
	-->
	</div>
	</div>




		<div id="menubar">
		<ul id="menu" style="float: right">
		<li style="padding-left:15px;"><a href="<?=base_url().'admin/user/logout'?>" class="active">Log out</a></li>
		<li><img src="<?=base_url()?>assets/images/admin/b.png" width="2" height="23"  alt=""/></li>
		<li ><a href="#" class="active">Settings</a></li></ul>
		</div>





<div id="reportbox" >

<div style="width:160px; border-right:1px solid #ccc;  box-shadow:0px 0px 5px #ddd; padding: 30px 30px 30px 20px; float:left; height:auto; min-height: 400px;">

<div id="masterdiv" style="padding:0 0 5px 0"><!--
<div class="topItem" onclick="SwitchMenu('sub1');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage Admin</a></div>
<span class="submenu" id="sub1" style="display: none;">

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List Admin</a></div>
<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>Add Admin</a></div>

</span>
-->


<div class="topItem" onclick="SwitchMenu('sub2');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage Pages</a></div>
<span class="submenu" id="sub2">
<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="<?=base_url().'admin/page/add'?>" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>Add Pages</a></div>

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="<?=base_url().'admin/page/display'?>" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List Pages</a></div>
</span>


<!--  

<div class="topItem" onclick="SwitchMenu('sub3');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage Project</a></div>
<span class="submenu" id="sub3">

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="add_project.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>Add Project</a></div>

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="list_project.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List Project</a></div>
</span>



<div class="topItem" onclick="SwitchMenu('sub4');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage Gallery</a></div>
<span class="submenu" id="sub4">

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="add_gallery.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>Add Gallery</a></div>

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="list_gallery.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List Gallery</a></div>
</span>



<div class="topItem" onclick="SwitchMenu('sub5');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage Services</a></div>
<span class="submenu" id="sub5">

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="add_services.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>Add Service</a></div>

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="list_services.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List Services</a></div>
</span>


<div class="topItem" onclick="SwitchMenu('sub6');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage News</a></div>
<span class="submenu" id="sub6">

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="add_news.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>Add News</a></div>

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="list_news.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List News</a></div>
</span>



<div class="topItem" onclick="SwitchMenu('sub7');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage Clients</a></div>
<span class="submenu" id="sub7">

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="add_client.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>Add Client</a></div>

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="list_clients.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List Clients</a></div>
</span>



<div class="topItem" onclick="SwitchMenu('sub8');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage Banner</a></div>
<span class="submenu" id="sub8">

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="add_banner.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>Add Banner</a></div>

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="list_banner.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List Banner</a></div>
</span>



<div class="topItem" onclick="SwitchMenu('sub9');" style="height:20px">
<a href="javascript:void(0)" class="sidelink">Manage Contact</a></div>
<span class="submenu" id="sub9">

<div class="topItem" style="height:17px;">&nbsp;&nbsp;
<a href="list_contact.php" onmouseout="className='menuout'" onmouseover="className='menuover'" class="menuout" style="text-decoration:none;">
<span class="submenuimg">&nbsp;&nbsp;&nbsp;</span>List Contact</a></div>
</span>
-->
</div>

</div>