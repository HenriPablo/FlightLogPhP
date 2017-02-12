<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AircraftClassTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AircraftClassTable Test Case
 */
class AircraftClassTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AircraftClassTable
     */
    public $AircraftClass;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aircraft_class'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AircraftClass') ? [] : ['className' => 'App\Model\Table\AircraftClassTable'];
        $this->AircraftClass = TableRegistry::get('AircraftClass', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AircraftClass);

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
