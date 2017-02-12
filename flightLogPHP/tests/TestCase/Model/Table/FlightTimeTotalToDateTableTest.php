<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlightTimeTotalToDateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlightTimeTotalToDateTable Test Case
 */
class FlightTimeTotalToDateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FlightTimeTotalToDateTable
     */
    public $FlightTimeTotalToDate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flight_time_total_to_date'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FlightTimeTotalToDate') ? [] : ['className' => 'App\Model\Table\FlightTimeTotalToDateTable'];
        $this->FlightTimeTotalToDate = TableRegistry::get('FlightTimeTotalToDate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FlightTimeTotalToDate);

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
