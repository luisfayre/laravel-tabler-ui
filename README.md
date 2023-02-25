# Laravel Tabler UI

<a href="https://packagist.org/packages/godruoyi/laravel-tabler-ui"><img src="https://poser.pugx.org/godruoyi/laravel-tabler-ui/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/godruoyi/laravel-tabler-ui"><img src="https://poser.pugx.org/godruoyi/laravel-tabler-ui/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/godruoyi/laravel-tabler-ui"><img src="https://poser.pugx.org/godruoyi/laravel-tabler-ui/license.svg" alt="License"></a>

## Thanks [godruoyi](https://github.com/godruoyi) 🎉

For creating the original package [laravel-tabler-ui](https://github.com/godruoyi/laravel-tabler-ui), but don't worked for 6.0 version, so now is compatible.

## Introduction

Now laravel ui implement a premium and open source dashboard template with a responsive and high-quality UI.
<br>
<br>
<p align="center">
<a href="https://github.com/tabler/tabler"><img src="https://raw.githubusercontent.com/tabler/tabler/dev/src/static/logo.svg" alt="A premium and open source dashboard template with a responsive and high-quality UI." width="300"></a><br><br>

</p>

## Installing

in `composer.json` 

```php
"repositories": [
  {
    "type": "git",
    "url": "https://github.com/luisfayre/laravel-tabler-ui"
  }
],
```

```php
"require": {
.
.
.
.
"luisfayre/laravel-tabler-ui": "dev-main" <-- import
    },
```

## Usage

```
// Generate basic scaffolding...
php artisan ui tabler

// or

// Generate login / registration scaffolding...
php artisan ui tabler --auth
```

More use go to [Laravel Ui Official Documentation](https://github.com/laravel/ui).

If you want use Chinese language for authentication views, you can publish `zh_CN.json` to `resource/lang`:

```
php artisan vendor:publish --tag=laravel-tabler-lang-cn
```

## Preview

[OnLine preview](https://laravel-tabler-ui-preview.godruoyi.com/)

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/luisfayre/laravel-tabler-ui/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/luisfayre/laravel-tabler-ui/issues).

## License

Laravel UI is open-sourced software licensed under the [MIT license](LICENSE.md).
