# Grav Light Slider Plugin


`lightslider` is a [Grav](http://github.com/getgrav/grav) plugin that adds a lightweight, responsive slider.
It uses the jQuery plugin [lightslider](http://sachinchoolur.github.io/lightslider/), hence the name.

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm).  From the root of your Grav install type:

    bin/gpm install lightslider

## Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `lightslider`.

You should now have all the plugin files under

	/your/site/grav/user/plugins/lightslider

>> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav), the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) plugins, and a theme to be installed in order to operate.

# Usage

To best understand how lightSlider works, you should read through the original project [documentation](http://sachinchoolur.github.io/lightslider/settings.html).

This plugin is intended to be used as a [modular page](http://learn.getgrav.org/content/content-pages#modular-page) within Grav. That modular page created should be called `lightslider.md` so that it will automatically use the lightslider twig template already provided in the plugin.

The lightslider template automatically looks for filesname of the format: `image-1.jpg`, `image-2.jpg`, `image-3.jpg`, etc. It will associate each section of the page content to each image in order.  

From your page headers, you can then tweak almost all the settings that lightslider comes with. 

eg:

```
---
title: Slider Content
routable: false
visible: false
lightslider:
    #min_height: 290px;
    height: 280px;
    brightness: -100
    mode: 'slide'
    pager: 'true'
    controls: 'true'
    keyPress: 'true'
    pause: 2000
    speed: 1000
    auto: 'true'
    loop: 'true'
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

This page has 3 sections defined by the `___` separator. Each section will be associated with an image provided alongside this `lightslider.md` file.  For example the first section will be displayed on top of `image-1.jpg` image file.

> Note: If you want to see this plugin in action, have a look at our [Shop Site Skeleton](http://github.com/grav/grav-skeleton-shop-site/archive/master.zip) 
