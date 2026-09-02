<?php include_once('../authen.php') ?>
<?php
    $_SESSION['flash'] = array('icon' => 'success', 'title' => 'Finished Deleting!', 'showConfirmButton' => false, 'timer' => 1500);
    header('Location: index.php');
    exit;
?>