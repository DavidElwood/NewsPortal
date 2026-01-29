<?php
ob_start();
?>
<<<<<<< HEAD
<h1>TOP 3 NEWS</h1>
=======
<h1>TOP 3 NEWS </h1>
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
<br>
<?php
ViewNews::NewsByCategory($arr);

$content = ob_get_clean();

include_once 'view/layout.php';
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
