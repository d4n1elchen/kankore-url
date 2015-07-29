<?php
	$pw = $_POST["pw"];
	$update = $_POST["update"];

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
	$msg = -1;
	foreach ($pws as $k => $p) {
		if(strcmp($pw,$p)){
			$msg = 1;
			$urls[$k]=$update;
		}
	}
	//write new url to url file
	$wurl = fopen("url", "w") or die("Unable to open file!");
	fwrite($wurl, implode("\n",$urls));
	fclose($wurl);
	echo $msg;
	return;
?>