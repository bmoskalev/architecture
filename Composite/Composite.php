<?php


class Composite extends Component
{
    private $children = [];

    public function add(Component $component)
    {
        $this->children[$component->name] = $component;
    }

    public function remove(Component $component)
    {
        unset($this->children[$component->name]);
    }

    public function display()
    {
        echo $this->name . PHP_EOL;
        foreach ($this->children as $child) {
            $child->display();
        }
    }

}