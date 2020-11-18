<?php

/**
 * @license   http://msphp.umtuwen.com/license
 * @copyright (c) 2020 umtuwen.com All Rights Reserved.
 */

namespace msphp\exception;

use Exception;
use Psr\Container\NotFoundExceptionInterface;

/**
 * Not Found异常
 *
 * @author Levine <phplevine@gmail.com>
 */
class NotFoundException extends Exception implements NotFoundExceptionInterface
{

}
