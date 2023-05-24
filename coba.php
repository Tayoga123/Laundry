<?php
$data = ['cp_price' => rand(1,20),'cp_cprice' => rand(1,50)];

$A = $data['cp_price'];
$B = $data['cp_cprice'];

$nilai = ($A/$B)*100;

/*
 karena saya mendapatkan nilai pecahan, maka saya mau dia ngebuletin aja,
 pake fungsi ceil, saya simpan di satu variable agar menghemat saja...
*/ 
$nilai = ceil($nilai);
$nilai = $nilai;
/*
 saya buat variable color disini untuk nampungnya
*/
$color;

/*
 jika variable nilai value nya lebih dari 15 maka 
 masuk di kondisi true
 jika tidak masuk di kondisi else
*/
if ($nilai > 15) {
	$color = "style='background-color: gray;'";
}else{
	$color = "style='background-color: blue;'";
}

?>

<table border=2>	
<tr>
	<td <?= $color ?> > <?= $data['cp_price']; ?> </td>
	<td <?= $color ?> > <?= $data['cp_cprice']; ?> </td>
</tr>