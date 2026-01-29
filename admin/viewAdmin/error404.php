<?php ob_start() ?>
<<<<<<< HEAD
<h2>404 error </h2>
<article>

    <h3>404 Error - What is this?</h3>
<p> URL page not found</p>

</article>
<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php" ;
=======
<h2>404 Error - Page Not Found</h2>
<article>

    <h3>404 Error - Page Not Found</h3>
    <p>Sorry, the page you are looking for does not exist.</p>

</article>
<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>
>>>>>>> 0824e92c4a971d01030cb4c55b382320e22a553e
