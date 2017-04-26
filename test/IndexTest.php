<?php

namespace PHPUnit\Framework\Tests;

use \PHPUnit\Framework\DOMTestCase;

class IndexTest extends DOMTestCase
{

    private $html;

    protected function setUp()
    {
        $this->html = file_get_contents('index.php');
    }

    public function testTagContent()
    {

        $selector = 'h1.title';
        $content  = 'Test title text';

        $this->assertSelectEquals($selector, $content, true, $this->html);
    }
}
