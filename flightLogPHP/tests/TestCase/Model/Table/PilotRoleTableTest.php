<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PilotRoleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PilotRoleTable Test Case
 */
class PilotRoleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PilotRoleTable
     */
    public $PilotRole;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pilot_role',
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
        $config = TableRegistry::exists('PilotRole') ? [] : ['className' => 'App\Model\Table\PilotRoleTable'];
        $this->PilotRole = TableRegistry::get('PilotRole', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PilotRole);

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
