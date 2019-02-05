<?php 
$account = "085298691292"; // nomor ovo
$access = "8089b4cc1d6395297cd1865582aca7ede0e47ba8"; // access ovo

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
