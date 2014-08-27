<?php
/**
 *	Home
 *
 *	Index page for zarth.us
 *
 *	@package	zarth.us
 *	@author		Zarthus <zarthus@zarth.us>
 *	@link		https://github.com/Zarthus/zarth.us
 *	@license	MIT - View http://zarth.us/licenses/zarth.us or the LICENSE.md file in the github repository
 *	@since		18/03/2014
 */
define("USER_PATH", "Home - home.php");
require_once('includes/php/init.php');
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$web['description'] = 'Welcome to ' . $site_name . ', there is no place like home.';
		$web['theme'] = 'zarthus-theme.min.css';

		include(HTMLDIR . '/head.php');
	?>

</head>

<body>
	<?php include(HTMLDIR . '/navbar.php'); ?>

	<div class="container content">
		<div class="page-header jumbotron">
			<h1><a class="no-link-markup" href="http://<?php echo $_SERVER['SERVER_NAME'] ?>">Welcome to <?php echo getSiteName(true) ?></a></h1>
			<hr>
		</div>

		<div class="row">
			<div class="col-md-6 marketing-text">
				<h2>
					<a href="reconcile" class="blog noline"><span class="fa fa-fw fa-heart"></span> Reconcile</a>
				</h2>
				<p>
					Reconcile is my first python project, it's an utility bot for IRC.
                                        Reconcile was created because I wasn't super fond of CloudBot, and wanted to fix those things I thought that lacked myself.
				</p>
			</div>

			<div class="col-md-6 marketing-text">
				<h2>
					<a href="elissa"><span class="fa fa-fw fa-cloud"></span> Elissa - CloudBot Legacy</a>
				</h2>
				<p>Elissa is my instance of CloudBot legacy.</p>
			</div>
		</div>
		<hr>
		<footer>
			<?php include_once(HTMLDIR . '/footer.php') ?>

		</footer>
	</div><!-- /.container -->

	<?php include(HTMLDIR . '/body.php'); ?>
</body>
</html>
