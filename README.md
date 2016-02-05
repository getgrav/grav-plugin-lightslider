# Grav lightSlider Plugin

![Grav lightSlider](assets/readme_0.png)

`lightslider` is a [Grav](http://github.com/getgrav/grav) plugin that adds a lightweight, responsive slider to your page.
It uses the jQuery plugin [lightSlider](http://sachinchoolur.github.io/lightslider/) that provides loads of great features but is still light-weight and responsive.

## Main Features

* Main Features
* Fully responsive - will adapt to any device.
* Separate settings per breakpoint.
* Gallery mode to create an image slideshow with thumbnails
* Supports swipe and mouseDrag
* Add or remove slides dynamically.
* Small file size (9kb) (minified), fully themed, simple to implement.
* CSS transitions with jQuery fallback.
* Full callback API and public methods.
* Auto play and infinite loop to create a content carousel.
* Keyboard, arrows and dots navigation.
* Chrome, Safari, Firefox, Opera, IE7+, IOS, Android, windows phone.
* Slide and Fade Effects.
* Auto width, Vertical Slide, Adaptiveheight, Rtl support...
* Multiple instances on one page.
* Slide anything (youtube, vimeo , google map ...)

# Installation

Installing the lightSlider plugin can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install lightslider

This will install the lightSlider plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/lightslider`.

## Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `lightslider`. You can find these files either on [GitHub](https://github.com/getgrav/grav-plugin-lightslider) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

	/your/site/grav/user/plugins/lightslider

> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins, and a theme to be installed in order to operate.

# Usage

To best understand how lightSlider works, you should read through the original project [documentation](http://sachinchoolur.github.io/lightslider/settings.html).

This plugin is provided as a [modular page](http://learn.getgrav.org/content/content-pages#modular-page) within Grav. That modular page created should be called `lightslider.md` so that it will automatically use the lightslider twig template already provided in the plugin.

The plugin has **two** primary modes. Those are **text** and **image** mode.

## Text Mode

In this mode you can create content for each slider. Each section of slide content is defined as a single Grav page, but you divide the slides up using the markdown `---` syntax to signify a _thematic break_.

When in text mode, the lightslider template automatically looks for images of the format: `image-1.jpg`, `image-2.jpg`, `image-3.jpg`, etc. It will associate each section of the page content to each image in order.

## Image Mode

In image mode, every file in the folder of the page will be picked up and used for the slider in **file-order**, usually alphabetical.  In other words, if you wish a specfic order, prefix your filenames with a numeric value. For example: `01.ducks.jpg`, `02.fish.jpg`, etc.

## Options

The default `lightslider.yaml` file looks like this:

```
enabled: true
built_in_css: true
slider_type: text
type_text_height: auto
type_text_vertical_padding: 80px
type_text_horizontal_padding: 50px
type_text_brightness: 0
item: 1
slideMove: 1
slideMargin: 0
loop: 'false'
mode: 'fade'
controls: 'true'
keyPress: 'true'
auto: 'false'
pause: 2000
speed: 1000
pager: 'true'
gallery: 'false'
gallery_thumb_width: 100
gallery_thumb_height: 100
gallery_margin: 15
gallery_thumb_margin: 5
enableTouch: 'true'
enableDrag: 'true'
pauseOnHover: 'false'
```

You can copy this file and override any defaults you wish in a file called `user/config/plugins/lightslider.yaml`.  However, the preferred approach is to set lightslider options directly in the header of your `lightslider.md` page file that should sit in the same directory as your images.  For example you could have a page such as:

```
---
title: Slider Content
routable: false
visible: false
lightslider:
    slider_type: text
    type_text_vertical_padding: 70px;
    type_text_horizontal_padding: 50px;
    type_text_brightness: -100
    mode: slide
    pager: 'true'
    controls: 'true'
    keyPress: 'true'
    pause: 2000
    speed: 1000
---

# Shop Geek Stuff
## We have all your **geek** needs covered..
___
# SnipCart Powered
## **Grav** plus **SnipCart** equals easy shopping
___
# A Huge Variety
## A great selection of **bits** and **bobs**
```

Here is a breakdown of lightSlider's options you can use in this plugin:

### Plugin Options

|            Option            |                                         Description                                          |
| :--------------------------- | -------------------------------------------------------------------------------------------- |
| slider_type                  | Either `text` or `image`. See above for more information                                     |
| type_text_height             | CSS attribute for height. Defaults to `auto` but could be `300px`                            |
| type_text_vertical_padding   | CSS attribute for vertical padding. Defaults to `80px`                                       |
| type_text_horizontal_padding | CSS attribute for horizontal padding. Defaults to `50px`                                     |
| type_text_brightness         | Optional brightness value ranging from daker `-255` to  lighter `255` where `0` is no change |

### lightSlider Options

|     Option     |                                                        Description                                                         |
| :------------- | :------------------------------------------------------------------------------------------------------------------------- |
| item           | The number of slides to show at a time                                                                                     |
| slideMove      | This option sets the number of slides moved at a time. The default setting is `1`.                                         |
| slideMargin    | This option sets the spacing between each slide.                                                                           |
| mode           | Sets the transition mode. Your options are `slide` and `fade`.                                                             |
| cssEasing      | Type of easing to be used for css animations. defaults to `ease`                                                           |
| easing         | Type of easing to be used for jquery animations. defaults to `linear`                                                      |
| speed          | Sets the time (in milliseconds) of the transition between slides.                                                          |
| auto           | Sets whether or not automatic transitions is enabled. Can be set to `'true'` or `'false'`.                                 |
| loop           | Sets whether or not to loop the slides or stop at the last slide. Can be set to `'true'` or `'false'`.                     |
| pause          | Sets the time (in milliseconds) between automatic transitions.                                                             |
| controls       | Enables the front-end controls, giving visitors the ability to switch between slides. Can be set to `'true'` or `'false'`. |
| keyPress       | Enables keyboard navigation between slides. Can be set to `'true'` or `'false'`.                                           |
| adaptiveHeight | Dynamically adjust slider height based on each slide's height. Can be set to `'true'` or `'false'`.                                           |
| vertical       | change slide's direction from horizontal to Vertical. Can be set to `'true'` or `'false'`.                                 |
| verticalHeight | set height of slider if vertical mode is active and item more than 1. Defaults to `500`                                    |
| pager          | Toggles the pagination that appears along with the lightSlider. Can be set to `'true'` or `'false'`.                       |
| gallery        | Enables gallery style thumbnail pager (will disable standard pager). Can be set to `'true'` or `'false'`.                  |
| galleryMargin  | Vertical space between the bottom of the slider and the gallery. Defaults to `5`                                           |
| thumbMargin    | Horizontal space between the gallery thumbnails. Defaults to `5`                                                           |
| enableTouch    | Enables touch support for touch-enabled devices. Can be set to `'true'` or `'false'`.                                      |
| enableDrag     | Enables desktop mouse drag support. Can be set to `'true'` or `'false'`.                                                   |
| pauseOnHover   | Sets whether or not it should pause the transitions on hover. Can be set to `'true'` or `'false'`.                                                   |

> Note: The settings of `'true'` and `'false'` require single or double quotes in order to work properly.

You can find more variables, as well as information on how to use them on the the original lightSlider project [documentation](http://sachinchoolur.github.io/lightslider/settings.html).

This page also contains three sections defined by the `___` separator. Each section will be associated with an image provided alongside this `lightslider.md` file.  For example the first section will be displayed on top of `image-1.jpg` image file.

## Injecting lightSlider into a non-modular Page

Just because lightSlider is designed to run on a modular page, doesn't mean it has to be.

In our [Shop Site Skeleton](http://github.com/getgrav/grav-skeleton-shop-site/archive/master.zip), we faked a modular page by adding a string that tells Grav to find our lightSlider page and load it as `page` to the included `modular/lightslider.html.twig` template.

Here is the string we used in the `snipcart.html.twig` file which acts as the template file for the front page of the Shop Site Skeleton.

    {% include 'modular/lightslider.html.twig' with {'page': page.find('/slider')} %}

Our lightSlider page, which was located in `/your/site/grav/user/pages/slider`, was set up as any other modular lightSlider page.

> Note: If you want to see this plugin in action, have a look at our [Shop Site Skeleton](http://github.com/getgrav/grav-skeleton-shop-site/archive/master.zip)

# Updating

As development for lightSlider continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience. Updating lightSlider is easy, and can be done through Grav's GPM system, as well as manually.

## GPM Update (Preferred)

The simplest way to update this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

    bin/gpm update lightslider

This command will check your Grav install to see if your lightSlider plugin is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type `y` and hit enter. The plugin will automatically update and clear Grav's cache.

## Manual Update

Manually updating lightSlider is pretty simple. Here is what you will need to do to get this done:

* Delete the `your/site/user/plugins/lightslider` directory.
* Downalod the new version of the lightSlider plugin from either [GitHub](https://github.com/getgrav/grav-plugin-lightslider) or [GetGrav.org](http://getgrav.org/downloads/plugins#extras).
* Unzip the zip file in `your/site/user/plugins` and rename the resulting folder to `lightslider`.
* Clear the Grav cache. The simplest way to do this is by going to the root Grav directory in terminal and typing `bin/grav clear-cache`.

> Note: Any changes you have made to any of the files listed under this directory will also be removed and replaced by the new set. Any files located elsewhere (for example a YAML settings file placed in `user/config/plugins`) will remain intact.
