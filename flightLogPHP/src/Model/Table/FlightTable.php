<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flight Model
 *
 * @property \App\Model\Table\ActingasTable|\Cake\ORM\Association\BelongsToMany $Actingas
 * @property \App\Model\Table\CrwTable|\Cake\ORM\Association\BelongsToMany $Crw
 *
 * @method \App\Model\Entity\Flight get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flight newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Flight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flight|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flight findOrCreate($search, callable $callback = null, $options = [])
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

        $this->setTable('flight');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Actingas', [
            'foreignKey' => 'flight_id',
            'targetForeignKey' => 'actingas_id',
            'joinTable' => 'flight_actingas'
        ]);
        $this->belongsToMany('Crw', [
            'foreignKey' => 'flight_id',
            'targetForeignKey' => 'crw_id',
            'joinTable' => 'flight_crw'
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
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->numeric('total_duration_of_flight')
            ->requirePresence('total_duration_of_flight', 'create')
            ->notEmpty('total_duration_of_flight');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }
}
