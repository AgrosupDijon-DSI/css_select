.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Changelog
---------

- 6.2.0 9th public relase.
  
  - Adaptation for TYPO3 6.2
  - Added the possibility to minify and compress the CSS

- 1.0.3 8th public release.
  
  - Fixed a bug with the CSS @import rules on Internet Explorer.

- 1.0.2: 7th public release.
  
  - Fixed a bug when the recursive option was not set.
  
  - Comments were working only with import rules.

- 1.0.1: 6th public release.
  
  - Fixed a critical bug with the DirectoryIterators.

- 1.0.0: 5th public release.
  
  - This extension is now only compatible with PHP 5.
  
  - Added the possibility to specify multiple CSS directories, including
    or not the sub-directories.
  
  - Added the possibility to set the CSS directory from the page TSConfig.
  
  - Added an option to set the inheritance mode from the page properties.

- 0.4.0: 4th public release.
  
  - Added an option to remove the CSS comments in the HTML source code.
  
  - Fixed a bug with the recursive option. Thanx to Wolfgang Klinger for
    the debug.

- 0.3.1: Bug fix release.
  
  - Fixed a bug which could prevent a page to display correctly on old
    browsers, when no stylesheet is specified.

- 0.3.0: 3rd public release.
  
  - Fixed a bug with the database field used to store the CSS files.
  
  - Added a recursive option.
  
  - Added an option to generate CSS @import rules or standard <link> tags.

- 0.2.0: Bug fix release.

- 0.1.0: First public release.

|img-7| Page StyleSheet Selector - 6


