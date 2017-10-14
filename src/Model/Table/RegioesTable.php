<?php
namespace Places\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regioes Model
 *
 * @method \Places\Model\Entity\Regio get($primaryKey, $options = [])
 * @method \Places\Model\Entity\Regio newEntity($data = null, array $options = [])
 * @method \Places\Model\Entity\Regio[] newEntities(array $data, array $options = [])
 * @method \Places\Model\Entity\Regio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Places\Model\Entity\Regio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Places\Model\Entity\Regio[] patchEntities($entities, array $data, array $options = [])
 * @method \Places\Model\Entity\Regio findOrCreate($search, callable $callback = null, $options = [])
 */
class RegioesTable extends Table
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

		$this->setTable('regioes');
		$this->setDisplayField('nome');
		$this->setPrimaryKey('id');
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
			->integer('id')
			->allowEmpty('id', 'create');

		$validator
			->scalar('nome')
			->requirePresence('nome', 'create')
			->notEmpty('nome');

		return $validator;
	}
}
