<?php

namespace Flits\Netcore\API;
use Flits\Netcore\NetcoreProvider;

class Upload extends NetcoreProvider {

    public $METHOD = "POST";

    function __construct($config) {
        parent::__construct($config);
    }

}