<?php
$url = $_POST["geturl"];

$name = saveimage($url);
echo "<script>window.location = 'img.php?n=".$name."'</script>";

function saveimage($url)
{
	if (empty($url))
	{
		echo "empty URL";
		return 0;
	}

	$fp = @fopen($url, "r"); 
	if (!$fp)
	{
		echo "Connection Fail";
		return 0;
	}

	$num = 0; 
	while (!feof($fp))
	{
		$image[$num] = fread($fp, 1024); // read image
		$num++; 
	}
	fclose($fp);

	$kk = strrchr($url, "/"); 
	//$kk = substr($kk,1,strlen($kk)); 
	$kk = substr($kk, strlen($kk)-4, strlen($kk)); //image name
	$time = time();
	$newkk = $time.$kk;

	$fp = fopen("img/$newkk", "w+"); 
	for($i=0; $i<$num+2; $i++)
	{ 
		$result = fwrite($fp, $image[$i]); // save image 
	} 
	fclose($fp);
	return $newkk;
}

?>