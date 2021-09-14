<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GruposMenus Model
 *
 * @property \App\Model\Table\GruposTable&\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\MenusTable&\Cake\ORM\Association\BelongsTo $Menus
 *
 * @method \App\Model\Entity\GruposMenu get($primaryKey, $options = [])
 * @method \App\Model\Entity\GruposMenu newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GruposMenu[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GruposMenu|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposMenu saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GruposMenu patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GruposMenu[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GruposMenu findOrCreate($search, callable $callback = null, $options = [])
 */
class GruposMenusTable extends Table
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

        $this->setTable('grupos_menus');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Menus', [
            'foreignKey' => 'menu_id',
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
        $rules->add($rules->existsIn(['menu_id'], 'Menus'));

        return $rules;
    }
}
