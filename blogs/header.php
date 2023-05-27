<div class="mdui-color-indigo mdui-toolbar">
<a class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#drawer'}">
<i class="mdui-icon material-icons">menu</i>
</a>
<p class="mdui-typo-title">
<?php
$title = fopen("../../config/title.txt", "r") or die("wusheng233-blog-system---title-missing!");
echo fread($title,filesize("../../config/title.txt"));
fclose($title);
?>
</p>
</div>