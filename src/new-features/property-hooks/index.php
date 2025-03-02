<?php
class Example
{
    private bool $modified = false;

    public string $foo = 'default value' {
        get {
            if ($this->modified) {
                return $this->foo . ' (modified)';
            }
            return $this->foo;
        }
        set(string $value) {
            $this->foo = strtolower($value);
            $this->modified = true;
        }
    }
}

$example = new Example();
echo $example->foo; // default value
echo PHP_EOL;

$example->foo = 'Changed';

echo $example->foo; // changed (modified)
echo PHP_EOL;
