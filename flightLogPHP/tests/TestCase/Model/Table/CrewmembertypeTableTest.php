<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrewmembertypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrewmembertypeTable Test Case
 */
class CrewmembertypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CrewmembertypeTable
     */
    public $Crewmembertype;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crewmembertype',
        'app.crewmember',
        'app.crewmember_crewmembertype',
        'app.flight',
        'app.flight_crewmember',
        'app.flight_crewmembertype'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Crewmembertype') ? [] : ['className' => CrewmembertypeTable::class];
        $this->Crewmembertype = TableRegistry::get('Crewmembertype', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Crewmembertype);

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
