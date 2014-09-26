<?php namespace Mascame\Artificer\Fields\Types;

use Mascame\Artificer\Fields\Field;
use Form;

class Enum extends Select {

	public function input()
	{
		$values = $this->fieldOptions['values'];

		return Form::select($this->name, array_combine($values, $values), $this->value, $this->getAttributes());
	}
}