<?php

namespace App\classes;
use App\classes\Database;

class Blog
{
    private $title, $author, $description, $imageName, $sql, $dbConntect, $files = [], $actualDirectory, $blogDataQuery, $row, $blogData = [], $image, $id;

    public function __construct($post = [], $file = []) {

        if($post != NULL) {

            $this->title       = $post['title'];
            $this->description = $post['description'];

            session_start();
            $this->author      = $_SESSION['name'];


            if (isset($post['id'])) {
                $this->id = $post['id'];
            }

            $this->files       = $file;
            $this->imageName   = $file['image']['name'];
            $this->actualDirectory = "assets/img/storage/img/";
        }

    }

    public function saveBlog() {

        $this->image = $this->actualDirectory.$this->imageName;
        $this->dbConntect = new Database();
        $this->sql = "INSERT INTO blogs (title, author, description, image) VALUES ('$this->title', '$this->author', '$this->description', '$this->image')";
        mysqli_query($this->dbConntect->dbConnect(), $this->sql);
        $this->moveFile();
        header('location:action.php?page=add-blog');
    }

    private function moveFile() {

        $this->files['image']['tmp_name'];
        $this->files['image']['name'];

        move_uploaded_file($this->files['image']['tmp_name'], $this->actualDirectory.$this->files['image']['name']);
    }

    public function getBlogs() {
        $this->sql = "SELECT * FROM blogs";
        $this->dbConntect = new Database();
        $this->blogDataQuery = mysqli_query($this->dbConntect->dbConnect(), $this->sql);

        if ( $this->blogDataQuery ) {

           while ($this->row =  mysqli_fetch_assoc($this->blogDataQuery)) {
               array_push($this->blogData, $this->row);
           }
           return $this->blogData;

        }else {
            return "false";
        }
    }

    public function getBlogById($get) {

        $this->sql = "SELECT * FROM blogs WHERE id = '$get'";
        $this->dbConntect = new Database();
        $this->blogDataQuery = mysqli_query( $this->dbConntect->dbConnect(), $this->sql );
        return $this->row = mysqli_fetch_assoc($this->blogDataQuery);
    }

    public function editBlog() {
        if ($this->imageName) {
            $this->image = $this->actualDirectory.$this->imageName;
            $this->moveFile();
        }
        else {
            $this->sql = "SELECT * FROM blogs WHERE id = '$this->id'";
            $this->blogDataQuery = mysqli_query( $this->dbConntect->dbConnect(), $this->sql );
            $this->row = mysqli_fetch_assoc($this->blogDataQuery);
            $this->image = $this->row['image'];
        }
        $this->sql = "UPDATE blogs SET title = '$this->title', author = '$this->author', description = '$this->description', image = '$this->image' WHERE id = '$this->id'";
        $this->dbConntect = new Database();
        $this->blogDataQuery = mysqli_query( $this->dbConntect->dbConnect(), $this->sql );
        header('location:action.php?page=manage-blogs');
    }

    public function deleteBlog($get) {
        $this->sql = "DELETE FROM blogs WHERE id = '$get'";
        $this->dbConntect = new Database();
        $this->blogDataQuery = mysqli_query( $this->dbConntect->dbConnect(), $this->sql );
        header('location:action.php?page=manage-blogs');
    }

    public function blogDetail($id) {
        $this->sql = "SELECT * FROM blogs WHERE id = '$id'";
        $this->dbConntect = new Database();
        $this->blogDataQuery = mysqli_query( $this->dbConntect->dbConnect(), $this->sql );
        return $this->row = mysqli_fetch_assoc($this->blogDataQuery);
    }
}