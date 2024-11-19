<?php

namespace App\Core;

class View
{
    private string $view;
    private string $template;
    private array $data = [];

    public function __construct(string $view, string $template="front.php")
    {
        $this->view = "../Views/".$view;
        $this->template = "../Views/".$template;
    }

    public function __toString()
    {
        return "Nous sommes sur le template ".$this->template." dans lequel sera inclus la vue ".$this->view;
    }

    public function addData(string $key, $value):void
    {
        $this->data[$key]=$value;
    }

    public function __destruct()
    {
        extract($this->data);
        include $this->template;
    }

}