<?php
//menggunakan dasar fungsi die()
if (file_exists('file_important.txt')) {
    echo "file ditemukan.";
} else {
  die("error: file tidak ditemukan.tunggu beberapa saat");
}
//menambahkan status http
if (!user_is_logged_in()) {
    header('http/1.1 403 forbidden');
    die("error: kamu tidak memiliki ekses");
}
//menghubungkan dengan fungsi exit()
if ($koneksi_database == false) {
exit(1); // menghentikan skrip dengan kode keluar 1
}
//memahami output buffering
ob_start();
echo "ini adalah output buffer.";

//kondisi tertentu
if ($error) {
    ob_end_clean(); // bersihkan output buffer
    die("skrip dihentikan karena error.");
}
