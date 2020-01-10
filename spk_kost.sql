-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2020 pada 06.57
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_kost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa_alternatif`
--

CREATE TABLE `analisa_alternatif` (
  `alternatif_pertama` varchar(4) NOT NULL,
  `nilai_analisa_alternatif` double NOT NULL,
  `hasil_analisa_alternatif` double NOT NULL,
  `alternatif_kedua` varchar(4) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa_alternatif`
--

INSERT INTO `analisa_alternatif` (`alternatif_pertama`, `nilai_analisa_alternatif`, `hasil_analisa_alternatif`, `alternatif_kedua`, `id_kriteria`) VALUES
('A001', 1, 0.46848856664808, 'A001', 'C1'),
('A001', 1, 0.34985422740525, 'A001', 'C2'),
('A001', 1, 0.34985422740525, 'A001', 'C3'),
('A001', 1, 0.27334851936219, 'A001', 'C4'),
('A001', 1, 0.27334851936219, 'A001', 'C5'),
('A001', 1, 0.25862068965517, 'A001', 'C6'),
('A001', 1, 0.40384615384615, 'A001', 'C7'),
('A001', 3, 0.58536585365854, 'A002', 'C1'),
('A001', 5, 0.57692307692308, 'A002', 'C2'),
('A001', 3, 0.57324840764331, 'A002', 'C3'),
('A001', 1, 0.33426183844011, 'A002', 'C4'),
('A001', 1, 0.25862068965517, 'A002', 'C5'),
('A001', 3, 0.51136363636364, 'A002', 'C6'),
('A001', 9, 0.83677685950413, 'A002', 'C7'),
('A001', 3, 0.3515625, 'A003', 'C1'),
('A001', 3, 0.38135593220339, 'A003', 'C2'),
('A001', 5, 0.50675675675676, 'A003', 'C3'),
('A001', 5, 0.4746835443038, 'A003', 'C4'),
('A001', 3, 0.38135593220339, 'A003', 'C5'),
('A001', 1, 0.1271186440678, 'A003', 'C6'),
('A001', 9, 0.45814479638009, 'A003', 'C7'),
('A001', 5, 0.27027027027027, 'A004', 'C1'),
('A001', 5, 0.4746835443038, 'A004', 'C2'),
('A001', 5, 0.40540540540541, 'A004', 'C3'),
('A001', 3, 0.21259842519685, 'A004', 'C4'),
('A001', 8, 0.45344129554656, 'A004', 'C5'),
('A001', 5, 0.375, 'A004', 'C6'),
('A001', 9, 0.30882352941176, 'A004', 'C7'),
('A001', 8, 0.41379310344828, 'A005', 'C1'),
('A001', 8, 0.39344262295082, 'A005', 'C2'),
('A001', 1, 0.065217391304348, 'A005', 'C3'),
('A001', 1, 0.05, 'A005', 'C4'),
('A001', 1, 0.076923076923077, 'A005', 'C5'),
('A001', 1, 0.076086956521739, 'A005', 'C6'),
('A001', 1, 0.058139534883721, 'A005', 'C7'),
('A001', 7, 0.4375, 'A006', 'C1'),
('A001', 1, 0.071428571428571, 'A006', 'C2'),
('A001', 8, 0.38095238095238, 'A006', 'C3'),
('A001', 8, 0.42105263157895, 'A006', 'C4'),
('A001', 5, 0.27777777777778, 'A006', 'C5'),
('A001', 3, 0.1875, 'A006', 'C6'),
('A001', 7, 0.31818181818182, 'A006', 'C7'),
('A002', 0.33333333333333, 0.15616285554936, 'A001', 'C1'),
('A002', 0.2, 0.06997084548105, 'A001', 'C2'),
('A002', 0.33333333333333, 0.11661807580175, 'A001', 'C3'),
('A002', 1, 0.27334851936219, 'A001', 'C4'),
('A002', 1, 0.27334851936219, 'A001', 'C5'),
('A002', 0.33333333333333, 0.086206896551723, 'A001', 'C6'),
('A002', 0.11111111111111, 0.044871794871795, 'A001', 'C7'),
('A002', 1, 0.19512195121951, 'A002', 'C1'),
('A002', 1, 0.11538461538462, 'A002', 'C2'),
('A002', 1, 0.19108280254777, 'A002', 'C3'),
('A002', 1, 0.33426183844011, 'A002', 'C4'),
('A002', 1, 0.25862068965517, 'A002', 'C5'),
('A002', 1, 0.17045454545455, 'A002', 'C6'),
('A002', 1, 0.09297520661157, 'A002', 'C7'),
('A002', 3, 0.3515625, 'A003', 'C1'),
('A002', 3, 0.38135593220339, 'A003', 'C2'),
('A002', 3, 0.30405405405405, 'A003', 'C3'),
('A002', 3, 0.28481012658228, 'A003', 'C4'),
('A002', 3, 0.38135593220339, 'A003', 'C5'),
('A002', 5, 0.63559322033898, 'A003', 'C6'),
('A002', 9, 0.45814479638009, 'A003', 'C7'),
('A002', 8, 0.43243243243243, 'A004', 'C1'),
('A002', 1, 0.09493670886076, 'A004', 'C2'),
('A002', 2, 0.16216216216216, 'A004', 'C3'),
('A002', 8, 0.56692913385827, 'A004', 'C4'),
('A002', 5, 0.2834008097166, 'A004', 'C5'),
('A002', 3, 0.225, 'A004', 'C6'),
('A002', 9, 0.30882352941176, 'A004', 'C7'),
('A002', 3, 0.1551724137931, 'A005', 'C1'),
('A002', 3, 0.14754098360656, 'A005', 'C2'),
('A002', 5, 0.32608695652174, 'A005', 'C3'),
('A002', 3, 0.15, 'A005', 'C4'),
('A002', 3, 0.23076923076923, 'A005', 'C5'),
('A002', 3, 0.22826086956522, 'A005', 'C6'),
('A002', 3, 0.17441860465116, 'A005', 'C7'),
('A002', 3, 0.1875, 'A006', 'C1'),
('A002', 1, 0.071428571428571, 'A006', 'C2'),
('A002', 5, 0.23809523809524, 'A006', 'C3'),
('A002', 5, 0.26315789473684, 'A006', 'C4'),
('A002', 1, 0.055555555555556, 'A006', 'C5'),
('A002', 1, 0.0625, 'A006', 'C6'),
('A002', 5, 0.22727272727273, 'A006', 'C7'),
('A003', 0.33333333333333, 0.15616285554936, 'A001', 'C1'),
('A003', 0.33333333333333, 0.11661807580175, 'A001', 'C2'),
('A003', 0.2, 0.06997084548105, 'A001', 'C3'),
('A003', 0.2, 0.054669703872437, 'A001', 'C4'),
('A003', 0.33333333333333, 0.091116173120728, 'A001', 'C5'),
('A003', 1, 0.25862068965517, 'A001', 'C6'),
('A003', 0.11111111111111, 0.044871794871795, 'A001', 'C7'),
('A003', 0.33333333333333, 0.065040650406504, 'A002', 'C1'),
('A003', 0.33333333333333, 0.038461538461538, 'A002', 'C2'),
('A003', 0.33333333333333, 0.063694267515923, 'A002', 'C3'),
('A003', 0.33333333333333, 0.11142061281337, 'A002', 'C4'),
('A003', 0.33333333333333, 0.086206896551723, 'A002', 'C5'),
('A003', 0.2, 0.034090909090909, 'A002', 'C6'),
('A003', 0.11111111111111, 0.010330578512397, 'A002', 'C7'),
('A003', 1, 0.1171875, 'A003', 'C1'),
('A003', 1, 0.1271186440678, 'A003', 'C2'),
('A003', 1, 0.10135135135135, 'A003', 'C3'),
('A003', 1, 0.09493670886076, 'A003', 'C4'),
('A003', 1, 0.1271186440678, 'A003', 'C5'),
('A003', 1, 0.1271186440678, 'A003', 'C6'),
('A003', 1, 0.050904977375566, 'A003', 'C7'),
('A003', 3, 0.16216216216216, 'A004', 'C1'),
('A003', 3, 0.28481012658228, 'A004', 'C2'),
('A003', 3, 0.24324324324324, 'A004', 'C3'),
('A003', 1, 0.070866141732283, 'A004', 'C4'),
('A003', 3, 0.17004048582996, 'A004', 'C5'),
('A003', 3, 0.225, 'A004', 'C6'),
('A003', 9, 0.30882352941176, 'A004', 'C7'),
('A003', 5, 0.25862068965517, 'A005', 'C1'),
('A003', 5, 0.24590163934426, 'A005', 'C2'),
('A003', 5, 0.32608695652174, 'A005', 'C3'),
('A003', 5, 0.25, 'A005', 'C4'),
('A003', 5, 0.38461538461538, 'A005', 'C5'),
('A003', 5, 0.3804347826087, 'A005', 'C6'),
('A003', 5, 0.2906976744186, 'A005', 'C7'),
('A003', 1, 0.0625, 'A006', 'C1'),
('A003', 3, 0.21428571428571, 'A006', 'C2'),
('A003', 3, 0.14285714285714, 'A006', 'C3'),
('A003', 3, 0.15789473684211, 'A006', 'C4'),
('A003', 3, 0.16666666666667, 'A006', 'C5'),
('A003', 3, 0.1875, 'A006', 'C6'),
('A003', 3, 0.13636363636364, 'A006', 'C7'),
('A004', 0.2, 0.093697713329616, 'A001', 'C1'),
('A004', 0.2, 0.06997084548105, 'A001', 'C2'),
('A004', 0.2, 0.06997084548105, 'A001', 'C3'),
('A004', 0.33333333333333, 0.091116173120728, 'A001', 'C4'),
('A004', 0.125, 0.034168564920273, 'A001', 'C5'),
('A004', 0.2, 0.051724137931035, 'A001', 'C6'),
('A004', 0.11111111111111, 0.044871794871795, 'A001', 'C7'),
('A004', 0.125, 0.024390243902439, 'A002', 'C1'),
('A004', 1, 0.11538461538462, 'A002', 'C2'),
('A004', 0.5, 0.095541401273885, 'A002', 'C3'),
('A004', 0.125, 0.041782729805014, 'A002', 'C4'),
('A004', 0.2, 0.051724137931035, 'A002', 'C5'),
('A004', 0.33333333333333, 0.056818181818181, 'A002', 'C6'),
('A004', 0.11111111111111, 0.010330578512397, 'A002', 'C7'),
('A004', 0.33333333333333, 0.0390625, 'A003', 'C1'),
('A004', 0.33333333333333, 0.042372881355932, 'A003', 'C2'),
('A004', 0.33333333333333, 0.033783783783783, 'A003', 'C3'),
('A004', 1, 0.09493670886076, 'A003', 'C4'),
('A004', 0.33333333333333, 0.042372881355932, 'A003', 'C5'),
('A004', 0.33333333333333, 0.042372881355932, 'A003', 'C6'),
('A004', 0.11111111111111, 0.005656108597285, 'A003', 'C7'),
('A004', 1, 0.054054054054054, 'A004', 'C1'),
('A004', 1, 0.09493670886076, 'A004', 'C2'),
('A004', 1, 0.081081081081081, 'A004', 'C3'),
('A004', 1, 0.070866141732283, 'A004', 'C4'),
('A004', 1, 0.05668016194332, 'A004', 'C5'),
('A004', 1, 0.075, 'A004', 'C6'),
('A004', 1, 0.034313725490196, 'A004', 'C7'),
('A004', 2, 0.10344827586207, 'A005', 'C1'),
('A004', 3, 0.14754098360656, 'A005', 'C2'),
('A004', 3, 0.19565217391304, 'A005', 'C3'),
('A004', 9, 0.45, 'A005', 'C4'),
('A004', 2, 0.15384615384615, 'A005', 'C5'),
('A004', 3, 0.22826086956522, 'A005', 'C6'),
('A004', 7, 0.40697674418605, 'A005', 'C7'),
('A004', 1, 0.0625, 'A006', 'C1'),
('A004', 5, 0.35714285714286, 'A006', 'C2'),
('A004', 1, 0.047619047619048, 'A006', 'C3'),
('A004', 1, 0.052631578947368, 'A006', 'C4'),
('A004', 7, 0.38888888888889, 'A006', 'C5'),
('A004', 1, 0.0625, 'A006', 'C6'),
('A004', 1, 0.045454545454545, 'A006', 'C7'),
('A005', 0.125, 0.05856107083101, 'A001', 'C1'),
('A005', 0.125, 0.043731778425656, 'A001', 'C2'),
('A005', 1, 0.34985422740525, 'A001', 'C3'),
('A005', 1, 0.27334851936219, 'A001', 'C4'),
('A005', 1, 0.27334851936219, 'A001', 'C5'),
('A005', 1, 0.25862068965517, 'A001', 'C6'),
('A005', 1, 0.40384615384615, 'A001', 'C7'),
('A005', 0.33333333333333, 0.065040650406504, 'A002', 'C1'),
('A005', 0.33333333333333, 0.038461538461538, 'A002', 'C2'),
('A005', 0.2, 0.038216560509554, 'A002', 'C3'),
('A005', 0.33333333333333, 0.11142061281337, 'A002', 'C4'),
('A005', 0.33333333333333, 0.086206896551723, 'A002', 'C5'),
('A005', 0.33333333333333, 0.056818181818181, 'A002', 'C6'),
('A005', 0.33333333333333, 0.03099173553719, 'A002', 'C7'),
('A005', 0.2, 0.0234375, 'A003', 'C1'),
('A005', 0.2, 0.025423728813559, 'A003', 'C2'),
('A005', 0.2, 0.02027027027027, 'A003', 'C3'),
('A005', 0.2, 0.018987341772152, 'A003', 'C4'),
('A005', 0.2, 0.025423728813559, 'A003', 'C5'),
('A005', 0.2, 0.025423728813559, 'A003', 'C6'),
('A005', 0.2, 0.010180995475113, 'A003', 'C7'),
('A005', 0.5, 0.027027027027027, 'A004', 'C1'),
('A005', 0.33333333333333, 0.031645569620253, 'A004', 'C2'),
('A005', 0.33333333333333, 0.027027027027027, 'A004', 'C3'),
('A005', 0.11111111111111, 0.0078740157480314, 'A004', 'C4'),
('A005', 0.5, 0.02834008097166, 'A004', 'C5'),
('A005', 0.33333333333333, 0.025, 'A004', 'C6'),
('A005', 0.14285714285714, 0.0049019607843136, 'A004', 'C7'),
('A005', 1, 0.051724137931034, 'A005', 'C1'),
('A005', 1, 0.049180327868852, 'A005', 'C2'),
('A005', 1, 0.065217391304348, 'A005', 'C3'),
('A005', 1, 0.05, 'A005', 'C4'),
('A005', 1, 0.076923076923077, 'A005', 'C5'),
('A005', 1, 0.076086956521739, 'A005', 'C6'),
('A005', 1, 0.058139534883721, 'A005', 'C7'),
('A005', 3, 0.1875, 'A006', 'C1'),
('A005', 3, 0.21428571428571, 'A006', 'C2'),
('A005', 3, 0.14285714285714, 'A006', 'C3'),
('A005', 1, 0.052631578947368, 'A006', 'C4'),
('A005', 1, 0.055555555555556, 'A006', 'C5'),
('A005', 7, 0.4375, 'A006', 'C6'),
('A005', 5, 0.22727272727273, 'A006', 'C7'),
('A006', 0.14285714285714, 0.066926938092581, 'A001', 'C1'),
('A006', 1, 0.34985422740525, 'A001', 'C2'),
('A006', 0.125, 0.043731778425656, 'A001', 'C3'),
('A006', 0.125, 0.034168564920273, 'A001', 'C4'),
('A006', 0.2, 0.054669703872437, 'A001', 'C5'),
('A006', 0.33333333333333, 0.086206896551723, 'A001', 'C6'),
('A006', 0.14285714285714, 0.057692307692307, 'A001', 'C7'),
('A006', 0.33333333333333, 0.065040650406504, 'A002', 'C1'),
('A006', 1, 0.11538461538462, 'A002', 'C2'),
('A006', 0.2, 0.038216560509554, 'A002', 'C3'),
('A006', 0.2, 0.066852367688022, 'A002', 'C4'),
('A006', 1, 0.25862068965517, 'A002', 'C5'),
('A006', 1, 0.17045454545455, 'A002', 'C6'),
('A006', 0.2, 0.018595041322314, 'A002', 'C7'),
('A006', 1, 0.1171875, 'A003', 'C1'),
('A006', 0.33333333333333, 0.042372881355932, 'A003', 'C2'),
('A006', 0.33333333333333, 0.033783783783783, 'A003', 'C3'),
('A006', 0.33333333333333, 0.031645569620253, 'A003', 'C4'),
('A006', 0.33333333333333, 0.042372881355932, 'A003', 'C5'),
('A006', 0.33333333333333, 0.042372881355932, 'A003', 'C6'),
('A006', 0.33333333333333, 0.016968325791855, 'A003', 'C7'),
('A006', 1, 0.054054054054054, 'A004', 'C1'),
('A006', 0.2, 0.018987341772152, 'A004', 'C2'),
('A006', 1, 0.081081081081081, 'A004', 'C3'),
('A006', 1, 0.070866141732283, 'A004', 'C4'),
('A006', 0.14285714285714, 0.0080971659919027, 'A004', 'C5'),
('A006', 1, 0.075, 'A004', 'C6'),
('A006', 1, 0.034313725490196, 'A004', 'C7'),
('A006', 0.33333333333333, 0.017241379310345, 'A005', 'C1'),
('A006', 0.33333333333333, 0.016393442622951, 'A005', 'C2'),
('A006', 0.33333333333333, 0.021739130434782, 'A005', 'C3'),
('A006', 1, 0.05, 'A005', 'C4'),
('A006', 1, 0.076923076923077, 'A005', 'C5'),
('A006', 0.14285714285714, 0.010869565217391, 'A005', 'C6'),
('A006', 0.2, 0.011627906976744, 'A005', 'C7'),
('A006', 1, 0.0625, 'A006', 'C1'),
('A006', 1, 0.071428571428571, 'A006', 'C2'),
('A006', 1, 0.047619047619048, 'A006', 'C3'),
('A006', 1, 0.052631578947368, 'A006', 'C4'),
('A006', 1, 0.055555555555556, 'A006', 'C5'),
('A006', 1, 0.0625, 'A006', 'C6'),
('A006', 1, 0.045454545454545, 'A006', 'C7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa_kriteria`
--

CREATE TABLE `analisa_kriteria` (
  `kriteria_pertama` varchar(2) NOT NULL,
  `nilai_analisa_kriteria` double NOT NULL,
  `hasil_analisa_kriteria` double NOT NULL,
  `kriteria_kedua` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa_kriteria`
--

INSERT INTO `analisa_kriteria` (`kriteria_pertama`, `nilai_analisa_kriteria`, `hasil_analisa_kriteria`, `kriteria_kedua`) VALUES
('C1', 1, 0.31413612565445, 'C1'),
('C1', 5, 0.56390977443609, 'C2'),
('C1', 4, 0.6, 'C3'),
('C1', 5, 0.34883720930233, 'C4'),
('C1', 1, 0.043062200956938, 'C5'),
('C1', 5, 0.13846153846154, 'C6'),
('C1', 3, 0.073170731707317, 'C7'),
('C2', 0.2, 0.06282722513089, 'C1'),
('C2', 1, 0.11278195488722, 'C2'),
('C2', 1, 0.15, 'C3'),
('C2', 5, 0.34883720930233, 'C4'),
('C2', 3, 0.12918660287081, 'C5'),
('C2', 3, 0.083076923076923, 'C6'),
('C2', 1, 0.024390243902439, 'C7'),
('C3', 0.25, 0.078534031413613, 'C1'),
('C3', 1, 0.11278195488722, 'C2'),
('C3', 1, 0.15, 'C3'),
('C3', 3, 0.2093023255814, 'C4'),
('C3', 9, 0.38755980861244, 'C5'),
('C3', 9, 0.24923076923077, 'C6'),
('C3', 9, 0.21951219512195, 'C7'),
('C4', 0.2, 0.06282722513089, 'C1'),
('C4', 0.2, 0.022556390977444, 'C2'),
('C4', 0.33333333333333, 0.05, 'C3'),
('C4', 1, 0.069767441860465, 'C4'),
('C4', 9, 0.38755980861244, 'C5'),
('C4', 9, 0.24923076923077, 'C6'),
('C4', 9, 0.21951219512195, 'C7'),
('C5', 1, 0.31413612565445, 'C1'),
('C5', 0.33333333333333, 0.037593984962406, 'C2'),
('C5', 0.11111111111111, 0.016666666666667, 'C3'),
('C5', 0.11111111111111, 0.007751937984496, 'C4'),
('C5', 1, 0.043062200956938, 'C5'),
('C5', 9, 0.24923076923077, 'C6'),
('C5', 9, 0.21951219512195, 'C7'),
('C6', 0.2, 0.06282722513089, 'C1'),
('C6', 0.33333333333333, 0.037593984962406, 'C2'),
('C6', 0.11111111111111, 0.016666666666667, 'C3'),
('C6', 0.11111111111111, 0.007751937984496, 'C4'),
('C6', 0.11111111111111, 0.0047846889952153, 'C5'),
('C6', 1, 0.027692307692308, 'C6'),
('C6', 9, 0.21951219512195, 'C7'),
('C7', 0.33333333333333, 0.10471204188482, 'C1'),
('C7', 1, 0.11278195488722, 'C2'),
('C7', 0.11111111111111, 0.016666666666667, 'C3'),
('C7', 0.11111111111111, 0.007751937984496, 'C4'),
('C7', 0.11111111111111, 0.0047846889952153, 'C5'),
('C7', 0.11111111111111, 0.003076923076923, 'C6'),
('C7', 1, 0.024390243902439, 'C7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `id_alternatif` varchar(4) NOT NULL,
  `no_kost` varchar(10) NOT NULL,
  `nama_kost` varchar(100) NOT NULL,
  `nama_pemilik_kost` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `hasil_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_alternatif`
--

INSERT INTO `data_alternatif` (`id_alternatif`, `no_kost`, `nama_kost`, `nama_pemilik_kost`, `alamat`, `harga`, `keterangan`, `gambar`, `hasil_akhir`) VALUES
('A001', '19', 'Leoni', 'Ibu Eva', 'Dusun 3 Kaum Jaya,  Desa. Puseurjaya, Kec. Telukjambe Timur', 'Rp. 550.000', 'Fasilitas kamar dengan kamar yang luas, kamar mandi di dalam. Akses hanya bisa di lalui dengan roda dua, roda empat bisa akan tetapi mepet. Batas jam malam 22.00 Sedikit kurang keamanannya.', 'L.JPG', 0.36078814382511),
('A002', '10', 'Pondok Srikandi', 'Bapak Kiran', 'Perum Singaperbangsa', 'Rp. 650.000', 'Fasilitas kamar dengan kamar yang luas, kamar mandi di dalam. Akses bisa di lalui dengan roda dua dan roda empat. Batas jam malam 22.00 dan Keamanannya di tempat kost bagus.', 'OFFB1946.jpg', 0.23701530408358962),
('A003', '6', 'Grand Liquid', 'Bapak Suhada', 'Jl. H.S Ronggowaluyo, Dusun 3 Kaum Jaya, Desa. Puseurjaya, Kec. Telukjambe Timur', 'Rp. 700.000', 'Fasilitas kamar dengan kamar yang lumayan luas dan kamar mandi di dalam. Aksesbisa di lalui dengan roda dua dan roda empat. Batas jam malam 22.00 Keamanan untuk kostnya bagus.', 'OVLG7178.png', 0.1514959169830683),
('A004', '17', 'Kalista', 'Ibu Tri', 'Perum Mahkota Regency Blok A1', 'Rp. 600.000', 'Fasilitas kamar dengan kamar yang lumayan luas dan kamar mandi di dalam. Akses bisa di lalui dengan roda dua dan roda empat. Batas jam malam 22.00. Keamanannya sangat bagus karena berada di dalam perumahan dekan dengan pos satpam.', 'IMG_6510 - Copy.JPG', 0.0980276103843285),
('A005', '4', 'Kost Coklat', 'Bu Nanang', 'Perum Mahkota Regency  Blok B1 No 12', 'Rp. 550.000', 'Fasilitas kamar dengan kamar yang luas, kamar mandi di dalam. Akses bisa di lalui dengan roda dua dan roda empat . Batas jam malam tidak ada. Keamanannya bagus.', 'KXXY5386.jpg', 0.08800019544098571),
('A006', '9', 'Kost Ucu', 'Bu Ucu', 'Perumahan Singaperbangsa ', 'Rp. 450.000', 'Fasilitas kamar dengan kamar yang luas, kamar mandi di dalam. Akses hanya bisa di lalui dengan roda dua, roda empat bisa akan tetapi mepet. Batas jam malam 22.00 Keamanannya bagus.', 'MQGP0324.jpg', 0.06467282928291648);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `id_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `jumlah_kriteria` double NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kriteria`
--

INSERT INTO `data_kriteria` (`id_kriteria`, `nama_kriteria`, `jumlah_kriteria`, `bobot_kriteria`) VALUES
('C1', 'Jarak', 3.18333333333333, 0.2973682257883808),
('C2', 'Harga', 8.86666666666666, 0.13015716559580173),
('C3', 'Luas Kamar', 6.66666666666666, 0.20098872640677043),
('C4', 'Fasilitas Kamar', 14.333333333333332, 0.15163626156199417),
('C5', 'Batas Jam Malam', 23.22222222222222, 0.12685055436823958),
('C6', 'Akses', 36.11111111111111, 0.053832715221990325),
('C7', 'Keamanan', 41, 0.03916635105682576);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jum_alt_kri`
--

CREATE TABLE `jum_alt_kri` (
  `id_alternatif` varchar(4) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL,
  `jumlah_alt_kri` double NOT NULL,
  `skor_alt_kri` double NOT NULL,
  `hasil_alt_kri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jum_alt_kri`
--

INSERT INTO `jum_alt_kri` (`id_alternatif`, `id_kriteria`, `jumlah_alt_kri`, `skor_alt_kri`, `hasil_alt_kri`) VALUES
('A001', 'C1', 2.1345238095237997, 0.42116338233753, 0.12524060777274),
('A001', 'C2', 2.85833333333333, 0.37461466253582, 0.04875878266629),
('A001', 'C3', 2.85833333333333, 0.38023909491124, 0.076423771416273),
('A001', 'C4', 3.65833333333333, 0.29432415981365, 0.044630215281517),
('A001', 'C5', 3.65833333333333, 0.28691121524469, 0.036394846708254),
('A001', 'C6', 3.86666666666666, 0.25594832110139, 0.013778393081398),
('A001', 'C7', 2.4761904761904705, 0.39731878203461, 0.015561526898638),
('A002', 'C1', 5.124999999999991, 0.2463253588324, 0.073249334922677),
('A002', 'C2', 8.66666666666666, 0.14676960949416, 0.019103116367363),
('A002', 'C3', 5.233333333333331, 0.22301654819712, 0.044823811989773),
('A002', 'C4', 2.99166666666666, 0.31208458549661, 0.04732333983583),
('A002', 'C5', 3.86666666666666, 0.24717512287702, 0.031354301362988),
('A002', 'C6', 5.866666666666661, 0.23466925531841, 0.012632883192913),
('A002', 'C7', 10.755555555555551, 0.21775110986652, 0.0085285164120456),
('A003', 'C1', 8.533333333333331, 0.1369456429622, 0.040723282877118),
('A003', 'C2', 7.866666666666661, 0.17119928975722, 0.022282814306814),
('A003', 'C3', 9.86666666666666, 0.15786730116174, 0.031729547801772),
('A003', 'C4', 10.53333333333333, 0.12329798402016, 0.018696445354948),
('A003', 'C5', 7.866666666666661, 0.17096070847538, 0.021686460645289),
('A003', 'C6', 7.866666666666661, 0.2021275042371, 0.010881072374127),
('A003', 'C7', 19.64444444444444, 0.14033203182563, 0.0054962936230003),
('A004', 'C1', 18.5, 0.06285879785803, 0.018692209194233),
('A004', 'C2', 10.53333333333333, 0.13789148197196, 0.017947564453275),
('A004', 'C3', 12.33333333333333, 0.087274722191981, 0.017541235260871),
('A004', 'C4', 14.11111111111111, 0.13355555541103, 0.020251865133364),
('A004', 'C5', 17.64285714285714, 0.12128013148093, 0.015384451912209),
('A004', 'C6', 13.33333333333333, 0.086112678445061, 0.0046356792957358),
('A004', 'C7', 29.14285714285714, 0.091267249518711, 0.0035746051346407),
('A005', 'C1', 19.33333333333333, 0.068881731032596, 0.020483238146396),
('A005', 'C2', 20.33333333333333, 0.067121442912595, 0.0087363367602038),
('A005', 'C3', 15.33333333333333, 0.10724043656226, 0.021554118763955),
('A005', 'C4', 20, 0.085710344773852, 0.012996796258697),
('A005', 'C5', 13, 0.090966309696294, 0.011539126813808),
('A005', 'C6', 13.14285714285714, 0.14657492613477, 0.0078905262572973),
('A005', 'C7', 17.2, 0.12255551796654, 0.0048000524406286),
('A006', 'C1', 16, 0.063825086977247, 0.018979552875213),
('A006', 'C2', 14, 0.10240351332825, 0.013328551041857),
('A006', 'C3', 21, 0.044361896975651, 0.0089162411741245),
('A006', 'C4', 19, 0.0510273704847, 0.0077375996976388),
('A006', 'C5', 18, 0.082706512225679, 0.010491366925691),
('A006', 'C6', 16, 0.074567314763266, 0.0040141610205194),
('A006', 'C7', 22, 0.030775308787994, 0.0012053565478728);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kost_awal`
--

CREATE TABLE `kost_awal` (
  `id_kost_awal` int(11) NOT NULL,
  `id_alternatif` varchar(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga_kost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kost_awal`
--

INSERT INTO `kost_awal` (`id_kost_awal`, `id_alternatif`, `nama`, `harga_kost`) VALUES
(1, 'A001', 'Leoni', 'Rp. 500.000'),
(2, 'A002', 'Kos2', 'Rp. 500.000'),
(3, 'A003', 'Kos3', 'Rp. 500.000'),
(4, 'A004', 'Kos4', 'Rp. 500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kost_awal_detail`
--

CREATE TABLE `kost_awal_detail` (
  `id_kost_awal_detail` int(11) NOT NULL,
  `id_kost_awal` int(11) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kost_awal_detail`
--

INSERT INTO `kost_awal_detail` (`id_kost_awal_detail`, `id_kost_awal`, `id_kriteria`) VALUES
(1, 1, 'C1'),
(6, 2, 'C1'),
(11, 3, 'C1'),
(16, 4, 'C1'),
(2, 1, 'C2'),
(7, 2, 'C2'),
(12, 3, 'C2'),
(17, 4, 'C2'),
(3, 1, 'C3'),
(8, 2, 'C3'),
(13, 3, 'C3'),
(18, 4, 'C3'),
(4, 1, 'C4'),
(9, 2, 'C4'),
(14, 3, 'C4'),
(19, 4, 'C4'),
(5, 1, 'C5'),
(10, 2, 'C5'),
(15, 3, 'C5'),
(20, 4, 'C5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `jum_nilai` double NOT NULL,
  `ket_nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `jum_nilai`, `ket_nilai`) VALUES
(2, 9, 'Mutlak sangat penting dari'),
(3, 8, 'Mendekati mutlak dari'),
(8, 7, 'Sangat penting dari'),
(9, 6, 'Mendekati sangat penting dari'),
(10, 5, 'Lebih penting dari'),
(11, 4, 'Mendekati lebih penting dari'),
(12, 3, 'Sedikit lebih penting dari'),
(13, 2, 'Mendekati sedikit lebih penting dari'),
(14, 1, 'Sama penting dengan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `role`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user', 'user'),
(41, 'nisa', 'user', 'nisab', 'nisab'),
(42, 'Yunisa', 'user', 'ndah', 'sdwdwd'),
(47, 'Mitha', 'user', 'mithaa', 'uuuu'),
(48, 'haris', 'user', 'haris', 'haris'),
(49, 'nino', 'user', 'ninoo', 'ninoo'),
(55, 'yunisaaa', 'user', 'nisabian', '       ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranking`
--

CREATE TABLE `ranking` (
  `id_kriteria` varchar(2) NOT NULL,
  `skor_bobot` double NOT NULL,
  `id_alternatif` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisa_alternatif`
--
ALTER TABLE `analisa_alternatif`
  ADD PRIMARY KEY (`alternatif_pertama`,`alternatif_kedua`,`id_kriteria`),
  ADD KEY `alternatif_kedua` (`alternatif_kedua`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD PRIMARY KEY (`kriteria_pertama`,`kriteria_kedua`),
  ADD KEY `kriteria_kedua` (`kriteria_kedua`);

--
-- Indeks untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `jum_alt_kri`
--
ALTER TABLE `jum_alt_kri`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `kost_awal`
--
ALTER TABLE `kost_awal`
  ADD PRIMARY KEY (`id_kost_awal`,`id_alternatif`),
  ADD KEY `alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `kost_awal_detail`
--
ALTER TABLE `kost_awal_detail`
  ADD PRIMARY KEY (`id_kost_awal_detail`,`id_kost_awal`),
  ADD KEY `alternatif` (`id_kost_awal`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_kriteria`,`id_alternatif`),
  ADD KEY `alternatif` (`id_alternatif`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kost_awal`
--
ALTER TABLE `kost_awal`
  MODIFY `id_kost_awal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kost_awal_detail`
--
ALTER TABLE `kost_awal_detail`
  MODIFY `id_kost_awal_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `analisa_alternatif`
--
ALTER TABLE `analisa_alternatif`
  ADD CONSTRAINT `analisa_alternatif_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_alternatif_ibfk_2` FOREIGN KEY (`alternatif_pertama`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_alternatif_ibfk_3` FOREIGN KEY (`alternatif_kedua`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD CONSTRAINT `analisa_kriteria_ibfk_1` FOREIGN KEY (`kriteria_pertama`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_kriteria_ibfk_2` FOREIGN KEY (`kriteria_kedua`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jum_alt_kri`
--
ALTER TABLE `jum_alt_kri`
  ADD CONSTRAINT `jum_alt_kri_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jum_alt_kri_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kost_awal`
--
ALTER TABLE `kost_awal`
  ADD CONSTRAINT `kost_awal_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kost_awal_detail`
--
ALTER TABLE `kost_awal_detail`
  ADD CONSTRAINT `kost_awal_detail_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kost_awal_detail_ibfk_2` FOREIGN KEY (`id_kost_awal`) REFERENCES `kost_awal` (`id_kost_awal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `ranking_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ranking_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
