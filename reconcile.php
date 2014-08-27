<?php
/**
 *	Reconcile
 *
 *	Contains information about how reconcile works, how to request it and which commands it has.
 *
 *	@package	bots.zarth.us
 *	@author		Zarthus <zarthus@zarth.us>
 *	@link		https://github.com/Zarthus/bots.zarth.us
 *	@license	MIT - View http://zarth.us/licenses/zarth.us or the LICENSE.md file in the github repository
 *	@since		25/08/2014
 */
define("USER_PATH", "Reconcile Bot Information - reconcile.php");
require_once('includes/php/init.php');
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$web['description'] = 'All about the Reconcile IRC Bot';
		$web['theme'] = 'zarthus-theme.min.css';

		include(HTMLDIR . '/head.php');
	?>

</head>

<body>
	<?php include(HTMLDIR . '/navbar.php'); ?>

	<div class="container content">
		<div class="page-header jumbotron">
			<h1>Reconcile</h1>
			<hr>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h3>Reconcile</h3>
				<p>
					Reconcile is found on <a href="esper.net">irc.esper.net</a>, it is an utility bot made by myself.
				</p>
				<p>
					Reconcile's github page can be found <a href="https://github.com/zarthus/reconcile">here.</a>
				</p>
			</div>
				<div class="col-md-offset-2 col-md-8">
					<h3>Request Reconcile</h3>
					<p>
						To request Reconcile for your channel on EsperNet, ping <code>Zarthus</code> in <code>#zarthus</code>.
						Alternatively, just use <code>/invite Reconcile #channel</code>. My configuration of Reconcile will make it automatically add your channel to its autojoin.
					<br />
					Reconcile will automatically part empty channels.
				</p>
			</div>
			<div class="col-md-offset-2 col-md-8">
				<h3>Commands</h3>
				<p>
					This is directly from the command <code>gistcommands</code> and can be viewed
					<a href="https://gist.github.com/anonymous/c4a1b4785da184e50a32"> here</a>.
					<br />
					These commands are from <code>v1.0</code>
				</p>
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
