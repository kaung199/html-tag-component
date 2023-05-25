<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class CheckBox extends Component
{
    public $label;
    public $id;
    public $class;
    public $name;
    public $value;
    public $checked;
    public $readOnly;
    public $disabled;

    public function __construct($attrs = array())
    {
        $this->label = $attrs['label'] ?? '';
        $this->id = $attrs['id'] ?? '';
        $this->class = $attrs['class'] ?? '';
        $this->name = $attrs['name'] ?? '';
        $this->value = $attrs['value'] ?? '';
        $this->checked = $attrs['checked'] ?? false;
        $this->readOnly = isset($attrs['readOnly']);
        $this->disabled = isset($attrs['disabled']);
    }

    public function render()
    {
        return view('htmltagcomponent::components.forms.check-box');
    }
}
