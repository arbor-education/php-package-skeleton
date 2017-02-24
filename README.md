<p align="center">
  <img src="http://novaiskra.com/sites/default/files/profilslika/arbor_circles.png" alt="Arbor" width="200px" />
</p>

---

[![Build Status][ico-build]][link-build]
[![Code Quality][ico-code-quality]][link-code-quality]
[![Code Coverage][ico-code-coverage]][link-code-coverage]
[![Latest Version][ico-version]][link-packagist]
[![PDS Skeleton][ico-pds]][link-pds]

# Arbor\:package_name

**Setup:** 

1. `$ git clone --depth=1 https://github.com/nikolaposa/php-package-skeleton my-library`
1. `$ cd my-library`
1. `$ rm -rf .git`
1. Replace ```:author_name``` ```:author_username``` ```:author_email``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE](LICENSE), [composer.json](composer.json) and [phpunit.xml.dist](phpunit.xml.dist) files either manually or by running `$ php prefill.php` in the command line.
1. `$ composer install`
1. Delete this paragraph and prefill.php.

This is where your library description should be.

## Installation

The preferred method of installation is via [Composer](http://getcomposer.org/). Run the following command to install the latest version of a package and add it to your project's `composer.json`:

```bash
composer require Arbor Education/:package_name
```

## Usage

``` php
$example = new PackageSkeleton\Example();
echo $example->say('Hello');
```

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

Released under MIT License - see the [License File](LICENSE) for details.


[ico-version]: https://img.shields.io/packagist/v/arbor-education/:package_name.svg
[ico-build]: https://travis-ci.org/arbor-education/:package_name.svg?branch=master
[ico-code-coverage]: https://img.shields.io/scrutinizer/coverage/g/arbor-education/:package_name.svg
[ico-code-quality]: https://img.shields.io/scrutinizer/g/arbor-education/:package_name.svg
[ico-pds]: https://img.shields.io/badge/pds-skeleton-blue.svg

[link-packagist]: https://packagist.org/packages/arbor-education/:package_name
[link-build]: https://travis-ci.org/arbor-education/:package_name
[link-code-coverage]: https://scrutinizer-ci.com/g/arbor-education/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/arbor-education/:package_name
[link-pds]: https://github.com/php-pds/skeleton
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
