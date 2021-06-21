CREATE DATABASE tugas_besar_dpw;

-- DROP DATABASE tugas_besar_dpw;

USE tugas_besar_dpw;

CREATE TABLE admin(
	email varchar(150),
	nama varchar(150),
	username varchar(100) PRIMARY KEY,
    password varchar(100),
    alamat varchar(150),
    jenis_kelamin varchar(50),
    no_telp varchar(12)
);

CREATE TABLE siswa(
	no_induk varchar(5) PRIMARY KEY,
	nama_lengkap varchar(150),
    jenis_kelamin varchar(50),
    tempat_lahir varchar(100),
    tgl_lahir Date,
    alamat varchar(350),
    kecamatan varchar(80),
    kab_kota varchar(50),
    kelas varchar(10),
    jurusan varchar(6),
    level int,
    prestasi varchar(150)
);

CREATE TABLE ppdb(
	nomor int PRIMARY KEY auto_increment NOT NULL,
    kegiatan varchar(150),
    tanggal varchar(70),
    tempat varchar(50),
    keterangan varchar(100)
);

INSERT INTO siswa (no_induk, nama_lengkap, jenis_kelamin, tempat_lahir, tgl_lahir, alamat, kecamatan, kab_kota, kelas, jurusan, level, prestasi) VALUES
	("5457", "Nemanja Vidic", "Laki-laki", "Blitar", "2002-04-06", "Pagergunung", "Kesamben", "Blitar", "XII", "MIPA", "2", "Juara 3 Olimpiade TIK Tingkat Provinsi"),
    ("5505", "Marc Marquez", "Laki-laki", "Cervera", "2003-02-17", "Cervera", "Segarra", "Lleida", "XI", "IPS", "1", ""),
    ("5647", "David De Gea", "Laki-laki", "Madrid", "2004-11-07", "El Viso", "Chamartin", "Madrid", "X", "MIPA", "2", "Juara 2 Olimpiade Kimia Tingkat Provinsi"),
    ("5418", "Alex Morgan", "Perempuan", "California", "2002-07-02", "San Gabriel Valley", "San Dimas", "Los Angeles", "XII", "IPS", "1", ""),
    ("5412", "Maria Yuryevna Sharapova", "Perempuan", "Florida", "2001-04-19", "County Seat", "Manataee County", "Bradenton", "XII", "MIPA", "2", "Juara 2 O2SN Tenis tingkat Nasional"),
    ("5511", "Dean Henderson", "Laki-laki", "Whithaven", "2003-03-12", "Lake District", "Copeland", "Cumbria", "XI", "IPS", "1", ""),
    ("5648", "Tobin Heath", "Perempuan", "Morristown", "2004-05-29", "County Seat", "Morris County", "Morristown", "X", "MIPA", "2", "Juara 1 OSN Kimia tingkat Kabupaten"),
    ("5501", "Mason Greenwood", "Laki-laki", "Bradford", "2001-01-01", "Bradford", "Yorkshire", "West Yorkshire", "XII", "MIPA", "2", "Juara 1 FLS2N tingkat Provinsi"),
    ("5622", "Jackie Groenen", "Perempuan", "Tilburg", "2004-12-17", "Heuvelstraat", "Heuvelse Kerk", "Tilburg", "X", "IPS", "1", ""),
    ("5479", "Kirsty Hanson", "Perempuan", "Halifax", "2002-04-17", "Calderdale", "Minster Town", "Halifax", "XII", "IPS", "2", "Juara 3 O2SN Karate tingkat Provinsi");
    
INSERT INTO admin VALUES
	("admin@gmail.com","Graziano Pelle","GrazPel","pele14", "Bandung", "Laki-laki", "08113652797"),
	("ilham10@gmail.com", "Ilham Sinatrio Gumelar", "IlhamSG", "5758", "Blitar", "Laki-laki", "082338367643"),
    ("ferdyhp44@gmail.com", "Ferdy Hahan Pradana", "FerHP", "ferdy22", "Tulungagung", "Laki-laki", "087856725286");

