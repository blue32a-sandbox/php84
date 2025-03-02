<?php
class Example
{
    private bool $modified = false;

    public string $foo = 'default value' {
        get => $this->foo . ' (lowercased)';
        set => strtolower($value);
    }
}

$example = new Example();
$example->foo = 'Foo Bar';
echo $example->foo; // foo bar (lowercased)
echo PHP_EOL;
