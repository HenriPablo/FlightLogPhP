<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Preferences Model
 *
 * @method \App\Model\Entity\Preference get($primaryKey, $options = [])
 * @method \App\Model\Entity\Preference newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Preference[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Preference|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Preference patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Preference[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Preference findOrCreate($search, callable $callback = null)
 */
class PreferencesTable extends Table
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

        $this->table('preferences');
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

        return $validator;
    }
}
