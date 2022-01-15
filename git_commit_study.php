<?php
$industries = array('financial', 'it', 'media', 'automotive', 'machinery', 'energy', 'retail', 'building', 'other');
$value = '';
if (isset($_POST['industries'])) {
	$values = $_POST['industries'];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Industry Survey</title>
</head>
<body>
<?php if (!isset($_POST['industries'])): ?>
<h1>Industry Survey</h1>
<form action="git_commit_study.php" method="POST">
<input type="checkbox" name="industries[]" value="FINANCIAL">FINANCIAL
<input type="checkbox" name="industries[]" value="IT">IT
<input type="checkbox" name="industries[]" value="MEDIA">MEDIA
<input type="checkbox" name="industries[]" value="AUTOMOTIVE">AUTOMOTIVE
<input type="checkbox" name="industries[]" value="MACHINERY">MACHINERY
<input type="checkbox" name="industries[]" value="ENERGY">ENERGY
<input type="checkbox" name="industries[]" value="RETAIL">RETAIL
<input type="checkbox" name="industries[]" value="BUILDING">BUILDING
<input type="checkbox" name="industries[]" value="OTHER">OTHER
<br>
<input type="submit" value="submit">
</form>
<?php else: ?>
<?php echo 'You are intereseted in '; ?>
<br>
<?php foreach ($values as $value): ?>
<?php echo $value; ?>
<br>
<?php endforeach; ?>
<?php echo ' industries. '; ?>
<br>
<?php echo 'Thank you for your cooperation with this survey.';?>
<?php endif; ?>
</body>
</html>
