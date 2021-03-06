<?php
namespace Places\Model\Entity;

use Cake\ORM\Entity;

/**
 * Municipio Entity
 *
 * @property int $id
 * @property int $estado_id
 * @property int $codigo
 * @property string $nome
 * @property string $uf
 *
 * @property \Places\Model\Entity\Estado $estado
 */
class Municipio extends Entity
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
        'estado_id' => true,
        'codigo' => true,
        'nome' => true,
        'uf' => true,
        'estado' => true
    ];
}
