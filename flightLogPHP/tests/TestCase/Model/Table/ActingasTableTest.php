<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActingasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActingasTable Test Case
 */
class ActingasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActingasTable
     */
    public $Actingas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actingas',
        'app.crw',
        'app.crw_actingas',
        'app.flight',
        'app.flight_actingas',
        'app.flight_crw'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Actingas') ? [] : ['className' => ActingasTable::class];
        $this->Actingas = TableRegistry::get('Actingas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actingas);

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
