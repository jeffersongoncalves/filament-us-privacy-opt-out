<div class="filament-hidden">

![Filament US Privacy Opt-Out](https://raw.githubusercontent.com/jeffersongoncalves/filament-us-privacy-opt-out/3.x/art/jeffersongoncalves-filament-us-privacy-opt-out.png)

</div>

# Filament US Privacy Opt-Out

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-us-privacy-opt-out.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-us-privacy-opt-out)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-us-privacy-opt-out/tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-us-privacy-opt-out/actions?query=workflow%3Atests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-us-privacy-opt-out/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-us-privacy-opt-out/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-us-privacy-opt-out.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-us-privacy-opt-out)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-us-privacy-opt-out.svg?style=flat-square)](LICENSE.md)

The read-only privacy choices ledger of [laravel-us-privacy-opt-out](https://github.com/jeffersongoncalves/laravel-us-privacy-opt-out) in your Filament panel: who opted out of the sale of personal data, targeted advertising or profiling, who consented to the processing of sensitive data, from which state, and when a Global Privacy Control signal did it.

> This plugin gives you tooling. It does not make you compliant on its own.

## Features

- Every choice of users and visitors, with the right, the choice, the consumer's state and the source (form, Global Privacy Control, claimed after login).
- Filters by right, choice, state, visitors and Global Privacy Control.
- The proof of each choice: IP address, user agent, metadata. Read-only: the ledger is append-only.
- 19 languages.

## Compatibility

| Plugin Version | Filament |
|---|---|
| [1.x](https://github.com/jeffersongoncalves/filament-us-privacy-opt-out/tree/1.x) | 3.x |
| [2.x](https://github.com/jeffersongoncalves/filament-us-privacy-opt-out/tree/2.x) | 4.x |
| [3.x](https://github.com/jeffersongoncalves/filament-us-privacy-opt-out/tree/3.x) | 5.x |

## Installation

```bash
composer require jeffersongoncalves/filament-us-privacy-opt-out:"^3.0"
```

Install and configure [laravel-us-privacy-opt-out](https://github.com/jeffersongoncalves/laravel-us-privacy-opt-out) first.

## Usage

```php
use JeffersonGoncalves\Filament\UsPrivacyOptOut\UsPrivacyOptOutPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            UsPrivacyOptOutPlugin::make()
                ->navigationGroup('Privacy')   // default: no group
                ->navigationSort(2)
                ->slug('privacy-choices'),
        ]);
}
```

All fluent methods are optional.

> The pages have no authorization of their own: register the plugin only on panels whose users may see them, or override `canAccess()` in a subclass.

## Related plugins

- [filament-us-privacy](https://github.com/jeffersongoncalves/filament-us-privacy): personal data inventory and the state law rules.
- [filament-us-privacy-requests](https://github.com/jeffersongoncalves/filament-us-privacy-requests): consumer requests and appeals.
- [filament-us-privacy-notices](https://github.com/jeffersongoncalves/filament-us-privacy-notices): processing activities behind the privacy notice.
- [filament-us-privacy-assessments](https://github.com/jeffersongoncalves/filament-us-privacy-assessments): data protection assessments.
- [filament-us-privacy-vendors](https://github.com/jeffersongoncalves/filament-us-privacy-vendors): processors and third parties.
- [filament-us-privacy-minors](https://github.com/jeffersongoncalves/filament-us-privacy-minors): age checks, guardians and minors' consent.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
