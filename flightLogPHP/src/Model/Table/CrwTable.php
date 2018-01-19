<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * Crw Model
 *
 * @property \App\Model\Table\ActingasTable|\Cake\ORM\Association\BelongsToMany $Actingas
 * @property \App\Model\Table\FlightTable|\Cake\ORM\Association\BelongsToMany $Flight
 *
 * @method \App\Model\Entity\Crw get($primaryKey, $options = [])
 * @method \App\Model\Entity\Crw newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Crw[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Crw|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Crw patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Crw[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Crw findOrCreate($search, callable $callback = null, $options = [])
 */
class CrwTable extends Table
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

        $this->setTable('crw');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Actingas', [
            'foreignKey' => 'crw_id',
            'targetForeignKey' => 'actingas_id',
            'joinTable' => 'crw_actingas'
        ]);
        $this->belongsToMany('Flight', [
            'foreignKey' => 'crw_id',
            'targetForeignKey' => 'flight_id',
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmpty('title');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    public function getListByActingas( $id )
    {

        //$crw = TableRegistry::get('Crw');
//        return $q->selct(['id', 'id'] );
//    } );        $this->find()->contain('Actingas', function ($q){
//


//        $crw = $this->get($id, [
//            'contain' => ['Actingas']
//        ]);

//        $query = $this->find('all', [
//            'conditions' => ['Actingas.id >', $id ]
//        ]);


        $query = $this->find();
        $query->matching('Actingas', function ($q) use ($id) {
            return $q->where(['Actingas.id' => $id ]);
        });
        return $query->hydrate(false)->toArray();
    }
}
