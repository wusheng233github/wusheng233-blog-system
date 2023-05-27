<?php
echo "<h1>模板</h1>";
$folders = opendir('./templates/');
while($f = readdir($folders)) {
echo "<div class=\"mdui-chip\" onclick=\"use()\">";
echo "<span class=\"mdui-chip-icon\"><i class=\"mdui-icon material-icons\">&#xe873;</i></span>";
echo "<span class=\"mdui-chip-title\">";
echo $f;
echo "</span>";
echo "</div>";
echo "<script>";
echo "function use() {";
echo "document.getElementById(\"input\").value=";
echo "\"";
$template = fopen("./templates/" . $f, "r") or die("Unable to open file!");
echo fread($template, filesize("./templates/" . $f));
fclose($template);
echo "\"";
echo ";";
echo "}";
echo "</script>";
}
closedir($folders);