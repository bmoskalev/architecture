<?php


class Editor
{
    private $text;
    private $buffer;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function operation($method, $begin, $end)
    {
        switch ($method) {
            case 'copy':
                $this->buffer = substr($this->text, $begin, $end - $begin + 1);
                break;
            case 'cut':
                $this->buffer = substr($this->text, $begin, $end - $begin + 1);
                $this->text = substr_replace($this->text, '', $begin, $end - $begin + 1);
                break;
            case 'insert':
                $this->text = substr_replace($this->text, $this->buffer, $begin, 0);
        }
        echo $this->text . PHP_EOL;
    }

}