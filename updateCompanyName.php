<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["companyName"])) {
    $newName = htmlspecialchars(trim($_POST["companyName"]));
    echo $newName;
}
?>
