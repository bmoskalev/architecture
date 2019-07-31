<?php


class Composite extends Component
{
    private $children = [];

    public function add(Component $component)
    {
        $this->children[$component->name] = $component;
        $component->fullName=$this->fullName.PHP_EOL.$component->name;
    }

    public function remove(Component $component)
    {
        unset($this->children[$component->name]);
    }

    public function display()
    {
        foreach ($this->children as $child) {
            $child->display();
        }
    }

}