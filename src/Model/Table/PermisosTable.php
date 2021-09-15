<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Permisos Model
 *
 * @property \App\Model\Table\GruposTable&\Cake\ORM\Association\BelongsToMany $Grupos
 *
 * @method \App\Model\Entity\Permiso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Permiso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Permiso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Permiso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Permiso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Permiso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Permiso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Permiso findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PermisosTable extends Table
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

        $this->setTable('permisos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Grupos', [
            'foreignKey' => 'permiso_id',
            'targetForeignKey' => 'grupo_id',
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
            ->scalar('controller')
            ->maxLength('controller', 45)
            ->requirePresence('controller', 'create')
            ->notEmptyString('controller');

        $validator
            ->scalar('action')
            ->maxLength('action', 45)
            ->requirePresence('action', 'create')
            ->notEmptyString('action');

        $validator
            ->boolean('activo')
            ->notEmptyString('activo');

        return $validator;
    }
}
