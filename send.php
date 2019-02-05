<?php 
$account = "081284320533"; // nomor ovo
$access = "5e52264cba9436e39f7c1cd074e9e14ca81d9bcf"; // access ovo
$amount = 5; // jumlah tf (bisa rp1)
$transfer_to = "085298691292"; // nomor ovo tumbal

$max=205; //akan otomatis close apabila sudah max

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
