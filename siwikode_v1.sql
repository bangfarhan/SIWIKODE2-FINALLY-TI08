-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2021 pada 07.17
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwikode_v1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kuliner`
--

CREATE TABLE `jenis_kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kuliner`
--

INSERT INTO `jenis_kuliner` (`id`, `nama`) VALUES
(1, 'Kedai/Cafe'),
(2, 'Restaurant'),
(3, 'Pasar Kaget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama`) VALUES
(3, 'Taman Wisata'),
(4, 'Religi'),
(5, 'Water Park');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `foto` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `id_status` int(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama`, `profesi_id`, `alamat`, `hp`, `foto`, `jk`, `id_status`, `create_date`, `update_date`) VALUES
(7, 'wicak100', '123', 'arya', 0, 'Puri BSI Permai', '085761854027', 'arya.jpg', 'Laki-laki', 2, '2021-07-17 09:07:48', '2021-07-17 09:07:48'),
(20, 'admin', 'admin', 'admin', 0, 'STT Nurul Fikri', '081108220833', 'admin.png', 'Laki-laki', 2, '2021-07-17 12:13:05', '2021-07-17 12:13:05'),
(21, 'user', 'user', 'user', 0, 'STT Nurul Fikri', '080808080808', 'user.png', 'Perempuan', 2, '2021-07-17 09:07:36', '2021-07-17 09:07:36'),
(24, 'amry', 'amry', 'amry', 0, 'Depok', '03483393', 'amry.jpg', 'Laki-laki', 1, '2021-07-17 12:10:47', '2021-07-17 12:10:47'),
(25, 'alfi', '123', 'alfi', 0, 'Depok', '082378993', 'alfi.jpg', 'Laki-laki', 2, '2021-07-17 11:53:03', '2021-07-17 11:53:03'),
(26, 'fulan', '123', 'fulan', 0, 'Depok', '2123', 'fulan.jpg', 'Laki-laki', 2, '2021-07-17 12:08:40', '2021-07-17 12:08:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(50) NOT NULL,
  `id_pengguna` int(50) NOT NULL,
  `id_wisata` int(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_pengguna`, `id_wisata`, `create_date`, `update_date`) VALUES
(6, 7, 15, '2021-07-15 00:00:00', '2021-07-15 00:00:00'),
(8, 7, 18, '2021-07-16 13:53:20', '2021-07-16 13:53:20'),
(9, 7, 15, '2021-07-16 14:12:23', '2021-07-16 14:12:23'),
(10, 7, 15, '2021-07-16 14:13:59', '2021-07-16 14:13:59'),
(11, 21, 17, '2021-07-16 14:22:50', '2021-07-16 14:22:50'),
(13, 0, 15, '2021-07-16 19:21:11', '2021-07-16 19:21:11'),
(14, 1, 21, '2021-07-17 08:34:07', '2021-07-17 08:34:07'),
(15, 1, 15, '2021-07-17 08:34:52', '2021-07-17 08:34:52'),
(16, 22, 15, '2021-07-17 08:37:56', '2021-07-17 08:37:56'),
(18, 20, 15, '2021-07-17 10:00:57', '2021-07-17 10:00:57'),
(22, 25, 15, '2021-07-17 11:53:39', '2021-07-17 11:53:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profesi`
--

INSERT INTO `profesi` (`id`, `nama`) VALUES
(1, 'Artist'),
(2, 'Pejabat'),
(3, 'Mahasiswa'),
(4, 'Pegawai Swasta'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `email`, `wisata_id`, `profesi_id`, `rating`, `komentar`) VALUES
(2, 'Jajang Sutarno', 'jajang@gmail.com', 15, 1, 5, 'Sangat luas dan nyaman, fasilitas juga sangat lengkap\r\n'),
(3, 'Suparjo', 'parjogaming@garena.chill', 15, 2, 5, 'First blood, Double kill, Triple kill, Maniac, Savage'),
(5, 'Jokowow', 'jokowow@yahoo.id', 16, 4, 5, 'Hey hey not bad'),
(6, 'prabobo', 'Fn32@yahoo.com', 16, 2, 5, 'Lokasi sangat bagus untuk orang yang ingin menikmati alam'),
(7, 'Sigit', 'si1802@gmail.com', 15, 3, 5, 'Uvuvwevwevwe Onyetenvewve Ugwemubwem Ossas'),
(8, 'Wina', 'wina2@gmail.com', 17, 3, 5, 'Keren'),
(9, 'Jarjit ', 'jarjit@gmail.com', 18, 5, 5, 'Dua tiga kucing saleh, tak boleh'),
(10, 'Samsul', 'samsul@yahoo.com', 17, 2, 5, 'Om telolet om'),
(11, 'Ipin', 'ipinallbase@gemscholl.id', 21, 4, 5, 'Betul betul betul'),
(12, 'Farhan', 'farhanbeunghar@gmail.com', 21, 4, 5, 'mantap'),
(13, 'a', 'a', 22, 2, 5, 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto1` varchar(200) DEFAULT NULL,
  `foto2` varchar(200) DEFAULT NULL,
  `foto3` varchar(200) DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `maps` varchar(1000) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `jenis_wisata_id` int(11) DEFAULT NULL,
  `jenis_kuliner_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `deskripsi`, `foto1`, `foto2`, `foto3`, `fasilitas`, `bintang`, `kontak`, `alamat`, `maps`, `email`, `web`, `jenis_wisata_id`, `jenis_kuliner_id`) VALUES
(15, 'Masjid Kubah Mas', 'Masjid Dian Al Mahri dikenal juga dengan nama Masjid Kubah Emas adalah sebuah masjid yang dibangun di tepi jalan Raya Meruyung, Limo, Depok di Kecamatan Limo, Depok. Masjid ini selain sebagai menjadi tempat ibadah salat bagi umat muslim sehari-hari, kompleks masjid ini juga menjadi kawasan wisata keluarga dan menarik perhatian banyak orang karena kubah-kubahnya yang dibuat dari emas. Selain itu karena luasnya area yang ada dan bebas diakses untuk umum, sehingga tempat ini sering menjadi tujuan liburan keluarga atau hanya sekadar dijadikan tempat beristirahat.', 'Masjid_Kubah_Mas.jpg', NULL, NULL, 'Lokasi parkir, Tempat ibadah, Taman', 5, '0928929023', 'Jalan Raya Meruyung, Limo, Depok', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.076737143248!2d106.76981351476994!3d-6.384097295380525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef282b03e03d%3A0x7a3c654ea43229d2!2sMasjid%20Kubah%20Mas!5e0!3m2!1sen!2sid!4v1626401339018!5m2!1sen!2sid\" width=\"500\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '', 'kubahmas.com', 4, 2),
(17, 'Waterpark Ceria', 'Seperti namanya, liburan ke waterpark ini akan menghadirkan kebahagiaan dan keceriaan. Meskipun kawasannya tidak terlalu luas, namun di dalamnya sudah tersedia kolam renang dan berbagai wahana permainan air yang cukup untuk membuat kita betah berlama-lama di lokasi.', 'Waterpark_Ceria.jpg', NULL, NULL, 'Kolam renang dewasa, kolam renang anak-anak', 4, '(021) 7862726', 'Jl. K.H.M. Usman No.110, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.224264993643!2d106.80926991476984!3d-6.365015795394124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eea153bc9191%3A0x45612e4131da98ea!2sWater%20Park%20Ceria!5e0!3m2!1sen!2sid!4v1626417461734!5m2!1sen!2sid\" width=\"500\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '', 'ceria.com', 5, 2),
(18, 'Pasir Putih', 'Jika ingin mencari tempat wisata untuk keluarga maka yang paling pas adalah Pasir Putih Depok. Taman Pasir Putih ini cocok untuk anak-anak karena bisa bermain tong tumpah, seluncur, air mancur dan masih banyak lagi. Wahana ini memang berada cukup jauh dari keramaian tetapi pengunjungnya selalu datang beramai-ramai.', 'Pasir_Putih.jpg', NULL, NULL, 'Kolam renang, seluncuran', 4, '(021) 29434479', 'Jalan Raya Pasir Putih, Sawangan Depok', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6952991871763!2d106.78508131413972!3d-6.433171864698112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e9a4b53074df%3A0xa694f89f9e7ef1cb!2sTaman%20Wisata%20Pasir%20Putih!5e0!3m2!1sen!2sid!4v1626417535467!5m2!1sen!2sid\" width=\"500\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '', 'pasirputih.ac.id', 5, 1),
(21, 'Petilasan Mbah beji', 'Makam/Petilasan Mbah Raden Wujud Beji, merupakan bukti sejarah kehadiran tentara Islam yang banyak ditemukan di  banyak tempat di Depok. Makam Keramat Beji/Petilasan ini terletak di Jalan Kemiri Muka, Desa Kramat (Kramat Jaya), Kecamatan Beji.Selain makam/ petilasan Mbah Raden Wujud Beji, di dalam sebuah bangunan yang dinaungi oleh kerimbunan pohon beringin, tersimpan peninggalan beberapa jenis senjata tentara Islam (Banten). Koleksi senjata tersebut tersusun rapi di samping petilasan Mbah Raden Wujud Beji. Pada dinding di dalam bangunan makam tersebut tergantung beberapa untaian kata yang berisikan nasehat pernah diucapkan oleh Mbah Raden Wujud Beji. Pada tanggal 14 bulan Maulud, bangunan makam ini ramai dikunjungi para peziarah dari berbagai daerah, seperti dari Banten dan Cirebon.', 'Petilasan_Mbah_beji.jpg', NULL, NULL, 'Penginapan, pameran pusaka', 5, '09772829', 'Jalan Kemiri Muka, Desa Kramat Jaya, Kecamatan Beji', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15860.273226421803!2d106.80242026977538!3d-6.385186000000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e95392a205fd:0x4766f50c0054b854!2sMakam Embah Raden Wujud Beji!5e0!3m2!1sen!2sid!4v1626435822622!5m2!1sen!2sid\" width=\"500\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '', 'petilasan.com', 4, 1),
(22, 'Taman Bunga Wiladatika', 'Piknik bersama keluarga memang paling tepat jika dilakukan di taman. Depok memiliki taman bunga dengan luas hingga 15 hektar yakni Taman Bunga Wiladatika. Tempat wisata ini tak hanya cocok untuk orang dewasa saja, melainkan juga anak anak. Banyak pepohonan yang menjulang tinggi membuat suasana di taman ini lebih sejuk dan rindang. Hamparan yang tertata cantik dan sangat rapi membuat siapapun betah berlama lama di taman satu ini.', 'Taman_Bunga_Wiladatika.jpg', NULL, NULL, 'Lahan parkir, taman bunga, tempat makan', 5, '0877382929', 'Harjamukti, Kec. Cimanggis, Kota Depok.', 'Harjamukti, Kec. Cimanggis, Kota Depok.', '', 'tamanbunga.sg', 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_testimoni_wisata1_idx` (`wisata_id`),
  ADD KEY `fk_testimoni_profesi1_idx` (`profesi_id`),
  ADD KEY `wisata_id` (`wisata_id`),
  ADD KEY `profesi_id` (`profesi_id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wisata_jenis_wisata_idx` (`jenis_wisata_id`),
  ADD KEY `fk_wisata_jenis_kuliner1_idx` (`jenis_kuliner_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `fk_wisata_jenis_kuliner1` FOREIGN KEY (`jenis_kuliner_id`) REFERENCES `jenis_kuliner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wisata_jenis_wisata` FOREIGN KEY (`jenis_wisata_id`) REFERENCES `jenis_wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
