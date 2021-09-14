<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruposPermisosFixture
 */
class GruposPermisosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'grupo_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'permiso_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'co_group_id' => ['type' => 'index', 'columns' => ['grupo_id'], 'length' => []],
            'co_permission_id' => ['type' => 'index', 'columns' => ['permiso_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'grupos_permisos_ibfk_1' => ['type' => 'foreign', 'columns' => ['grupo_id'], 'references' => ['grupos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'grupos_permisos_ibfk_2' => ['type' => 'foreign', 'columns' => ['permiso_id'], 'references' => ['permisos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => 'af265fd3-27f1-4394-b6af-fa632ca10565',
                'grupo_id' => '4a7567a7-136b-458b-b410-70558e5fab46',
                'permiso_id' => '007eb879-3089-4ea8-b86e-9ffde586d0a1',
            ],
        ];
        parent::init();
    }
}
