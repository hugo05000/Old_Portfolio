<?php
$directory = './';
if(is_dir($directory)) {
    $files = scandir($directory);
    $files = array_diff($files, array('.', '..','README.md','.DS_Store','footer.html','head.html','test.php','navbar.php'));
    foreach($files as $file) {
        if(is_file($directory.$file)) {

            echo pathinfo($file,PATHINFO_FILENAME);
        }
    }
}
?>
