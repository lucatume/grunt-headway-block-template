# grunt-wp-plugin

> Create an Headway Themes block using [grunt-init][].

[grunt-init]: http://gruntjs.com/project-scaffolding

Please note that this template is a modification of [10up original wp-plugin template](https://github.com/10up/grunt-wp-plugin), all kudos go to them.

## Installation
If you haven't already done so, install [grunt-init][].

Once grunt-init is installed, place this template in your `~/.grunt-init/` directory. It's recommended that you use git to clone this template into that directory, as follows:

### Linux/Mac Users

```
git clone git@github.com:10up/grunt-wp-plugin.git ~/.grunt-init/wp-plugin
```

### Windows Users

```
git clone git@github.com:10up/grunt-wp-plugin.git %USERPROFILE%/.grunt-init/wp-plugin
```

## Usage

At the command-line, cd into an empty directory, run this command and follow the prompts.

```
grunt-init headway-block-template
```

_Note that this template will generate files in the current directory, so be sure to change to a new directory first if you don't want to overwrite existing files._

Install the NPM modules required to actually process your newly-created project by running:

```
npm install
```

## Scaffold

After running the init command above, you will be presented with a standard directory structure similar to:

    /plugin
    .. /assets
    .. .. /css
    .. .. .. /src
    .. .. .. /sass
    .. .. .. /less
    .. .. /js
    .. .. .. /src
    .. /images
    .. .. /src
    .. /includes
    .. .. Block.php
    .. .. BlockOptions.php
    .. /languages
    .. .. plugin.pot
    .. .gitignore
    .. Gruntfile.js
    .. plugin.php
    .. readme.php

## Namespacing
To avoid ugly function and class prefixing the plugin will make use of [namespacing](http://it1.php.net/namespaces). Namespace-wise the plugin structure will be

    \prefix
    .. \Main                // the class defined in plugin.php
    .. \Block               // the class defined in Block.php
    .. \BlockOptions        // the class defined in BlockOptions.php

Alongside namespacing I've moved all the code from [Headway Blocks API examples](http://docs.headwaythemes.com/customer/portal/articles/1092371-block-api-examples) into classes where they were not so organized.

### CSS vs Sass vs LESS

Depending on how you answer the prompt regarding the use of a preprocessor, you will either have a `/src` directory (CSS), a `/sass` directory (Sass), or a `/less` directory (LESS) under your normal `/css` directory.  The goal here is that you only ever edit files in the related source directory and Grunt will automatically build and minify your final stylesheets directly in `/css`.

If you're using Sass or Less, the raw files will be processed into `/css/filename.css` and minified into `/css/filename.min.css`.

If you're using vanilla CSS, the source files will be minified into `/css/filename.min.css`.

### JavaScript

You should only ever be modifying script files in the `/js/src` directory.  Grunt will automatically concatenate and minify your scripts into `/js/filename.js` and `/js/filename.min.js`.  These generated files should never be modified directly.

### Images

The `/images/src` directory exists only to allow you to keep track of source files (like PSDs or separate images that have been merged into sprites).  This helps keep source files under version control, and allows you to bundle them with the distribution of your new GPL plugin.
