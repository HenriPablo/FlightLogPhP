<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FlightExtendedDetails Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Flight
 *
 * @method \App\Model\Entity\FlightExtendedDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\FlightExtendedDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FlightExtendedDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FlightExtendedDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FlightExtendedDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FlightExtendedDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FlightExtendedDetail findOrCreate($search, callable $callback = null)
 */
class FlightExtendedDetailsTable extends Table
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

        $this->table('flight_extended_details');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Flight', [
            'foreignKey' => 'flight_id'
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
            ->integer('glider_tows')
            ->requirePresence('glider_tows', 'create')
            ->notEmpty('glider_tows');

        $validator
            ->integer('skydive_loads')
            ->requirePresence('skydive_loads', 'create')
            ->notEmpty('skydive_loads');

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
        $rules->add($rules->existsIn(['flight_id'], 'Flight'));

        return $rules;
    }
}
