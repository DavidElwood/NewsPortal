<?php

class Controller {
<<<<<<< HEAD

=======
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
    public static function StartSite() {
        $arr = News::getLast10News();
        include_once 'view/start.php';
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllNews() {
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }

<<<<<<< HEAD
=======
    public static function NewsByCatID($id) {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
    public static function NewsByID($id) {
        $n = News::getNewsByID($id);
        include_once 'view/readnews.php';
    }

<<<<<<< HEAD
    public static function NewsByCatID($id) {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }
    
=======
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
    public static function error404() {
        include_once 'view/error404.php';
    }

<<<<<<< HEAD
    public static function InsertComment($c,$id) {
    Comments::InsertComment($c,$id);
    header('Location:news?id='.$id.'#ctable');
    }

    public static function Comments($newsid) {
=======
    public static function InsertComment($c, $id) {
        Comments::InsertComment($c, $id);
        //self::NewsByID($id);
        header('Location:news?id='.$id.'#ctable');
    }
        public static function Comments($newsid) {
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::CommentsByNews($arr);
    }

    public static function CommentsCount($newsid) {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::CommentsCount($arr);
    }

    public static function CommentsCountWithAncor($newsid) {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::CommentsCountWithAncor($arr);
<<<<<<< HEAD
=======
}

    // reg
    public static function registerForm()
    {
        include_once('view/formRegister.php');
    }

    public static function registerUser()
    {
        $result = Register::registerUser();
        include_once('view/answerRegister.php');
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
    }
}