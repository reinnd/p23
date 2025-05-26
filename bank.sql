-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2025 pada 09.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `debitur`
--

CREATE TABLE `debitur` (
  `id_debitur` int(11) NOT NULL,
  `id_nasabah` int(11) NOT NULL,
  `jenis_pinjaman` varchar(100) NOT NULL,
  `jumlah_pinjaman` decimal(15,2) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_jatuh_tempo` date DEFAULT NULL,
  `suku_bunga` decimal(5,2) DEFAULT NULL,
  `status_pinjaman` enum('Diajukan','Disetujui','Ditolak','Lunas','Menunggak') DEFAULT 'Diajukan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `debitur`
--

INSERT INTO `debitur` (`id_debitur`, `id_nasabah`, `jenis_pinjaman`, `jumlah_pinjaman`, `tanggal_pengajuan`, `tanggal_jatuh_tempo`, `suku_bunga`, `status_pinjaman`) VALUES
(1, 1, 'Kredit Multiguna', 50000000.00, '2023-01-20', '2025-01-20', 10.50, 'Disetujui'),
(2, 2, 'Kredit Kendaraan', 150000000.00, '2023-02-25', '2028-02-25', 7.00, 'Disetujui'),
(3, 1, 'Kredit Tanpa Agunan', 10000000.00, '2023-03-10', '2024-03-10', 12.00, 'Menunggak'),
(4, 3, 'Kredit Usaha', 200000000.00, '2023-03-15', '2030-03-15', 8.25, 'Disetujui'),
(5, 4, 'KPR', 400000000.00, '2023-05-01', '2043-05-01', 6.80, 'Diajukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nasabah`
--

CREATE TABLE `nasabah` (
  `id_nasabah` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomor_identitas` varchar(50) NOT NULL,
  `tanggal_daftar` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nasabah`
--

INSERT INTO `nasabah` (`id_nasabah`, `nama_lengkap`, `tanggal_lahir`, `alamat`, `nomor_telepon`, `email`, `nomor_identitas`, `tanggal_daftar`) VALUES
(1, 'Budi Santoso', '1985-03-15', 'Jl. Merdeka No. 10, Jakarta', '081234567890', 'budi.santoso@example.com', '3273011503850001', '2023-01-10 10:00:00'),
(2, 'Citra Dewi', '1990-07-20', 'Jl. Kencana No. 5, Bandung', '087654321098', 'citra.dewi@example.com', '3273022007900002', '2023-02-15 11:30:00'),
(3, 'Agus Salim', '1978-11-25', 'Perum. Indah Jaya Blok A1, Surabaya', '085012345678', 'agus.salim@example.com', '3273032511780003', '2023-03-01 09:15:00'),
(4, 'Dewi Lestari', '1995-04-01', 'Gg. Mawar No. 12, Yogyakarta', '081122334455', 'dewi.lestari@example.com', '3273040104950004', '2023-04-20 14:00:00'),
(13, 'aaaaaaa', '2025-04-30', 'aaaa', '+62 82112345678', 'a@b', '234141131', '2025-05-14 00:00:00'),
(15, 'aaaaaarwara', '2025-04-30', 'aaaa', '+62 8211dw121', 'a@bee', '242442242', '2025-05-14 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `debitur`
--
ALTER TABLE `debitur`
  ADD PRIMARY KEY (`id_debitur`),
  ADD KEY `id_nasabah` (`id_nasabah`);

--
-- Indeks untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`id_nasabah`),
  ADD UNIQUE KEY `nomor_identitas` (`nomor_identitas`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `debitur`
--
ALTER TABLE `debitur`
  MODIFY `id_debitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nasabah`
--
ALTER TABLE `nasabah`
  MODIFY `id_nasabah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `debitur`
--
ALTER TABLE `debitur`
  ADD CONSTRAINT `debitur_ibfk_1` FOREIGN KEY (`id_nasabah`) REFERENCES `nasabah` (`id_nasabah`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
