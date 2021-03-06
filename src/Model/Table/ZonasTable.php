<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Zonas Model
 *
 * @method \App\Model\Entity\Zona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Zona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Zona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Zona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Zona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Zona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Zona findOrCreate($search, callable $callback = null, $options = [])
 */
class ZonasTable extends Table
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

        $this->setTable('zonas');
        $this->setDisplayField('COD_ZONA');
        $this->setPrimaryKey('COD_ZONA');
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
            ->integer('ID_ZONA')
            ->requirePresence('ID_ZONA', 'create')
            ->notEmpty('ID_ZONA')
            ->add('ID_ZONA', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('COD_ZONA', 'create');

        $validator
            ->allowEmpty('NOMBRE_ZON');

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
        $rules->add($rules->isUnique(['ID_ZONA']));

        return $rules;
    }
}
