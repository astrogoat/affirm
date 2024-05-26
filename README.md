# An Affirm app for Strata

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/affirm.svg?style=flat-square)](https://packagist.org/packages/astrogoat/affirm)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/affirm/run-tests?label=tests)](https://github.com/astrogoat/affirm/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/affirm/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/affirm/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/affirm.svg?style=flat-square)](https://packagist.org/packages/astrogoat/affirm)

---

An Affirm app for Stratum

## Installation

You can install the package via composer:

```bash
composer require astrogoat/affirm
```

## Usage

Include the script in your Blade file:

```php
@include('affirm::script');
```

When enabled this will add the Affirm javascript. You now have access to Affirm's promotional messaging.
See [Affirm documentation](https://docs.affirm.com/developers/docs/promo-messaging-getting-started/) for more info.


## Testing

```bash
composer test
```

## Releasing a new version

Use the included GitHub action to create a new release.
Go to https://github.com/astrogoat/skeleton/actions/workflows/release.yml click the "Run workflow" dropdown, select your version level bump, and click the "Run workflow" button.
or run `gh workflow run release.yml` from your skeleton directory if you have the GitHub CLI installed locally.

**Important**: Make sure that the Miles Bot user is included in the list of users who can bypass required pull request requirement
Your repo -> Settings -> Branches -> Main (edit) -> "Allow specified actors to bypass required pull requests"


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.


## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.


## Credits

- [Baffour Adu Boampong](https://github.com/baffouradu)
- [All Contributors](../../contributors)



## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
