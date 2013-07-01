<html>
<head>
<title>:: Bnz Save Img ::</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
</head>
<body>

<style>
a:hover, a:link, a:visited {
	text-decoration: none;		
	color: #003399;
}
</style>

<div align=center><br><br>
<?
	$filesave = $_GET["n"];
	if ($filesave != "")
		echo "image file save as <a target=_blank href=img/$filesave>$filesave</a>";	
?>
<BR>
<form method=post action=getimg.php> 
<input type=text name=geturl size=50> 
<input type=submit value=save>
</div>

</form>
</body>
</html>
