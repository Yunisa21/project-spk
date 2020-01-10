<?php
class Alternatif {
	private $conn;
	private $table_name = "data_alternatif";

	public $id_alternatif;
	public $no_kost;
	public $nama_kost;
	public $nama_pemilik_kost;
	public $alamat;
	public $harga;
	public $keterangan;
	public $gambar;
	public $hasil_akhir;
	
	//public $periode;

	public function __construct($db) {
		$this->conn = $db;
	}
	
	function insert() {
		$query = "INSERT INTO {$this->table_name} VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id_alternatif);
		$stmt->bindParam(2, $this->no_kost);
		$stmt->bindParam(3, $this->nama_kost);
		$stmt->bindParam(4, $this->nama_pemilik_kost);
		$stmt->bindParam(5, $this->alamat);
		$stmt->bindParam(6, $this->harga);
		$stmt->bindParam(7, $this->keterangan);
		$stmt->bindParam(8, $this->gambar);
		$stmt->bindParam(9, $this->hasil_akhir);
		
		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	function readAll() {
		$query = "SELECT * FROM {$this->table_name} ORDER BY id_alternatif ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}

	function readByFilter() {
		$query = "SELECT * FROM {$this->table_name} ORDER BY id_alternatif";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}

	function countByFilter() {
		$query = "SELECT * FROM {$this->table_name} ORDER BY id_alternatif";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt->rowCount();
	}

	function readAllWithNilai() {
		$query = "SELECT *, b.id_alternatif.
				FROM {$this->table_name} a
					JOIN kost_awal b ON a.id_alternatif=b.id_alternatif
				WHERE a.id_alternatif IN (SELECT id_alternatif FROM kost_awal)
				ORDER BY a.id_alternatif";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function readByRank() {
		$query = "SELECT * FROM {$this->table_name} ORDER BY hasil_akhir DESC
				LIMIT 0,3";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function countAll(){
		$query = "SELECT * FROM {$this->table_name} ORDER BY id_alternatif ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt->rowCount();
	}

	function readOne(){
		$query = "SELECT * FROM {$this->table_name} WHERE id_alternatif=? LIMIT 0,1";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $row["id_alternatif"];
		$this->no_kost = $row["no_kost"];
		$this->nama_kost = $row["nama_kost"];
		$this->nama_pemilik_kost = $row["nama_pemilik_kost"];
		$this->alamat = $row["alamat"];
		$this->harga = $row["harga"];
		$this->keterangan = $row["keterangan"];
		$this->hasil_akhir = $row["hasil_akhir"];
		$this->gambar = $row["gambar"];
	}

	function readOneByNik(){
		$query = "SELECT * FROM {$this->table_name} WHERE id_alternatif=? LIMIT 0,1";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id_alternatif);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $row["id_alternatif"];
		$this->no_kost = $row["no_kost"];
		$this->nama_kost = $row["nama_kost"];
		$this->nama_pemilik_kost = $row["nama_pemilik_kost"];
		$this->alamat = $row["alamat"];
		$this->harga = $row["harga"];
		$this->keterangan = $row["keterangan"];
		$this->hasil_akhir = $row["hasil_akhir"];
		$this->gambar = $row["gambar"];
	}

	function readSatu($a) {
		$query = "SELECT * FROM {$this->table_name} WHERE id_alternatif='$a' LIMIT 0,1";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
	function getNewID() {
		$query = "SELECT MAX(id_alternatif) AS code FROM {$this->table_name}";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($row) {
			return $this->genCode($row["code"], 'A', 3);
		} else {
			return $this->genCode($nomor_terakhir, 'A', 3);
		}
	}

	function genCode($latest, $key, $chars = 0) {
    $new = intval(substr($latest, strlen($key))) + 1;
    $numb = str_pad($new, $chars, "0", STR_PAD_LEFT);
    return $key . $numb;
	}

	function genNextCode($start, $key, $chars = 0) {
    $new = str_pad($start, $chars, "0", STR_PAD_LEFT);
    return $key . $new;
	}

	function update() {
		$query = "UPDATE {$this->table_name}
				SET
					id_alternatif = :id_alternatif,
					no_kost = :no_kost,
					nama_kost = :nama_kost,
					nama_pemilik_kost = :nama_pemilik_kost,
					alamat = :alamat,
					harga = :harga,
					keterangan = :keterangan,
					gambar = :gambar,
					hasil_akhir = :hasil_akhir
				WHERE
					id_alternatif = :id_alternatif";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':id_alternatif', $this->id);
		$stmt->bindParam(':no_kost', $this->no_kost);
		$stmt->bindParam(':nama_kost', $this->nama_kost);
		$stmt->bindParam(':nama_pemilik_kost', $this->nama_pemilik_kost);
		$stmt->bindParam(':alamat', $this->alamat);
		$stmt->bindParam(':harga', $this->harga);
		$stmt->bindParam(':keterangan', $this->keterangan);
		$stmt->bindParam(':gambar', $this->gambar);	
		$stmt->bindParam(':hasil_akhir', $this->hasil_akhir);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	function delete() {
		$query = "DELETE FROM {$this->table_name} WHERE id_alternatif = ?";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
		if ($result = $stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	function hapusell($ax) {
		$query = "DELETE FROM {$this->table_name} WHERE id_alternatif in $ax";
		$stmt = $this->conn->prepare($query);
		if ($result = $stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
