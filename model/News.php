<?php
class News{

    public static function getLast10News() {
<<<<<<< HEAD
        $query = "SELECT * FROM news ORDER BY id DESC LIMIT 3" ;
=======
        $query = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllNews() {
        $query = "SELECT * FROM news ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getNewsByCategoryID($id) {
<<<<<<< HEAD
        $query = "SELECT * FROM news where category_id=".(string)$id." ORDER BY id DESC";
=======
        $query = "SELECT * FROM news WHERE category_id = ".(string)$id." ORDER BY id DESC";
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getNewsByID($id) {
<<<<<<< HEAD
        $query = "SELECT * FROM news where id=".(string)$id;
=======
        $query = "SELECT * FROM news WHERE id = ".(string)$id;
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
        $db = new Database();
        $n = $db->getOne($query);
        return $n;
    }
<<<<<<< HEAD
}
=======
}
?>
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
