<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AircraftCategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AircraftCategoryTable Test Case
 */
class AircraftCategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AircraftCategoryTable
     */
    public $AircraftCategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aircraft_category'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AircraftCategory') ? [] : ['className' => 'App\Model\Table\AircraftCategoryTable'];
        $this->AircraftCategory = TableRegistry::get('AircraftCategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AircraftCategory);

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
