<?php

    namespace App;

    class Calculator extends \PHPUnit_Framework_TestCase{
        
        public function add($a, $b){
            return $a + $b;
        } 

        public function minus($a, $b){
            return $a - $b;
        }

        public function mutilple($a, $b){
            return $a * $b;

        } 

        public function devision($a, $b){
            return $a / $b;
        }
    }

?>