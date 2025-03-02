<?php
class Point
{
    public int $x = 0;
    public int $y = 0;
}

class PositivePoint extends Point
{
    // それぞれのフックは親の実装を個別にオーバーライドする
    public int $x {
        set {
            if ($value < 0) {
                throw new \InvalidArgumentException(('Too small'));
            }
            $this->x = $value;
        }
    }
}

$p = new PositivePoint();
var_dump($p->y); // int(0)

// 子クラスがフックを追加する場合、
// 親クラスのプロパティで設定されたデフォルト値は削除され、再宣言が必要
var_dump($p->x); // Fatal error

echo PHP_EOL;
