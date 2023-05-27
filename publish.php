<?php
if(is_dir("./blogs/" . $_POST['title'])) {
echo $_POST['title'] . "已存在!";
} else {
mkdir("./blogs/" . $_POST['title']);
$create_file = fopen("./blogs/" . $_POST['title'] . "/index.php", "w");
$content = str_replace('未知作者',$_POST["name"],'<html>
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
<span class="mdui-chip-title">未知作者(未知邮箱)</span>
<h1>无标题</h1>
无内容
</div>
</body>
</html>');
$content2 = $content = str_replace('未知邮箱',$_POST["email"],$content);
$content3 = $content2 = str_replace('无标题',$_POST["title"],$content2);
$content4 = $content3 = str_replace('无内容',$_POST["content"],$content3);
$write_text = fopen("./blogs/" . $_POST['title'] . "/index.php", "w");
fwrite($write_text, $content4);
header("location:./blogs/" . $_POST['title'] . "/index.php");
fclose($create_file);
fclose($write_text);
}