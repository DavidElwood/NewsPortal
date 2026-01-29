<?php
class Category{

    public static function getAllCategory() {
<<<<<<< HEAD
        $query = "SELECT * FROM category";
=======
        $query = "SELECT * FROM category" ;
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
<<<<<<< HEAD
}
=======

}       
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
