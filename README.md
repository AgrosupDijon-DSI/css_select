css_select
==========

Migration of Macmade's TYPO3 extension css_select for use with TYPO3 6.2

You'll have to include again the static template into the main TypoScript template, as the files are not in the same folder anymore

To activate the css minification / compression, go to the constant editor and check ```useCompressor``` or add ```plugin.tx_cssselect_pi1.useCompressor = 1``` to your main TypoScript template.

To import this extension on TYPO3, please use the TER (http://typo3.org/extensions/repository/view/css_select/), the zip from github won't work.