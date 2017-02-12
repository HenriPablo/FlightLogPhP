<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AirportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AirportTable Test Case
 */
class AirportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AirportTable
     */
    public $Airport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.airport'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Airport') ? [] : ['className' => 'App\Model\Table\AirportTable'];
        $this->Airport = TableRegistry::get('Airport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Airport);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
