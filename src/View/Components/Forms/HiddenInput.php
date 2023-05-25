<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class HiddenInput extends Component
{
    public $id;
    public $class;
    public $name;
    public $value;

    public function __construct($attrs = array())
    {
        $this->id = $attrs['id'] ?? '';
        $this->class = $attrs['class'] ?? '';
        $this->name = $attrs['name'] ?? '';
        $this->value = $attrs['value'] ?? '';
    }

    public function render()
    {
        return view('htmltagcomponent::components.forms.hidden-input');
    }
}
