<?php
namespace Demo;

class TestClass
{
    public function test($var1)
    {
        $hello = 'test';
        $test = '';
        if ($hello) {
            $test = 'hellooooo';
        }

// else {
  //          $test = 'world';
    //    }

        echo $test.$var1;
    }
}
