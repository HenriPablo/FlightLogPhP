<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlightExtendedDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlightExtendedDetailsTable Test Case
 */
class FlightExtendedDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FlightExtendedDetailsTable
     */
    public $FlightExtendedDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flight_extended_details',
        'app.flight',
        'app.aircraft',
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
        $config = TableRegistry::exists('FlightExtendedDetails') ? [] : ['className' => 'App\Model\Table\FlightExtendedDetailsTable'];
        $this->FlightExtendedDetails = TableRegistry::get('FlightExtendedDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FlightExtendedDetails);

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
