<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
        <li><a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : ''; ?>">About</a></li>
        <li><a href="services.php" class="<?= ($current_page == 'services.php' or $current_page == 'service-details.php') ? 'active' : ''; ?>">Services</a></li>
        <li><a href="projects.php" class="<?= ($current_page == 'projects.php' or $current_page == 'project-details.php') ? 'active' : ''; ?>">Projects</a></li>
        <li><a href="blog.php" class="<?= ($current_page == 'blog.php' or $current_page == 'blog-details.php') ? 'active' : ''; ?>">Blog</a></li>
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Deep Dropdown 1</a></li>
                        <li><a href="#">Deep Dropdown 2</a></li>
                        <li><a href="#">Deep Dropdown 3</a></li>
                        <li><a href="#">Deep Dropdown 4</a></li>
                        <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
            </ul>
        </li>
        <li><a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>