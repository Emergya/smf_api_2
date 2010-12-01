<?php
#require(dirname(__FILE__) . '/smf_api.php');
require(dirname(__FILE__) . '/smf_api_2.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title> << :: SMF smf_api_2.php 1.1.4 :: >> </title><?php

	echo '
		<meta http-equiv="Content-Type" content="text/html; charset=', $smf_settings['global_character_set'], '" />
		<link rel="stylesheet" type="text/css" href="', $smf_settings['theme']['default_theme_url'], '/style.css" />
		<script language="JavaScript" type="text/javascript" src="', $smf_settings['theme']['default_theme_url'], '/script.js"></script>
		<style type="text/css">
			body
			{
				margin: 1ex;
			}';

	if ($smf_settings['browser']['needs_size_fix'])
		echo '
			@import(', $smf_settings['theme']['default_theme_url'], '/fonts-compat.css);';

	echo '
		</style>';

?>
	</head>
	<body>
			<h1>SMF smf_api_2.php Functions</h1>
			Current Version: 1.1.4<br />
			<br />
			This file is used to demonstrate the capabilities of smf_api_2.php using PHP include functions.<br />
			The examples show the include tag, then the results of it. Examples are separated by horizontal rules.<br />

		<hr />

			<br />
			To use smf_api_2.php in your page add at the very top of your page before the &lt;html&gt; tag on line 1:<br />
			<div style="font-family: monospace;">
				&lt;?php require(&quot;<?php echo addslashes($smf_user_info['is_admin'] ? realpath($boarddir . '/smf_api_2.php') : 'smf_api_2.php'); ?>&quot;); ?&gt;
			</div>
			<br />

		<hr />

			<h3>Recent Topics Function: &lt;?php smf_api_recent_topics(); ?&gt;</h3>
			<?php smf_api_recent_topics(8, null, "<ul>", " ", "echo"); flush(); ?>

		<hr />

			<h3>Recent Posts Function: &lt;?php smf_api_recent_posts(); ?&gt;</h3>
			<?php smf_api_recent_posts(8, null, "<ul>", " ", "echo"); flush(); ?>

		<hr />

			<h3>Top Poster Function: &lt;?php smf_api_topposter(); ?&gt;</h3>
			<?php smf_api_topposter(5, "echo"); flush(); ?>

		<hr />

			<h3>Board Stats: &lt;?php smf_api_board_stats(); ?&gt;</h3>
			<?php smf_api_board_stats("echo"); flush(); ?>

		<hr />

			<h3>Who's Online Function: &lt;?smf_api_whos_online(); ?&gt;</h3>
			<?php smf_api_whos_online(99, "echo"); flush(); ?>

		<hr />

			<h3>Personal messages: &lt;?smf_api_pm(); ?&gt;</h3>
			<?php smf_api_pm("echo"); flush(); ?>

		<hr />

			<h3>Some notes on usage</h3>
			All the functions have an output method parameter.  This can either be &quot;empty string (or omitted)&quot; (the default), &quot;echo&quot; or &quot;array&quot;.<br />
			If it is &quot;empty string (or omitted)&quot;, the function will just return output string.<br />
			If it is &quot;echo&quot;, the function also will echo output string.<br />
			If it is &quot;array&quot;, it might return an array containing information about the requested task.<br />
			For example, it might return a list of topics for smf_api_recent_topics.<br />
			Note, that parameter &quot;echo&quot; not default and must be set explicitly.<br />
      <hr />
      Copyright 2006-2008 by:     Vadim G.B. (http://vgb.org.ru)<br />
      Some code from Simple Machines Forum. Distributed with permission.<br />
      Modified  2006-2008 by:     Vadim G.B. (http://vgb.org.ru)<br />
			<br />
		<hr />
		<br />
	</body>
</html>