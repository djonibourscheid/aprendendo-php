<?php
$nome = 'campo"> <script>alert("Oi");</script>';
?>

<input type="text" name="<?php echo addslashes($nome); ?>"/>

<input type="text" name="<?php echo htmlentities($nome); ?>"/>