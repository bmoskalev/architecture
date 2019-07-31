<?php


abstract class Component
{
    protected $name;
    protected $fullName;

    public function __construct($name)
    {
        $this->name = $name;
        $this->fullName=$name;
    }

    abstract public function add(Component $component);
    abstract public function remove(Component $component);
    abstract public function display();

}