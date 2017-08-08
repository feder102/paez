<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comprobantes Model
 *
 * @method \App\Model\Entity\Comprobante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comprobante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Comprobante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comprobante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comprobante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comprobante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comprobante findOrCreate($search, callable $callback = null, $options = [])
 */
class ComprobantesTable extends Table
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

        $this->setTable('comprobantes');
        $this->setDisplayField('N_COMP');
        $this->setPrimaryKey(['N_COMP', 'T_COMP']);

        $this->belongsTo('Cuotas', [
            'foreignKey' => 'N_COMP'
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
            ->integer('ID_COMP')
            ->requirePresence('ID_COMP', 'create')
            ->notEmpty('ID_COMP')
            ->add('ID_COMP', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('COD_CLIENT');

        $validator
            ->allowEmpty('COD_VENDED');

        $validator
            ->allowEmpty('COND_VTA');

        $validator
            ->allowEmpty('ESTADO');

        $validator
            ->dateTime('FECHA_EMIS')
            ->allowEmpty('FECHA_EMIS');

        $validator
            ->dateTime('FECHA_CANC')
            ->allowEmpty('FECHA_CANC');

        $validator
            ->allowEmpty('N_COMP', 'create');

        $validator
            ->allowEmpty('T_COMP', 'create');

        $validator
            ->decimal('IMPORTE')
            ->allowEmpty('IMPORTE');

        $validator
            ->decimal('COBRADO')
            ->allowEmpty('COBRADO');

        $validator
            ->decimal('SALDO')
            ->allowEmpty('SALDO');

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
        $rules->add($rules->isUnique(['ID_COMP']));

        return $rules;
    }
}
