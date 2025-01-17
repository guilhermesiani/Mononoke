<?php // parts/menu.part.php - aniZero2 ?>
<nav id="top_nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="home_button" href="<?php echo $config["url"]; ?>"><?php if(empty($config["picture"])) { echo $config["name"]; } else { echo "<img src=\"".$config["url"].$config["picture"]."\" style='height:100%'>"; } ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="nav_links">
                <li class="<?php if($page=="newest") { echo "active"; } ?>" id="titles">
                    <a href="<?= $config["url"]; ?>newest"><?= glyph("time","Newest") ?> Newest</a>
                </li>
                <li class="<?php if($page=="browse") { echo "active"; } ?>" id="titles">
                    <a href="<?= $config["url"]; ?>browse"><?= glyph("th-list","Browse") ?> Browse</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= glyph("info-sign","More") ?> <span class="nav-label-1440">More</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php if($page=="schedule") { echo "active"; } ?>" id="titles">
                            <a href="<?= $config["url"]; ?>schedule"><?= glyph("calendar","Schedule") ?> Schedule</a>
                        </li>
                        <li <?php if($page=="forum") { echo "class=\"active\""; } ?>>
                            <a href="<?= $config["url"] ?>forum"><?= glyph("education","Forum") ?> Forum</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right" id="pm">
                <li class="dropdown">
                    <?php if($loggedin==false) { ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= glyph("user","Account") ?> <span class="nav-label-1440">Account</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li <?php if($page=="signin") { echo "class=\"active\""; } ?>>
                            <a href="<?= $config["url"] ?>signin"><?= glyph("log-in","Signin") ?> Signin</a>
                        </li>
                        <li <?php if($page=="signup") { echo "class=\"active\""; } ?>>
                            <a href="<?= $config["url"] ?>signup"><?= glyph("log-in","Signup") ?> Signup</a>
                        </li>
                    </ul>
                    <?php } else { ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= glyph("user","Account") ?> <span class="nav-label-1440"><?= $user["username"] ?></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= $config["url"] ?>user/<?= $user["id"] ?>"><?= glyph("user","My Profile") ?> My Profile</a>
                        </li>
                        <li>
                            <a href="<?= $config["url"] ?>watchlist/<?= $user["id"] ?>"><?= glyph("bookmark","My Watchlist") ?> My Watchlist</a>
                        </li>
                        <li>
                            <a href="<?= $config["url"] ?>follows"><?= glyph("bookmark","My Follows") ?> My Follows</a>
                        </li>
                        <li>
                            <a href="<?= $config["url"] ?>settings"><?= glyph("cog","Settings") ?> Settings</a>
                        </li>
                        <li>
                            <a href="<?= $config["url"] ?>signout" style="color:red"><?= glyph("log-out","Signout") ?>Signout</a>
                        </li>
                    </ul>
                    <?php } ?>
                </li>
            </ul>

            <form role="search" class="navbar-form navbar-right nav-label-992" action="" name="search" method="post">
                <div class="input-group">
                    <input type="text" class="form-control quick_search_input" placeholder="Search Anime..." name="query" value="">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" id="quicks_search_buton"><?= glyph("search","Search") ?></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</nav>
