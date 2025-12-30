# Blade MTG Icons

<a href="https://github.com/mallardduck/blade-mtg-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/mallardduck/blade-mtg-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/mallardduck/blade-mtg-icons">
    <img src="https://img.shields.io/packagist/v/mallardduck/blade-mtg-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/mallardduck/blade-mtg-icons">
    <img src="https://img.shields.io/packagist/dt/mallardduck/blade-mtg-icons" alt="Total Downloads">
</a>


A package to easily make use of [Mana](https://github.com/andrewgioia/Mana) (MTG icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [mana.andrewgioia.com](https://mana.andrewgioia.com/).

There are also some additional icons not sourced from Mana icons as supplements for easier use via Blade Icons.
These are:

- `white`
- `blue`
- `black`
- `red`
- `green`
- `colorless`

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require mallardduck/blade-mtg-icons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade MTG Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/driesvints/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/driesvints/blade-icons#caching) with this library.

## Configuration

Blade MTG Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-mtg-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-mtg-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-mana-u/>
```

You can also pass classes to your icon components:

```blade
<x-mana-tap class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-mana-saga style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-mana-ticket/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-mtg-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-mtg-icons/1.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade MTG Icons is developed and maintained by Blade Developer.

## License

Blade MTG Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
