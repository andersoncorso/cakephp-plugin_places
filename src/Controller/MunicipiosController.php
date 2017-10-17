<?php
namespace Places\Controller;

use Places\Controller\AppController;

/**
 * Municipios Controller
 *
 * @property \Places\Model\Table\MunicipiosTable $Municipios
 *
 * @method \Places\Model\Entity\Municipio[] paginate($object = null, array $settings = [])
 */
class MunicipiosController extends AppController
{

	public function initialize() {
		parent::initialize();
		
		$this->loadComponent('RequestHandler');
	}

	/**
	 * Retorna um array lista de municipios de acordo com o estado escolhido
	 * 
	 * @param int GET['estado_id'] or GET['uf']
	 * @return array
	 */
	public function listByState(){

		$query = $this->Municipios->find('list', ['limit'=>10000]);

		if($this->request->query('estado_id')){
			$var = $this->request->query('estado_id');
			$query->where(['estado_id'=>$var]);
		}
		elseif($this->request->query('uf')){
			$var = $this->request->query('uf');
			$query->where(['uf'=>$var]);
		}

		$municipios = $query->toArray();
		$this->set(compact('municipios'));
	}

}
