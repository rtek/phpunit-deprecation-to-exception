<?php

namespace Bug;

class BadIterator extends \IteratorIterator
{
    public function current()
    {
        return null;
    }
}
