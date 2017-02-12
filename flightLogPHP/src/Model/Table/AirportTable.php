<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Airport Model
 *
 * @method \App\Model\Entity\Airport get($primaryKey, $options = [])
 * @method \App\Model\Entity\Airport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Airport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Airport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Airport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Airport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Airport findOrCreate($search, callable $callback = null)
 */
class AirportTable extends Table
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

        $this->table('airport');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('ico_identifier', 'create')
            ->notEmpty('ico_identifier');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
