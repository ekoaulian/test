<!DOCTYPE html>
<html>
<head>
	<title>for</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i=1; $i <=4 ; $i++) : ?> <!-- titik dua = { -->
			<tr>
				<?php for ($j=1; $j <=5 ; $j++) { ?> 
					<td><?= "$i,$j" ?></td>
				<?php } ?>
			</tr>
		<?php endfor ?> <!-- endfor = } -->
		
	</table>

</body>
</html>