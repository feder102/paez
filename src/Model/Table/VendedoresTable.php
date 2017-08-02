<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendedores Model
 *
 * @method \App\Model\Entity\Vendedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendedore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vendedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore findOrCreate($search, callable $callback = null, $options = [])
 */
class VendedoresTable extends Table
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

        $this->setTable('vendedores');
        $this->setDisplayField('COD_VENDED');
        $this->setPrimaryKey('COD_VENDED');
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
            ->integer('ID_VENDEDOR')
            ->requirePresence('ID_VENDEDOR', 'create')
            ->notEmpty('ID_VENDEDOR')
            ->add('ID_VENDEDOR', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('COD_VENDED', 'create');

        $validator
            ->allowEmpty('NOMBRE_VEN');

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
        $rules->add($rules->isUnique(['ID_VENDEDOR']));

        return $rules;
    }
}
