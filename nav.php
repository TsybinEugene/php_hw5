<section class="nav content">

    <div class="logo">
        <div class="img"><a href="/"></a></div>
        <h2>Threehouse</h2>
    </div>

    <div class="nav__menu">
        <?php
            $menu = [
                "Home" => "/index.php",
                "About" => "/?id=about",
                "Blog" => "/?id=blog",
                "Portfolio" => "/?id=portfolio",
                "Contact" => "/?id=contact"
            ];
            foreach ($menu as $key => $value) {
                echo ("<a href=" . $value . ">" . $key . "</a><br />");
            }
        ?>
    </div>

</section>