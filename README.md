<h1 align="center">Contao Accessibility</h1>
<p align="center"><i>Collection of A11y features and backports for the Contao CMS</i></p>
<p align="center">
    <a href="https://github.com/zoglo/contao-accessibility"><img src="https://img.shields.io/github/v/release/zoglo/contao-accessibility" alt="github version"/></a>
    <a href="https://packagist.org/packages/zoglo/contao-accessibility"><img src="https://img.shields.io/packagist/dt/zoglo/contao-accessibility?color=f47c00" alt="amount of downloads"/></a>
    <a href="https://packagist.org/packages/zoglo/contao-accessibility"><img src="https://img.shields.io/packagist/dependency-v/zoglo/contao-accessibility/php?color=474A8A" alt="minimum php version"></a>
</p>

## About

Includes Backports and accessibility features to the Contao CMS, notably the following:

### Since Contao 5.4

* Adds the `ARIA label` to the navigation module (https://github.com/contao/contao/pull/7209)

### Since Contao 5.5

* Add a `title` attribute to the `youtube` and `vimeo` element (https://github.com/contao/contao/pull/7572)
* Add the `autocomplete` attribute to form fields (https://github.com/contao/contao/pull/7473)
* Implement subtitles and CC functionality for videos (https://github.com/contao/contao/pull/7604)

### Since Contao 5.6

* Provide a template for an accessible navigation (https://github.com/contao/contao/pull/8012)

## Disclaimer

> [!NOTE]
> The features rely on the current twig templates to be used and will not work with the legacy HTML5 templates.
> Please understand that there will not be backports for Contao-Versions prior to Contao 5.3. Please consider updating to
> the newest Contao-Version instead.
