<?php
	$title = "RFC 822 Demo";
	$no_homelink = 1;
	include('../../head.txt');

	include('rfc822.php');
?>

<p class="homelink"><a href="/rfc822-eld/">&laquo; Back to project homepage</a></p>

<h1>RFC 822 Demo</h1>

<p>Enter an email address to test:</p>

<form action="demo.php" method="get">
<input type="text" name="e" value="<?php echo HtmlSpecialChars($_GET['e'])?>" style="width: 400px" />
<input type="submit" value="Go" />
</form>

<?php if (strlen($_GET['e'])){ ?>

<hr />

<p><b>Address:</b> <?php echo HtmlSpecialChars($_GET['e'])?></p>
<p><b>Result (Public Internet):</b>
<?php if (is_valid_email_address($_GET['e'],array('public_internet' => true))){ ?>
	<span style="color: green">Valid</span>
<?php }else{ ?>
	<span style="color: red">Invalid</span>
<?php }?>
</p>
<p><b>Result (Strict):</b>
<?php if (is_valid_email_address($_GET['e'],array('public_internet' => false))){ ?>
	<span style="color: green">Valid</span>
<?php }else{ ?>
	<span style="color: red">Invalid</span>
<?php }?>
</p>

<?php } ?>


<?php
	include('../../foot.txt');
?>
