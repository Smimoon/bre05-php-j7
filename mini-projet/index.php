<?php
    session_start();
    require "connexion.php";
    function routing(): ?string {
        if(isset($_GET['route'])) {
            $route = $_GET['route'];
        }
        else {
            $route = NULL;
        }
        return $route;
    }
    $route = routing();
    require "layout.phtml";

?>