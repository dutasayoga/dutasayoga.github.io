-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 08:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hypet`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Telepon` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `Password`, `Nama`, `Alamat`, `Telepon`) VALUES
('barracuda', '$2y$10$QzQfx0zySuNbx.aTdJf0m.DPIOOIaAtg7O7L33pScXzcmzOQFaEAq', 'izhar pinayungan nasution', 'Kos Rajawali sukabirus', '2147483647'),
('dutasayoga', '$2y$10$l4UHFKFSxCL3kayLudgjRuxpW5MujpOQZD63ZRTVz4iahRO0XmVLK', 'duta sayoga', 'deloran residence kamar 208 jl. haji umayah 2 sukabirus', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_Pegawai` int(11) NOT NULL,
  `Nama_Pegawai` varchar(50) NOT NULL,
  `Jenis_Pekerjaan` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID_Pegawai`, `Nama_Pegawai`, `Jenis_Pekerjaan`, `Gender`, `Password`) VALUES
(1, 'Steven', 'Manager', 'Male', '$2y$10$98AM5fzcvDpLqIYyArg6LO4puXuZnFrW8KDjjZXuZLWJE9IpQ7/FG'),
(2, 'carlos', 'Manager', 'Male', '$2y$10$sRGSkH/HYrnsqbC5.0kb3OHwx9TG9GzeoMOkkzxwlumc.aFew2LtS'),
(3, 'izhar', 'manager', 'Male', '$2y$10$sCnRU//WFnRvV6NOaxghe.NiH9gVz0vFfOfFlvo7y8j/4tdG7UlIO'),
(4, '', '', '', '$2y$10$EMABZ.p69C0VWcc0tiFdpuF.XDn1EOBCPV5dAl9IbjkvSxC.m6Crm'),
(5, 'raha', '', '', '$2y$10$92DKXvH468myPJlATwdkWuHxXps2bGXIWlaIpAHQYG6JCCV9rE5rS'),
(6, 'raha', 'pegawai', 'Male', '$2y$10$g/cAkXbXYD/7Os2sfi8P0eZmB1u7a0DEKNc142ofUhWDLrk2GlOCW'),
(7, 'raha', 'pegawai', '', '$2y$10$iajff43FZ2g4kR2KhFsAMuayhJKrW8MoSyYgARCoUu37h6FXdjRs6'),
(8, 'raha', 'pegawai', 'Male', '$2y$10$MEvwTRUiASBJutM9qsqCO.zbq.6sD5bKByPnyzN5VzPstKiEIfZl6'),
(9, '', '', '', '$2y$10$QsYfya4HJYaVV8pPeab9TeSZTfETlJxcF7KQ1udKMn0oG7cqRjok6'),
(10, 'Andrew', 'Kurir', 'Male', '$2y$10$fSHEGYeyCUGdw/YBm39EauO6UzZyqw2D79TmJuZ9ErQ5UrFoqsnJ.'),
(11, 'Santoso', 'Trainer', 'Male', '$2y$10$.WowN0j6XeFZEYy9yaCgYOzRS6h8Av28ThDgrH2Ll4tNkka4FtKVy'),
(12, 'Charles', 'Kurir', 'Male', '$2y$10$d1Nlnxr/SK3rYOcj/8S/OOkiRwpB7KNDKXdFLp5JWL0sgE6iu6Zui'),
(13, 'Admin', 'Admin', 'Admin', 'Admin'),
(14, 'Tukijo', 'Shopkeeper', 'Male', '$2y$10$M2gT4wv0tmM2cz0hrQtnHuo8MfE3MlEbFTA/TQ/gEb1d0ULpYCv5e');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `total_produk` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Sdelivery` varchar(20) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_produk`, `username`, `total_produk`, `total_harga`, `Status`, `Sdelivery`, `Date`) VALUES
(6, 501, 'barracuda', 1, 50000, 'Sukses', 'Delivered', '2017-12-01 18:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `perawatan`
--

CREATE TABLE `perawatan` (
  `Kode_Perawatan` int(11) NOT NULL,
  `Jenis_Perawatan` varchar(10) NOT NULL,
  `Harga_Perawatan` int(11) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perawatan`
--

INSERT INTO `perawatan` (`Kode_Perawatan`, `Jenis_Perawatan`, `Harga_Perawatan`, `Deskripsi`) VALUES
(151, 'BRONZE', 70000, '- Perawatan dengan jenis peliharaan yang tidak ekstrim(ex: ular, iguana, dan segala jenis reptil) \r\n- Tidak mendapatkan training'),
(152, 'SILVER', 100000, '- Perawatan dengan jenis peliharaan yang tidak ekstrim(ex: ular, iguana, dan segala jenis reptil) \r\n- Mendapatkan Training dengan trainer khusus yang bersertifikat'),
(153, 'PLATINUM', 150000, '- Perawatan semua jenis binatang peliharaan, termasuk reptil dan sebagainya\r\n- Mendapatkan Training dengan trainer khusus yang bersertifikat skala Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `ID_Hewan` int(11) NOT NULL,
  `Nama_Hewan` varchar(50) NOT NULL,
  `Jenis_Hewan` varchar(50) NOT NULL,
  `Warna_Hewan` varchar(20) NOT NULL,
  `Berat_Badan` int(11) NOT NULL,
  `Umur_Hewan` int(11) NOT NULL,
  `Gender_Hewan` varchar(30) NOT NULL,
  `Cusername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`ID_Hewan`, `Nama_Hewan`, `Jenis_Hewan`, `Warna_Hewan`, `Berat_Badan`, `Umur_Hewan`, `Gender_Hewan`, `Cusername`) VALUES
(156, 'Spot', 'anjing', 'coklat hitam', 12, 16, 'Jantan', 'dutasayoga'),
(157, 'Charlie', 'Ular', 'hitam', 23, 80, 'Betina', 'barracuda');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `pict` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `pict`, `deskripsi_produk`) VALUES
(501, 'Perfect Coat', 50000, 'dog-shampoo.jpg', 'Shampoo wangi'),
(502, 'Pedigree', 80000, 'makanan pet.jpg', 'Makanan bervitamin     '),
(504, 'Tikus', 5000, 'tikus.jpg', 'Maakanan khusus ular'),
(505, 'Wortel', 3000, 'wortel.png', 'Makanan kelinci'),
(506, 'Pocipoci', 55000, 'shampoo anti kutu.jpg', 'Shampoo kutu            '),
(507, 'Dancow', 50000, 'susu.jpg', 'pet milk            '),
(508, 'Kandang', 300000, 'kandang.jpg', 'kandang besi, nyaman dan luas'),
(509, 'Howitzer', 70000, 'obat.jpg', 'mengobati penyakit kulit hewan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `Kode_Transaksi` int(11) NOT NULL,
  `Pusername` varchar(100) NOT NULL,
  `Kode_Perawatan` int(11) NOT NULL,
  `Jenis_PER` varchar(50) NOT NULL,
  `Biaya` int(11) NOT NULL,
  `ID_HEWAN` int(11) NOT NULL,
  `Nama_Hewan` varchar(100) NOT NULL,
  `Lama_Perawatan` int(11) NOT NULL,
  `Biaya_Total` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Sdelivery` varchar(20) NOT NULL,
  `Strainer` varchar(20) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`Kode_Transaksi`, `Pusername`, `Kode_Perawatan`, `Jenis_PER`, `Biaya`, `ID_HEWAN`, `Nama_Hewan`, `Lama_Perawatan`, `Biaya_Total`, `Status`, `Sdelivery`, `Strainer`, `Date`) VALUES
(47, 'dutasayoga', 153, 'PLATINUM', 150000, 156, 'Spot', 4, 600000, 'Sukses', 'Delivered', '', '0000-00-00 00:00:00'),
(49, 'barracuda', 153, 'PLATINUM', 150000, 157, 'Charlie', 2, 300000, 'Sukses', '', 'Done', '2017-12-01 18:32:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_Pegawai`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`Kode_Perawatan`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`ID_Hewan`),
  ADD KEY `Cusername` (`Cusername`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Kode_Transaksi`),
  ADD KEY `ID_HEWAN` (`ID_HEWAN`),
  ADD KEY `Kode_Perawatan` (`Kode_Perawatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID_Pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `perawatan`
--
ALTER TABLE `perawatan`
  MODIFY `Kode_Perawatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `ID_Hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Kode_Transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`Cusername`) REFERENCES `customer` (`username`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_HEWAN`) REFERENCES `pet` (`ID_Hewan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`Kode_Perawatan`) REFERENCES `perawatan` (`Kode_Perawatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
