<?php

class Genere {

    private string $horror;
    private string $fantasy;
    private string $action;

    public function __construct(string $horror, string $fantasy, string $action) {

        $this->horror       = $horror;
        $this->fantasy      = $fantasy;
        $this->action =  $action;
    }

    // se non specificato, il metodo è public di default
    function getGenhor() {

        return $this->horror;
    }



    function getGenfan() {

        return $this->horror;
    }

    public function fullGen() {

        return $this->horror . ', ' . $this->fantasy . ', ' . $this->action;
    }
}