<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FlightTimeTotalToDate Model
 *
 * @method \App\Model\Entity\FlightTimeTotalToDate get($primaryKey, $options = [])
 * @method \App\Model\Entity\FlightTimeTotalToDate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FlightTimeTotalToDate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FlightTimeTotalToDate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FlightTimeTotalToDate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FlightTimeTotalToDate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FlightTimeTotalToDate findOrCreate($search, callable $callback = null)
 */
class FlightTimeTotalToDateTable extends Table
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

        $this->table('flight_time_total_to_date');
        $this->displayField('id');
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
            ->numeric('actual_instrument')
            ->requirePresence('actual_instrument', 'create')
            ->notEmpty('actual_instrument');

        $validator
            ->numeric('airplane_multi_engine_land')
            ->requirePresence('airplane_multi_engine_land', 'create')
            ->notEmpty('airplane_multi_engine_land');

        $validator
            ->numeric('airplane_singe_engine_land')
            ->requirePresence('airplane_singe_engine_land', 'create')
            ->notEmpty('airplane_singe_engine_land');

        $validator
            ->numeric('as_flight_instructor')
            ->requirePresence('as_flight_instructor', 'create')
            ->notEmpty('as_flight_instructor');

        $validator
            ->numeric('cross_country')
            ->requirePresence('cross_country', 'create')
            ->notEmpty('cross_country');

        $validator
            ->numeric('cross_country_inst_received')
            ->requirePresence('cross_country_inst_received', 'create')
            ->notEmpty('cross_country_inst_received');

        $validator
            ->numeric('cross_country_pic')
            ->requirePresence('cross_country_pic', 'create')
            ->notEmpty('cross_country_pic');

        $validator
            ->numeric('cross_country_solo')
            ->requirePresence('cross_country_solo', 'create')
            ->notEmpty('cross_country_solo');

        $validator
            ->numeric('day')
            ->requirePresence('day', 'create')
            ->notEmpty('day');

        $validator
            ->numeric('dual_received')
            ->requirePresence('dual_received', 'create')
            ->notEmpty('dual_received');

        $validator
            ->numeric('ground_trainer')
            ->requirePresence('ground_trainer', 'create')
            ->notEmpty('ground_trainer');

        $validator
            ->numeric('instrument')
            ->requirePresence('instrument', 'create')
            ->notEmpty('instrument');

        $validator
            ->numeric('night')
            ->requirePresence('night', 'create')
            ->notEmpty('night');

        $validator
            ->numeric('night_instruction_received')
            ->requirePresence('night_instruction_received', 'create')
            ->notEmpty('night_instruction_received');

        $validator
            ->numeric('night_pic')
            ->requirePresence('night_pic', 'create')
            ->notEmpty('night_pic');

        $validator
            ->numeric('night_pic_solo')
            ->requirePresence('night_pic_solo', 'create')
            ->notEmpty('night_pic_solo');

        $validator
            ->integer('night_take_off_and_landing_solo')
            ->requirePresence('night_take_off_and_landing_solo', 'create')
            ->notEmpty('night_take_off_and_landing_solo');

        $validator
            ->integer('night_take_off_and_landings')
            ->requirePresence('night_take_off_and_landings', 'create')
            ->notEmpty('night_take_off_and_landings');

        $validator
            ->integer('no_instrument_approaches')
            ->requirePresence('no_instrument_approaches', 'create')
            ->notEmpty('no_instrument_approaches');

        $validator
            ->integer('no_landing')
            ->requirePresence('no_landing', 'create')
            ->notEmpty('no_landing');

        $validator
            ->numeric('pilot_in_command')
            ->requirePresence('pilot_in_command', 'create')
            ->notEmpty('pilot_in_command');

        $validator
            ->numeric('rotorcraft_helicopter')
            ->requirePresence('rotorcraft_helicopter', 'create')
            ->notEmpty('rotorcraft_helicopter');

        $validator
            ->numeric('second_in_command')
            ->requirePresence('second_in_command', 'create')
            ->notEmpty('second_in_command');

        $validator
            ->numeric('simulated_instrument')
            ->requirePresence('simulated_instrument', 'create')
            ->notEmpty('simulated_instrument');

        $validator
            ->numeric('solo')
            ->requirePresence('solo', 'create')
            ->notEmpty('solo');

        $validator
            ->numeric('total_duration_of_flight')
            ->requirePresence('total_duration_of_flight', 'create')
            ->notEmpty('total_duration_of_flight');

        $validator
            ->allowEmpty('total_time_per_aircraft_type');

        return $validator;
    }
}
