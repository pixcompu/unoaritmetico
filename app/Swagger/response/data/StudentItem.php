<?php
/**
 * Created by PhpStorm.
 * User: pixco
 * Date: 22/05/2017
 * Time: 01:29 PM
 */

namespace Swagger\Response\Data;

/**
 * @SWG\Definition(definition="StudentItem")
 */
class StudentItem
{
    /**
     * @var integer
     * @SWG\Property( example = 1)
     */
    private $id;

    /**
     * @var string
     * @SWG\Property( example = "Mariana")
     */
    private $name;

    /**
     * @var integer
     * @SWG\Property( example = 16)
     */
    private $age;

    /**
     * @var object
     * @SWG\Property(ref="#/definitions/WrappedGroupItem")
     */
    private $group;

    /**
     * @var integer
     * @SWG\Property( example = 16)
     */
    private $playedCount;

    /**
     * @var integer
     * @SWG\Property( example = 16)
     */
    private $winnedCount;

    /**
     * @var integer
     * @SWG\Property( example = 16)
     */
    private $lostCount;
}