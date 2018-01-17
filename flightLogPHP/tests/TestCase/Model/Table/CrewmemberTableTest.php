<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrewmemberTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrewmemberTable Test Case
 */
class CrewmemberTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CrewmemberTable
     */
    public $Crewmember;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crewmember',
        'app.crewmemberactingas',
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
        $config = TableRegistry::exists('Crewmember') ? [] : ['className' => CrewmemberTable::class];
        $this->Crewmember = TableRegistry::get('Crewmember', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Crewmember);

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
