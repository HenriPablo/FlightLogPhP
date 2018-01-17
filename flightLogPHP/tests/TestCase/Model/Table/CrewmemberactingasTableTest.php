<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrewmemberactingasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrewmemberactingasTable Test Case
 */
class CrewmemberactingasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CrewmemberactingasTable
     */
    public $Crewmemberactingas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crewmemberactingas',
        'app.crewmember',
        'app.crewmember_crewmemberactingas',
        'app.flight',
        'app.flight_crewmemberactingas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Crewmemberactingas') ? [] : ['className' => CrewmemberactingasTable::class];
        $this->Crewmemberactingas = TableRegistry::get('Crewmemberactingas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Crewmemberactingas);

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
