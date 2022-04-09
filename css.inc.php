<?php 
if (isset($_SESSION["theme"])){
    $theme = $_SESSION["theme"];
} else {
    $theme = "light";
}
?>
<link rel="stylesheet" href="<?= $theme ?>.css"