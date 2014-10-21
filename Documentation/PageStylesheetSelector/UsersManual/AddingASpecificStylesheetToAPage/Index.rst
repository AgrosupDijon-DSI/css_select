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


Adding a specific stylesheet to a page
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Once the extension is installed, you'll be able to specify one or more
stylesheet(s) for each of your pages. This is done through the page
headers:

|img-5|

You'll find in the selector all the CSS files located in the directory
you've set during the install process. Just click on a filename to add
it.

You'll also be able to define the inheritance mode for the selected
stylesheets. These options of course only have an effect if the
recursivity option is set (see the next section).

The default setting (normal) will allow inheritance

If «Skip» is set, selected stylesheets from this page won't be
inherited, but stylesheets from the pages above will be.

If «Stop» is set, selected stylesheet from this page and the above
won't be inherited.

