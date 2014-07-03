# Log

_Log_ is a minimal WordPress theme inspired by the great [mnmlist](http://mnmlist.com/), but built with modern tools like [gulp](http://gulpjs.com/), [CoffeeScript](http://coffeescript.org/), and [Sass](http://sass-lang.com/). The theme was specifically developed for personal daily logging purpose.

## Differences from mnmlist

Other than just visuals, changes and improvements introduced are:

* Heavily refactored code
* Templates stripped down to only one main `index.php` (the only page required by WordPress)
* `[code]` shortcode added for [Prism](http://prismjs.com)-favored code formatting. For example: `[code lang="markup"]`, `[code lang="javascript" line="10"]`. Requires Prism to work - I'd suggest [Prism WP](https://wordpress.org/plugins/prism-wp/).
* Infinite scrolling from [JetPack](http://jetpack.me/)
* Responsive support to two break points: 480 and 768px
* Last but not least: The haiku is now from [Fukuda Chiyo-ni](http://en.wikipedia.org/wiki/Fukuda_Chiyo-ni). Just a personal taste.

There are no post or page titles in favor of `<time>`, but it should take you no more than five minutes to add them back in.

## Demo
See the theme in action [here](http://log.phanan.net).

## Installation

From inside your site's `wp-content/themes` folder:

```bash
git clone https://github.com/Phoenixheart/log.git
cd log
npm install
gulp
````
