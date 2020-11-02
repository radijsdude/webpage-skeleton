<!DOCTYPE html>

<html>

<head>
<title>websitetitle</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class="header">
<p>My Beautifull Header</p>
</div>

<div class="navbar">
<ul>
<li><a href = index.php>Home</a></li>
<li id="navbaractive"><a href = images.php>Images</a></li>
<li><a href = indexx.html>About</a></li>
<li><a href = contact.php>Contact</a></li>
</ul>
</div>

<div class="main">
<div class="main-navbar">
<p>main-navbar title</p>
<ul>
<li><a href = indexx.html>li1</a></li>
<li><a href = indexx.html>li1</a></li>
<li><a href = indexx.html>li1</a></li>
<li><a href = indexx.html>li1</a></li>
<li><a href = indexx.html>li1</a></li>
</ul>
</div>
<div class="images-holder">
<ul>
<?php
$directory = "/var/www/html/img";
$images = glob($directory . "/*");
foreach($images as $image)
{
	$x = explode($directory,$image)[1];
	$y = explode(".",$x)[0];
	$y = str_replace("_"," ",$y);
	$y = explode("/",$y)[1];
	echo '<p class="images-p">'.$y.'</p>';
	echo '<li class="images-li"><a href="/img'.$x.'"><img src="/img'.$x.'"></a></li>';
}
?>
</ul>
</div>
</div>

<div class="footer">
<p>footer</p>
</div>

</body>

</html>

































