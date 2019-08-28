<?php
    

    namespace Test;

    use App\Calculator;

    class CalculatorTest extends \PHPUnit_Framework_Testcase{

        public function testTrueIsTrue()
        {  
            echo "debugger";
            $foo = false;
            $foo = true;
            $this->assertTrue($foo);
        }

        /**
         * @param int $a 
         * @param int $b
         * @param int $c
         * @dataProvider providerTestAdd
         */ 
        public function testAdd($a, $b, $c){
            $calculator = new Calculator();
            $kq = $calculator->add($a, $b);
            $this->assertSame($kq, $c);
        }

        public function providerTestAdd(){
            return[
                [1, 2, 3],
                [4, 5, 9],
                [10, 11, 21]
            ];
        }
    }

?>
