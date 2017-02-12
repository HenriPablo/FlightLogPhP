<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlightTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlightTable Test Case
 */
class FlightTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FlightTable
     */
    public $Flight;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flight',
        'app.aircraft',
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
        $config = TableRegistry::exists('Flight') ? [] : ['className' => 'App\Model\Table\FlightTable'];
        $this->Flight = TableRegistry::get('Flight', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Flight);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
