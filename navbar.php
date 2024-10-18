<nav>
    <div class="logo">
        <a href="index.html">Hugo MARCEAU</a>
    </div>
    <ul class="nav-links">
        <?php
        $directory = './';
            if(is_dir($directory)) {
                $files = scandir($directory);
                $files = array_diff($files, array('.', '..','README.md','.DS_Store','footer.html','head.html','test.php','navbar.php','index.html'));
                foreach($files as $file) {
                    if(is_file($directory.$file)) {
                        echo '<li><a href="'.$directory.$file.'">'.str_ireplace('_', ' ',pathinfo($file,PATHINFO_FILENAME)).'</a></li>';
                    }
                }
            }
        ?>
    </ul>
    <div class="burger">
        <div class="ligne1"></div>
        <div class="ligne2"></div>
        <div class="ligne3"></div>
    </div>
</nav>


