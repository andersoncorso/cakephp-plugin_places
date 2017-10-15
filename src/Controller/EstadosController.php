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
		
		$this->loadComponent('RequestHandler');
	}

	/**
	 * Retorna um array lista de estados de acordo com a região escolhida
	 * 
	 * @param int GET['regiao_id']
	 * @return array
	 */
	public function listByRegion(){

		$this->autoRender = false; // avoid to render view

		$query = $this->Estados->find('list', ['limit'=>10000]);
		if($this->request->query('regiao_id')){
			$var = $this->request->query('regiao_id');
			$query->where(['regiao_id'=>$var]);
		}

		$estados = $query->toArray();

		$this->set(compact('estados'));
		$this->set('_serialize', ['estados']);
	}

}
