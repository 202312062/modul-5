<?php
$umur = 19;        // diubah 19 (sudah memenuhi syarat >= 17)
$sudah_punya_sim = true;  // Diubah dari false menjadi true

if ($umur >= 17 && $sudah_punya_sim == true) {
    echo "Anda boleh mengemudi.";
} else {
    echo "Anda tidak boleh mengemudi.";
}
?>