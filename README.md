# Grav Light Slider Plugin


`lightslider` is a [Grav](http://github.com/getgrav/grav) plugin that adds a lightweight, responsive slider.
It uses the jQuery plugin [lightslider](http://sachinchoolur.github.io/lightslider/), hence the name.

# Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `lightslider`.

You should now have all the plugin files under

	/your/site/grav/user/plugins/lightslider

# Usage

To best understand how lightSlider works, you should read through the original project [documentation](http://sachinchoolur.github.io/lightslider/settings.html).

From your page headers, you can then tweak almost all the settings that lightSlider comes with. 

eg:

```
---
title: Slider Content
routable: false
visible: false
lightslider:
    #min_height: 290px;
    height: 280px;
    mode: slide
    pager: true
    controls: true
    keyPress: true
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

> Note: If you want to see this plugin in action, have a look at our [Shop Site Skeleton](http://github.com/grav/grav-skeleton-shop-site/archive/master.zip) 
