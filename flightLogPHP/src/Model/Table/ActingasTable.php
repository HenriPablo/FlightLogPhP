<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actingas Model
 *
 * @property \App\Model\Table\CrwTable|\Cake\ORM\Association\BelongsToMany $Crw
 * @property \App\Model\Table\FlightTable|\Cake\ORM\Association\BelongsToMany $Flight
 *
 * @method \App\Model\Entity\Actingas get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actingas newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Actingas[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actingas|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actingas patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actingas[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actingas findOrCreate($search, callable $callback = null, $options = [])
 */
class ActingasTable extends Table
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

        $this->setTable('actingas');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Crw', [
            'foreignKey' => 'actingas_id',
            'targetForeignKey' => 'crw_id',
            'joinTable' => 'crw_actingas'
        ]);
        $this->belongsToMany('Flight', [
            'foreignKey' => 'actingas_id',
            'targetForeignKey' => 'flight_id',
            'joinTable' => 'flight_actingas'
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
            ->scalar('title')
            ->allowEmpty('title');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }
}
