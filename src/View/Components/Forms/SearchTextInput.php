<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class SearchTextInput extends Component
{
    public $label;
    public $id;
    public $class;
    public $name;
    public $value;
    public $placeholder;
    public $required;
    public $autocomplete;
    public $readOnly;
    public $disabled;
    public $parentClass;
    public $parentContainer;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($attrs = array())
    {
        $this->label = $attrs['label'] ?? '';
        $this->id = $attrs['id'] ?? '';
        $this->class = $attrs['class'] ?? '';
        $this->name = $attrs['name'] ?? '';
        $this->value = $attrs['value'] ?? '';
        $this->placeholder = !empty($attrs['placeholder']) ? $attrs['placeholder'] : '';
        $this->required = !empty($attrs['required']) ? $attrs['required'] : '';
        $this->autocomplete = !empty($attrs['autocomplete']) ? $attrs['autocomplete'] : '';
        $this->readOnly = isset($attrs['readOnly']);
        $this->disabled = isset($attrs['disabled']);
        $this->parentClass = !empty($attrs['parentClass']) ? $attrs['parentClass'] : '';
        $this->parentContainer = !empty($attrs['parentContainer']) ? $attrs['parentContainer'] : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('htmltagcomponent::components.forms.search-text-input');
    }
}
