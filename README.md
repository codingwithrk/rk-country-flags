![Screenshot](https://codingwithrk.com/public/package-banner/rk-country-flags.png)

<p align="center">
    <a>
        <img alt="Packagist License" src="https://img.shields.io/packagist/l/codingwithrk/rk-country-flags">
    </a>
    <a>
        <img alt="Packagist Version" src="https://img.shields.io/packagist/v/codingwithrk/rk-country-flags">
    </a>
    <a>
        <img alt="Packagist Dependency Version" src="https://img.shields.io/packagist/dependency-v/codingwithrk/rk-country-flags/php">
    </a>
    <a>
        <img alt="Packagist Dependency Version" src="https://img.shields.io/packagist/dependency-v/codingwithrk/rk-country-flags/laravel%2Fframework">
    </a>
</p>

## Introduction

Hello fellow developers, using this package you can display country flags.

### How to Install

```bash
composer require codingwithrk/rk-country-flags
````

### How to use

This will display INDIA flag.

```bladehtml
<x-rk-country-flags name="in" />
```

Add width & height (default width & height is 32x32)

```bladehtml
<x-rk-country-flags name="in" width="40" height="40"/>
```

If you want add class also

```bladehtml
<x-rk-country-flags name="in" class="w-full"/>
```

## License

This is open-sourced software licensed under the [MIT license](/LICENSE).