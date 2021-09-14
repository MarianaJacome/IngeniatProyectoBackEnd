<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grupo Entity
 *
 * @property string $id
 * @property string $nombre
 * @property string $descripcion
 * @property string|null $pagina
 * @property string|null $icon
 * @property string|null $color_icon
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Usuario[] $usuarios
 * @property \App\Model\Entity\Menu[] $menus
 * @property \App\Model\Entity\Permiso[] $permisos
 */
class Grupo extends Entity
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
        'descripcion' => true,
        'pagina' => true,
        'icon' => true,
        'color_icon' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'usuarios' => true,
        'menus' => true,
        'permisos' => true,
    ];
}
