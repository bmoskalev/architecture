<?php


class Leaf extends Component
{
    public function add(Component $component)
    {
    }

    public function remove(Component $component)
    {
    }

    public function display()
    {
        echo $this->fullName.PHP_EOL.PHP_EOL;
    }

}