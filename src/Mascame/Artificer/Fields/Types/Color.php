<?php namespace Mascame\Artificer\Fields\Types;

use Form;
use Mascame\Artificer\Fields\Field;

class Color extends Field
{

    public function input()
    {
        ?>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-eyedropper"></i>
            </div>
            <?php print Form::input('color', $this->name, $this->value, $this->attributes->all()); ?>
        </div>
    <?php
    }

}