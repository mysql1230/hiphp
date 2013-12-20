<?php

class Benchmark_test extends PHPUnit_Framework_TestCase {

        public function test_memory_usage()
        {
                $stack = array(1,2,3,4);
		$this->assertEquals(1, $stack[0]);
        }

}