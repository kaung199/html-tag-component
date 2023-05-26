![PHP from Packagist](https://img.shields.io/packagist/php-v/tomsix/laravel-components-library?style=flat-square)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/kaung199/html-tag-component?label=latest&style=flat-square)
![Download](https://img.shields.io/packagist/dm/kaung199/htmltagcomponent?style=flat-square)

# HTML Tag Components Package for Laravel
HTML Tag Component Package with validation using bootstrap class for Laravel.

## Installation & setup

You can install the package via composer:

    composer require kaung199/htmltagcomponent
    

## Usage

### Usages Form Components

The form components can be used with the `forms` prefix.

#### Form
```blade
<x-forms::form-tag :attrs="[
    'class' => 'example-form',
    'id' => 'example-form-id',
    'action' => 'example-route',
    'method' => 'post',
    'formName' => 'example-form',
]">
   <!-- The form content here-->
</x-forms::form-tag>
```

These attributes are special:

- **method** ($${\color{red}Required}$$)
- **action** ($${\color{red}Required}$$)
- **class** (nullable)
- **id** (nullable)
- **formName** (nullable)

#### Submit Button
```blade
<x-forms::submit-button :attrs="[
    'label' => 'Example Label',
    'name' => 'example-name',
    'form' => 'example-form',
    'class' => 'example-class',
    'id' => 'id'
]"/>
```

These attributes are special:

- **label** (![#f03c15](requied))
- **name** (nullable)
- **form** (nullable)
- **class** (nullable)
- **id** (nullable)

#### Button
```blade
<x-forms::button :attrs="[
    'label' => 'Example Lable',
    'id' => 'example-id',
    'class' => 'example-class',
    'name' => 'example-name',
    'readOnly' => 'readonly',
    'disabled' => 'disabled'
]"/>
```

These attributes are special:

- **label** ($${\color{red}Required}$$)
- **id** (nullable)
- **class** (nullable)
- **name** (nullable)
- **readOnly** (nullable)
- **disabled** (nullable)

#### Text Input
```blade
<x-forms::text-input :attrs="[
    'name' => 'example-name',
    'id' => 'example-id',
    'class' => 'example-class',
    'value' => 'example-value',
    'placeholder' => 'Example Placeholder',
    'label' => 'Example Label',
    'required' => 'yes'
]" />
```

These attributes are special:

- **name** ($${\color{red}Required}$$)
- **id** (nullable)
- **class** (nullable)
- **value** (nullable)
- **placeholder** (nullable)
- **label** (nullable)
-  **required** (nullable)

#### Number Input
```blade
<x-forms::number-input :attrs="[
    'name' => 'example-name',
    'id' => 'example-id',
    'class' => 'example-class',
    'value' => 'example-value',
    'placeholder' => 'Example Placeholder',
    'label' => 'Example Label',
    'required' => 'yes'
]" />
```

These attributes are special:

- **name** ($${\color{red}Required}$$)
- **id** (nullable)
- **class** (nullable)
- **value** (nullable)
- **placeholder** (nullable)
- **label** (nullable)
-  **required** (nullable)

#### Password Input
```blade
<x-forms::password-input :attrs="[
    'name' => 'example-name',
    'id' => 'example-id',
    'class' => 'example-class',
    'value' => 'example-value',
    'placeholder' => 'Example Placeholder',
    'label' => 'Example Label',
    'required' => 'yes'
]" />
```

These attributes are special:

- **name** ($${\color{red}Required}$$)
- **id** (nullable)
- **class** (nullable)
- **value** (nullable)
- **placeholder** (nullable)
- **label** (nullable)
-  **required** (nullable)

#### Hidden Input
```blade
<x-forms::hidden-input :attrs="[
    'name' => 'example-name',
    'id' => 'example-id',
    'class' => 'example-class',
    'value' => 'example-value',
]" />
```

These attributes are special:

- **name** ($${\color{red}Required}$$)
- **id** (nullable)
- **class** (nullable)
- **value** (nullable)

#### Text Area
```blade
<x-forms::textarea :attrs="[
    'name' => 'example-name',
    'id' => 'example-id',
    'class' => 'example-class',
    'value' => 'example-value',
    'placeholder' => 'Example Placeholder',
    'label' => 'Example Label',
    'required' => 'yes'
]" />
```

These attributes are special:

- **name** ($${\color{red}Required}$$)
- **id** (nullable)
- **class** (nullable)
- **value** (nullable)
- **placeholder** (nullable)
- **label** (nullable)
-  **required** (nullable)

#### Select Option (Key => Value)
```blade
<x-forms::select-with-key-value :attrs="[
    'name' => 'Example Name',
    'selected' => 'example-selected-old-value',
    'class' => 'example-class',
    'placeholder' => 'Example Placeholder',
    'label' => 'Example Label',
    'required' => 'yes',
    'readOnly' => 'readonly',
    'disabled' => 'disabled',
    'list' => []
]"/>
```

These attributes are special:

- **name** ($${\color{red}Required}$$)
- **multiple** (nullable)
- **selected** (nullable)
- **class** (nullable)
- **placeholder** (nullable)
- **label** (nullable)
-  **required** (nullable)
- **readOnly** (nullable)
-  **disabled** (nullable)
- **list** ($${\color{red}Required}$$)

#### Select Option (Value => Value)
```blade
<x-forms::select-with-value-value :attrs="[
    'name' => 'Example Name',
    'selected' => 'example-selected-old-value',
    'class' => 'example-class',
    'placeholder' => 'Example Placeholder',
    'label' => 'Example Label',
    'required' => 'yes',
    'readOnly' => 'readonly',
    'disabled' => 'disabled',
    'list' => []
]"/>
```

These attributes are special:

- **name** ($${\color{red}Required}$$)
- **multiple** (nullable)
- **selected** (nullable)
- **class** (nullable)
- **placeholder** (nullable)
- **label** (nullable)
-  **required** (nullable)
- **readOnly** (nullable)
-  **disabled** (nullable)
- **list** ($${\color{red}Required}$$)

#### File
```blade
<x-forms::file-input :attrs="[
   'name' => 'ExampleFileName[]',
   'id' => 'example_file_id',
   'label' => 'Example Label',
   'fileType' => 'image or pdf or docx',
   'class' => 'example-class',
   'uploadableFileCount' => 1,
   'required' => 'yes',
   'placeholder' => ''
]" />
```
##### 
These attributes are special:
- ($${\color{red}JQuery-Required}$$)
- **name** ($${\color{red}Required}$$)
- **id** ($${\color{red}Required}$$)
- **label** (nullable)
- **fileType** (nullable)
- **class** (nullable)
- **uploadableFileCount** ($${\color{red}Required}$$)
-  **required** (nullable)
- **placeholder** (nullable)
