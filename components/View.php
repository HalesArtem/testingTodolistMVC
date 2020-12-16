<?php

class View
{
    public function render($template, $params = [], $layout = 'main')
    {
        extract($params);
        include '../views/layouts/' . $layout . '.php';
    }
}