<?php

namespace Kaung199\Htmltagcomponent\View\Components\Forms;

use Illuminate\View\Component;

class Radio extends Component
{
    public $mainLabel;
    public $labelOne;
    public $labelTwo;
    public $hoverTitleOne;
    public $hoverTitleTwo;
    public $idOne;
    public $idTwo;
    public $classOne;
    public $classTwo;
    public $name;
    public $oldValue;
    public $valueOne;
    public $valueTwo;
    public $required;
    public $parentClass;
    public $parentContainer;
    public $disabledOne;
    public $disabledTwo;

    public function __construct($attrs = array())
    {
        $this->mainLabel = $attrs['mainLabel'] ?? '';
        $this->labelOne = $attrs['labelOne'] ?? '';
        $this->labelTwo = $attrs['labelTwo'] ?? '';
        $this->idOne = $attrs['idOne'] ?? '';
        $this->idTwo = $attrs['idTwo'] ?? '';
        $this->classOne = $attrs['classOne'] ?? '';
        $this->classTwo = $attrs['classTwo'] ?? '';
        $this->name = $attrs['name'] ?? '';
        $this->valueOne = $attrs['valueOne'] ?? '';
        $this->valueTwo = $attrs['valueTwo'] ?? '';
        $this->hoverTitleOne = $attrs['hoverTitleOne'] ?? '';
        $this->hoverTitleTwo = $attrs['hoverTitleTwo'] ?? '';
        $this->oldValue = !empty($attrs['oldValue']) ? $attrs['oldValue'] : '';
        $this->required = !empty($attrs['required']) ? $attrs['required'] : '';
        $this->parentClass = !empty($attrs['parentClass']) ? $attrs['parentClass'] : '';
        $this->parentContainer = !empty($attrs['parentContainer']) ? $attrs['parentContainer'] : '';
        $this->disabledOne = !empty($attrs['disabledOne']) ? $attrs['disabledOne'] : '';
        $this->disabledTwo = !empty($attrs['disabledTwo']) ? $attrs['disabledTwo'] : '';
    }

    public function render()
    {
        return view('htmltagcomponent::components.forms.radio');
    }
}
