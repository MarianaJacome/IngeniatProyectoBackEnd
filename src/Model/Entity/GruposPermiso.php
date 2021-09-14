<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GruposPermiso Entity
 *
 * @property string $id
 * @property string $grupo_id
 * @property string $permiso_id
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Permiso $permiso
 */
class GruposPermiso extends Entity
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
        'grupo_id' => true,
        'permiso_id' => true,
        'grupo' => true,
        'permiso' => true,
    ];
}
