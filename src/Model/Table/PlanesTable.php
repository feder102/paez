<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Planes Model
 *
 * @method \App\Model\Entity\Plane get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plane newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Plane[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plane|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plane patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plane[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plane findOrCreate($search, callable $callback = null, $options = [])
 */
class PlanesTable extends Table
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

        $this->setTable('planes');
        $this->setDisplayField('COND_VTA');
        $this->setPrimaryKey('COND_VTA');
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
            ->integer('ID_PLAN')
            ->requirePresence('ID_PLAN', 'create')
            ->notEmpty('ID_PLAN')
            ->add('ID_PLAN', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('COND_VTA', 'create');

        $validator
            ->allowEmpty('DESC_COND');

        $validator
            ->integer('CANT_CUOTA')
            ->allowEmpty('CANT_CUOTA');

        $validator
            ->allowEmpty('DIA_MES');

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
        $rules->add($rules->isUnique(['ID_PLAN']));

        return $rules;
    }
}
