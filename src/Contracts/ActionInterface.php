<?php

namespace Operador\Contracts;

interface ActionInterface
{
    public function prepare();
    public function execute();
    public function done();
    public function run();
}