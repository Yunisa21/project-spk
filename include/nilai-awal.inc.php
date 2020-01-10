<?php
class NilaiAwal {
	private $conn;
	private $table_name = "kost_awal";

	public $id_kost_awal;
	public $id_alternatif;
	public $nama;
	public $harga_kost;

	public function __construct($db) {
		$this->conn = $db;
	}

	function insert() {
		$query = "INSERT INTO {$this->table_name} VALUES(NULL,?,?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id_alternatif);
		$stmt->bindParam(2, $this->nama);
		$stmt->bindParam(3, $this->harga_kost);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	function readAll() {
		$query = "SELECT * FROM {$this->table_name} ORDER BY id_kost_awal ASC";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function readOne() {
		$query = "SELECT * FROM {$this->table_name} WHERE id_kost_awal=? LIMIT 0,1";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id_kost_awal);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->id_kost_awal = $row['id_kost_awal'];
		$this->id_alternatif = $row['id_alternatif'];
		$this->nama = $row['nama'];
		$this->harga_kost = $row['harga_kost'];
	}

	function readByAlternatif() {
		$query = "SELECT * FROM {$this->table_name} WHERE id_alternatif=?";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id_alternatif);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($row) {
			$this->id_kost_awal = $row['id_kost_awal'];
			$this->id_alternatif = $row['id_alternatif'];
			$this->nama = $row['nama'];
			$this->harga_kost = $row['harga_kost'];
		} else {
			$this->id_kost_awal = false;
		}
	}
	function countAll() {
		$query = "SELECT * FROM {$this->table_name} ORDER BY id_kost_awal ASC";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt->rowCount();
	}

	function update() {
		$query = "UPDATE {$this->table_name}
				SET
					id_alternatif = :id_alternatif,
					nama = :nama,
					harga_kost = :harga_kost,
				WHERE
					id_kost_awal = :id_kost_awal";

		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':id_alternatif', $this->id_alternatif);
		$stmt->bindParam(':nama', $this->nama);
		$stmt->bindParam(':harga_kost', $this->harga_kost);
		// execute the query
		/*if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}*/

	// delete the product
	function delete() {
		$query = "DELETE FROM {$this->table_name} WHERE id_kost_awal=?";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id_kost_awal);

		if ($result = $stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	function hapusell($ax) {
		$query = "DELETE FROM {$this->table_name} WHERE id_kost_awal in $ax";
		$stmt = $this->conn->prepare($query);
		if ($result = $stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
	}
	}