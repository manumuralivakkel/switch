<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to CodeIgniter</title>
</head>
<body>
<div id="container">

  <?
  //print_r($results);
  
  foreach ($results as $val)
  {
  	
  ?><h1>
 <?=$val->mm_page_content?>
  </h1> <?} ?>
 
</div>
</body>
</html>
