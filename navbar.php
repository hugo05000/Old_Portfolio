<nav>
    <div class="logo">
        <a href="index">Hugo MARCEAU</a>
    </div>
    <ul class="nav-links">
        <?php
        $directory = './';
            if(is_dir($directory)) {
                $files = scandir($directory);
                $files = array_diff($files, array('.', '..','.gitignore','.htaccess','README.md','.DS_Store','footer.html','test.php','navbar.php','index.html'));
                foreach($files as $file) {
                    if(is_file($directory.$file)) {
                        echo '<li><a class="nav-item" data-active-color="green" data-target="About" href="' . $directory . pathinfo($file, PATHINFO_FILENAME) . '">' . str_ireplace('_', ' ', pathinfo($file, PATHINFO_FILENAME)) . '</a></li>';
                    }
                }
            }
        ?>
        <span class="nav-indicator"></span>
    </ul>
    <div class="burger">
        <div class="ligne1"></div>
        <div class="ligne2"></div>
        <div class="ligne3"></div>
    </div>
</nav>


