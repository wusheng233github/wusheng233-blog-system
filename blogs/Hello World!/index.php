<html>
<head>
<title>
<?php
$title = fopen("../../config/title.txt", "r") or die("wusheng233-blog-system---title-missing!");
echo fread($title,filesize("../../config/title.txt"));
fclose($title);
?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=5.0">
<link rel="stylesheet" href="../../css/mdui.css"></link>
<script src="../../js/mdui.js"></script>
<meta charset="utf-8">
</head>
<body class="mdui-drawer-body-left">
<?php
include "../header.php";
include "../drawer.html";
?>
<div class="mdui-chip">
<span class="mdui-chip-icon"><i class="mdui-icon material-icons">&#xe7fc;</i></span>
<span class="mdui-chip-title">System(wusheng233@qq.com)</span>
<h1>Hello World!</h1>
<p>这是一篇系统自动生成的文章,如果你不需要,请在blogs目录里删除我,config文件夹中的title是此博客的名称,你可以修改它</p>
</div>
</body>
</html>