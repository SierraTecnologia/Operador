<?php

namespace Operador\Contracts;

interface Component
{
    public function prepare();
    public function execute();
    public function done();
    public function run();
}