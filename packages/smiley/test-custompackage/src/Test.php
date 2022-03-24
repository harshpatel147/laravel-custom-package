<?php
namespace Smiley\TestCustompackage;

class Test
{
    public function greet(string $isName)
    {
        return 'Hi ' . $isName . '! How are you doing today?';
    }
}