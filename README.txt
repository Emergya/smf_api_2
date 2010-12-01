smf_api_2.php integration module
==============================================================================

smf_api_2.php provides advanced integration with SMF 2.0RC4: Simple Machines Forum
http://www.simplemachines.org/.

You can use smf_api_2.php with or without current smf_api.php.

Installation
------------------------------------------------------------------------------

1) Download the smf_api_2 archive from http://gitorious.org/smf_api_2
   Unpack smf_api_2 archive.
   See the "license.txt" file for details of the Simple Machines license.

2) Move smf_api_2.php, smf_api_2_subs.php to your smf root.
   (Move smf_api_2_examples.php if you want to see demo)

3) Include smf_api_2.php in your php code.

   If you need something from current or next release of smf_api.php you can include both.

    require_once (dirname(__FILE__) . '/smf_api.php');
    require_once (dirname(__FILE__) . '/smf_api_2.php');

   In this case smf_api_2.php extends functionality of smf_api.php.
   If you do not need functions from smf_api.php you may use only smf_api_2.php.

    require_once (dirname(__FILE__) . '/smf_api_2.php');

See smf_api_2_examples.php for usage.

   Advanced 

2) Move smf_api_2.php, smf_api_2_subs.php to directory of your choice.
3) Define global $smf_boarddir; and set it to smf root.
4) Include smf_api_2.php in your php code.

    global $smf_boarddir;
    $smf_boarddir = 'path to your smf root';
    require_once ('path to your directory' . '/smf_api_2.php');

You may see advanced usage of smf_api_2.php function calls in Drupal smfforum.module code.

Install first locally and ensure that it works as you expect.

Use at you risk on production site.

------------------------------------------------------------------------------
Copyright 2006-2010 by:
 Vadim G.B. (http://vgb.org.ru)
 Christian López Espínola (http://universo.emergya.es/espacios/clopez)
Some code from Simple Machines Forum. Distributed with permission.
------------------------------------------------------------------------------


