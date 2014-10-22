

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


Reference
^^^^^^^^^

Here's the complete reference of the TypoScript options for the
plugin. Remember that you can set each one through the constant
editor.

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         recursive
   
   Data type
         boolean
   
   Description
         Also check for stylesheet(s) on the top pages.
   
   Default
         0


.. container:: table-row

   Property
         importRules
   
   Data type
         boolean
   
   Description
         Use CSS @import rules. Otherwise, use a <link> tag for each
         stylesheet.
   
   Default
         1


.. container:: table-row

   Property
         xHTML
   
   Data type
         boolean
   
   Description
         Use XHTML rules for the geeration of tags.
   
   Default
         1


.. container:: table-row

   Property
         cssComments
   
   Data type
         boolean
   
   Description
         Add CSS comments in the HTML source code.
   
   Default
         1


.. container:: table-row

   Property
         useCompressor
   
   Data type
         boolean
   
   Description
         Use TYPO3 ResourceCompressor to minify and compress css files.
         Minification will remove all excess space.
         Compression will depend of the settings of your TYPO3 installation. See $TYPO3_CONF_VARS['FE']['compressionLevel']
   
   Default
         0


.. container:: table-row

   Property
         cssMedia
   
   Data type
         string
   
   Description
         The media of the stylesheet(s).
   
   Default
         all


.. container:: table-row

   Property
         css Type
   
   Data type
         string
   
   Description
         The type of the stylesheet(s).
   
   Default
         text/css


.. container:: table-row

   Property
         linkRel
   
   Data type
         string
   
   Description
         Only if importRules is not set. The rel parameter of the <link> tag.
   
   Default
         stylesheet


.. container:: table-row

   Property
         linkCharset
   
   Data type
         string
   
   Description
         Only if importRules is not set. The charset parameter of the <link>
         tag.
   
   Default
         utf-8


.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_cssselect\_pi1.]

