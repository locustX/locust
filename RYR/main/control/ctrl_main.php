<?php
	require_once 'routes.php';
    require_once SMARTY_ENGINE;
    $mvc = new EngineMVC();

    $mvc->assign("RYR_SERVER", RYR_SERVER);
        
    $mvc->setModule("main");
    
    $page = $mvc->display("index.html");
