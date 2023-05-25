<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class PasswordInput extends Component
{
    public $label;
    public $id;
    public $class;
    public $name;
    public $value;
    public $placeholder;
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
        $this->placeholder = !empty($attrs['placeholder']) ? $attrs['placeholder'] : '';
        $this->required = !empty($attrs['required']) ? $attrs['required'] : '';
        $this->readOnly = isset($attrs['readOnly']);
        $this->disabled = isset($attrs['disabled']);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('htmltagcomponent::components.forms.password-input');
    }
}
