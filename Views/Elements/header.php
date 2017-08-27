<!-- Header -->
<header id="header" class="fullwidth light">

<!-- Top Bar -->
<div id="top-bar">
    <div class="container">
        <div class="module left">
            <ul class="list-inline">
                <li><i class="i-before ti-email text-primary"></i>hello@example.com</li>
                <li><i class="i-before ti-mobile text-primary"></i>+48 22 212-32-21</li>
            </ul>
        </div>
        <div class="module right">
            <ul class="list-inline">
                <?php if(berkaPhp\helpers\Auth::isUserLogged()):?>
                <li class="">
                    <a class="welcome">Welcome <?=berkaPhp\helpers\Auth::getActiveUser(false,'user_name')?></a> |
                </li>
                <?php endif ?>
                <?php if(berkaPhp\helpers\Auth::getActiveUser(false,'user_ref_role') == 2):?>
                <li class="">
                    <a href="/admin/pages" target="_blank">Go To Admin area</a> |
                </li>
                <?php endif ?>
                <?php if(! berkaPhp\helpers\Auth::isUserLogged()):?>
                    <li class="">
                        <a href="/users/login">login</a>
                    </li>
                <?php else: ?>
                    <li class="">
                        <a href="/users/logout">logout</a> |
                    </li>
                <?php endif ?>
                <li><i class="i-before ti-time text-primary"></i>Mon to Sat 08:00 - 16:30</li>
            </ul>
        </div>
    </div>
</div>

<!-- Navigation Bar -->
<div id="nav-bar">

<div class="container">
<!-- Logo -->
<a class="logo-wrapper" href="/">
    <img class="logo logo-dark" src="/Views/Default/Assets/favicon_120x120.png" alt="Okno">
</a>

<nav class="module-group right">

<!-- Primary Menu -->
<div class="module menu left">
<ul id="nav-primary" class="nav nav-primary">
<li class="">
    <a href="/">Home</a>
</li>
<li class="">
    <a href="/about_us">About</a>
</li>
<li class="">
    <a href="/news">News</a>
</li>
<li class="">
    <a href="/programs">Line-up</a>
</li>
<li class="">
    <a href="#">Blog</a>
</li>
<li class="">
    <a href="/contacts">Contact</a>
</li>

</ul>
</div>


</nav>

<!-- Menu Toggle -->
<div class="menu-toggle">
    <a href="#" data-toggle="mobile-menu" class="mobile-trigger"><span><span></span></span></a>
</div>
</div>

</div>

<!-- Notification Bar -->
<div id="notification-bar"></div>

<!-- Search Bar -->
<div id="search-bar">
    <div class="container">
        <form id="search-form">
            <input class="search-bar-input" type="text" placeholder="Search...">
            <button class="search-bar-submit"><i class="ti-search"></i></button>
        </form>
        <a href="#" class="search-bar-close" data-toggle="search-bar"><i class="ti-close"></i></a>
    </div>
</div>

</header>
<!-- Header / End -->
