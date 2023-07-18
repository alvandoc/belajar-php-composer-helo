<?php

namespace Fancode;

class Customer {
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest"){
        return "Hello $name, my name is $this->name";
    }
}