<?php
ob_start();
?>

<br>
<<<<<<< HEAD

=======
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
<?php
ViewNews::ReadNews($n);

echo "<br>";
Controller::Comments($_GET['id']);

echo "<br>";
ViewComments::CommentsForm();

$content = ob_get_clean();
include_once 'view/layout.php';
<<<<<<< HEAD

=======
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
?>