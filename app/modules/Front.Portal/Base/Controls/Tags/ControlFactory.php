<?php declare (strict_types = 1);

namespace App\Modules\Front\Portal\Base\Controls\Tags;

interface ControlFactory
{

	public function create(): Control;

}