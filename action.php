<?php

require_once "vendor/autoload.php";
use App\classes\Blog;
use App\classes\Auth;

$saveResult = 'Add A New Blog';
$getAllBlog = '';
$getSingleBlog = '';
$getBlogDetail = '';


if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {

        $blog = new Blog();
        $getAllBlog = $blog->getBlogs();

        include './pages/home.php';
    }
    elseif ($_GET['page'] == 'add-blog') {


        include './pages/add-blog.php';

    }
    elseif ($_GET['page'] == 'manage-blogs') {

        $blog = new Blog();
        $getAllBlog = $blog->getBlogs();

        include './pages/manage-blogs.php';

    }
    elseif ($_GET['page'] == 'edit') {

        $blog = new Blog();
        $getSingleBlog = $blog->getBlogById($_GET['id']);

        include './pages/edit.php';

    }
    elseif ($_GET['page'] == 'delete') {

        $blog = new Blog();
        $blog->deleteBlog($_GET['id']);
    }
    elseif ($_GET['page'] == 'detail') {

        $blog = new Blog();
        $getBlogDetail = $blog->blogDetail($_GET['id']);

        include "./pages/detail.php";
    }
    elseif ($_GET['page'] == 'login') {

        include "./pages/login.php";
    }
    elseif ($_GET['page'] == 'logout') {

        $logout = new Auth();
        $logout->logout();
    }

}
elseif (isset($_POST['blog_btn'])) {

    $blog = new Blog($_POST, $_FILES);
    $blog->saveBlog();

}
elseif (isset($_POST['edit_btn'])) {

    $blog = new Blog($_POST, $_FILES);
    $blog->editBlog();
}
elseif (isset($_POST['login_btn'])) {

    $login = new Auth($_POST);
    $saveResult = $login->login();

    include "./pages/home.php";
}