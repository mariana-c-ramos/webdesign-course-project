<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<nav class="menu" style="z-index: 9;">
    <ul class="menu__list">
    <li class="menu__item">
            <a href="index.php">
                <i class="fa-regular fa-house fa-xl" style="color: #ffcc17;"></i>
            </a>
        </li>
        <li class="menu__item">
            <a href="index.php?area=about-miana">
                <i class="fa-regular fa-person-dress fa-xl" style="color: #ffcc17;"></i>
            </a>
        </li>
        <li class="menu__item">
            <a href="index.php?area=projects">
                <i class="fa-regular fa-diagram-project fa-xl" style="color: #ffcc17;"></i>
            </a>
        </li>
        <li class="menu__item">
            <a href="index.php?area=career">
                <i class="fa-regular fa-briefcase fa-xl" style="color: #ffcc17;"></i>   
            </a>
        </li>
        <li class="menu__item">
            <a href="index.php?area=blog">
                <i class="fa-regular fa-newspaper fa-xl" style="color: #ffcc17;"></i>
            </a>
        </li>
        <li class="menu__item">
            <a href="index.php?area=contacts">
                <i class="fa-regular fa-walkie-talkie fa-xl" style="color: #ffcc17;"></i>
            </a>
        </li>
        <li class="menu__item">
            <a href="index.php?area=login">
                <i class="fa-regular fa-circle-user fa-xl" style="color: #ffcc17;"></i>
            </a>
        </li>
    </ul>
</nav>