<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grupos Model
 *
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\HasMany $Usuarios
 * @property \App\Model\Table\MenusTable&\Cake\ORM\Association\BelongsToMany $Menus
 * @property \App\Model\Table\PermisosTable&\Cake\ORM\Association\BelongsToMany $Permisos
 *
 * @method \App\Model\Entity\Grupo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grupo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grupo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grupo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grupo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grupo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grupo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grupo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GruposTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('grupos');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Usuarios', [
            'foreignKey' => 'grupo_id',
        ]);
        $this->belongsToMany('Menus', [
            'foreignKey' => 'grupo_id',
            'targetForeignKey' => 'menu_id',
            'joinTable' => 'grupos_menus',
        ]);
        $this->belongsToMany('Permisos', [
            'foreignKey' => 'grupo_id',
            'targetForeignKey' => 'permiso_id',
            'joinTable' => 'grupos_permisos',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->uuid('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 45)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->scalar('pagina')
            ->maxLength('pagina', 100)
            ->allowEmptyString('pagina');

        $validator
            ->boolean('activo')
            ->notEmptyString('activo');

        return $validator;
    }
}
