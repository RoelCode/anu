<?php 
$account = "0895806335791"; // nomor ovo
$access = "65450de5b3640a5fa7ed62972d284ec982559c74"; // access ovo
$amount = 10000; // jumlah tf (bisa rp1)
$transfer_to = "085298691292"; // nomor ovo tumbal

$max=30; //akan otomatis close apabila sudah max

$i=0;
while ($i < $max) {
	$tf = json_decode(file_get_contents("http://yvelynette17.id/ovo/transfer.php?phone_number=$account&amount=$amount&access_code=$access&to_account=$transfer_to"));
	if($tf->error == false)
	{
		$i++;
		echo "[SUCCESS] " . $tf->message . " [$i]" . "\n";
	} else {
		echo "[FAILED] " . $tf->message . "\n";
	}
}
?>
