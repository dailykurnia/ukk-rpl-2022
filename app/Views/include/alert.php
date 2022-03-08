<?php
if (isset($_SESSION["failed"])) {
    echo '<div class="alert alert-danger" role="alert">
        ' . $_SESSION["failed"] . '
    </div>';
}
if (isset($_SESSION["success"])) {
    echo '<div class="alert alert-success" role="alert">
        ' . $_SESSION["success"] . '
    </div>';
}
?>