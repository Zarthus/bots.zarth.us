<?php
/**
 *	Elissa
 *
 *	Contains information about how Elissa  works, how to request it and which commands it has.
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
		$web['description'] = 'All about the Elissa Cloudbot IRC Bot';
		$web['theme'] = 'zarthus-theme.min.css';

		include(HTMLDIR . '/head.php');
	?>

</head>

<body>
	<?php include(HTMLDIR . '/navbar.php'); ?>

	<div class="container content">
		<div class="page-header jumbotron">
			<h1>Elissa</h1>
			<hr>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<h3>Elissa</h3>
				<p>
					Elissa is found on <a href="esper.net">irc.esper.net</a>, it is an utility bot made by <a href="https://github.com/cloudev/cloudbot/blob/develop/CONTRIBUTORS">a bunch of lovely people.</a>
					<br />
					CloudBots official channel is also on EsperNet, simply join <code>#cloudbot</code>
					<br />
					The instance of CloudBot I run is called 'Refresh', which runs on python 3.4.
				</p>
				<p>
					Elissa's github page can be found <a href="https://github.com/cloudbotirc/cloudbot">here.</a>
				</p>
			</div>
			<div class="col-md-offset-2 col-md-8">
				<h3>Request Elissa</h3>
				<p>
					To request Elissa for your channel on EsperNet, ping <code>Zarthus</code> in <code>#zarthus</code>,
					For temporary joins, just use <code>/invite Elissa #channel</code>.
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
