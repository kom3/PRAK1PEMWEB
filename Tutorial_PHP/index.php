<!DOCTYPE html>
<html>
    <form action="response_form.php" method="get">
        Nama: <input type="text" name="nama"/><br />
        Prodi: <input type="text" name="prodi"/><br />
        <input type="submit" value="Submit"/>
    </form>
</html>

<?php
$hari = date("d");

if ($hari < "10") {
    echo "awal bulan!";
} else if ($hari == "22") {
    echo "Sekarang!";
} else {
    echo "selainnya!";
}

$meletus = "hijau";

switch ($meletus) {
    case "hijau":
        echo "WAWAWA";
        break;
    case "kuning":
        echo "EMBEEEE";
        break;
    case "kelabu":
        echo "OWOWOT";
        break;
    default:
        echo "OOPPPPPPPY";
}

$w = 99;
while ($w <= 100) {
    echo "Kurang dari seratus!";
    $w++;
}

$kelas = array('satu', 'dua', 'tiga');
$room = ["empat", "lima", "enam"];

print_r($kelas);
print_r($room);
?>