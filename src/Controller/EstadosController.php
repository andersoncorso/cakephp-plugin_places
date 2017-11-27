<?php
namespace Places\Controller;

use Places\Controller\AppController;

/**
 * Estados Controller
 *
 * @property \Places\Model\Table\EstadosTable $Estados
 *
 * @method \Places\Model\Entity\Estado[] paginate($object = null, array $settings = [])
 */
class EstadosController extends AppController
{

	public function initialize() {
		parent::initialize();
		$this->Auth->allow('listByRegion');
		
		$this->loadComponent('RequestHandler');
	}

	/**
	 * Retorna um array lista de estados de acordo com a região escolhida
	 * 
	 * @param int GET['regiao_id']
	 * @return array
	 */
	public function listByRegion(){

		# (solução temporária)
		# procurar solução mais adequada para extrair o valor, caso seja array multidimensional
		$each = each($this->request->query);
		$value = $each['value'];
		if(is_array($value)){
			$each = each($value);
			$value = $each['value'];
		}

		$query = $this->Estados->find('list', ['limit'=>10000]);
			->where(['regiao_id'=>$value]);

		$estados = $query->toArray();
		$this->set(compact('estados'));
	}

}
