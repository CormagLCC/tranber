<?php

$siteUrl      = $siteUrl ?? '';
$commonCssUrl = $siteUrl.'styles/common.css?'.filemtime('styles/common.css');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?= $commonCssUrl ?>">
</head>
<body>