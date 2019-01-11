<?php

namespace Shop\Services;

interface ControllerInterface
{
    public function execute($request, $response);
}