<?php
$industries = array('financial', 'it', 'media', 'automotive', 'machinery', 'energy', 'retail', 'building', 'other');
$value = '';
if (isset($_POST['industry'])) {
	$value = $_POST['industry'];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Industry Survey</title>
</head>
<body>
<?php if (!isset($_POST['industry'])): ?>
<h1>Industry Survey</h1>
<form action="git_commit_study.php" method="POST">
<input type="radio" name="industry" value="FINANCIAL" checked>FINANCIAL
<input type="radio" name="industry" value="IT">IT
<input type="radio" name="industry" value="MEDIA">MEDIA
<input type="radio" name="industry" value="AUTOMOTIVE">AUTMOTIVE
<input type="radio" name="industry" value="MACHINERY">MACHINERY
<input type="radio" name="industry" value="ENERGY">ENERGY
<input type="radio" name="industry" value="RETAIL">RETAIL
<input type="radio" name="industry" value="BUILDING">BUILDING
<input type="radio" name="industry" value="OTHER">OTHER
<br>
<input type="submit" value="submit">
</form>
<?php else: ?>
<?php echo 'You are interested in ' . $value . ' industry.'; ?>
<br>
<?php echo 'Thank you for your cooperation with this survey.';?>
<?php endif; ?>
</body>
</html>
