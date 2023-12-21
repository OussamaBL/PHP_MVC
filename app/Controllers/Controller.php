<?php

namespace MVC\Controllers;

abstract class Controller
{
    abstract function index():void;
    abstract function create():void;
    abstract function destroy():void;
    abstract function update():void;

}