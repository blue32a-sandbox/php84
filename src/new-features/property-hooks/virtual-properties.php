<?php
class Rectangle
{
    public int $area {
        get => $this->h * $this->w;
    }

    public function __construct(public int $h, public int $w) {}
}

$s = new Rectangle(4, 5);
echo $s->area; // 20
echo PHP_EOL;

// $s->area = 30; // set が定義されていないためエラー
