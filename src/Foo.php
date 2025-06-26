<?php

class Foo {
    public function bar(PhpParser\Node $node): void
    {
        $x = $node->getAttribute('abc');

        echo 'hello world';
    }
}
