# PieChart Library for ILIAS Plugins

ILIAS Pie Chart UI Component

## Usage

### Composer
First add the following to your `composer.json` file:

```json
"require": {
  "srag/piechart": ">=1.0.0"
},
```

And run a `composer install`.

See [examples](./examples) how to use this library

If you deliver your plugin, the plugin has it's own copy of this library and the user doesn't need to install the library.

Tip: Because of multiple autoloaders of plugins, it could be, that different versions of this library exists and suddenly your plugin use an older or a newer version of an other plugin!

So I recommand to use [srag/librariesnamespacechanger](https://packagist.org/packages/srag/librariesnamespacechanger) in your plugin.

### PHP 7.0
You can use this library with PHP 7.0 by using the `PHP72Backport` from [srag/librariesnamespacechanger](https://packagist.org/packages/srag/librariesnamespacechanger)

## Requirements
* ILIAS 5.4.0 - 6.999
* PHP >=7.2

## Adjustment suggestions
* External users can report suggestions and bugs at https://plugins.studer-raimann.ch/goto.php?target=uihk_srsu_LPIECH
* Adjustment suggestions by pull requests via github
