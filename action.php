<?php

require_once "vendor/autoload.php";
use App\classes\Blog;
use App\classes\Auth;
use App\classes\Category;

$saveResult = 'Add A New Blog';
$getAllBlog = '';
$getSingleBlog = '';
$getBlogDetail = '';
$getAllCategory = '';


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
    elseif ($_GET['page'] == 'add-category') {

        include "./pages/add-category.php";
    }
    elseif ($_GET['page'] == 'manage-category') {

        $category = new Category();
        $getAllCategory = $category->getAllCategory();

        include "./pages/manage-category.php";
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
elseif (isset($_POST['cat_btn'])) {

    $category = new Category($_POST, $_FILES);
    $category->createCategory();

    include "./pages/add-category.php";
}