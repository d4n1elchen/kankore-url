<?php
	$pw = $_GET["pw"];
	$url = "";

	//read pws
	$rpw = fopen("pw", "r") or die("Unable to open file!");
	$pw_str = fread($rpw,filesize("pw"));
	$pws = explode("\n",$pw_str);
	//read urls
	$rurl = fopen("url", "r") or die("Unable to open file!");
	$url_str = fread($rurl,filesize("url"));
	$urls = explode("\n",$url_str);

	fclose($rpw);
	fclose($rurl);
	
	//check pw correct
	foreach ($pws as $k => $p) {
		if(strcmp($pw,$p)){
			$url = $urls[$k];
			return;
		}
	}

	echo $url;

	header('Location: ' . $url, true, $statusCode);
	die();
?>