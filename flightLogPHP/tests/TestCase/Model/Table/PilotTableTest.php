<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PilotTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PilotTable Test Case
 */
class PilotTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PilotTable
     */
    public $Pilot;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pilot',
        'app.flight_pilot_xref',
        'app.pilot_pilot_role_xref'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pilot') ? [] : ['className' => 'App\Model\Table\PilotTable'];
        $this->Pilot = TableRegistry::get('Pilot', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pilot);

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
