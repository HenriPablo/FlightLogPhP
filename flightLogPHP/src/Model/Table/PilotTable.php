<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pilot Model
 *
 * @property \Cake\ORM\Association\HasMany $FlightPilotXref
 * @property \Cake\ORM\Association\HasMany $PilotPilotRoleXref
 *
 * @method \App\Model\Entity\Pilot get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pilot newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pilot[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pilot|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pilot patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pilot[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pilot findOrCreate($search, callable $callback = null)
 */
class PilotTable extends Table
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

        $this->table('pilot');
        $this->displayField('last_name');
        $this->primaryKey('id');

        $this->hasMany('FlightPilotXref', [
            'foreignKey' => 'pilot_id'
        ]);
        $this->hasMany('PilotPilotRoleXref', [
            'foreignKey' => 'pilot_id'
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
            ->requirePresence('address1', 'create')
            ->notEmpty('address1');

        $validator
            ->requirePresence('address2', 'create')
            ->notEmpty('address2');

        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->requirePresence('certificate_no', 'create')
            ->notEmpty('certificate_no');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('land_line', 'create')
            ->notEmpty('land_line');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('notes', 'create')
            ->notEmpty('notes');

        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->requirePresence('zip', 'create')
            ->notEmpty('zip');

        $validator
            ->requirePresence('class', 'create')
            ->notEmpty('class');

        $validator
            ->allowEmpty('description');

        $validator
            ->boolean('email_show')
            ->allowEmpty('email_show');

        $validator
            ->boolean('enabled')
            ->allowEmpty('enabled');

        $validator
            ->allowEmpty('passwd');

        $validator
            ->allowEmpty('user_real_name');

        $validator
            ->allowEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
