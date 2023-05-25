<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class Submit extends Component
{
    public $id;
    public $class;
    public $name;
    public $disabled;
    public $readonly;
    public $label;

    public function __construct($attrs = array())
    {
        $this->label = !empty($attrs['label']) ? $attrs['label'] : 'Submit';
        $this->id = $attrs['id'] ?? '';
        $this->class = $attrs['class'] ?? '';
        $this->name = $attrs['name'] ?? '';
        $this->disabled = !empty($attrs['disabled']) ? 'disabled="disabled"' : '';
        $this->readonly = !empty($attrs['readonly']) ? 'readonly="readonly"' : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('htmltagcomponent::components.forms.submit');
    }
}
