<?php 

	class daftar_barang {
		public $nama_daftar_barang,
			   $durasi,
			   $biaya;


		public function __construct( $nama_daftar_barang, $durasi, $biaya ) {
			$this->nama_daftar_barang = $nama_daftar_barang;
			$this->durasi = $durasi;
			$this->biaya = $biaya;
		}

		public function __toString() {
			return $this->nama_daftar_barang . " , " . $this->durasi . " , " . $this->biaya;
		}


	}

	// isinya informasi tentang daftar barang
	$daftar_barang1 = new Daftar_Barang("Laptop Asus", "30 Hari", 500000);
	$daftar_barang2 = new Daftar_Barang("Iphone 11 pro max", "15 Hari", 250000);

	echo "Daftar Barang 1 : " . $daftar_barang1;
	echo "<br>";
	echo "Daftar Barang 2 : " . $daftar_barang2;

	echo "<hr>";

	class DataTransaksi {
		public $nama_user,
			   $jenis,
			   $nominal;


		public function __construct( $nama_user, $jenis, $nominal ) {
			$this->nama_user = $nama_user;
			$this->jenis = $jenis;
			$this->nominal = $nominal;
		}

		// mencetak data transaksi
		public function __toString() {
			return $this->nama_user . " , " . $this->jenis . " , " . $this->nominal;
		}


	}

	// isinya informasi tentang transaksi
	$transaksi1 = new DataTransaksi("Tama", "Beli Barang", 1000000);
	$transaksi2 = new DataTransaksi("Giovani", "Jual Barang", 5000000);

	echo "Transaksi 1 : " . $transaksi1;
	echo "<br>";
	echo "Transaksi 2 : " . $transaksi2;

	echo "<hr>";

	class DataSewa {
		public $nama_user,
			   $waktu,
			   $nominal;


		public function __construct( $nama_user, $waktu, $nominal ) {
			$this->nama_user = $nama_user;
			$this->waktu = $waktu;
			$this->nominal = $nominal;
		}

		// mencetak data sewa
		public function __toString() {
			return $this->nama_user . " , " . $this->waktu . " , " . $this->nominal;
		}


	}

	// isinya informasi tentang sewa
	$sewa1 = new DataSewa("Joko Sutiyo", "3 Hari", 5000000);
	$sewa2 = new DataSewa("Firman Sapitra", "7 Hari", 15000000);

	echo "sewa 1 : " . $sewa1;
	echo "<br>";
	echo "sewa 2 : " . $sewa2;
	

?>