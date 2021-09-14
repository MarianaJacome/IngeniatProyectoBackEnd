<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Publicacione Entity
 *
 * @property string $id
 * @property string $usuario_id
 * @property string $cat_estatu_id
 * @property string $titulo
 * @property string $descripcion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\CatEstatus $cat_estatus
 */
class Publicacione extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'usuario_id' => true,
        'cat_estatu_id' => true,
        'titulo' => true,
        'descripcion' => true,
        'created' => true,
        'modified' => true,
        'usuario' => true,
        'cat_estatus' => true,
    ];
}
