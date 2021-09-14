<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposPermisosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposPermisosTable Test Case
 */
class GruposPermisosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposPermisosTable
     */
    public $GruposPermisos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GruposPermisos',
        'app.Grupos',
        'app.Permisos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GruposPermisos') ? [] : ['className' => GruposPermisosTable::class];
        $this->GruposPermisos = TableRegistry::getTableLocator()->get('GruposPermisos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposPermisos);

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
