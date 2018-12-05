-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 02:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `no_komplain` int(20) NOT NULL,
  `BPJS` int(20) NOT NULL,
  `kritik` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` int(20) NOT NULL,
  `no_obat` int(20) NOT NULL,
  `nama_laporan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `total_harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `no_obat` int(20) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `stock` int(10) NOT NULL,
  `harga` int(20) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `pict` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`no_obat`, `nama_obat`, `jenis`, `stock`, `harga`, `deskripsi`, `pict`) VALUES
(1, 'Panadol', 'Obat Pusing', 20, 25000, 'Panadol meredakan sakit kepala, sakit gigi, sakit pada otot, nyeri yang mengganggu dan menurunkan demam secara cepat dan efektif. Panadol ramah bagi lambung jika diminum sesuai dosis dan aturan pakai.', 'panadol.jpg'),
(2, 'Paramex', 'Obat pusing', 20, 3000, 'Pusing kepala minum paramex', 'paramex.jpg'),
(3, 'Neozep', 'Obat flu', 30, 5000, 'Pilek minum neozep', 'neozep.jpg'),
(4, 'Actifed', 'Obat flu', 40, 5000, 'obat', 'actifed.jpg'),
(5, 'Konidin', 'Obat batuk', 40, 4500, 'Obat batuk', 'konidin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no_pesanan` int(20) NOT NULL,
  `no_obat` int(20) NOT NULL,
  `BPJS` int(20) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat_kirim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `no_staff` int(20) NOT NULL,
  `nama_staff` varchar(20) NOT NULL,
  `notlp_staff` varchar(13) NOT NULL,
  `email_staff` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `no_supplier` int(20) NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `notlpn_supplier` varchar(13) NOT NULL,
  `email_supplier` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `BPJS` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `notlp` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`BPJS`, `nama`, `email`, `notlp`, `password`) VALUES
(1301164355, 'Linggis Galih', 'galihwiseso@gmail.com', '082225097909', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`no_komplain`),
  ADD KEY `BPJS` (`BPJS`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `no_obat` (`no_obat`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`no_obat`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`no_pesanan`),
  ADD KEY `pesanan_obat_FK` (`no_obat`),
  ADD KEY `BPJS` (`BPJS`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`no_staff`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`no_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`BPJS`),
  ADD KEY `BPJS` (`BPJS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komplain`
--
ALTER TABLE `komplain`
  MODIFY `no_komplain` int(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `komplain`
--
ALTER TABLE `komplain`
  ADD CONSTRAINT `komplain_ibfk_1` FOREIGN KEY (`BPJS`) REFERENCES `user` (`BPJS`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`no_obat`) REFERENCES `obat` (`no_obat`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`BPJS`) REFERENCES `user` (`BPJS`),
  ADD CONSTRAINT `pesanan_obat_FK` FOREIGN KEY (`no_obat`) REFERENCES `obat` (`no_obat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
