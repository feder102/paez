<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cuotas Model
 *
 * @method \App\Model\Entity\Cuota get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cuota newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cuota[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cuota|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cuota patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cuota[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cuota findOrCreate($search, callable $callback = null, $options = [])
 */
class CuotasTable extends Table
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

        $this->setTable('cuotas');
        $this->setDisplayField('N_COMP_CAN');
        $this->setPrimaryKey(['N_COMP_CAN', 'T_COMP_CAN']);
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
            ->integer('ID_CUOTA')
            ->requirePresence('ID_CUOTA', 'create')
            ->notEmpty('ID_CUOTA')
            ->add('ID_CUOTA', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('ESTADO_VTO');

        $validator
            ->dateTime('FECHA_VTO')
            ->allowEmpty('FECHA_VTO');

        $validator
            ->decimal('IMPORTE_VT')
            ->allowEmpty('IMPORTE_VT');

        $validator
            ->allowEmpty('N_COMP');

        $validator
            ->allowEmpty('T_COMP');

        $validator
            ->allowEmpty('N_COMP_CAN', 'create');

        $validator
            ->allowEmpty('T_COMP_CAN', 'create');

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
        $rules->add($rules->isUnique(['ID_CUOTA']));

        return $rules;
    }
}
