<?php


namespace Target\Controllers;


use AdServer\Engine\Components\Engine;

class MyController
{
    public function index() {
       return Engine::getContainer()->get('targetService')->getTarget();
    }
}