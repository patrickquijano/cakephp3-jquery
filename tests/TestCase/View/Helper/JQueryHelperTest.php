<?php

namespace JQuery\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use JQuery\View\Helper\JQueryHelper;

class JQueryHelperTest extends TestCase {

    /**
     * @var \JQuery\View\Helper\JQueryHelper
     */
    public $JQuery;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $view = new View();
        $this->JQuery = new JQueryHelper($view);
    }

    /**
     * @return void
     */
    public function tearDown() {
        unset($this->JQuery);
        parent::tearDown();
    }

    /**
     * @return void
     */
    public function testInitialization() {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
