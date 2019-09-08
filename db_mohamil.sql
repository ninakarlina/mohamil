-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2019 pada 08.39
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
  `judul` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_tema`, `judul`, `tgl`, `gambar`, `isi_artikel`) VALUES
(20, 9, 'Kehamilan', '2019-09-04', '1567709719surat-nikah.jpg', '<p><strong>Perbanyak istirahat.</strong> Ketidaknyamanan yang terjadi pada masa ini bisa menguras energimu. Namun, cobalah untuk memperbanyak waktu istirahat meski kondisi tubuhmu saat ini sangat sulit untuk hal itu. Setidaknya dengan kondisi tubuh fit dan berenergi,</p>\r\n\r\n<p>Jadi, mulailah untuk tidur malam beberapa jam lebih awal dan sisihkan waktu untuk tidur siang juga, walau hanya berbaring di sofa.</p>\r\n\r\n<p><strong>Belanja keperluan rumah tangga.</strong> Pasca melahirkan, sebagian besar waktumu dan pasangan akan terpakai untuk merawat Si Kecil. Jangankan mengurus keperluan rumah tangga, untuk mengurus keperluan pribadi saja waktumu menjadi sangat terbatas. Oleh karena itu, lebih baik jika kamu manfaatkan masa-masa penantian ini untuk berbelanja keperluan rumah tangga dalam jumlah yang lebih banyak dari belanja bulananmu pada umumnya.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidan`
--

CREATE TABLE `bidan` (
  `id_bidan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_bidan` varchar(50) NOT NULL,
  `alamat_bidan` text NOT NULL,
  `tlp_bidan` varchar(15) NOT NULL,
  `tempat_lahir_bidan` varchar(20) NOT NULL,
  `tgl_lahir_bidan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidan`
--

INSERT INTO `bidan` (`id_bidan`, `id_user`, `nama_bidan`, `alamat_bidan`, `tlp_bidan`, `tempat_lahir_bidan`, `tgl_lahir_bidan`) VALUES
(3, 20, 'Fikri', 'Lohbener', '08987835734', 'indramayu', '2019-09-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_kes_ibu`
--

CREATE TABLE `catatan_kes_ibu` (
  `id_kes_ibu` int(10) NOT NULL,
  `id_ibu` int(10) NOT NULL,
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
  `cara_persalinan_akhir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatan_kes_ibu`
--

INSERT INTO `catatan_kes_ibu` (`id_kes_ibu`, `id_ibu`, `hpht`, `htp`, `lila`, `tb`, `kontrasepsi_seb_hamil`, `riwayat_penyakit`, `riwayat_alergi`, `jml_persalinan`, `jml_abortus`, `jml_anak_hidup`, `jml_premature`, `jarak_hamil_persalinan_terakhir`, `status_imun_akhir`, `penolong_persalinan`, `cara_persalinan_akhir`) VALUES
(10, 5, '2019-09-11', '2020-06-18', '15', '160', 'pil KB', '-', '-', 4, 1, 3, 0, '2019-09-04', 2016, 'Bidan', 'Normal'),
(11, 6, '2019-09-05', '0000-00-00', '25', '160', '-', '-', '-', 2, 0, 2, 0, '2019-09-03', 2017, 'Bidan', 'Normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_periksa`
--

CREATE TABLE `daftar_periksa` (
  `id_pendaftaran` int(10) NOT NULL,
  `id_ibu` int(10) NOT NULL,
  `id_bidan` int(10) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 2, 'liss', '2019-09-02 17:04:49', 'Sudah', 'Belum'),
(8, 14, 'Cek', '2019-09-05 20:39:10', 'Sudah', 'Belum'),
(9, 14, 'yu fikriii', '2019-09-05 20:45:16', 'Sudah', 'Belum'),
(10, 14, 'assalamu\'alaikum bu', '2019-09-06 13:34:48', 'Sudah', 'Belum'),
(10, 17, 'wa\'alaikumussalam, ada yang bisa saya bantu?', '2019-09-06 13:43:04', 'Sudah', 'Belum'),
(10, 14, 'gak jadi bu', '2019-09-06 13:44:06', 'Sudah', 'Belum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu_hamil`
--

CREATE TABLE `ibu_hamil` (
  `id_ibu` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
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
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibu_hamil`
--

INSERT INTO `ibu_hamil` (`id_ibu`, `id_user`, `kode_ibu`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `kehamilan_ke`, `agama_ibu`, `pendidikan_ibu`, `goldar_ibu`, `pekerjaan_ibu`, `nama_suami`, `tempat_lahir_suami`, `agama_suami`, `pendidikan_suami`, `goldar_suami`, `pekerjaan_suami`, `alamat_rumah`, `kecamatan`, `kabupaten`, `no_tlp`) VALUES
(5, 14, 'PB015', 'Anggun', 'Indramayu', '2019-09-02', 2, 'Islam', '-', 'AB', '-', 'Suno', 'Indramayu', 'Islam', 'SMK', 'A', 'Karyawati', 'Ds. Legok', 'Lohbener', 'Indramayu', '08988766676'),
(6, 15, 'PB011', 'Naina', 'indramayu', '1980-09-03', 3, 'Islam', 'sma', 'A', 'irt', 'Reno', 'Indramayu', 'Islam', 'SMK', 'A', 'Karyawan', 'Ds. Krasak', 'Lohbener', 'Indramayu', '08987867867');

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
(7, 12, '2'),
(8, 14, '3'),
(9, 14, '2'),
(10, 14, '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periksa_ibu`
--

CREATE TABLE `tb_periksa_ibu` (
  `id_periksa_ibu` int(10) NOT NULL,
  `id_ibu` int(10) NOT NULL,
  `id_bidan` int(10) NOT NULL,
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
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_periksa_ibu`
--

INSERT INTO `tb_periksa_ibu` (`id_periksa_ibu`, `id_ibu`, `id_bidan`, `berat_badan`, `umur_kehamilan`, `letak_janin`, `tinggi_fundus`, `keluhan`, `tekanan_darah`, `denyut_jantung_bayi`, `kaki_bengkak`, `hasil_lab`, `tindakan`, `nasehat`, `tgl_periksa`, `tgl_kembali`) VALUES
(1, 5, 2, 50, 15, '-', 10, '-', '100/20', 10, 'Ya', 'HB=11,4', 'TT3', 'Baca panduan hal 4-5', '2019-09-03', '2019-09-11'),
(2, 5, 2, 55, 17, 'Kepala', 20, 'Pusing', '120/80', 20, 'Ya', 'HB=11,4', 'terapi', 'baca panduan hal 8-9', '2019-09-11', '2019-09-25'),
(3, 6, 2, 60, 10, '-', 15, '-', '120/80', 0, 'Ya', '-', 'Terapi', 'baca panduan hal 2-5', '2019-09-04', '2019-09-11'),
(4, 6, 17, 54, 20, 'Kepala', 30, 'pusing', '100/80', 15, 'Ya', 'normal', 'Fe', 'baca panduan hal 2-5', '2019-09-06', '2019-09-11'),
(5, 6, 17, 60, 25, 'Sungsang', 31, 'tidak ada', '100/90', 20, 'Ya', 'HB=11,4 dan gula dar', 'Fe', 'baca panduan hal 5-10', '2019-09-06', '2019-09-27'),
(6, 6, 17, 60, 20, '-', 100, 'n', '100', 20, 'Ya', 'ik', 'n', 'n', '2019-09-07', '2019-09-04'),
(7, 6, 17, 50, 40, 'Kepala', 30, 'j', 'j', 0, 'Ya', 'j', 'j', 'j', '2019-09-07', '2019-09-24'),
(8, 6, 17, 60, 30, 'Sungsang', 40, 'sakit', '100/80', 20, 'Ya', 'hb', 'fe', 'jagalah kesehatan', '2019-09-08', '2019-09-17');

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
  `email` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', 'admin', '', 'admin'),
(14, 'anggun', '1234', '', 'ibu'),
(15, 'naina54', '12345', '', 'ibu'),
(17, 'bidan', 'bidan', '', 'bidan'),
(20, 'bidan', 'bidan', 'fikri@gmail.com', 'bidan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `fk_tema` (`id_tema`);

--
-- Indeks untuk tabel `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`id_bidan`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indeks untuk tabel `catatan_kes_ibu`
--
ALTER TABLE `catatan_kes_ibu`
  ADD PRIMARY KEY (`id_kes_ibu`),
  ADD KEY `fk_ibu_hamil` (`id_ibu`);

--
-- Indeks untuk tabel `daftar_periksa`
--
ALTER TABLE `daftar_periksa`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `fk_ibu` (`id_ibu`),
  ADD KEY `fk_bidan` (`id_bidan`);

--
-- Indeks untuk tabel `detail_percakapan`
--
ALTER TABLE `detail_percakapan`
  ADD KEY `fk_percakapan` (`id_pesan`);

--
-- Indeks untuk tabel `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  ADD PRIMARY KEY (`id_ibu`),
  ADD KEY `fk_user2` (`id_user`);

--
-- Indeks untuk tabel `percakapan`
--
ALTER TABLE `percakapan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_periksa_ibu`
--
ALTER TABLE `tb_periksa_ibu`
  ADD PRIMARY KEY (`id_periksa_ibu`),
  ADD KEY `fk_ibu2` (`id_ibu`);

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
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `bidan`
--
ALTER TABLE `bidan`
  MODIFY `id_bidan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `catatan_kes_ibu`
--
ALTER TABLE `catatan_kes_ibu`
  MODIFY `id_kes_ibu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `daftar_periksa`
--
ALTER TABLE `daftar_periksa`
  MODIFY `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  MODIFY `id_ibu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `percakapan`
--
ALTER TABLE `percakapan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_periksa_ibu`
--
ALTER TABLE `tb_periksa_ibu`
  MODIFY `id_periksa_ibu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_tema` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id_tema`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `bidan`
--
ALTER TABLE `bidan`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `catatan_kes_ibu`
--
ALTER TABLE `catatan_kes_ibu`
  ADD CONSTRAINT `fk_ibu_hamil` FOREIGN KEY (`id_ibu`) REFERENCES `ibu_hamil` (`id_ibu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `daftar_periksa`
--
ALTER TABLE `daftar_periksa`
  ADD CONSTRAINT `fk_bidan` FOREIGN KEY (`id_bidan`) REFERENCES `bidan` (`id_bidan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ibu` FOREIGN KEY (`id_ibu`) REFERENCES `ibu_hamil` (`id_ibu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_percakapan`
--
ALTER TABLE `detail_percakapan`
  ADD CONSTRAINT `fk_percakapan` FOREIGN KEY (`id_pesan`) REFERENCES `percakapan` (`id_pesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  ADD CONSTRAINT `fk_user2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_periksa_ibu`
--
ALTER TABLE `tb_periksa_ibu`
  ADD CONSTRAINT `fk_ibu2` FOREIGN KEY (`id_ibu`) REFERENCES `ibu_hamil` (`id_ibu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
