<?php
class Point
{
    public int $x;
    public int $y;
}

class PositivePoint extends Point
{
    // それぞれのフックは親の実装を個別にオーバーライドする
    public int $x {
        set {
            if ($value < 0) {
                throw new \InvalidArgumentException(('Too small'));
            }

            // parent::$propName::set($value) で親クラスのsetを呼び出す
            parent::$x::set($value);

            // 自分自身のプロパティにおける親フック以外は呼び出せない
            // parent::$y::set($value);
        }
    }
}

$p = new PositivePoint();
$p->x = 10;
var_dump($p->x); // int(10)
echo PHP_EOL;
