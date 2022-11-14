<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/all.css">
    <link rel="stylesheet" href="./assets/css/aos.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./assets/css/seip-homework-2.css">
</head>
<body>

<?php if ( !isset($_SESSION['id']) ) { ?>

    <div id="mySidenav" class="sidenav">
        <a href="action.php?page=login" class="btn btn-outline-success text-black rounded-0" id="about">Add New Blog <i class="fa fa-plus-square ms-3"></i></a>
    </div>

<?php } ?>

<header class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <nav class="navbar navbar-expand-md">
                    <a href="" class="navbar-brand">MyBlog</a>

                    <div class="d-md-none ms-auto  d-flex  align-items-center justify-content-center">

                        <a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
                        <a href="" class="ms-2 nav-link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="" class="ms-2 nav-link"><i class="fa-brands fa-instagram"></i></a>
                        <a href="" class="ms-2 nav-link"><i class="fa fa-magnifying-glass"></i></a>

                    </div>

                    <button type="button" class="navbar-toggler ms-3"  data-bs-toggle="collapse" data-bs-target="#myBlogMenu" >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="myBlogMenu">
                        <ul class="navbar-nav ms-auto">

                            <li>
                                <a href="action.php?page=home" class="nav-link">Blog</a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-target="#categoryDropdown" data-bs-toggle="dropdown">Categories</a>
                                <ul class="dropdown-menu" id="categoryDropdown">
                                    <li><a href="action.php?page=categories" class="dropdown-item">1</a></li>
                                    <li><a href="action.php?page=categories" class="dropdown-item">1</a></li>
                                    <li><a href="action.php?page=categories" class="dropdown-item">1</a></li>
                                    <li><a href="action.php?page=categories" class="dropdown-item">1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-3 d-none  d-md-flex  align-items-center justify-content-end" style="height: 65px;">

                   <a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
                   <a href="" class="ms-2 nav-link"><i class="fa-brands fa-twitter"></i></a>
                   <a href="" class="ms-2 nav-link"><i class="fa-brands fa-instagram"></i></a>
                   <a href="" class="ms-2 nav-link"><i class="fa fa-magnifying-glass"></i></a>

                   <?php if ( isset($_SESSION['id']) ) { ?>

                        <nav class="navbar navbar-expand h-100">
                            <ul class="navbar-nav h-100" >
                                <li class="dropdown h-100">
                                    <a href="" class="nav-link  h-100 w-100" data-bs-target="#blogSettings" data-bs-toggle="dropdown"><img src="./assets/img/blog/person-1.jpg" alt="" class="img-thumbnail rounded-circle h-100 "></a>
                                    <ul class="dropdown-menu" id="blogSettings" style="left: -33px;">
                                        <li>
                                            <a href="action.php?page=add-blog" class="dropdown-item">Add Blog</a>
                                        </li>
                                        <li>
                                            <a href="action.php?page=manage-blogs" class="dropdown-item">Manage Blogs</a>
                                        </li>
                                        <li>
                                            <a href="action.php?page=logout" class="dropdown-item">LogOut</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                   <?php } ?>
            </div>
        </div>
    </div>
</header>


