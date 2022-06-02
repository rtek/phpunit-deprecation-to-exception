<?php

class BugTest extends \PHPUnit\Framework\TestCase
{
    public function testBadIterator(): void
    {
        $bad = new \Bug\BadIterator();
    }
}
