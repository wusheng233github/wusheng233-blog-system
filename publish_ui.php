<html>
<head>
<title>
<?php
$title = fopen("./config/title.txt", "r") or die("wusheng233-blog-system---title-missing!");
echo fread($title,filesize("./config/title.txt"));
fclose($title);
?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=5.0">
<link rel="stylesheet" href="./css/mdui.css"></link>
<script src="./js/mdui.js"></script>
<meta charset="utf-8">
</head>
<body class="mdui-drawer-body-left">
<?php
include "./header.php";
include "./drawer.html";
include "./publish.html";
include "./template.php";
?>
</body>
</html>