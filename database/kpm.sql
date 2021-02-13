-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 01:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nik_dosen` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `akp_tendik`
--

CREATE TABLE `akp_tendik` (
  `id_akp` int(11) NOT NULL,
  `nm_akp` varchar(255) NOT NULL,
  `urutan` varchar(255) NOT NULL,
  `angka` varchar(255) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `kepala_kpm` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp`
--

CREATE TABLE `aspek_akp` (
  `id_akp` int(11) NOT NULL,
  `id_dikjar` varchar(255) NOT NULL,
  `id_karya_ilmiah` varchar(255) NOT NULL,
  `id_pkm` varchar(255) NOT NULL,
  `id_penunjang` varchar(255) NOT NULL,
  `id_personal` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik`
--

CREATE TABLE `aspek_akp_tendik` (
  `id_akp` int(11) NOT NULL,
  `id_personal_tendik` varchar(255) NOT NULL,
  `id_administratif_tendik` varchar(255) NOT NULL,
  `id_strukturalmanajerial_tendik` varchar(255) NOT NULL,
  `id_penunjang_tendik` varchar(255) NOT NULL,
  `id_pengabdian_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_administratif`
--

CREATE TABLE `aspek_akp_tendik_administratif` (
  `id_akp` int(11) NOT NULL,
  `id_administratif_tendik` varchar(255) NOT NULL,
  `nm_administratif_tendik` varchar(255) NOT NULL,
  `bobot_administratif_tendik` varchar(255) NOT NULL,
  `nmvar_administratif_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_administratif2`
--

CREATE TABLE `aspek_akp_tendik_administratif2` (
  `id_akp` int(11) NOT NULL,
  `id_administratif2_tendik` varchar(255) NOT NULL,
  `nm_administratif2_tendik` varchar(255) NOT NULL,
  `bobot_administratif2_tendik` varchar(255) NOT NULL,
  `nmvar_administratif2_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_administratif3`
--

CREATE TABLE `aspek_akp_tendik_administratif3` (
  `id_akp` int(11) NOT NULL,
  `id_administratif3_tendik` varchar(255) NOT NULL,
  `nm_administratif3_tendik` varchar(255) NOT NULL,
  `bobot_administratif3_tendik` varchar(255) NOT NULL,
  `nmvar_administratif3_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_pengabdian`
--

CREATE TABLE `aspek_akp_tendik_pengabdian` (
  `id_akp` int(11) NOT NULL,
  `id_pengabdian_tendik` varchar(255) NOT NULL,
  `nm_pengabdian_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_pengabdian2`
--

CREATE TABLE `aspek_akp_tendik_pengabdian2` (
  `id_akp` int(11) NOT NULL,
  `id_pengabdian2_tendik` varchar(255) NOT NULL,
  `nm_pengabdian2_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_penunjang`
--

CREATE TABLE `aspek_akp_tendik_penunjang` (
  `id_akp` int(11) NOT NULL,
  `id_penunjang_tendik` varchar(255) NOT NULL,
  `nm_penunjang_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_penunjang2`
--

CREATE TABLE `aspek_akp_tendik_penunjang2` (
  `id_akp` int(11) NOT NULL,
  `id_penunjang2_tendik` varchar(255) NOT NULL,
  `nm_penunjang2_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_penunjang3`
--

CREATE TABLE `aspek_akp_tendik_penunjang3` (
  `id_akp` int(11) NOT NULL,
  `id_penunjang3_tendik` varchar(255) NOT NULL,
  `nm_penunjang3_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_penunjang4`
--

CREATE TABLE `aspek_akp_tendik_penunjang4` (
  `id_akp` int(11) NOT NULL,
  `id_penunjang4_tendik` varchar(255) NOT NULL,
  `nm_penunjang4_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_penunjang5`
--

CREATE TABLE `aspek_akp_tendik_penunjang5` (
  `id_akp` int(11) NOT NULL,
  `id_penunjang5_tendik` varchar(255) NOT NULL,
  `nm_penunjang5_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_personal`
--

CREATE TABLE `aspek_akp_tendik_personal` (
  `id_akp` int(11) NOT NULL,
  `id_personal_tendik` varchar(255) NOT NULL,
  `nm_personal_tendik` varchar(255) NOT NULL,
  `bobot_personal_tendik` varchar(255) NOT NULL,
  `nmvar_personal_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_strukturalmanajerial`
--

CREATE TABLE `aspek_akp_tendik_strukturalmanajerial` (
  `id_akp` int(11) NOT NULL,
  `id_strukturalmanajerial_tendik` varchar(255) NOT NULL,
  `nm_strukturalmanajerial_tendik` varchar(255) NOT NULL,
  `bobot_strukturalmanajerial_tendik` varchar(255) NOT NULL,
  `nmvar_strukturalmanajerial_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_strukturalmanajerial2`
--

CREATE TABLE `aspek_akp_tendik_strukturalmanajerial2` (
  `id_akp` int(11) NOT NULL,
  `id_strukturalmanajerial2_tendik` varchar(255) NOT NULL,
  `nm_strukturalmanajerial2_tendik` varchar(255) NOT NULL,
  `bobot_strukturalmanajerial2_tendik` varchar(255) NOT NULL,
  `nmvar_strukturalmanajerial2_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aspek_akp_tendik_strukturalmanajerial3`
--

CREATE TABLE `aspek_akp_tendik_strukturalmanajerial3` (
  `id_akp` int(11) NOT NULL,
  `id_strukturalmanajerial3_tendik` varchar(255) NOT NULL,
  `nm_strukturalmanajerial3_tendik` varchar(255) NOT NULL,
  `bobot_strukturalmanajerial3_tendik` varchar(255) NOT NULL,
  `nmvar_strukturalmanajerial3_tendik` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_tendik_rekap`
--

CREATE TABLE `data_tendik_rekap` (
  `id_tendik_rekap` int(11) NOT NULL,
  `id_tendik` varchar(255) NOT NULL,
  `id_akp` int(11) NOT NULL,
  `penilai` varchar(255) NOT NULL,
  `mengetahui` varchar(255) NOT NULL,
  `tgl_penilaian` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_administratif2_tendik_data_rekap`
--

CREATE TABLE `det_administratif2_tendik_data_rekap` (
  `id_administratif2_tendik` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `nilaixbobot` varchar(255) NOT NULL,
  `nilaixbobotxnmvar` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `totalbobot` varchar(255) NOT NULL,
  `totalnmvar` varchar(255) NOT NULL,
  `total_nxb` varchar(255) NOT NULL,
  `total_nxbxn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_administratif3_tendik_data_rekap`
--

CREATE TABLE `det_administratif3_tendik_data_rekap` (
  `id_administratif3_tendik` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `nilaixbobot` varchar(255) NOT NULL,
  `nilaixbobotxnmvar` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `totalbobot` varchar(255) NOT NULL,
  `totalnmvar` varchar(255) NOT NULL,
  `total_nxb` varchar(255) NOT NULL,
  `total_nxbxn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_administratif_tendik_data_rekap`
--

CREATE TABLE `det_administratif_tendik_data_rekap` (
  `id_administratif_tendik` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `nilaixbobot` varchar(255) NOT NULL,
  `nilaixbobotxnmvar` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `totalbobot` varchar(255) NOT NULL,
  `totalnmvar` varchar(255) NOT NULL,
  `total_nxb` varchar(255) NOT NULL,
  `total_nxbxn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_evaluasi_data_rekap`
--

CREATE TABLE `det_evaluasi_data_rekap` (
  `id_rekap` int(11) NOT NULL,
  `angka_kumulatif_awal` varchar(255) NOT NULL,
  `golongan_awal` varchar(255) NOT NULL,
  `angka_kumulatif_akhir` varchar(255) NOT NULL,
  `golongan_akhir` varchar(255) NOT NULL,
  `kategori_nilai` varchar(255) NOT NULL,
  `prasyarat` varchar(255) NOT NULL,
  `kategori_keteladanan` varchar(255) NOT NULL,
  `kategori_peringatan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_identitas_data_rekap_tendik`
--

CREATE TABLE `det_identitas_data_rekap_tendik` (
  `id` int(11) NOT NULL,
  `id_akp` int(11) NOT NULL,
  `id_tendik` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nm_tendik` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `akp` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `is_done` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_pengabdian2_tendik_data_rekap`
--

CREATE TABLE `det_pengabdian2_tendik_data_rekap` (
  `id_pengabdian2_tendik` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `totalnilai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_pengabdian_tendik_data_rekap`
--

CREATE TABLE `det_pengabdian_tendik_data_rekap` (
  `id_pengabdian_tendik` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `totalnilai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_penunjang2_tendik_data_rekap`
--

CREATE TABLE `det_penunjang2_tendik_data_rekap` (
  `id_penunjang2_tendik` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `totalnilai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_penunjang3_tendik_data_rekap`
--

CREATE TABLE `det_penunjang3_tendik_data_rekap` (
  `id_penunjang3_tendik` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `totalnilai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_penunjang4_tendik_data_rekap`
--

CREATE TABLE `det_penunjang4_tendik_data_rekap` (
  `id_penunjang4_tendik` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `totalnilai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_penunjang5_tendik_data_rekap`
--

CREATE TABLE `det_penunjang5_tendik_data_rekap` (
  `id_penunjang5_tendik` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `totalnilai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_penunjang_data_rekap`
--

CREATE TABLE `det_penunjang_data_rekap` (
  `id_rekap` int(11) NOT NULL,
  `id_penunjang` varchar(255) NOT NULL,
  `satuan_kegiatan` varchar(255) NOT NULL,
  `angka_kinerja` varchar(255) NOT NULL,
  `nilai_minimal` double NOT NULL,
  `kuranglebih` double NOT NULL,
  `lebihan` double NOT NULL,
  `nilai_akd` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_penunjang_tendik_data_rekap`
--

CREATE TABLE `det_penunjang_tendik_data_rekap` (
  `id_penunjang_tendik` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `totalnilai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_personal_data_rekap`
--

CREATE TABLE `det_personal_data_rekap` (
  `id_rekap` int(11) NOT NULL,
  `id_personal` varchar(255) NOT NULL,
  `satuan_kegiatan` varchar(255) NOT NULL,
  `angka_kinerja` varchar(255) NOT NULL,
  `nilai_minimal` double NOT NULL,
  `kuranglebih` varchar(255) NOT NULL,
  `lebihan` varchar(255) NOT NULL,
  `nilai_akd` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_personal_tendik_data_rekap`
--

CREATE TABLE `det_personal_tendik_data_rekap` (
  `id_personal_tendik` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `nilaixbobot` varchar(255) NOT NULL,
  `nilaixbobotxnmvar` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `totalbobot` varchar(255) NOT NULL,
  `totalnmvar` varchar(255) NOT NULL,
  `total_nxb` varchar(255) NOT NULL,
  `total_nxbxn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_strukturalmanajerial2_tendik_data_rekap`
--

CREATE TABLE `det_strukturalmanajerial2_tendik_data_rekap` (
  `id_strukturalmanajerial2_tendik` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `nilaixbobot` varchar(255) NOT NULL,
  `nilaixbobotxnmvar` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `totalbobot` varchar(255) NOT NULL,
  `totalnmvar` varchar(255) NOT NULL,
  `total_nxb` varchar(255) NOT NULL,
  `total_nxbxn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_strukturalmanajerial3_tendik_data_rekap`
--

CREATE TABLE `det_strukturalmanajerial3_tendik_data_rekap` (
  `id_strukturalmanajerial3_tendik` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `nilaixbobot` varchar(255) NOT NULL,
  `nilaixbobotxnmvar` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `totalbobot` varchar(255) NOT NULL,
  `totalnmvar` varchar(255) NOT NULL,
  `total_nxb` varchar(255) NOT NULL,
  `total_nxbxn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_strukturalmanajerial_tendik_data_rekap`
--

CREATE TABLE `det_strukturalmanajerial_tendik_data_rekap` (
  `id_strukturalmanajerial_tendik` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `nilaixbobot` varchar(255) NOT NULL,
  `nilaixbobotxnmvar` varchar(255) NOT NULL,
  `id_tendik_rekap` int(11) NOT NULL,
  `totalbobot` varchar(255) NOT NULL,
  `totalnmvar` varchar(255) NOT NULL,
  `total_nxb` varchar(255) NOT NULL,
  `total_nxbxn` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_struktural_data_rekap`
--

CREATE TABLE `det_struktural_data_rekap` (
  `id_rekap` int(11) NOT NULL,
  `satuan_kegiatan` double NOT NULL,
  `angka_kinerja` double NOT NULL,
  `nilai_minimal` double NOT NULL,
  `kuranglebih` double NOT NULL,
  `lebihan` double NOT NULL,
  `nilai_akd` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `det_total_data_rekap`
--

CREATE TABLE `det_total_data_rekap` (
  `id_rekap` int(11) NOT NULL,
  `totalbobot` varchar(255) NOT NULL,
  `totalnmvar` varchar(255) NOT NULL,
  `totalnxb` varchar(255) NOT NULL,
  `totalnxbxn` varchar(255) NOT NULL,
  `nilaikuranglebih` varchar(255) NOT NULL,
  `total2` varchar(255) DEFAULT NULL,
  `total1plus2` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `id_unit` varchar(255) NOT NULL,
  `nm_jabatan` varchar(255) NOT NULL,
  `aliasjabatan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `id_unit`, `nm_jabatan`, `aliasjabatan`) VALUES
(1, '3', 'staff', 'staff'),
(5, '3', 'direktur', 'direktur'),
(4, '3', 'Ka.TU', 'Ka.TU'),
(6, '3', 'tertua', 'tertua');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_administratif`
--

CREATE TABLE `kegiatan_tendik_administratif` (
  `id_tendik_administratif` int(11) NOT NULL,
  `nm_tendik_administratif` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_administratif`
--

INSERT INTO `kegiatan_tendik_administratif` (`id_tendik_administratif`, `nm_tendik_administratif`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Waktu', 15, 41.25),
(2, 'Content', 15, 41.25);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_administratif2`
--

CREATE TABLE `kegiatan_tendik_administratif2` (
  `id_tendik_administratif2` int(11) NOT NULL,
  `nm_tendik_administratif2` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_administratif2`
--

INSERT INTO `kegiatan_tendik_administratif2` (`id_tendik_administratif2`, `nm_tendik_administratif2`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Keramahan', 2, 4),
(2, 'Kerja Sama', 2, 4),
(3, 'Ada/Tidak Komplen', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_administratif3`
--

CREATE TABLE `kegiatan_tendik_administratif3` (
  `id_tendik_administratif3` int(11) NOT NULL,
  `nm_tendik_administratif3` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_administratif3`
--

INSERT INTO `kegiatan_tendik_administratif3` (`id_tendik_administratif3`, `nm_tendik_administratif3`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Kearsipan', 3, 9),
(2, 'Inisiatif', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_pengabdian`
--

CREATE TABLE `kegiatan_tendik_pengabdian` (
  `id_tendik_pengabdian` int(11) NOT NULL,
  `nm_tendik_pengabdian` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_pengabdian`
--

INSERT INTO `kegiatan_tendik_pengabdian` (`id_tendik_pengabdian`, `nm_tendik_pengabdian`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Ketua/Ahli', 0, 0),
(2, 'Anggota', 0, 0),
(3, 'Penyuluhan/Pelatihan/Penataran', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_pengabdian2`
--

CREATE TABLE `kegiatan_tendik_pengabdian2` (
  `id_tendik_pengabdian2` int(11) NOT NULL,
  `nm_tendik_pengabdian2` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_pengabdian2`
--

INSERT INTO `kegiatan_tendik_pengabdian2` (`id_tendik_pengabdian2`, `nm_tendik_pengabdian2`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Karya PPM', 0, 0),
(2, 'Penulisan Artikel', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_penunjang`
--

CREATE TABLE `kegiatan_tendik_penunjang` (
  `id_tendik_penunjang` int(11) NOT NULL,
  `nm_tendik_penunjang` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_penunjang`
--

INSERT INTO `kegiatan_tendik_penunjang` (`id_tendik_penunjang`, `nm_tendik_penunjang`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Pokja/Tim/Panitia', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_penunjang2`
--

CREATE TABLE `kegiatan_tendik_penunjang2` (
  `id_tendik_penunjang2` int(11) NOT NULL,
  `nm_tendik_penunjang2` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_penunjang2`
--

INSERT INTO `kegiatan_tendik_penunjang2` (`id_tendik_penunjang2`, `nm_tendik_penunjang2`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Ketua/Pembicara/Infrastruktur/Penceramah/Nara Sumber', 0, 0),
(2, 'Moderator', 0, 0),
(3, 'Anggota/Peserta', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_penunjang3`
--

CREATE TABLE `kegiatan_tendik_penunjang3` (
  `id_tendik_penunjang3` int(11) NOT NULL,
  `nm_tendik_penunjang3` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_penunjang3`
--

INSERT INTO `kegiatan_tendik_penunjang3` (`id_tendik_penunjang3`, `nm_tendik_penunjang3`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Pemandu Acara/MC', 0, 0),
(2, 'Qori', 0, 0),
(3, 'Qoriah', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_penunjang4`
--

CREATE TABLE `kegiatan_tendik_penunjang4` (
  `id_tendik_penunjang4` int(11) NOT NULL,
  `nm_tendik_penunjang4` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_penunjang4`
--

INSERT INTO `kegiatan_tendik_penunjang4` (`id_tendik_penunjang4`, `nm_tendik_penunjang4`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, '1 hari', 0, 0),
(2, '2 - 3 hari', 0, 0),
(3, '4 - 5 hari', 0, 0),
(4, '> 5 hari', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_penunjang5`
--

CREATE TABLE `kegiatan_tendik_penunjang5` (
  `id_tendik_penunjang5` int(11) NOT NULL,
  `nm_tendik_penunjang5` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_penunjang5`
--

INSERT INTO `kegiatan_tendik_penunjang5` (`id_tendik_penunjang5`, `nm_tendik_penunjang5`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Tanda Penghargaan/prestasi', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_personal`
--

CREATE TABLE `kegiatan_tendik_personal` (
  `id_tendik_personal` int(11) NOT NULL,
  `nm_tendik_personal` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_personal`
--

INSERT INTO `kegiatan_tendik_personal` (`id_tendik_personal`, `nm_tendik_personal`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Jumlah Kehadiran Harian', 15.5, 46.5),
(2, 'Jumlah Waktu Dalam Kehadiran Harian', 8, 22),
(3, 'Pengajian', 2.25, 5),
(4, 'Olah Raga', 2.25, 4.5),
(5, 'Rapat', 2, 4.44);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_strukturalmanajerial`
--

CREATE TABLE `kegiatan_tendik_strukturalmanajerial` (
  `id_tendik_strukturalmanajerial` int(11) NOT NULL,
  `nm_tendik_strukturalmanajerial` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_strukturalmanajerial`
--

INSERT INTO `kegiatan_tendik_strukturalmanajerial` (`id_tendik_strukturalmanajerial`, `nm_tendik_strukturalmanajerial`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Content', 8, 20),
(2, 'Waktu', 10, 25);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_strukturalmanajerial2`
--

CREATE TABLE `kegiatan_tendik_strukturalmanajerial2` (
  `id_tendik_strukturalmanajerial2` int(11) NOT NULL,
  `nm_tendik_strukturalmanajerial2` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_strukturalmanajerial2`
--

INSERT INTO `kegiatan_tendik_strukturalmanajerial2` (`id_tendik_strukturalmanajerial2`, `nm_tendik_strukturalmanajerial2`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Distribusi Tugas', 10, 25),
(2, 'Monitoring ', 10, 25);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_tendik_strukturalmanajerial3`
--

CREATE TABLE `kegiatan_tendik_strukturalmanajerial3` (
  `id_tendik_strukturalmanajerial3` int(11) NOT NULL,
  `nm_tendik_strukturalmanajerial3` text NOT NULL,
  `tendik_bobot_nilai` double NOT NULL,
  `tendik_nm_var` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_tendik_strukturalmanajerial3`
--

INSERT INTO `kegiatan_tendik_strukturalmanajerial3` (`id_tendik_strukturalmanajerial3`, `nm_tendik_strukturalmanajerial3`, `tendik_bobot_nilai`, `tendik_nm_var`) VALUES
(1, 'Pembinaan Staff', 15, 37.5);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(4) NOT NULL,
  `nm_status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nm_status`) VALUES
(1, 'DTY'),
(2, 'CDTY'),
(3, 'DPK'),
(4, 'SL'),
(5, 'TB'),
(6, 'DF');

-- --------------------------------------------------------

--
-- Table structure for table `tendik`
--

CREATE TABLE `tendik` (
  `id_tendik` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nm_tendik` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nm_unit` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nm_unit`, `alias`) VALUES
(4, 'UPCM', 'upcm'),
(3, 'DUTI', 'duti');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Data Master'),
(2, 'Aplikasi'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Tenaga Kependidikan', 'tendik', 'nav-icon icon-people', 1),
(2, 1, 'Unit', 'unit', 'nav-icon icon-layers', 1),
(3, 1, 'Jabatan', 'jabatan', 'nav-icon icon-list', 1),
(4, 2, 'Evaluasi Kinerja Tenaga Kependidikan', 'nilai-tendik', 'nav-icon icon-graph', 1),
(5, 3, 'Pengaturan', 'config', 'nav-icon icon-settings', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akp_tendik`
--
ALTER TABLE `akp_tendik`
  ADD PRIMARY KEY (`id_akp`);

--
-- Indexes for table `data_tendik_rekap`
--
ALTER TABLE `data_tendik_rekap`
  ADD PRIMARY KEY (`id_tendik_rekap`);

--
-- Indexes for table `det_identitas_data_rekap_tendik`
--
ALTER TABLE `det_identitas_data_rekap_tendik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kegiatan_tendik_administratif`
--
ALTER TABLE `kegiatan_tendik_administratif`
  ADD PRIMARY KEY (`id_tendik_administratif`);

--
-- Indexes for table `kegiatan_tendik_administratif2`
--
ALTER TABLE `kegiatan_tendik_administratif2`
  ADD PRIMARY KEY (`id_tendik_administratif2`);

--
-- Indexes for table `kegiatan_tendik_administratif3`
--
ALTER TABLE `kegiatan_tendik_administratif3`
  ADD PRIMARY KEY (`id_tendik_administratif3`);

--
-- Indexes for table `kegiatan_tendik_pengabdian`
--
ALTER TABLE `kegiatan_tendik_pengabdian`
  ADD PRIMARY KEY (`id_tendik_pengabdian`);

--
-- Indexes for table `kegiatan_tendik_pengabdian2`
--
ALTER TABLE `kegiatan_tendik_pengabdian2`
  ADD PRIMARY KEY (`id_tendik_pengabdian2`);

--
-- Indexes for table `kegiatan_tendik_penunjang`
--
ALTER TABLE `kegiatan_tendik_penunjang`
  ADD PRIMARY KEY (`id_tendik_penunjang`);

--
-- Indexes for table `kegiatan_tendik_penunjang2`
--
ALTER TABLE `kegiatan_tendik_penunjang2`
  ADD PRIMARY KEY (`id_tendik_penunjang2`);

--
-- Indexes for table `kegiatan_tendik_penunjang3`
--
ALTER TABLE `kegiatan_tendik_penunjang3`
  ADD PRIMARY KEY (`id_tendik_penunjang3`);

--
-- Indexes for table `kegiatan_tendik_penunjang4`
--
ALTER TABLE `kegiatan_tendik_penunjang4`
  ADD PRIMARY KEY (`id_tendik_penunjang4`);

--
-- Indexes for table `kegiatan_tendik_penunjang5`
--
ALTER TABLE `kegiatan_tendik_penunjang5`
  ADD PRIMARY KEY (`id_tendik_penunjang5`);

--
-- Indexes for table `kegiatan_tendik_personal`
--
ALTER TABLE `kegiatan_tendik_personal`
  ADD PRIMARY KEY (`id_tendik_personal`);

--
-- Indexes for table `kegiatan_tendik_strukturalmanajerial`
--
ALTER TABLE `kegiatan_tendik_strukturalmanajerial`
  ADD PRIMARY KEY (`id_tendik_strukturalmanajerial`);

--
-- Indexes for table `kegiatan_tendik_strukturalmanajerial2`
--
ALTER TABLE `kegiatan_tendik_strukturalmanajerial2`
  ADD PRIMARY KEY (`id_tendik_strukturalmanajerial2`);

--
-- Indexes for table `kegiatan_tendik_strukturalmanajerial3`
--
ALTER TABLE `kegiatan_tendik_strukturalmanajerial3`
  ADD PRIMARY KEY (`id_tendik_strukturalmanajerial3`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`id_tendik`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akp_tendik`
--
ALTER TABLE `akp_tendik`
  MODIFY `id_akp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_tendik_rekap`
--
ALTER TABLE `data_tendik_rekap`
  MODIFY `id_tendik_rekap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `det_identitas_data_rekap_tendik`
--
ALTER TABLE `det_identitas_data_rekap_tendik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatan_tendik_personal`
--
ALTER TABLE `kegiatan_tendik_personal`
  MODIFY `id_tendik_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tendik`
--
ALTER TABLE `tendik`
  MODIFY `id_tendik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
