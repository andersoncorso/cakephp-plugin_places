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
		$this->Auth->allow('listByState');

		$this->loadComponent('RequestHandler');
	}

	/**
	 * Retorna um array lista de municipios de acordo com o estado escolhido
	 * 
	 * @param int GET['estado_id'] or GET['uf']
	 * @return array
	 */
	public function listByState(){

		# (solução temporária)
		# procurar solução mais adequada para extrair o valor, caso seja array multidimensional
		$each = each($this->request->query);
		$value = $each['value'];
		if(is_array($value)){
			$each = each($value);
			$value = $each['value'];
		}

		$query = $this->Municipios->find('list', ['limit'=>10000])
			->where([
				'OR'=>[
					'estado_id'=>$value,
					'uf'=>$value
				]
			]);

		$municipios = $query->toArray();
		$this->set(compact('municipios'));
	}

}


