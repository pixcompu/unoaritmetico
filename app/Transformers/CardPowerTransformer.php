<?php
/**
 * Created by PhpStorm.
 * User: pixco
 * Date: 19/02/2017
 * Time: 12:05 PM
 */

namespace App\Transformers;


use App\CardPower;
use League\Fractal\TransformerAbstract;

class CardPowerTransformer extends TransformerAbstract
{

    /**
     * @param CardPower $entity
     * @return array
     */
    public function transform(CardPower $entity)
    {
        return [
            'name' => $entity->name,
            'description' => $entity->description
        ];
    }
}