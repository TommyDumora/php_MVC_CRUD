<?php

require_once dirname(__DIR__, 2) . "/lib/Controller/AbstractController.php";

class ContactController extends AbstractController {

    public function index():string {

        return $this->renderView("/template/contact/contact_base.php");
        
    }
}