# Code Coloration - Plugin Shaarli
 
Code Coloration is a client-side code syntax highlighter plugin for [Shaarli](https://github.com/shaarli/Shaarli).
 
It uses [PrismJS](https://github.com/PrismJS/prism) library.

![screenshot](http://i.imgur.com/AmIl7Xm.png)

### Requirements

  * PHP 5.3
  * Shaarli >= v0.6.3 (check the [release](https://github.com/ArthurHoaro/code-coloration/releases) matching your version)
  * Shaarli's Markdown plugin **enabled**

### Installation

Download the latest release, and put the subfolder `code_coloration` under your plugins/ directory.

Then you can enable the plugin in the plugin administration page http://shaarli.tld/?do=pluginadmin.

> Note: the folder name **must** be `code_coloration` for the plugin to appear.

Example in command lines:

```bash
cd /tmp
wget https://github.com/ArthurHoaro/code-coloration/archive/v1.1.0.tar.gz
tar xfz code-coloration-v1.0.0.tar.gz
mv code-coloration-v1.0.0/code_coloration /path/to/shaarli/plugins
```

### Usage

The language have to be specified. Example for javascript:

```javascript
    ```javascript
    /**
     * Change the position counter of a row.
     *
     * @param elem  Element Node to change.
     * @param toPos int     New position.
     */
    function changePos(elem, toPos)
    {
        var elemName = elem.getAttribute('data-line')
    
        elem.setAttribute('data-order', toPos);
        var hiddenInput = document.querySelector('[name="order_'+ elemName +'"]');
        hiddenInput.setAttribute('value', toPos);
    }
    ```
```

### Supported languages

  * `markup`
  * `css`
  * `clike`
  * `javascript`
  * `apacheconf`
  * `aspnet`
  * `bash`
  * `batch`
  * `c`
  * `csharp`
  * `cpp`
  * `coffeescript`
  * `ruby`
  * `diff`
  * `docker`
  * `git`
  * `go`
  * `http`
  * `ini`
  * `java`
  * `json`
  * `latex`
  * `lua`
  * `makefile`
  * `markdown`
  * `objectivec`
  * `ocaml`
  * `perl`
  * `php`
  * `php-extras`
  * `python`
  * `r`
  * `rust`
  * `sql`
  * `twig`
  * `vim`
  * `yaml`
  
### Customize your PrismJS

  1. Build [your own PrismJS file here](http://prismjs.com/download.html).
  2. Put it in `code_coloration` folder with any filename.
  3. Set your filename in the plugins administration page under `CUSTOM_PRISM_JS_FILENAME`.
  