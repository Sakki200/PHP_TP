<?php
require_once('./inc/header.php');

require_once("./data.php");

$page = $_GET["pg"] ?? "home";
if (!file_exists("./pages/" . $page . ".php")) {
    header("Location: index.php");
    exit();
};
require_once("./pages/" . $page . ".php");

require_once('./inc/footer.php');
