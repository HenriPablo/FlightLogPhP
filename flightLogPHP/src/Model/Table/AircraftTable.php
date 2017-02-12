<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aircraft Model
 *
 * @property \Cake\ORM\Association\HasMany $Flight
 *
 * @method \App\Model\Entity\Aircraft get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aircraft newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aircraft[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aircraft|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aircraft patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aircraft[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aircraft findOrCreate($search, callable $callback = null)
 */
class AircraftTable extends Table
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

        $this->table('aircraft');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Flight', [
            'foreignKey' => 'aircraft_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('aircraft_category', 'create')
            ->notEmpty('aircraft_category');

        $validator
            ->requirePresence('aircraft_class', 'create')
            ->notEmpty('aircraft_class');

        $validator
            ->requirePresence('aircraft_tail_number', 'create')
            ->notEmpty('aircraft_tail_number');

        $validator
            ->requirePresence('aircraft_type', 'create')
            ->notEmpty('aircraft_type');

        $validator
            ->boolean('complex')
            ->requirePresence('complex', 'create')
            ->notEmpty('complex');

        $validator
            ->boolean('hi_performance')
            ->requirePresence('hi_performance', 'create')
            ->notEmpty('hi_performance');

        $validator
            ->requirePresence('nickname', 'create')
            ->notEmpty('nickname');

        return $validator;
    }
}
