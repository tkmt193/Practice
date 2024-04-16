<?php
class Enum {
    const ADMIN = 1;
    const USER = 2;
    const GUEST = 3;
    const OTHER = 0;

    private $value; // Declare the value property

    // コンストラクタを定義
    public function __construct($value) {
        $this->value = $this->value($value);
    }

    //valueに応じたEnumを返す
    private function value($value) {
        switch ($value) {
            case 'admin':
                return self::ADMIN;
            case 'user':
                return self::USER;
            case 'guest':
                return self::GUEST;
            default:
                return self::OTHER;
        }
    } 

    // valueプロパティのgetter
    public function getValue() {
        return $this->value;
    }


    // $valueに応じたEnumを返す
    public static function name() {
        return [
            self::ADMIN => '管理者',
            self::USER => 'ユーザー',
            self::GUEST => 'ゲスト'
        ];
    }

}

// Enumクラスを使ってみる
// echo Enum::name()[Enum::ADMIN] .PHP_EOL;
// echo Enum::name()[Enum::USER] .PHP_EOL;
// echo Enum::name()[Enum::GUEST] .PHP_EOL;

$admin = new Enum('admin');
echo $admin->getValue() .PHP_EOL;