# Code Coloration - Plugin Shaarli
 
Code Coloration is a client-side code syntax highlighter plugin for [Shaarli](https://github.com/shaarli/Shaarli).
 
It uses [PrismJS](https://github.com/PrismJS/prism) library.

![screenshot](http://i.imgur.com/AmIl7Xm.png)

### Requirements

You need to have the Markdown plugin enabled and higher than Code Coloration in the plugin administration page.

### Usage

The language have to be specified. Example for javascript:

```
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
  3. Set your filename in the plugins admistration page under `CUSTOM_PRISM_JS_FILENAME`.
  