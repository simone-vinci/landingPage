<?php
    class stupidTest extends \PHPUnit_Framework_TestCase
    {
        public function testTrueisTrue()
        {
    $foo=true;
    $this->assertTrue($foo);
        }
        public function testHTML()
        {
            $htmlOutput = '<p id="my_id"> ciao </p>';
            $matcher = array('id'=>'my_id');
            $this->assertTag($matcher, $htmlOutput);
        }
    }
