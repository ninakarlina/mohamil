-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2019 pada 17.37
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mohamil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_tema`, `judul`, `tgl`, `gambar`, `isi_artikel`) VALUES
(15, 6, 'judul', '2019-07-08', '1562608224ktp.jpg', 'isi'),
(16, 7, 'ff', '2019-07-08', '1562608672ktp.jpg', 'ff'),
(17, 7, 'judul', '2019-07-16', '1563300492ktp.jpg', 'isisis'),
(18, 9, 'Ikuti Kelas Ibuu  uu', '2019-07-16', '1563301100hamil.jpg', 'Ibu mendapatkan informasi dan saling bertukar informasi mengenai kehamilan, persalinan, nifas serta perawatan bayi baru lahir. (sumber:Buku KIA)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidan`
--

CREATE TABLE `bidan` (
  `id_bidan` int(10) NOT NULL,
  `nama_bidan` varchar(50) NOT NULL,
  `alamat_bidan` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tlp_bidan` varchar(15) NOT NULL,
  `tempat_lahir_bidan` varchar(20) NOT NULL,
  `tgl_lahir_bidan` date NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidan`
--

INSERT INTO `bidan` (`id_bidan`, `nama_bidan`, `alamat_bidan`, `email`, `tlp_bidan`, `tempat_lahir_bidan`, `tgl_lahir_bidan`, `id_user`) VALUES
(2, 'Fikriiiiii', 'Lohbener', 'fikri12@gmail.com', '0898867368734', 'Indramayu', '2019-08-12', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_kes_ibu`
--

CREATE TABLE `catatan_kes_ibu` (
  `id_kes_ibu` int(10) NOT NULL,
  `hpht` date NOT NULL,
  `htp` date NOT NULL,
  `lila` varchar(5) NOT NULL,
  `tb` varchar(5) NOT NULL,
  `kontrasepsi_seb_hamil` varchar(15) NOT NULL,
  `riwayat_penyakit` varchar(30) NOT NULL,
  `riwayat_alergi` varchar(30) NOT NULL,
  `jml_persalinan` int(5) NOT NULL,
  `jml_abortus` int(5) NOT NULL,
  `jml_anak_hidup` int(5) NOT NULL,
  `jml_premature` int(5) NOT NULL,
  `jarak_hamil_persalinan_terakhir` date NOT NULL,
  `status_imun_akhir` int(5) NOT NULL,
  `penolong_persalinan` varchar(20) NOT NULL,
  `cara_persalinan_akhir` varchar(20) NOT NULL,
  `id_ibu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatan_kes_ibu`
--

INSERT INTO `catatan_kes_ibu` (`id_kes_ibu`, `hpht`, `htp`, `lila`, `tb`, `kontrasepsi_seb_hamil`, `riwayat_penyakit`, `riwayat_alergi`, `jml_persalinan`, `jml_abortus`, `jml_anak_hidup`, `jml_premature`, `jarak_hamil_persalinan_terakhir`, `status_imun_akhir`, `penolong_persalinan`, `cara_persalinan_akhir`, `id_ibu`) VALUES
(9, '2019-09-10', '2020-06-17', '8', '89', 'h', 'h', 'h', 7, 7, 7, 7, '2019-06-30', 0, 'h', 'h', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_percakapan`
--

CREATE TABLE `detail_percakapan` (
  `id_pesan` int(11) NOT NULL,
  `id_kirim` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` datetime NOT NULL,
  `read_bidan` varchar(15) NOT NULL,
  `read_ibu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_percakapan`
--

INSERT INTO `detail_percakapan` (`id_pesan`, `id_kirim`, `pesan`, `waktu`, `read_bidan`, `read_ibu`) VALUES
(5, 2, 'tesss', '2019-08-29 08:18:03', 'Sudah', 'Belum'),
(6, 2, 'tesss', '2019-08-29 08:32:45', 'Sudah', 'Belum'),
(5, 6, 'tes Balik', '2019-08-29 04:18:00', 'Sudah', 'Sudah'),
(5, 2, 'sasasa sasa', '2019-08-29 08:57:40', 'Sudah', 'Belum'),
(5, 2, 'tryuyui kuk hk', '2019-08-29 08:57:56', 'Sudah', 'Belum'),
(6, 2, '687biukjhk kk ', '2019-08-29 08:58:18', 'Sudah', 'Belum'),
(6, 2, '687biukjhk kk ', '2019-08-29 09:46:23', 'Sudah', 'Belum'),
(5, 6, 'tes ah', '2019-08-29 06:22:18', 'Sudah', 'Sudah'),
(5, 6, 'dari ibu', '2019-08-29 12:56:47', 'Sudah', 'Belum'),
(5, 2, 'apa sih...', '2019-08-29 15:27:48', 'Sudah', 'Belum'),
(5, 6, 'ga pa2', '2019-08-29 15:27:59', 'Sudah', 'Belum'),
(5, 2, 'jalan2 yukkk', '2019-08-29 15:28:15', 'Sudah', 'Belum'),
(5, 6, 'ga mau ah..', '2019-08-29 15:28:23', 'Sudah', 'Belum'),
(5, 2, 'tesssghgjhj kjkj', '2019-09-01 06:05:15', 'Sudah', 'Belum'),
(5, 6, 'dh jhkh l l', '2019-09-01 06:05:28', 'Sudah', 'Belum'),
(6, 2, 'cek', '2019-09-02 04:07:10', 'Sudah', 'Belum'),
(6, 2, 'chat', '2019-09-02 04:46:35', 'Sudah', 'Belum'),
(7, 2, 'liss', '2019-09-02 17:04:49', 'Sudah', 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu_hamil`
--

CREATE TABLE `ibu_hamil` (
  `id_ibu` int(10) NOT NULL,
  `kode_ibu` varchar(10) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ibu` varchar(20) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `kehamilan_ke` int(5) NOT NULL,
  `agama_ibu` enum('Islam','Katholik','Protestan','Hindu','Budha') NOT NULL,
  `pendidikan_ibu` varchar(30) NOT NULL,
  `goldar_ibu` enum('A','B','AB','O') NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `nama_suami` varchar(30) NOT NULL,
  `tempat_lahir_suami` varchar(20) NOT NULL,
  `agama_suami` enum('Islam','Katholik','Protestan','Hindu','Budha') NOT NULL,
  `pendidikan_suami` varchar(30) NOT NULL,
  `goldar_suami` enum('A','B','AB','O') NOT NULL,
  `pekerjaan_suami` varchar(30) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `hpht` date NOT NULL,
  `htp` date NOT NULL,
  `lila` varchar(5) NOT NULL,
  `tb` varchar(5) NOT NULL,
  `kontrasepsi_seb_hamil` varchar(20) NOT NULL,
  `riwayat_penyakit` varchar(50) NOT NULL,
  `riwayat_alergi` varchar(50) NOT NULL,
  `jml_persalinan` varchar(5) NOT NULL,
  `jml_abortus` varchar(5) NOT NULL,
  `jml_anak_hidup` varchar(5) NOT NULL,
  `jml_premature` varchar(5) NOT NULL,
  `jarak_hamil_persalinan_terakhir` date NOT NULL,
  `status_imun_akhir` varchar(10) NOT NULL,
  `penolong_persalinan` varchar(20) NOT NULL,
  `cara_persalinan_akhir` varchar(20) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibu_hamil`
--

INSERT INTO `ibu_hamil` (`id_ibu`, `kode_ibu`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `kehamilan_ke`, `agama_ibu`, `pendidikan_ibu`, `goldar_ibu`, `pekerjaan_ibu`, `nama_suami`, `tempat_lahir_suami`, `agama_suami`, `pendidikan_suami`, `goldar_suami`, `pekerjaan_suami`, `alamat_rumah`, `kecamatan`, `kabupaten`, `no_tlp`, `hpht`, `htp`, `lila`, `tb`, `kontrasepsi_seb_hamil`, `riwayat_penyakit`, `riwayat_alergi`, `jml_persalinan`, `jml_abortus`, `jml_anak_hidup`, `jml_premature`, `jarak_hamil_persalinan_terakhir`, `status_imun_akhir`, `penolong_persalinan`, `cara_persalinan_akhir`, `id_user`) VALUES
(4, 'PB004', 'Lida', 'im', '2019-09-01', 3, 'Islam', '-', 'A', '-', 'nu', 'im', 'Islam', '-', 'A', '-', '-', '-', '-', '098', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `percakapan`
--

CREATE TABLE `percakapan` (
  `id_pesan` int(11) NOT NULL,
  `id_ibu` int(11) NOT NULL,
  `id_bidan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `percakapan`
--

INSERT INTO `percakapan` (`id_pesan`, `id_ibu`, `id_bidan`) VALUES
(5, 6, '2'),
(6, 8, '2'),
(7, 12, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periksa_ibu`
--

CREATE TABLE `tb_periksa_ibu` (
  `id_periksa_ibu` int(10) NOT NULL,
  `id_ibu` int(10) NOT NULL,
  `berat_badan` int(5) NOT NULL,
  `umur_kehamilan` int(5) NOT NULL,
  `letak_janin` varchar(20) NOT NULL,
  `tinggi_fundus` int(5) NOT NULL,
  `keluhan` varchar(20) NOT NULL,
  `tekanan_darah` varchar(10) NOT NULL,
  `denyut_jantung_bayi` int(5) NOT NULL,
  `kaki_bengkak` enum('Ya','Tidak') NOT NULL,
  `hasil_lab` varchar(20) NOT NULL,
  `tindakan` varchar(30) NOT NULL,
  `nasehat` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_bidan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_persalinan`
--

CREATE TABLE `tb_persalinan` (
  `id_persalinan` varchar(5) NOT NULL,
  `id_bidan` int(10) NOT NULL,
  `id_ibu` int(10) NOT NULL,
  `berat_bayi` int(5) NOT NULL,
  `lingkar_kepala` int(5) NOT NULL,
  `nama_bayi` varchar(30) NOT NULL,
  `anak_ke` int(5) NOT NULL,
  `jam_lahir` time NOT NULL,
  `tgl_lahir_bayi` date NOT NULL,
  `tempat_lahir_bayi` varchar(20) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `panjang_bayi` int(5) NOT NULL,
  `jenis_persalinan` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(10) NOT NULL,
  `tema` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tema`
--

INSERT INTO `tema` (`id_tema`, `tema`) VALUES
(8, 'Tips Cepat Hamil'),
(9, 'Tips Menjaga Kehamilann');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'bidan', 'bidan', 'bidan'),
(4, 'nina', '12345', 'ibu'),
(6, 'lisda', '123', 'ibu'),
(10, 'gin', 'gin', 'ibu'),
(11, 'n', 'n', 'ibu'),
(12, 'lida', '123', 'ibu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indeks untuk tabel `catatan_kes_ibu`
--
ALTER TABLE `catatan_kes_ibu`
  ADD PRIMARY KEY (`id_kes_ibu`);

--
-- Indeks untuk tabel `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indeks untuk tabel `percakapan`
--
ALTER TABLE `percakapan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_periksa_ibu`
--
ALTER TABLE `tb_periksa_ibu`
  ADD PRIMARY KEY (`id_periksa_ibu`);

--
-- Indeks untuk tabel `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `bidan`
--
ALTER TABLE `bidan`
  MODIFY `id_bidan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `catatan_kes_ibu`
--
ALTER TABLE `catatan_kes_ibu`
  MODIFY `id_kes_ibu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  MODIFY `id_ibu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `percakapan`
--
ALTER TABLE `percakapan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_periksa_ibu`
--
ALTER TABLE `tb_periksa_ibu`
  MODIFY `id_periksa_ibu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
