<?php

namespace App\classes;
use App\classes\Database;

class Blog
{
    private $title, $author, $description, $imageName, $sql, $dbConntect, $files = [], $actualDirectory, $blogDataQuery, $row, $blogData = [];

    public function __construct($post = [], $file = []) {

        if($post != NULL) {

            $this->title       = $post['title'];
            $this->author      = $post['author'];
            $this->description = $post['description'];
            $this->imageName   = $file['image']['name'];
            $this->files       = $file;
        }

    }

    public function saveBlog() {

        $this->dbConntect = new Database();
        $this->sql = "INSERT INTO blogs (title, author, description, image) VALUES ('$this->title', '$this->author', '$this->description', '$this->imageName')";
        mysqli_query($this->dbConntect->dbConnect(), $this->sql);

        return 'All Data has been saved successfully !!';
    }

    public function moveFile() {

        $this->actualDirectory = "assets/img/storage/img/";
        $this->files['image']['tmp_name'];
        $this->files['image']['name'];

        move_uploaded_file($this->files['image']['tmp_name'], $this->actualDirectory.$this->files['image']['name']);
        return "file uploaded successfully !!";
    }

    public function getBlogs() {
        $this->sql = "SELECT * FROM blogs";
        $this->dbConntect = new Database();
        $this->blogDataQuery = mysqli_query($this->dbConntect->dbConnect(), $this->sql);
        if ($this->blogDataQuery) {

           $this->row =  mysqli_fetch_assoc($this->blogDataQuery);
           while ($this->row) {
               array_push($this->blogData, $this->row);
           }
           return $this->blogData;
        }else {
            return "false";
        }
    }
}