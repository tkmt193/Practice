<?php
class Tax_Enum {
    private $value; 
    const ZERO = 0;
    const FIVE = 5;
    const EIGHT = 8;
    const TEN = 10;

    public function __construct($value) {
        if (is_numeric($value)) $value = $this->get_tax_rate($value);
        $this->value = $this->set_value($value);
    }

    private function set_value($value) {
        switch ($value) {
            case self::FIVE:
                return self::FIVE;
            case self::EIGHT:
                return self::EIGHT;
            case self::TEN:
                return self::TEN;
            default:
                return self::ZERO;
        }
    } 

    // valueプロパティのgetter
    public function get_value() {
        return $this->value;
    }

    private function get_tax_rate($tax) {
        return (int)floor($tax * 100);
    }

}

$tax1 = new Tax_Enum('0.0500000');
$tax2 = new Tax_Enum(0.080);
$tax3 = new Tax_Enum(0.10);
$tax4 = new Tax_Enum(0);
$tax5 = new Tax_Enum(null);
$tax6 = new Tax_Enum('');

echo $tax1->get_value() .PHP_EOL;
echo $tax2->get_value() .PHP_EOL;
echo $tax3->get_value() .PHP_EOL;
echo $tax4->get_value() .PHP_EOL;
echo $tax5->get_value() .PHP_EOL;
echo $tax6->get_value() .PHP_EOL;

