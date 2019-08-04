<?php

class EditCommand extends Command
{
    public $method;
    public $begin;
    public $end;
    public $editor;

    public function __construct($editor, $method, $begin, $end)
    {
        $this->editor = $editor;
        $this->method = $method;
        $this->begin = $begin;
        $this->end = $end;
    }

    public function execute()
    {
        $this->editor->operation($this->method, $this->begin, $this->end);
    }

    public function unExecute()
    {
        $this->editor->operation($this->down($this->method), $this->begin, $this->end);
    }

    protected function down($method)
    {
        $downMethod = null;
        switch ($method) {
            case 'cut':
                $downMethod = 'insert';
                break;
            case 'insert':
                $downMethod = 'cut';
                break;
        }
        return $downMethod;
    }
}