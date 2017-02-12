<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreferencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreferencesTable Test Case
 */
class PreferencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PreferencesTable
     */
    public $Preferences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.preferences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Preferences') ? [] : ['className' => 'App\Model\Table\PreferencesTable'];
        $this->Preferences = TableRegistry::get('Preferences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Preferences);

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
