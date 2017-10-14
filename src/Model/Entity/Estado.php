<?php
namespace Places\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estado Entity
 *
 * @property int $id
 * @property int $regiao_id
 * @property int $codigo_uf
 * @property string $nome
 * @property string $uf
 *
 * @property \Places\Model\Entity\Regiao $regiao
 * @property \Places\Model\Entity\Municipio[] $municipios
 */
class Estado extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'regiao_id' => true,
        'codigo_uf' => true,
        'nome' => true,
        'uf' => true,
        'regiao' => true,
        'municipios' => true
    ];
}
