<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monitorings Model
 *
 * @method \App\Model\Entity\Monitoring newEmptyEntity()
 * @method \App\Model\Entity\Monitoring newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Monitoring[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Monitoring get($primaryKey, $options = [])
 * @method \App\Model\Entity\Monitoring findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Monitoring patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Monitoring[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Monitoring|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Monitoring saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Monitoring[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Monitoring[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Monitoring[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Monitoring[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MonitoringsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('monitorings');
        $this->setDisplayField('monitoringid');
        $this->setPrimaryKey('monitoringid');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('monitoringid')
            ->allowEmptyString('monitoringid', null, 'create');

        $validator
            ->integer('roomid')
            ->allowEmptyString('roomid');

        $validator
            ->numeric('temperature')
            ->allowEmptyString('temperature');

        $validator
            ->numeric('fire')
            ->allowEmptyString('fire');

        $validator
            ->numeric('gas')
            ->allowEmptyString('gas');

        $validator
            ->numeric('humidity')
            ->allowEmptyString('humidity');

        $validator
            ->dateTime('datetime')
            ->allowEmptyDateTime('datetime');

        return $validator;
    }
}
