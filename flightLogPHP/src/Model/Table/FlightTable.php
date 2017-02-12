<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flight Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Aircraft
 * @property \Cake\ORM\Association\BelongsTo $FlightExtendedDetails
 * @property \Cake\ORM\Association\BelongsTo $Pilot
 * @property \Cake\ORM\Association\BelongsTo $Pilot
 * @property \Cake\ORM\Association\BelongsTo $Story
 * @property \Cake\ORM\Association\HasMany $FlightExtendedDetails
 * @property \Cake\ORM\Association\HasMany $FlightPilotXref
 * @property \Cake\ORM\Association\HasMany $Story
 *
 * @method \App\Model\Entity\Flight get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flight newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Flight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flight|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flight findOrCreate($search, callable $callback = null)
 */
class FlightTable extends Table
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

        $this->table('flight');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Aircraft', [
            'foreignKey' => 'aircraft_id'
        ]);
        $this->belongsTo('FlightExtendedDetails', [
            'foreignKey' => 'extended_flight_details_id'
        ]);
        $this->belongsTo('Pilot', [
            'foreignKey' => 'instructor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pilot', [
            'foreignKey' => 'safety_pilot_id'
        ]);
        $this->belongsTo('Story', [
            'foreignKey' => 'story_id'
        ]);
        $this->hasMany('FlightExtendedDetails', [
            'foreignKey' => 'flight_id'
        ]);
        $this->hasMany('FlightPilotXref', [
            'foreignKey' => 'flight_id'
        ]);
        $this->hasMany('Story', [
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
            ->numeric('actual_instrument')
            ->requirePresence('actual_instrument', 'create')
            ->notEmpty('actual_instrument');

        $validator
            ->numeric('aircraft_category_and_class')
            ->requirePresence('aircraft_category_and_class', 'create')
            ->notEmpty('aircraft_category_and_class');

        $validator
            ->requirePresence('aircraft_tail_number', 'create')
            ->notEmpty('aircraft_tail_number');

        $validator
            ->requirePresence('aircraft_type', 'create')
            ->notEmpty('aircraft_type');

        $validator
            ->numeric('as_flight_instructor')
            ->requirePresence('as_flight_instructor', 'create')
            ->notEmpty('as_flight_instructor');

        $validator
            ->numeric('cross_country')
            ->requirePresence('cross_country', 'create')
            ->notEmpty('cross_country');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->numeric('day')
            ->requirePresence('day', 'create')
            ->notEmpty('day');

        $validator
            ->requirePresence('departure', 'create')
            ->notEmpty('departure');

        $validator
            ->requirePresence('destination', 'create')
            ->notEmpty('destination');

        $validator
            ->numeric('dual_received')
            ->requirePresence('dual_received', 'create')
            ->notEmpty('dual_received');

        $validator
            ->numeric('ground_trainer')
            ->requirePresence('ground_trainer', 'create')
            ->notEmpty('ground_trainer');

        $validator
            ->numeric('night')
            ->requirePresence('night', 'create')
            ->notEmpty('night');

        $validator
            ->integer('no_day_landings')
            ->requirePresence('no_day_landings', 'create')
            ->notEmpty('no_day_landings');

        $validator
            ->integer('no_inst_aproaches')
            ->requirePresence('no_inst_aproaches', 'create')
            ->notEmpty('no_inst_aproaches');

        $validator
            ->integer('no_night_landings')
            ->requirePresence('no_night_landings', 'create')
            ->notEmpty('no_night_landings');

        $validator
            ->numeric('pilot_in_command')
            ->requirePresence('pilot_in_command', 'create')
            ->notEmpty('pilot_in_command');

        $validator
            ->requirePresence('remarks', 'create')
            ->notEmpty('remarks');

        $validator
            ->requirePresence('route', 'create')
            ->notEmpty('route');

        $validator
            ->numeric('second_in_command')
            ->requirePresence('second_in_command', 'create')
            ->notEmpty('second_in_command');

        $validator
            ->numeric('simulated_instrument')
            ->requirePresence('simulated_instrument', 'create')
            ->notEmpty('simulated_instrument');

        $validator
            ->numeric('total_duration_of_flight')
            ->requirePresence('total_duration_of_flight', 'create')
            ->notEmpty('total_duration_of_flight');

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
        $rules->add($rules->existsIn(['aircraft_id'], 'Aircraft'));
        $rules->add($rules->existsIn(['extended_flight_details_id'], 'FlightExtendedDetails'));
        $rules->add($rules->existsIn(['instructor_id'], 'Pilot'));
        $rules->add($rules->existsIn(['safety_pilot_id'], 'Pilot'));
        $rules->add($rules->existsIn(['story_id'], 'Story'));

        return $rules;
    }
}
