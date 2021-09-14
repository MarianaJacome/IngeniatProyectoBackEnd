<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property string $id
 * @property string $grupo_id
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string $usuario
 * @property string $password
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Publicacione[] $publicaciones
 */
class Usuario extends Entity
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
        'nombre' => true,
        'apellido' => true,
        'correo' => true,
        'usuario' => true,
        'password' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'grupo' => true,
        'publicaciones' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
