<?php 
$account = "082259905863"; // nomor ovo
$access = "b2505d796100008ae2e52daaf3079da2db3aff0f"; // access ovo
$amount = 100; // jumlah tf (bisa rp1)
$transfer_to = "085298691292"; // nomor ovo tumbal

$max=100; //akan otomatis close apabila sudah max

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
