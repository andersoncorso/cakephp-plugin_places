<?php
namespace Places\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estados Model
 *
 * @property \Places\Model\Table\RegioesTable|\Cake\ORM\Association\BelongsTo $Regioes
 * @property \Places\Model\Table\MunicipiosTable|\Cake\ORM\Association\HasMany $Municipios
 *
 * @method \Places\Model\Entity\Estado get($primaryKey, $options = [])
 * @method \Places\Model\Entity\Estado newEntity($data = null, array $options = [])
 * @method \Places\Model\Entity\Estado[] newEntities(array $data, array $options = [])
 * @method \Places\Model\Entity\Estado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Places\Model\Entity\Estado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Places\Model\Entity\Estado[] patchEntities($entities, array $data, array $options = [])
 * @method \Places\Model\Entity\Estado findOrCreate($search, callable $callback = null, $options = [])
 */
class EstadosTable extends Table
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

		$this->setTable('estados');
		$this->setDisplayField('nome');
		$this->setPrimaryKey('id');

		$this->belongsTo('Regioes', [
			'foreignKey' => 'regiao_id',
			'className' => 'Places.Regioes'
		]);
		$this->hasMany('Municipios', [
			'foreignKey' => 'estado_id',
			'className' => 'Places.Municipios'
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
			->integer('codigo_uf')
			->requirePresence('codigo_uf', 'create')
			->notEmpty('codigo_uf');

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
		$rules->add($rules->existsIn(['regiao_id'], 'Regioes'));

		return $rules;
	}
}
