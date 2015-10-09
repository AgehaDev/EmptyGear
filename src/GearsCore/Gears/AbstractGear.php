<?php

namespace GearsCore\Gears;

abstract class AbstractGear
{
    protected $serviceManager;
    protected $request;

    function __construct(\GearsCore\ServiceManager\ServiceManager $serviceManager, $request)
    {
        $this->serviceManager = $serviceManager;
        $this->request = $request;
    }

    abstract function handle();
}