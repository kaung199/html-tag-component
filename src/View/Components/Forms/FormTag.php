<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class FormTag extends Component
{
    public $id;
    public $class;
    public $action;
    public $method;
    public $formName;

    public function __construct($attrs = array())
    {
        $this->id = $attrs['id'] ?? '';
        $this->class = $attrs['class'] ?? '';
        $this->action = $attrs['action'] ?? '';
        $this->method = $attrs['method'] ?? '';
        $this->formName = $attrs['formName'] ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('htmltagcomponent::components.forms.form-tag');
    }
}
