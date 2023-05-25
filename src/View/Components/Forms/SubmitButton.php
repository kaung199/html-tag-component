<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class SubmitButton extends Component
{
    public $id;
    public $class;
    public $form;
    public $name;
    public $type;
    public $label;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($attrs = array())
    {
        $this->id = $attrs['id'] ?? '';
        $this->class = $attrs['class'] ?? '';
        $this->name = $attrs['name'] ?? '';
        $this->type = $attrs['type'] ?? '';
        $this->form = $attrs['form'] ?? '';
        $this->label = $attrs['label'] ?? '';
        $this->disabled = $attrs['disabled'] ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('htmltagcomponent::components.forms.submit-button');
    }
}
