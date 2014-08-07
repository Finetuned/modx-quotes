MODX Quotes
===========

Display and manage quotes on your MODX site.

Introduction
------------

This component adds a page in the ModX manager interface that allows you to create & maintain a list of 
quotes in your site.

Included snippets
-----------------

### The Snippet `[[Quotes]]` 
This snippet outputs a list of quotes, ordered alphabetically and grouped by author. 
It also ouputs a navigation list of links at the top of the quotes list to allow a user to jump to a specific author.

#### Snippet Parameters
* `showNav`        -   show the author nav at the top of the list [default = true]
* `navOuterTpl`    -   chunk to use as the outer template for the author nav
* `navItemTpl`     -   chunk to use for each item/link in the author nav
* `listOuterTpl`   -   chunk to use as the outer template for the quote list
* `listGroupTpl`   -   chunk to use for each author group in the quote list
* `listQuoteTpl`   -   chunk to use for each quote in an author group


### The Snippet `[[!RandomQuote]]` 
This snippet outputs a random quote.

#### Snippet Parameters
* `listQuoteTpl`   -   chunk to use for the quote

Credits
-------

Inspired by [modx-glossary](https://github.com/alanpich/modx-glossary)