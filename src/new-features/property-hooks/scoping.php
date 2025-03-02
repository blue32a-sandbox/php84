<?php
class Person {
    public string $phone {
        // フック内で必要に応じて、 任意の複雑なメソッドを呼び出すこともできる
        set => $this->sanitizePhone($value);
    }

    private function sanitizePhone(string $value): string {
        $value = ltrim($value, '+');
        $value = ltrim($value, '1');

        if (!preg_match('/\d\d\d-\d\d\d-\d\d\d\d/', $value)) {
            throw new \InvalidArgumentException();
        }

        return $value;
    }
}

$person = new Person();
$person->phone = '+1 123-456-7890';
var_dump($person->phone); // string(12) " 123-456-7890"
echo PHP_EOL;
