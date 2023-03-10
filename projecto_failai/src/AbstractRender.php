<?php

namespace Rec;

abstract class AbstractRender
{
    protected $output;

    public function __construct(Output $output)
    {
        $this->output = $output;
    }

    abstract protected function setContent(mixed $content);
}