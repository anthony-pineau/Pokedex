<?php

class CoreController {

    private $router;

    /**
     * Constructeur
     * 
     * @param $router AltoRouter
     */
    public function __construct($router)
    {
        $this->router = $router;
    }

    protected function show($viewName, $viewVars = []) {


        $viewVars['currentPage'] = $viewName; 

        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . '/img/';

        $viewVars['baseUri'] = $_SERVER['BASE_URI'];

        require_once __DIR__.'/../views/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}
