<?php
ob_start();
?>
<<<<<<< HEAD
<h1>Kõik uudised </h1>
=======
<h1>ALL NEWS </h1>
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
<br>

<?php
ViewNews::AllNews($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>