<?php

require_once dirname(__DIR__) . "/Controller/HomeController.php";
require_once dirname(__DIR__) . "/Controller/ContactController.php";
require_once dirname(__DIR__) . "/Controller/ArticleController.php";
require_once dirname(__DIR__) . "/Controller/UserController.php";

const ROUTING = [

    "home" => [

        "controller" => "HomeController",
        "action" => "index"

    ],

    "contact" => [
        "controller" => "ContactController",
        "action" => "index"
    ],

    "article" => [
        "controller" => "ArticleController",
        "action" => "index"
    ],

    "article_show" => [
        "controller" => "ArticleController",
        "action" => "show"
    ],

    "article_add" => [
        "controller" => "ArticleController",
        "action" => "add"
    ],

    "article_deleted" => [
        "controller" => "ArticleController",
        "action" => "deleted"
    ],

    "article_update" => [
        "controller" => "ArticleController",
        "action" => "update"
    ],

    "user_add" => [
        "controller" => "UserController",
        "action" => "add"
    ],

    "user_connexion" => [
        "controller" => "UserController",
        "action" => "connexion"
    ],

    "user_disconnect" => [
        "controller" => "UserController",
        "action" => "disconnect"
    ]

];

function getRouteFromUrl():void {

    $path = ROUTING["home"];

    if (isset($_GET["page"]) && isset(ROUTING[$_GET["page"]])) {
        
        $path = ROUTING[$_GET["page"]];
        
    }

    $controller = new $path["controller"];
    $controller->{$path["action"]}();

}