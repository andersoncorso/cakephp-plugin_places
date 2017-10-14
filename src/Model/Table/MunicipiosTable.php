<?php
namespace Places\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Municipios Model
 *
 * @property \Places\Model\Table\EstadosTable|\Cake\ORM\Association\BelongsTo $Estados
 *
 * @method \Places\Model\Entity\Municipio get($primaryKey, $options = [])
 * @method \Places\Model\Entity\Municipio newEntity($data = null, array $options = [])
 * @method \Places\Model\Entity\Municipio[] newEntities(array $data, array $options = [])
 * @method \Places\Model\Entity\Municipio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Places\Model\Entity\Municipio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Places\Model\Entity\Municipio[] patchEntities($entities, array $data, array $options = [])
 * @method \Places\Model\Entity\Municipio findOrCreate($search, callable $callback = null, $options = [])
 */
class MunicipiosTable extends Table
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

		$this->setTable('municipios');
		$this->setDisplayField('nome');
		$this->setPrimaryKey('id');

		$this->belongsTo('Estados', [
			'foreignKey' => 'estado_id',
			'className' => 'Places.Estados'
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
			->integer('id')
			->allowEmpty('id', 'create');

		$validator
			->integer('codigo')
			->requirePresence('codigo', 'create')
			->notEmpty('codigo');

		$validator
			->scalar('nome')
			->requirePresence('nome', 'create')
			->notEmpty('nome');

		$validator
			->scalar('uf')
			->requirePresence('uf', 'create')
			->notEmpty('uf');

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
		$rules->add($rules->existsIn(['estado_id'], 'Estados'));

		return $rules;
	}
}
