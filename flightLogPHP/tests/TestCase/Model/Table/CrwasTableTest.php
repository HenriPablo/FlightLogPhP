<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CrwasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CrwasTable Test Case
 */
class CrwasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CrwasTable
     */
    public $Crwas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.crwas',
        'app.crw',
        'app.crw_crwas',
        'app.flight',
        'app.flight_crw',
        'app.flight_crwas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Crwas') ? [] : ['className' => CrwasTable::class];
        $this->Crwas = TableRegistry::get('Crwas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Crwas);

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
