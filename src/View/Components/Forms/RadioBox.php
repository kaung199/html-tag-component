<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class RadioBox extends Component
{
    public $label;
    public $id;
    public $class;
    public $name;
    public $value;
    public $checked;
    public $required;
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
        $this->required = !empty($attrs['required']) ? $attrs['required'] : '';
        $this->readOnly = !empty($attrs['readOnly']) ? $attrs['readOnly'] : '';
        $this->disabled = !empty($attrs['disabled']) ? $attrs['required'] : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('htmltagcomponent::components.forms.radio-box');
    }
}
