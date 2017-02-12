<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PilotRole Model
 *
 * @property \Cake\ORM\Association\HasMany $PilotPilotRoleXref
 *
 * @method \App\Model\Entity\PilotRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\PilotRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PilotRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PilotRole|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PilotRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PilotRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PilotRole findOrCreate($search, callable $callback = null)
 */
class PilotRoleTable extends Table
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

        $this->table('pilot_role');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('PilotPilotRoleXref', [
            'foreignKey' => 'pilot_role_id'
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
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        return $validator;
    }
}
