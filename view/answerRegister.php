<?php
ob_start();

if (isset($result)) {
    if ($result[0] == true) {
        ?>
        <div class="container">
            <div class="message success">
                <strong>User added.</strong>
                <a href="admin/">Dashboard</a>
            </div>
        </div>
        <?php
    }
    else if ($result[0] == false) {
        ?>
        <div class="container">
            <div class="message error">
                <strong>Error!</strong>
                <?php echo $result[1]; ?>
                <a href="registerForm">Form registration</a>
            </div>
        </div>
        <?php
    }
}
?>

<?php $content = ob_get_clean(); ?>

<?php include "view/layout.php"; ?>
