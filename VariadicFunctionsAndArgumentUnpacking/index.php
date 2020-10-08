<?php
class Operation {
    private $nums;
    private $operation;
    public function __construct($operation, ...$nums)
    {
        $this->nums = $nums;
        $this->operation = $operation;
    }

    public function sum() {
        $total = null;
        foreach ($this->nums as $num) {
            $total = $total + $num;
        }
        return $total;
    }

    public function multiply() {
        $total = 1;
        foreach ($this->nums as $num) {
            $total = $total * $num;
        }
        return $total;
    }

}
$operation = new Operation("+", 1,2,3,4,100);
echo "Multiply: " . $operation->multiply();
echo "Sum: " . $operation->sum();
