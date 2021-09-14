<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property string $id
 * @property string|null $menu_id
 * @property string|null $icon
 * @property string $nombre
 * @property string|null $href
 * @property int $position
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Menu[] $menus
 * @property \App\Model\Entity\Grupo[] $grupos
 */
class Menu extends Entity
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
        'menu_id' => true,
        'icon' => true,
        'nombre' => true,
        'href' => true,
        'position' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'menus' => true,
        'grupos' => true,
    ];
}
