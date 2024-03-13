<?php

$time = explode(' ', microtime());
$start = $time[1] + $time[0];

	$currentFile = $_SERVER["SCRIPT_NAME"];
	$parts = Explode('/', $currentFile);
	$currentFile = Explode('.', $parts[count($parts) - 1]);

	function menuClass($name) {
		global $currentFile;

		if ($currentFile[0] == $name) {
			echo "selected";
		} else {
			echo "menulink";
		}
	}

	function submenuClass($name) {
		global $currentFile;

		if ($currentFile[1] == $name) {
			echo "sm_subtitle_selected";
		} else {
			echo "sm_subtitle";
		}
	}

	function collectionimages($dirpath) {
		$files = array();
		$dh=opendir($dirpath);
		while ( false !==($file = readdir($dh)) ) {
			//dont list subdirectories or non-jpgs
			if ( !is_dir('$dirpath/$file') && strrchr($file,'.')=='.jpg' ) {
				$files[] = $file;
			}
		}
		closedir($dh);
		asort($files);
		foreach ($files as $file) {
			echo "<div class='collectionpic'><a href='$dirpath/$file' class='highslide' onclick='return hs.expand(this)'>";
			echo "<img src='$dirpath/thumbs/$file' alt='image' title='Click To Enlarge' height='50' width='50' /></a>";
			//truncate the file extension, and replace underscores with spaces
			echo "<br />".str_replace('_',' ',substr($file,0,strpos($file,'.')))."</div>\n";
		}
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>Manitoba License Plates</title>
		<link href="style.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="highslide/highslide.js"></script>

	</head>

	<body>

		<div id="scroll"></div>

		<div id="container">

			<div id="title"><img src="images/title.gif" alt="Manitoba License Plates" width="680" height="60" /></div>

			<div id="menu">
				<div class="<?php menuClass("index") ?>"><a href=".">HOME</a></div>
				<div class="<?php menuClass("collections") ?>"><a href="collections.php">COLLECTIONS</a></div>
				<div class="<?php menuClass("history") ?>"><a href="history.php">HISTORY</a></div>
				<div class="<?php menuClass("wanted") ?>"><a href="wanted.php">WANTED</a></div>
				<div class="<?php menuClass("contact") ?>"><a href="contact.php">CONTACT</a></div>
				<div class="<?php menuClass("links") ?>"><a href="links.php">LINKS</a></div>
			</div>

			<div id="content">
