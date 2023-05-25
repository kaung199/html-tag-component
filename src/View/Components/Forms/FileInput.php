<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class FileInput extends Component
{
    public $label;
    public $id;
    public $class;
    public $name;
    public $required;
    public $uploadableFileCount;
    public $fileType;
    public $readOnly;
    public $disabled;

    public function __construct($attrs = array())
    {
        $this->label = $attrs['label'] ?? '';
        $this->id = $attrs['id'] ?? '';
        $this->class = $attrs['class'] ?? '';
        $this->name = $attrs['name'] ?? '';
        $this->fileType = $attrs['fileType'] ?? '';
        $this->required = !empty($attrs['required']) ? $attrs['required'] : '';
        $this->uploadableFileCount = $attrs['uploadableFileCount'] ?? 1;
        $this->readOnly = isset($attrs['readOnly']);
        $this->disabled = isset($attrs['disabled']) ? 'disabled' : '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('htmltagcomponent::components.forms.file-input');
    }
}
