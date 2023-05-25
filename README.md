![PHP from Packagist](https://img.shields.io/packagist/php-v/tomsix/laravel-components-library?style=flat-square)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/kaung199/html-tag-component?label=latest&style=flat-square)
![Download](https://img.shields.io/github/downloads/kaung199/html-tag-component/total.svg)


# HTML Tag Components Package for Laravel
HTML Tag Component Package with validation using bootstrap class for Laravel.

## Installation & setup

You can install the package via composer:

    composer require kaung199/htmltagcomponent
    

## Usage

### Usages Form Components

Use the normal Blade Component syntax from Laravel. The form components can be used with the `form` prefix.

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

- **name** (required)
- **method** (required)
- **id** (nullable)
- **label** (nullable)
- **class** (nullable)
- **formName** (nullable)

