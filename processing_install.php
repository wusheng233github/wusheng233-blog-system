<?php
$file=fopen("./config/title.txt","w") or exit("抱歉!安装出错!");
if(fwrite($file, $_POST['title'])) {
$install_lock=fopen("./config/install_lock","w") or exit("抱歉!安装出错!");
if(fwrite($install_lock, "install_lock")) {
unlink("./install.html");
unlink("./processing_install.php");
header("location:./index.php");
} else {
echo "抱歉!安装出错!";
}
fclose($install_lock);
} else {
echo "抱歉!安装出错!";
}
fclose($file);