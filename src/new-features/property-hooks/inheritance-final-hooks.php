<?php
class User
{
    public string $username {
        final set => strtolower($value);
    }
}

class Manager extends User {
    public string $username {
        // getのオーバーライドはできる
        get => strtoupper($this->username);

        // setのオーバーライドはできない
        set => strtoupper($value);
    }
}
