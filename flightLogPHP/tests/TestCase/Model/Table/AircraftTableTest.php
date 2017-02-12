<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AircraftTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AircraftTable Test Case
 */
class AircraftTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AircraftTable
     */
    public $Aircraft;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aircraft',
        'app.flight',
        'app.flight_extended_details',
        'app.pilot',
        'app.story',
        'app.flight_pilot_xref'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Aircraft') ? [] : ['className' => 'App\Model\Table\AircraftTable'];
        $this->Aircraft = TableRegistry::get('Aircraft', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aircraft);

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
