<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Permiso Entity
 *
 * @property string $id
 * @property string $nombre
 * @property string $descripción
 * @property string $controller
 * @property string $action
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Grupo[] $grupos
 */
class Permiso extends Entity
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
        'nombre' => true,
        'descripción' => true,
        'controller' => true,
        'action' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'grupos' => true,
    ];
}
