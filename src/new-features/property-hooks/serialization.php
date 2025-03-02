<?php
class Sample
{
    public string $data = 'initial value' {
        get => 'Property value: ' . $this->data;
    }
}

$instance = new Sample();

// var_dump()はフックはバイパスされ、生の値が使われる
echo "Using var_dump():\n";
var_dump($instance); // date => string(13) "initial value"
echo PHP_EOL;

// var_export()はフックを通して処理される
echo "Using var_export():\n";
var_export($instance); // date => 'Property value: initial value'
echo PHP_EOL;
