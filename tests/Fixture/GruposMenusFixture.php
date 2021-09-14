<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruposMenusFixture
 */
class GruposMenusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'grupos_menus';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'grupo_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'menu_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'co_group_id' => ['type' => 'index', 'columns' => ['grupo_id'], 'length' => []],
            'co_menu_id' => ['type' => 'index', 'columns' => ['menu_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'grupos_menus_ibfk_1' => ['type' => 'foreign', 'columns' => ['menu_id'], 'references' => ['menus', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'grupos_menus_ibfk_2' => ['type' => 'foreign', 'columns' => ['grupo_id'], 'references' => ['grupos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => '5c2bf267-54d8-4feb-962f-0f9899af02f4',
                'grupo_id' => '4eb3cdae-f2f0-4fa6-87fe-378ca294715e',
                'menu_id' => '1140c5df-a0ce-41ab-9c3f-4afca184c3d9',
            ],
        ];
        parent::init();
    }
}
