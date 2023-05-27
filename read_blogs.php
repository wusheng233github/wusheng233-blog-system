<?php
$folders = opendir('./blogs/');
while($f = readdir($folders)) {
if(is_dir("./blogs/" . $f)) {
echo "<div class=\"mdui-card\">";
echo "<div class=\"mdui-card-primary\">";
echo "<div class=\"mdui-card-primary-title\">";
echo "<a href=\"";
echo "./blogs/" . $f . "/";
echo "\">";
echo $f;
echo "</a>";
echo "</div>";
echo "</div>";
echo "</div>";
}
}
closedir($folders);