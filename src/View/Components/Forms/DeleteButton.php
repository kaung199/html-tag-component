<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class DeleteButton extends Component
{

    public $name;
    public $url;
    public $class;
    public $id;
    public $data_id;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($attrs = array())
    {
        $this->name = $attrs['name'];
        $this->url = $attrs['url'];
        $this->class = $attrs['class'];
        $this->id = 'delete_btn';
        $this->data_id = $attrs['data_id'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('htmltagcomponent::components.forms.delete-button');
    }
}
