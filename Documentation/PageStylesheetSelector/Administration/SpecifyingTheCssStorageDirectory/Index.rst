

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


Specifying the CSS storage directory
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

You can override the settings made from the extension manager about
the CSS directory through the page TSConfig. In order to do this, edit
the properties of a page, and place the following code in the TSConfig
field:

::

   tx_cssselect.cssDir = path/to/a/directory,path/to/another/directory

Specified paths are relative to the TYPO3 site path.

