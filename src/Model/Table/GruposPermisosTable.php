<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposPermisos Model
 *
 * @property \App\Model\Table\GruposTable&\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\PermisosTable&\Cake\ORM\Association\BelongsTo $Permisos
 *
 * @method \App\Model\Entity\GruposPermiso get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposPermiso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposPermiso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposPermiso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposPermiso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposPermiso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposPermiso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposPermiso findOrCreate($search, callable $callback = null, $options = [])
 */
class GruposPermisosTable extends Table
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

        $this->setTable('grupos_permisos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Permisos', [
            'foreignKey' => 'permiso_id',
            'joinType' => 'INNER',
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['grupo_id'], 'Grupos'));
        $rules->add($rules->existsIn(['permiso_id'], 'Permisos'));

        return $rules;
    }
}
