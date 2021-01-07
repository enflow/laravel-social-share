# Easily add social share links

[![Latest Version on Packagist](https://img.shields.io/packagist/v/enflow/laravel-social-share.svg?style=flat-square)](https://packagist.org/packages/enflow/laravel-social-share)
![GitHub Workflow Status](https://github.com/enflow/laravel-social-share/workflows/run-tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/enflow/laravel-social-share.svg?style=flat-square)](https://packagist.org/packages/enflow/laravel-social-share)

The `enflow/laravel-social-share` package provides an easy way to add social share links to your templates:

<img src="https://raw.githubusercontent.com/enflow/laravel-social-share/master/docs/example.png" width="275">

The main advantage of implementing it this way instead of using a service like AddThis, is this doesn't use any JavaScript and does not have any privacy concerns.

## Installation
You can install the package via composer:

``` bash
composer require enflow/laravel-social-share
```

The package will auto-register. You may add the `SocialShareFacade` to your `app.aliases` array:

```php
'SocialShare' => \Enflow\SocialShare\SocialShareFacade::class,
```

### CSS
This package includes a CSS file for deafult styling. You can copy this file to your own CSS structure and modify it, or import it in your app.css / app.scss file to use the default variant.
The advantage of including it is that it will be automatically updated if changes are made in upcoming versions.

```css
@import "../../vendor/enflow/laravel-social-share/dist/css/social-share.css";
```

## Usage
You can use the Facade in your templates as follows:

```blade
{{ SocialShare::facebook()->twitter()->linkedin()->whatsapp()->render() }}
```

You can chain multiple services next to each other. The following services are currently supported. Pull requests are welcome to expand this.

- Facebook
- Twitter
- LinkedIn
- WhatsApp
- Pinterest
- Reddit
- Telegram
- Email

You can increase the size or set styling options as follows:

```
{{ SocialShare::facebook()->square()->render() }} // Style: square
{{ SocialShare::facebook()->rounded()->render() }} // Style: rounded (default)
{{ SocialShare::facebook()->circle()->render() }} // Style: circle
{{ SocialShare::facebook()->normal()->render() }} // Normal size (default)
{{ SocialShare::facebook()->large()->render() }} // Large size
```

You may want to pass along text to the different sharing options. This text will be appended to the current URL:

```blade
{{ SocialShare::facebook()->text($page->title)->render() }}
```

You can combine all options:

```blade
{{ SocialShare::facebook()->twitter()->reddit()->square()->large()->text('Lorem ipsum!')->render() }}
```

## Config

You can publish the config to tweak the services and their colors.

Pushing the config file:
``` bash
php artisan vendor:publish --provider="Enflow\SocialShare\SocialShareServiceProvider" --tag="config"
```

## Testing
``` bash
$ composer test
```

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security related issues, please email michel@enflow.nl instead of using the issue tracker.

## Credits
- [Michel Bardelmeijer](https://github.com/mbardelmeijer)
- [All Contributors](../../contributors)

## About Enflow
Enflow is a digital creative agency based in Alphen aan den Rijn, Netherlands. We specialize in developing web applications, mobile applications and websites. You can find more info [on our website](https://enflow.nl/en).

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
