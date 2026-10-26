1 fungsi gym membership class adalah untuk menampung variable membership

2 fungsi contructs pada aplikasi ini adalah untuk menrangkai kodingan seperti apa yang ingin diproses pada kasus ini nama yg ingin diisi kalo kosong maka akan tampil tulisan invalid nama tidak boleh kosong
dan juga kategori membershipnya apakah basic premium dan juga vip

3 karena kita tidakk ingin proses properti yang ada didalam function php keluar dari sistem gymmembershiptype

4 karena di index ada fungsi 
$member->getMemberName()
$membership->getMembershipType()
$duration->getDuration()

5 yang terjadi ketika durasi bernilai nol maka akan muncuk tulisan tidak valid

6 jenis membership perlu divalidasi untuk menentukan orang tersebut masuk ke golongan mana apakah basic, premium ataupun vip

7 pertama memanggil gymmember.php
lalu buat objek berdasarkan data yg ada di index
lalu contruct memvalidasi data apakah sesuai 
seperti nama, membership type, dan juga durasi 39 
kalo udah disimpan ke 
memberName = $memberName;
membershipType = $membershipType;
$this->Duration = $Duration;
lalu hasilnya dipanggil dengan public function get untuk mengembalikan fungsinya ke awal 