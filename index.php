<!-- This page is used to insert all the content. It has an if statement that, depending on the button clicked, it changes the page content -->
<!-- On the head tag I added a couple of meta tags used to increase the SEO optimization -->

<?php
  include('config.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="mary programms' portfolio, full of amazing and creative projects!">
    <meta name="keywords" content="mary programms,portfolio, frontend development, html, css, javascript, php, react">
    <meta name="author" content="Mary Programmss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/icons/favicon.png">
    <title>mary programms</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Oxanium:wght@200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/icons/css/fontawesome.css">
    <link rel="stylesheet" href="assets/icons/css/brands.css">
    <link rel="stylesheet" href="assets/icons/css/solid.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
</head>
<body>
    <?php include('./config.php') ?>
    <?php include('./pages/mainLayout.php') ?>
    <?php
        if(isset($_GET['area'])){ //This will get the URL part corresponding to the current page
            $area_escolhida = $_GET['area'];
            if($area_escolhida == 'about-miana'){
                include('./pages/about.php');
            } else if($area_escolhida == 'projects'){
                include('./pages/projects.php');
            } else if($area_escolhida == 'career'){
                include('./pages/career.php');
            } else if($area_escolhida == 'blog'){
                include('./pages/blog.php');
            } else if($area_escolhida == 'contacts'){
                include('./pages/contacts.php');
            } else if($area_escolhida == 'login'){
                include('./pages/login.php');
            } else if($area_escolhida == 'register'){
                include('./pages/register.php');
            } else if($area_escolhida == 'admin-area'){
                include('./admin/adminArea.php');
            } else if($area_escolhida == 'admin-pages'){
                include('./admin/pages/adminPages.php');
            }else if($area_escolhida == 'admin-projects'){
                include('./admin/pages/adminProjects.php');
            }else if($area_escolhida == 'admin-blog'){
                include('./admin/pages/adminBlog.php');
            }else{
                include('./pages/erro.php');
            }
        } else {
            include('./pages/home.php');
        }
    ?>

    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>