<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientesTable extends Table
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

        $this->setTable('clientes');
        $this->setDisplayField('COD_CLIENT');
        $this->setPrimaryKey('COD_CLIENT');
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
            ->integer('ID_CLIENTE')
            ->requirePresence('ID_CLIENTE', 'create')
            ->notEmpty('ID_CLIENTE')
            ->add('ID_CLIENTE', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('COD_CLIENT', 'create');

        $validator
            ->allowEmpty('RAZON_SOCI');

        $validator
            ->allowEmpty('COD_VENDED');

        $validator
            ->allowEmpty('COD_ZONA');

        $validator
            ->allowEmpty('COND_VTA');

        $validator
            ->allowEmpty('CUIT');

        $validator
            ->decimal('CUPO_CREDI')
            ->allowEmpty('CUPO_CREDI');

        $validator
            ->allowEmpty('DOMICILIO');

        $validator
            ->allowEmpty('E_MAIL');

        $validator
            ->dateTime('FECHA_ALTA')
            ->allowEmpty('FECHA_ALTA');

        $validator
            ->allowEmpty('LOCALIDAD');

        $validator
            ->allowEmpty('C_POSTAL');

        $validator
            ->allowEmpty('PROVINCIA');

        $validator
            ->allowEmpty('NOM_COM');

        $validator
            ->allowEmpty('DIR_COM');

        $validator
            ->allowEmpty('TELEFONO_1');

        $validator
            ->allowEmpty('TELEFONO_2');

        $validator
            ->allowEmpty('TIPO_DOC');

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
        $rules->add($rules->isUnique(['ID_CLIENTE']));

        return $rules;
    }
}
