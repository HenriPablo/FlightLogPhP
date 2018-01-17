<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrwTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrwTable Test Case
 */
class CrwTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CrwTable
     */
    public $Crw;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crw',
        'app.actingas',
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
        $config = TableRegistry::exists('Crw') ? [] : ['className' => CrwTable::class];
        $this->Crw = TableRegistry::get('Crw', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Crw);

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
