<?php

class modelAdminNews {

    // -------------------- list
    public static function getNewsList() {
        $query = "SELECT news.*, category.name, users.username 
                  FROM news, category, users 
                  WHERE news.category_id = category.id 
                  AND news.user_id = users.id 
                  ORDER BY news.id DESC";

        $db = new Database();
        return $db->getAll($query);
    }

    // -------------------- add
    public static function getNewsAdd() {
        $test = false;

        if (isset($_POST['save'])) {
            if (isset($_POST['title'], $_POST['text'], $_POST['idCategory'])) {

                $title      = $_POST['title'];
                $text       = $_POST['text'];
                $idCategory = $_POST['idCategory'];

                $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));

                $sql = "INSERT INTO news (title, text, picture, category_id, user_id)
                        VALUES ('$title', '$text', '$image', '$idCategory', '1')";

                $db = new Database();
                if ($db->executeRun($sql)) {
                    $test = true;
                }
            }
        }

        return $test;
    }

    // -------------------- detail
    public static function getNewsDetail($id) {
        $query = "SELECT news.*, category.name, users.username
                  FROM news, category, users
                  WHERE news.category_id = category.id
                  AND news.user_id = users.id
                  AND news.id = $id";

        $db = new Database();
        return $db->getOne($query);
    }

    // -------------------- edit
    public static function getNewsEdit($id) {
        $test = false;
        $image = "";

        if (isset($_POST['save']) && isset($_POST['title'], $_POST['text'], $_POST['idCategory'])) {

            $title      = $_POST['title'];
            $text       = $_POST['text'];
            $idCategory = $_POST['idCategory'];

            if (!empty($_FILES['picture']['name'])) {
                $image = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
            }

            if ($image == "") {
                $sql = "UPDATE news 
                        SET title='$title', text='$text', category_id='$idCategory' 
                        WHERE id=$id";
            } else {
                $sql = "UPDATE news 
                        SET title='$title', text='$text', picture='$image', category_id='$idCategory' 
                        WHERE id=$id";
            }

            $db = new Database();
            if ($db->executeRun($sql)) {
                $test = true;
            }
        }

        return $test;
    }

    // -------------------- delete
    public static function getNewsDelete($id) {
        $test = false;

        if (isset($_POST['save'])) {
            $sql = "DELETE FROM news WHERE id=$id";
            $db = new Database();
            if ($db->executeRun($sql)) {
                $test = true;
            }
        }

        return $test;
    }
}
