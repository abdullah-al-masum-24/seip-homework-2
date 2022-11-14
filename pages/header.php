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

                            <?php if ( isset($_SESSION['id']) ) { ?>

                                <li>
                                    <a href="action.php?page=add-blog" class="nav-link">Add Blog</a>
                                </li>
                                <li>
                                    <a href="action.php?page=manage-blogs" class="nav-link">Manage Blogs</a>
                                </li>
                                <li>
                                    <a href="action.php?page=logout" class="nav-link">LogOut</a>
                                </li>

                            <?php } else { ?>

                                <li>
                                    <a href="action.php?page=login" class="nav-link">Login</a>
                                </li>

                            <?php } ?>

                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-3 d-none  d-md-flex  align-items-center justify-content-end">

                   <a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a>
                   <a href="" class="ms-2 nav-link"><i class="fa-brands fa-twitter"></i></a>
                   <a href="" class="ms-2 nav-link"><i class="fa-brands fa-instagram"></i></a>
                   <a href="" class="ms-2 nav-link"><i class="fa fa-magnifying-glass"></i></a>

            </div>
        </div>
    </div>
</header>


