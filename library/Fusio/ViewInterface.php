<?php

namespace Fusio;

use Fusio\Context;
use Fusio\Entity\Model;
use PSX\Http\Request;
use PSX\Http\Response;

interface ViewInterface
{
	/**
	 * Triggers an specific action from the given request
	 *
	 * @param PSX\Http\Request $request
	 * @param PSX\Http\Response $response
	 * @param array $parameters
	 * @param Fusio\Entity\Model $model
	 * @param Fusio\Context $context
	 */
	public function generate(Request $request, Response $response, array $parameters, Model $model, Context $context)

	/**
	 * Returns an array containing the fields which are needed by the view
	 *
	 * @return array
	 */
	public function getParameters();
}
