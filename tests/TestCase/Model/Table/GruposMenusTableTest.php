<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposMenusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposMenusTable Test Case
 */
class GruposMenusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposMenusTable
     */
    public $GruposMenus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposMenus',
        'app.Grupos',
        'app.Menus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GruposMenus') ? [] : ['className' => GruposMenusTable::class];
        $this->GruposMenus = TableRegistry::getTableLocator()->get('GruposMenus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposMenus);

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
