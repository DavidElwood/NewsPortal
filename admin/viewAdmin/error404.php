<?php ob_start() ?>
<h2>404 error </h2>
<article>

    <h3>404 Error - What is this?</h3>
<p> URL page not found</p>

</article>
<?php $content = ob_get_clean(); ?>

<?php include "viewAdmin/templates/layout.php" ;