<?php
// Include extensions
include __DIR__ . DS . 'extensions' . DS . 'field-methods.php';
include __DIR__ . DS . 'extensions' . DS . 'file-methods.php';
include __DIR__ . DS . 'extensions' . DS . 'files-methods.php';
include __DIR__ . DS . 'extensions' . DS . 'filters.php';
include __DIR__ . DS . 'extensions' . DS . 'page-methods.php';
include __DIR__ . DS . 'extensions' . DS . 'pages-methods.php';
include __DIR__ . DS . 'extensions' . DS . 'validators.php';

// Include kirbytext
include __DIR__ . DS . 'kirbytext' . DS . 'filters.php';
include __DIR__ . DS . 'kirbytext' . DS . 'tags.php';

// Include hooks, options and routes
include __DIR__ . DS . 'hooks.php';
include __DIR__ . DS . 'options.php';
include __DIR__ . DS . 'routes.php';

// Include components
include __DIR__ . DS . 'components' . DS . 'boiler-component.php';

// Register blueprints
$kirby->set('blueprint',  'boiler-blueprint', __DIR__ . DS . 'blueprints' . DS . 'boiler-blueprint.yml');

// Register fields
$kirby->set('field',  'boilerfield', __DIR__ . DS . 'fields' . DS . 'boilerfield');

// Register components
$kirby->set('component', 'template', 'BoilerComponent');

// Register controllers
$kirby->set('controller',  'boiler-controller', __DIR__ . DS . 'controllers' . DS . 'boiler-controller.php');

// Register snippets
$kirby->set('snippet', 'boiler-snippet', __DIR__ . '/snippets/boiler-snippet.php');

// Register templates
$kirby->set('template', 'boiler-template', __DIR__ . '/templates/boiler-template.php');

// Register widgets
$kirby->set('widget',  'boiler-widget', __DIR__ . DS . 'widgets' . DS . 'boiler-widget');
