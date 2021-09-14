<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublicacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublicacionesTable Test Case
 */
class PublicacionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PublicacionesTable
     */
    public $Publicaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Publicaciones',
        'app.Usuarios',
        'app.CatEstatus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Publicaciones') ? [] : ['className' => PublicacionesTable::class];
        $this->Publicaciones = TableRegistry::getTableLocator()->get('Publicaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Publicaciones);

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
