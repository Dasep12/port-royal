-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2020 pada 16.29
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_sepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `about`) VALUES
(1, 'ini adalah perusahaan tempat jual beli sepatu ternama ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(12) DEFAULT NULL,
  `role_vote` int(2) DEFAULT NULL,
  `poto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `pass`, `role_vote`, `poto`) VALUES
(1, 'Dasep Depiyawan', 'Dasep', '123456', 1, 'login1.jpg'),
(2, 'Ahmad Rifai', 'Ahmad', '123', 1, 'pria.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `igfeed`
--

CREATE TABLE `igfeed` (
  `id` int(11) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `img4` varchar(100) NOT NULL,
  `img5` varchar(100) NOT NULL,
  `img6` varchar(100) NOT NULL,
  `img7` varchar(100) NOT NULL,
  `img8` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `igfeed`
--

INSERT INTO `igfeed` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`) VALUES
(33, 'd7d57bc8b44a7eac3e0d23c1a3f980f3.jpg', '5930593e75f0346584729a90362d2188.jpg', 'fb6864e7d6c2e68c0eb1979d10350773.jpg', 'c9afd76213e78ca3e1de13d5b3c4ba3a.jpg', '72ee8ce62ad021bb174ab1ef6d83dcaf.jpg', '30b235fda6d82c837bf85cc08adb3370.jpg', '6bb90f7f24ee84eba2208480343b23be.jpg', '6d492ec2eeed8138aebd4f175c500dce.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` int(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(1, 'logo1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_masuk`
--

CREATE TABLE `pesan_masuk` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL,
  `tanggal_masuk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_masuk`
--

INSERT INTO `pesan_masuk` (`id`, `name`, `email`, `subject`, `pesan`, `tanggal_masuk`) VALUES
(1, 'dasep depiyawan', 'depiyawan13@gmail.com', 'Barang saya tidak ada', 'Tolong', ''),
(2, 'dasep depiyawan', 'depiyawan13@gmail.com', 'Barang saya tidak ada', 'Tolong', '2019-09-07 15:32:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock`
--

CREATE TABLE `stock` (
  `id` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `id_brg` int(100) NOT NULL,
  `suplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stock`
--

INSERT INTO `stock` (`id`, `nama_produk`, `stock`, `kode_barang`, `id_brg`, `suplier`) VALUES
(24, '', '12', 'BRG-7', 0, ''),
(25, '', '15', 'BRG-6', 0, ''),
(26, '', '5', 'BRG-1', 0, '');

--
-- Trigger `stock`
--
DELIMITER $$
CREATE TRIGGER `updateStock` AFTER INSERT ON `stock` FOR EACH ROW BEGIN
	UPDATE tb_produk set stock = stock+NEW.stock 
	WHERE kode_barang = NEW.kode_barang ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tgl_pesan` varchar(100) NOT NULL,
  `batas_bayar` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `first_name`, `last_name`, `no_telp`, `email`, `alamat`, `kota`, `keterangan`, `tgl_pesan`, `batas_bayar`, `kode_pos`) VALUES
(3, 'Rika', 'Rinjani', '083821619460', 'Rika@wahyu.com', 'Jakarta Selatan', 'Jakarta Selatan', '', '2019-10-13 10:14:14', '2019-10-14 10:14:14', '4563'),
(4, 'dasep', 'WAHYUNI', '12', 'anithaanggraeni26@gmail.com', '12', '12', '12', '2020-06-17 09:28:26', '2020-06-18 09:28:26', '45680');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(100) NOT NULL,
  `id_brg` varchar(100) NOT NULL,
  `id_invoice` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `merk` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_brg`, `id_invoice`, `nama_produk`, `jumlah`, `harga`, `merk`) VALUES
(2, '13', '3', 'Adidas', '1', '650000', ''),
(3, '9', '3', 'Adidas', '1', '224000', ''),
(4, '11', '3', 'Vans', '1', '246400', ''),
(5, '12', '4', 'Salvy', '1', '171000', '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pembelian` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_produk set stock=stock-NEW.jumlah
    WHERE id = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `diskon` varchar(100) NOT NULL,
  `harga_diskon` varchar(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `harga_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama_produk`, `merk`, `ukuran`, `harga`, `stock`, `keterangan`, `gambar`, `diskon`, `harga_diskon`, `kode_barang`, `suplier`, `harga_bayar`) VALUES
(6, 'Sepatu Kantor', 'Sneakers', 'All Size', '150000', '20', 'Sepatu bisa di pakai di mana saja dan kapan saja', 'ds.jpg', '10', '15000', 'BRG-1', '', '135000'),
(9, 'Sepatu Santai', 'Adidas', 'All Size', '280000', '24', '', 'index.jpg', '20', '56000', 'BRG-3', '', '224000'),
(11, 'Sepatu Olahraga', 'Vans', 'All Size', '280000', '13', '', '112.jpg', '12', '33600', 'BRG-5', '', '246400'),
(12, 'Sepatu Santai', 'Salvy', 'All Size', '190000', '44', '', 'gfg.jpg', '10', '19000', 'BRG-4', '', '171000'),
(13, 'Sepatu Olahraga', 'Adidas', 'All Size', '650000', '24', '', 'fdggrtr.jpg', '0', '0', 'BRG-7', '', '650000'),
(14, 'Sepatu Santai', 'Vans', 'All Size', '250000', '14', '', 'bvfbfg.jpg', '12', '30000', 'BRG-8', '', '220000'),
(15, 'Sepatu Santai', 'Vans', 'All Size', '350000', '25', '', 'ghhhh.jpg', '5', '17500', 'BRG-9', '', '332500'),
(16, 'Sepatu Kantor', 'Sneakers', 'All Size', '150000', '20', 'Sepatu bisa di pakai di mana saja dan kapan saja', 'ds.jpg', '10', '15000', 'BRG-1', '', '135000'),
(17, 'Sepatu Santai', 'Adidas', 'All Size', '280000', '24', '', 'index.jpg', '20', '56000', 'BRG-3', '', '224000'),
(18, 'Sepatu Olahraga', 'Vans', 'All Size', '280000', '13', '', '112.jpg', '12', '33600', 'BRG-5', '', '246400'),
(19, 'Sepatu Santai', 'Salvy', 'All Size', '190000', '45', '', 'gfg.jpg', '10', '19000', 'BRG-4', '', '171000'),
(20, 'Sepatu Olahraga', 'Adidas', 'All Size', '650000', '24', '', 'fdggrtr.jpg', '0', '0', 'BRG-7', '', '650000'),
(21, 'Sepatu Santai', 'Vans', 'All Size', '250000', '14', '', 'bvfbfg.jpg', '12', '30000', 'BRG-8', '', '220000'),
(22, 'Sepatu Santai', 'Vans', 'All Size', '350000', '25', '', 'ghhhh.jpg', '5', '17500', 'BRG-9', '', '332500'),
(23, 'Sepatu Kantor', 'Sneakers', 'All Size', '150000', '20', 'Sepatu bisa di pakai di mana saja dan kapan saja', 'ds.jpg', '10', '15000', 'BRG-1', '', '135000'),
(24, 'Sepatu Santai', 'Adidas', 'All Size', '280000', '24', '', 'index.jpg', '20', '56000', 'BRG-3', '', '224000'),
(25, 'Sepatu Olahraga', 'Vans', 'All Size', '280000', '13', '', '112.jpg', '12', '33600', 'BRG-5', '', '246400'),
(26, 'Sepatu Santai', 'Salvy', 'All Size', '190000', '45', '', 'gfg.jpg', '10', '19000', 'BRG-4', '', '171000'),
(27, 'Sepatu Olahraga', 'Adidas', 'All Size', '650000', '24', '', 'fdggrtr.jpg', '0', '0', 'BRG-7', '', '650000'),
(28, 'Sepatu Santai', 'Vans', 'All Size', '250000', '14', '', 'bvfbfg.jpg', '12', '30000', 'BRG-8', '', '220000'),
(29, 'Sepatu Santai', 'Vans', 'All Size', '350000', '25', '', 'ghhhh.jpg', '5', '17500', 'BRG-9', '', '332500'),
(30, 'Sepatu Kantor', 'Sneakers', 'All Size', '150000', '20', 'Sepatu bisa di pakai di mana saja dan kapan saja', 'ds.jpg', '10', '15000', 'BRG-1', '', '135000'),
(31, 'Sepatu Santai', 'Adidas', 'All Size', '280000', '24', '', 'index.jpg', '20', '56000', 'BRG-3', '', '224000'),
(32, 'Sepatu Olahraga', 'Vans', 'All Size', '280000', '13', '', '112.jpg', '12', '33600', 'BRG-5', '', '246400'),
(33, 'Sepatu Santai', 'Salvy', 'All Size', '190000', '45', '', 'gfg.jpg', '10', '19000', 'BRG-4', '', '171000'),
(34, 'Sepatu Olahraga', 'Adidas', 'All Size', '650000', '24', '', 'fdggrtr.jpg', '0', '0', 'BRG-7', '', '650000'),
(35, 'Sepatu Santai', 'Vans', 'All Size', '250000', '14', '', 'bvfbfg.jpg', '12', '30000', 'BRG-8', '', '220000'),
(36, 'Sepatu Santai', 'Vans', 'All Size', '350000', '25', '', 'ghhhh.jpg', '5', '17500', 'BRG-9', '', '332500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'Dasep', 'depiyawan13@gmail.com', 'Dasep12', '123', 2),
(2, 'admin', 'depiyawan13@gmail.com', 'Dasep12', '123', 1),
(3, 'Sinta', 'depiyawandasep13@gmail.com', 'Sinta', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `igfeed`
--
ALTER TABLE `igfeed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `igfeed`
--
ALTER TABLE `igfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
