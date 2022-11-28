<?php

namespace App\classes;
use App\classes\Database;

class Category
{
    public $categories= [], $id, $name, $title, $description, $image, $sql, $sqlResult, $database, $imageName, $actualDir, $imgFullPath, $files, $row;

    public function __construct($post = null, $files = null)
    {
        $this->database = new Database();

        if ( isset($post['name']) ) {

            $this->name = $post['name'];
            $this->title = $post['title'];
            $this->description = $post['description'];

            $this->image = $files;
            $this->imageName = $this->image['image']['name'];
            $this->actualDir= "assets/img/storage/cat-img/";
            $this->imgFullPath = $this->actualDir.$this->imageName;
        }

    }

    public function getAllCategory() {
        $this->sql = "SELECT * FROM categories";
        $this->sqlResult = mysqli_query($this->database->dbConnect(), $this->sql);

        if ( $this->sqlResult ) {

            while ($this->row =  mysqli_fetch_assoc($this->sqlResult)) {
                array_push($this->categories, $this->row);
            }
            return $this->categories;

        }else {
            return "false";
        }
    }

    public function getCategoryById($id) {
        //
    }

    public function createCategory() {
        $this->sql = "INSERT INTO categories (name, title, description, image) VALUES ('$this->name', '$this->title', '$this->description', '$this->imgFullPath')";
        mysqli_query($this->database->dbConnect(), $this->sql);

        $this->moveFile();
        header("location:action.php?page=manage-category");
    }

    public function editCategory($id) {
        //
    }

    public function deleteCategory($id) {
        //
    }

    public function moveFile() {
        move_uploaded_file($this->files['image']['tmp_name'], $this->imgFullPath);
    }
}