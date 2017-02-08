<?php
/**
 * Created by PhpStorm.
 * User: pixco
 * Date: 03/02/2017
 * Time: 10:22 PM
 */

namespace Swagger\Response\Groups;

/**
 * @SWG\Definition(definition="DetailStudentResponse")
 */
class DetailStudentResponse
{
    /**
     * @var object
     * @SWG\Property(ref="#/definitions/DefaultMeta")
     */
    private $meta;

    /**
     * @var object
     * @SWG\Property(ref="#/definitions/StudentItem")
     */
    private $data;
}