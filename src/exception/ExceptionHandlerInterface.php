<?php

/**
 * @license   http://msphp.umtuwen.com/license
 * @copyright (c) 2020 umtuwen.com All Rights Reserved.
 */

namespace msphp\exception;

use Throwable;
use msphp\http\Request;
use msphp\http\Response;

/**
 * 异常处理程序接口
 *
 * @author Levine <phplevine@gmail.com>
 */
interface ExceptionHandlerInterface
{
	/**
	 * 报告异常
	 *
	 * @param  Throwable $e 抛出的异常
	 * @return mixed
	 */
	public function report(Throwable $e);

	/**
	 * 渲染异常
	 *
	 * @param  Request   $request Request请求
	 * @param  Throwable $e       抛出的异常
	 * @return \msphp\http\Response
	 */
	public function render(Request $request, Throwable $e): Response;
}
