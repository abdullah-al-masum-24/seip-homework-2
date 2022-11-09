<?php

require_once "vendor/autoload.php";
use App\classes\Blog;

$saveResult = 'Add A New Blog';
$result = '';


if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        $blog = new Blog();
        $result = $blog->getBlogs();

        include './pages/home.php';
    }elseif ($_GET['page'] == 'add-blog') {
        include './pages/add-blog.php';
    }elseif ($_GET['page'] == 'manage-blogs') {
        include './pages/manage-blogs.php';
    }
}elseif (isset($_POST['blog-btn'])) {

    $blog = new Blog($_POST, $_FILES);
    $saveResult = $blog->saveBlog();
    $blog->moveFile();

    include "./pages/add-blog.php";
}