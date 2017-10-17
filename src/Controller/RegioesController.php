<?php
namespace Places\Controller;

use Places\Controller\AppController;

/**
 * Regioes Controller
 *
 * @property \Places\Model\Table\RegioesTable $Regioes
 *
 * @method \Places\Model\Entity\Regio[] paginate($object = null, array $settings = [])
 */
class RegioesController extends AppController
{


	/**
	 * Retorna um array lista de regiões do Brasil
	 * 
	 * @param none
	 * @return array
	 */
	public function list(){

		$query = $this->Regioes->find('list', ['limit'=>10000]);
		$regioes = $query->toArray();

		$this->set(compact('regioes'));
	}

}
