<?php
use phpunit\framework\TestCase;
/**
 * Description of test
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class HelloWorld extends TestCase{
    
    public function testPushAndPop() {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
    
}
