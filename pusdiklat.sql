/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : pusdiklat

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-13 06:50:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `len_mata_ajar`
-- ----------------------------
DROP TABLE IF EXISTS `len_mata_ajar`;
CREATE TABLE `len_mata_ajar` (
  `mataAjarID` int(11) NOT NULL AUTO_INCREMENT,
  `mataAjarName` varchar(255) NOT NULL,
  `mataAjarDesc` varchar(255) DEFAULT NULL,
  `jamLat` decimal(10,1) DEFAULT NULL,
  `addDate` varchar(50) DEFAULT NULL,
  `lastUpdate` varchar(50) DEFAULT NULL,
  `addBy` int(11) DEFAULT NULL,
  `updateBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`mataAjarID`),
  KEY `addBy` (`addBy`),
  KEY `updateBy` (`updateBy`)
) ENGINE=MyISAM AUTO_INCREMENT=330402945 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of len_mata_ajar
-- ----------------------------
INSERT INTO `len_mata_ajar` VALUES ('1888', 'Parameter Fokus Penilaian', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('581', 'Penyusunan Program dan Kegiatan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('582', 'Penyusunan Rencana Kerja dan Anggaran (RKA) ', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('583', 'Konsepsi Badan Layanan Umum Daerah (BLUD)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('584', 'Penyusunan Rencana Strategi Bisnis (RSB)', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('585', 'Akuntansi BLUD', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('586', 'Penyusunan Laporan Keuangan BLUD', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('587', 'Pelaksanaan dan Penatausahaan Pembiayaan Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('588', 'Gambaran Umum Tentang Aset Daerah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('589', 'Gambaran Umum Tentang Penilaian Aset Daerah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('590', 'Penilaian Aset Lancar & Investasi Untuk Penyusunan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('591', 'Manajemen Arsip Dinamis', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('592', 'Pengenalan Fungsionalitas Aplikasi Pengelolaan Ars', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('593', 'Pengenalan Perangkat TIK Pendukung Implementasi Ap', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('594', 'Praktek Aplikasi Pengelolaan Arsip', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('595', 'Document Management System (DMS)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('596', 'Lotus Notes', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('597', 'Observasi Lapangan (ANRI)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('598', 'Mekanisme Pencairan, Penatausahaan dan Pembayaran ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('599', 'Laporan Keuangan Proyek yang Diaudit yang Dibiayai', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('600', 'Pengelolaan Pinjaman dan Hibah Luar Negeri', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('601', 'Pengadaan Barang dan Jasa Lender/Donor (HACT Syste', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('602', 'Pengadaan Barang dan Jasa Pemerintah (PP No.54 Tah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('603', 'Pelaksanaan Audit PHLN (Audit Konsultan, Konstruks', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('604', 'Pelaporan Audit PHLN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('605', 'Perpajakan dalam Proyek yang Dibiayai PHLN', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('606', 'Pembahasan Post Test', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('607', 'Kapita Selekta PHLN (Program anti korupsi, Current', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('608', 'Pengadaan Barang dan Jasa Lender/Donor (Guidelines', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('609', 'Studi Kasus EHKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('610', 'Gambaran Umum Aplikasi Simda Keuangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('611', 'System Administrator', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('612', 'System Requirement', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('613', 'Penyusunan Anggaran', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('614', 'Penatausahaan Barang Milik Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('615', 'Pembukuan dan Pelaporan Keuangan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('616', 'Kebijakan Umum PerMenPAN No:PER/220/M.PAN/2008', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('617', 'Kebijakan Umum Peraturan Bersama Kepala BPKP dan K', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('618', 'SOP Penilaian dan Penetapan Angka Kredit Auditor', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('619', 'Jam Pimpinan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('620', 'Simulasi Penilaian dan Penetapan Angka Kredit', '', '17.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('621', 'Impelementasi Lingkungan Pengendalian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('622', 'Implementasi Lingkungan Pengendalian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('623', 'Teknik identifikasi Risiko', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('624', 'Teknik mencari literatur pendukung/tinjauan kepust', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('625', 'Teknik membangun kerangka pemikiran penelitian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('626', 'Teknik menentukan variabel penelitian dan operasio', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('627', 'Teknik menentukan metodologi penelitian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('628', 'Teknik menyusun kuesioner (pertanyaan terbuka, per', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('629', 'Teknik analisis dan penyimpulan hasil penelitian s', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('630', 'Pengolahan data dan interpretasi hasilnya', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('631', 'Peran Pembinaan dan Koordinasi Puslitbangwas BPKP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('632', 'Pengantar Penelitian dan Metode Penelitian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('633', 'Perumusan Masalah Penelitian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('634', 'Penyusunan Desain Penelitian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('635', 'Pengumpulan Data Penelitian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('636', 'Analisis Data Penelitian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('637', 'Pelaporan Hasil Penelitian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('638', 'Proses/Prosedur Penelitian di Puslitbangwas BPKP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('639', 'Program Kerja Audit Rinci', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('640', 'Mitigasi dan wrap up penilaian risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('641', 'Pemahaman konteks risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('642', 'Penulisan Laporan Hasil Monitoring dan Evaluasi, L', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('643', 'Penggunaan Bahasa Indonesia dalam Penulisan Lapora', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('644', 'Overview Analisis Pemecahan Masalah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('645', 'Analisis pemecahan masalah kelitbangan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('646', 'Analisis dan Evaluasi Risiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('647', 'Mitigasi Penilaian Risiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('648', 'Wrap up Penilaian risiko', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('649', 'Overview Evaluasi Akuntabilitas Kinerja Instansi P', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('650', 'Renstra dan Kinerja', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('651', 'Evaluasi atas Perencanaan dan Pengukuran Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('652', 'Evaluasi atas Pelaporan Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('653', 'Evaluasi atas Capaian Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('654', 'Penjelasan dan Praktek Pengoperasian Penyusunan An', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('655', 'Penjelasan Teori dan Praktek Pengoperasian Penatau', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('656', 'Penjelasan Teori dan Praktek Pengoperasian Akuntan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('657', 'Penulisan Laporan atas Pemberian Jasa Konsultasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('658', 'Sosialisasi Implementasi Perpres 54/2011 dan Perub', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('659', 'Aplikasi E-Procurement', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('660', 'Mekanisme Keuangan BLU', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('661', 'Perencanaan Barang Milik Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('662', 'Pemindahtanganan BMD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('663', 'Kebijakan Implementasi SPIP di Kabupaten Banyumas', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('664', 'Kebijakan Umum Peraturan Kepala BPKP No.PER-709/K/', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('665', 'Organisasi dan Tata Kerja Penilaian Angka Kredit A', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('666', 'Penilaian dan Penetapan Angka Kredit Auditor', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('667', 'Teknik Penyusunan DUPAK', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('668', 'Overview Fraud Control Plan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('669', 'Pengantar Fraud Control Plan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('670', 'Gambaran Umum Fraud Control Plan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('671', 'Tahapan Fraud Control Plan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('672', 'Sosialisasi Fraud Control Plan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('673', 'Diagnostic Fraud control Plan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('674', 'Bimtek Fraud Control Plan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('675', 'Atribut Fraud Control plan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('676', 'Fraud Risk Assesment', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('677', 'Community Awarness Reporting System', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('678', 'Conduct & Diciplinary Standard', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('679', 'Alat Evaluasi Fraud Control plan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('680', 'Program Evaluasi', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('681', 'Kuestioner dan Wawancara', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('682', 'Implementasi dan Pemahaman Pedoman Teknis Fraud Co', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('683', 'Kebijakan Implementasi SPIP di Kota Semarang', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('684', 'Ujian Sertifikasi JFA', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('685', 'Lotus Notes dan Aplikasinya', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('686', 'Sistem Informasi Kearsipan Dinamis (SIKD)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('687', 'Sistem Informasi Kearsipan Nasionaln(SIKN)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('688', 'Jaringan Informasi Kearsipan Nasional (JIKN)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('689', 'Klarifikasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('690', 'JRA (Instrumen Aplikasi Kearsipan)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('691', 'SE Men Keu No.9/2012 tentang Antisipasi Gagal Lela', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('692', 'Success Story Penerapan SPIP di Kementerian Perhub', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('693', 'Pelaksanaan Reviu Laporan Keuangan Pemerintah Daer', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('694', 'Overview Auditing', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('695', 'Psikologi Audit dan Teknik Komunikasi Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('696', 'Persiapan Pengadaan Barang/Jasa 1', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('697', 'Persiapan Pengadaan Barang/Jasa 2', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('698', 'Pelaksanaan Pengadaan Barang/Jasa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('699', 'Pelaksanaan Pengadaan Pekerjaan Konstruksi, Jasa L', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('700', 'Penerapan E-Procurement dan Pembahasan Contoh Soal', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('701', 'Proses Penyusunan RPJM dan Rencana Kerja Pemerinta', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('702', 'Peranan BPKP dalam Mengawal Program-program Pemban', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('703', 'Konsep Dasar Manajemen Kinerja', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('704', 'Substansi Rencana Kerja Pemerintah', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('705', 'Risiko-risiko Kegagalan Program Pembangunan Nasion', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('706', 'Penyusunan Peta Strategi yang Sesuai dengan Perspe', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('707', 'Penyusunan Sasaran Strategi dan Indikator Kinerja ', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('708', 'Profil Indikator Kinerja Pengawasan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('709', 'Teknik Evaluasi atas Perencanaan', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('710', 'Teknik Pemantauan dan Evaluasi atas Pelaksanaan Pr', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('711', 'Best Practice dan Praktek Penerapan Pemantauan dan', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('712', 'Pemantauan dan Evaluasi berdasarkan PP Nomor 39 Ta', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('713', 'Keterkaitan Perencanaan Pengawasan BPKP dengan Per', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('714', 'Penyusunan Rencana Kinerja Tahunan/Penetapan Kiner', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('715', 'Teknik Penyusunan Indikator Kinerja Individu', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('716', 'Sistem Pemantauan dan Evaluasi Kinerja Organisasi', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('717', 'Sistem Pemantauan dan Evaluasi Kinerja Individu', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('718', 'Perencanaan Anggaran', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('719', 'Konsep Dasar Sistem Diklat', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('720', 'Team Building', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('721', 'Administrasi Penyelenggaraan Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('722', 'Koordinasi dan Penyelenggaraan Diklat', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('723', 'Sarana dan Prasarana Diklat', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('724', 'Perencanaan Pelaksanaan Diklat', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('725', 'Pendekatan Androgogi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('726', 'Etika Kerja Pelaksanaan Diklat', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('727', 'Pelayanan Prima dalam Penyelenggaraan Diklat', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('728', 'Laporan Pelaksanaan Diklat', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('729', 'Pengendalian Diklat', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('730', 'Penjelasan dan Studi Lapangan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('731', 'Java Basic', '', '50.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('732', 'Kebijakan Diklat Aparatur', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('733', 'Building Learning Commitment', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('734', 'Diklat Sebagai Suatu Sistem', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('735', 'Konsep Dasar Andragogi', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('736', 'Analisis Kebutuhan Diklat', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('737', 'Rancang Bangun Program Diklat', '', '12.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('738', 'Teknik Perencanaan Kegiatan Tahunan', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('739', 'Perencanaan Anggaran Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('740', 'Rancangan Bahan Diklat', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('741', 'Pengelolaan Sumber Daya Diklat', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('742', 'Evaluasi Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('743', 'Sistem Informasi Diklat', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('744', 'Pemberdayaan Lembaga Diklat', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('745', 'Pemantauan dan Pengendalian Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('746', 'Jejaring Kerja Diklat', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('747', 'Penjelasan Observasi Lapangan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('748', 'Observasi Lapangan dan Patok Banding (Penyusunan A', '', '12.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('749', 'Seminar Laporan Hasil Patok Banding', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('750', 'Penilaian Risiko dan Kegiatan Pengendalian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('751', 'Informasi dan Komunikasi ', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('752', 'Psikologi Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('753', 'Current Issue: \"Pentingnya SPIP bagi Kementerian/L', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('754', 'Introduction to the Reporting Application', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('755', 'Create List Report', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('756', 'Focus Reports Using Filters', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('757', 'Create Crosstab Reports', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('758', 'Present Data Graphically', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('759', 'Focus Reports using Prompts', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('760', 'Use Additional Report Building Techniques', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('761', 'Drill-Trough from One Report to Another', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('762', 'Overview Badan Layanan Umum Daerah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('763', 'Petunjuk Teknis Pelaksanaan Bimtek', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('764', 'Pengelolaan Keuangan Badan Layanan Umum Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('765', 'Pengenalan Bimtek Implementasi SIA BLUD', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('766', 'Instalasi Aplikasi MySQL', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('767', 'Instalasi Aplikasi SIA BLUD', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('768', 'Pengenalan dan Implementasi Jaringan Komputer', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('769', 'Pengenalan Dasar-dasar Database', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('770', 'Pengolahan dan Migrasi Data', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('771', 'Pengenalan Menu dan Fitur Aplikasi SIA BLUD', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('772', 'Pengaturan Data-Data Umum Aplikasi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('773', 'Pengaturan Data-Data Keuangan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('774', 'Pencetakan Kamus Data Umum dan Data-Data Keuangan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('775', 'Modul Jurnal Umum', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('776', 'Modul Jurnal Pengeluaran Kas', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('777', 'Pencetakan Buku Besar dan Buku Pembantu', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('778', 'Modul Piutang - Saldo Awal (Input; Edit; Hapus)', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('779', 'Modul Piutang - Transaksi Berjalan (Input; Edit; H', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('780', 'Piutang', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('781', 'Pencetakan Laporan Piutang', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('782', 'Modul Utang - Saldo Awal (Input; Edit; Hapus)', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('783', 'Modul Utang - Transaksi Berjalan (Input; Edit; Hap', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('784', 'Modul Utang - Pelunasan', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('785', 'Pencetakan Laporan Utang', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('786', 'Pencetakan Laporan Keuangan - Neraca', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('787', 'Pencetakan Laporan Keuangan - Laporan Aktivitas', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('788', 'Pencetakan Laporan Keuangan - Laporan Arus Kas', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('789', 'Pencetakan Laporan Keuangan Lainnya', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('790', 'Evaluasi Akhir', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('791', 'Overview of The Concept of Digital Documents', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('792', 'Overview Document Management System', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('793', 'Input Documents', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('794', 'Using File Net Facilities', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('795', 'Collaboration', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('796', 'Use of Annotations', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('797', 'Searching Documents', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('798', 'Send Mail', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('799', 'Overview Pengadaan Barang/Jasa (PBJ)', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('800', 'Overview Probity dan Probity Audit', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('801', 'Audit atas Perencanaan PBJ', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('802', 'Audit atas Persiapan Pemilihan Penyedia Barang/Jas', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('803', 'Audit atas Pemilihan Penyedia Barang/Jasa dengan P', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('804', 'Audit atas Pemilihan Penyedia Barang/Jasa dengan P', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('805', 'Audit atas Penandatanganan dan Pelaksanaan Kontrak', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('806', 'Audit atas Penandatanganan dan Pelaksanaan Kontrak', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('807', 'Audit atas Penandatanganan dan Pelaksanaan Kontrak', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('808', 'Audit atas Penandatanganan dan Pelaksanaan Pengada', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('809', 'Audit atas Pemanfaatan dan Penatausahaan PBJ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('810', 'Presentasi Paper', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('811', 'Penjelasan Penulisan Paper', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('812', 'Pembimbingan ', '', '36.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('813', 'Implementasi Probity Audit untuk Meminimalkan Risi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('814', 'Strategi Penerapan Probity Audit PBJ ', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('815', 'Pengantar dan Implementasi Pedoman Probity Audit P', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('816', 'Diskusi Kelompok', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('817', 'Pedoman Probity Audit PBJ (Tahap Pemilihan) ', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('818', 'Pengantar Pedoman Probity Audit PBJ bagi APIP (Tah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('819', 'Pedoman Probity Audit PBJ (Tahap Penandatanganan, ', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('820', 'Pedoman Probity Audit PBJ (Tahap Penandatanganan, ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('821', 'Penetapan Kegiatan Layak Probity Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('822', 'System Administrator/Setting Jaringan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('823', 'Gambaran Umum Pengelolaan Keuangan Daerah dan Prak', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('824', 'Gambaran Umum Fungsi-fungsi Penatausahaan Keuangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('825', 'Penyusunan Laporan Keuangan dengan Aplikasi SIMDA', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('826', 'Overview Penyelenggaraan SPIP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('827', 'Pemetaan atas Kondisi Lingkungan Pengendalian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('828', 'Penetapan Tujuan dan Identifikasi Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('829', 'Pemetaan atas Kegiatan Pengendalian yang ada', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('830', 'Perbaikan Kegiatan Pengendalian', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('831', 'Pemantauan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('832', 'Pengelolaan Barang Milik Negara (BMN)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('833', 'Penatausahaan Barang Milik Negara (BMN)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('834', 'Dasar-dasar Simak BMN', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('835', 'Workshop BMN dan Persediaan', '', '22.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('836', 'Dasar-dasar Kehumasan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('837', 'Keprotokolan Negara', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('838', 'Kunjungan Kenegaraan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('839', 'Dasar-dasar Keprotokolan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('840', 'Tata Upacara', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('841', 'Tata Tempat', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('842', 'Upacara', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('843', 'Kunjungan Kepala BPKP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('844', 'Praktek Lapangan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('845', 'Pedoman Keprotokolan BPKP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('846', 'Pembukaan dan Pengarahan Umum', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('847', 'Dasar-Dasar Akuntansi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('848', 'Rapat Evaluasi Diklat', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('849', 'Teknik Penulisan Jurnalistik', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('850', 'Teknik Menghadapi Media', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('851', 'Strategi Komunikasi Humas', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('852', 'Pedoman Keprotokolan Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('853', 'Overview Good Corporate Governance', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('854', 'Struktur Good Corporate Governance', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('855', 'Infrastruktur Good Corporate Governance', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('856', 'Pedoman Assessment Good Corporate Governance', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('857', 'Simulasi Self Assessment', '', '23.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('858', 'Aplikasi SIA-BLUD', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('859', 'Kuesioner Assessment Good Corporate Governance', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('860', 'Tes Materi', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('861', 'Registrasi', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('862', 'Penjelasan Program dan Pengisian Formulir/Aplikasi', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('863', 'SKKNI, Metode dan Prosedur Sertifikasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('864', 'Melakukan Presentasi Anti-Fraud', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('865', 'Mengkaji dan Memahami Peraturan Perundang-undangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('866', 'Mengkaji dan Memahami Standar Profesi yang Terkait', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('867', 'Mengevaluasi Sistem Pengendalian Intern', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('868', 'Mengevaluasi Keberadaan Sistem Anti-Fraud', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('869', 'Pendalaman Materi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('870', 'Ujian Tahap I', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('871', 'Melakukan Identifikasi dan Penelaahan Masalah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('872', 'Melakukan Perencanaan Audit Forensik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('873', 'Melakukan Pengumpulan Bukti', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('874', 'Melakukan Evaluasi Bukti', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('875', 'Menyusun dan Mereviu Kertas Kerja Pengumpulan dan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('876', 'Menyusun Laporan Hasil Penugasan Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('877', 'Melakukan Penelaahan Awal melalui Ekspose', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('878', 'Mempersiapkan Penugasan dan Pengumpulan Bukti-bukt', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('879', 'Melakukan Penghitungan Kerugian Suatu Kasus/Perkar', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('880', 'Melakukan Pemaparan Hasil Penghitungan Kerugian', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('881', 'Menyusun dan Mereviu Laporan', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('882', 'Melakukan Pemberian Keterangan Ahli di Depan Penyi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('883', 'Melakukan Pemberian Keterangan Ahli di Depan Persi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('884', 'Melakukan Penyusunan Laporan Pemberian Keterangan ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('885', 'Mengumpulkan Informasi Berkaitan dengan Penyembuny', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('886', 'Melakukan Tukar Menukar Informasi dengan Pihak Ter', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('887', 'Melakukan Penyitaan Aset', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('888', 'Melakukan Inventarisasi dan Verifikasi Aset yang T', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('889', 'Menyusun dan Mereviu Kertas Kerja Penelusuran Aset', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('890', 'Menyusun dan Mereviu Laporan Penelusuran Aset', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('891', 'Ujian Tahap III', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('892', 'Ujian Tahap II', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('893', 'Melakukan Bimbingan Teknis untuk Implementasi Sist', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('894', 'Menyusun dan Mereviu Kertas Kerja Penghitungan Ker', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('895', 'Tata Naskah Dinas BPKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('896', 'Disposisi Elektronik dan DMS', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('897', 'Mengelola Arsip', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('898', 'Pengurusan Surat dan Pemberkasan (Mail Handling an', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('899', 'Pengelolaan Arsip Dinamis', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('900', 'Teknik Foto Jurnalistik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('901', 'Gambaran Umum SIA PDAM', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('902', 'Penerapan SAK ETAP', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('903', 'Instalasi software SIA PDAM', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('904', 'Pengenalan Jaringan ', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('905', 'Dasar-dasar Database', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('906', 'Pengenalan MYSQL', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('907', 'Pengenalan dan Implementasi Modul Akuntansi dan Ke', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('908', 'Pengenalan dan Implementasi Modul Inventory', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('909', 'Pengenalan dan Implementasi Modul Billing System', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('910', 'Integrasi Sistem Pengendalian Intern', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('911', 'Pengenalan dan Implementasi Modul Aset Tetap', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('912', 'Pengadaan Barang dan Jasa Lender/Donor (Procuremen', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('913', 'Konsepsi Anggaran Berbasis Kinerja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('914', 'Pengaturan dan Mekanisme Penyusunan Anggaran Pemda', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('915', 'Perencanaan Strategis SKPD', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('916', 'Konsepsi dan Pengaturan Standar Pelayanan Minimal ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('917', 'Pengertian Program dan Kegiatan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('918', 'Teknik Penyusunan Program, Kegiatan dan Indikator ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('919', 'Praktik Penyusunan Program dan Kegiatan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('920', 'Konsepsi Standar Analisis Belanja (SAB) dan Penyus', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('921', 'Teknik Penyusunan Standar Analisis Belanja (SAB)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('922', 'Praktik Penyusunan Standar Analisis Belanja (SAB)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('923', 'Pengaturan tentang Rencana Kerja dan Anggaran (RKA', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('924', 'Praktik Penyusunan Rencana Kerja dan Anggaran (RKA', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('925', 'Penggunaan Bahasa Indonesia yang Baik dan Benar', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('926', 'Menyusun Kurikulum', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('927', 'Penyusunan Modul', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('928', 'Penyusunan Bahan Evaluasi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('929', 'Unsur Lingkungan Pengendalian', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('930', 'Unsur Penilaian Resiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('931', 'Unsur Kegiatan Pengendalian', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('932', 'Unsur Informasi dan Komunikasi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('933', 'Unsur Pemantauan Pengendalian Intern', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('934', 'Jam Pimpinan Pusdiklatwas BPKP', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('935', 'Jam Pimpinan Pemda', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('936', 'Teknik Presentasi dan Penyusunan Materi Pengajaran', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('937', 'Praktik Penyusunan Materi Pengajaran', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('938', 'Praktik Presentasi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('939', 'Analisis Kebutuhan Program Pelatihan (TNA)', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('940', 'Kompetensi Instruktur (ADDIE)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('941', 'Merancang Alat Ukur TNA', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('942', 'Membuat Laporan TNA', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('943', 'Prinsip Pengembangan Kurikulum', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('944', 'Desain Pembelajaran', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('945', 'Analisis Kompetensi', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('946', 'Praktek Analisis Kompetensi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('947', 'Evaluasi dalam Program Pelatihan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('948', 'Asesmen Hasil Belajar', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('949', 'Mengembangkan Rancangan Asesmen Hasil Belajar', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('950', 'Konstruksi Butir Tes Hasil Belajar dan Instrumen H', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('951', 'Prosedur dan Prinsip Penulisan Bahan ajar', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('952', 'Pengembangan Rancangan Bahan Ajar (GBP-BA) dan Pra', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('953', 'Penyusunan Outline Bahan Ajar, Tinjauan Mata Kulia', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('954', 'Menulis Bagian Pendahuluan, Penyajian, dan Penutup', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('955', 'Praktek Menulis Bagian Pendahuluan, Penyajian dan ', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('956', 'Penghapusan dan Pemindahtanganan Barang Milik Nega', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('957', 'Akuntansi Barang Milik Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('958', 'Hukum Pidana', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('959', 'Tindak Pidana Pencucian Uang', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('960', 'Teknik-teknik Penyidikan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('961', 'Hukum Acara Pidana di Indonesia', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('962', 'Hukum dan Teknik Pembuktian', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('963', 'Pelaksanaan Pengadaan Tahap Kualifikasi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('964', 'Pelaksanaan Pengadaan Tahap Pemilihan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('965', 'Persiapan Pengadaan Barang/Jasa', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('966', 'Swakelola Pengadaan Barang/Jasa', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('967', 'Pendayagunaan Produksi Dalam Negeri dan PHLN', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('968', 'Pembahasan Contoh Soal/Kasus Ujian', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('969', 'Ujian Sertifikasi', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('970', 'Pengelolaan BMD dengan Aplikasi SIMDA BMD', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('971', 'System Requirement Aplikasi Simda BMD versi 2.0.0.', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('972', 'Simulasi Penginputan Hasil Inventarisasi melalui A', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('973', 'Simulasi Perencanaan melalui Aplikasi Simda BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('974', 'Simulasi Pengadaan Aset melalui Aplikasi Simda BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('975', 'Simulasi Administrasi Penggunaan Aset melalui Apli', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('976', 'Simulasi Penatausahaan Aset melalui Aplikasi Simda', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('977', 'Simulasi Pemanfaatan dan Pemeliharaan Aset melalui', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('978', 'Simulasi Penghapusan Aset melalui Aplikasi Simda B', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('979', 'Perencanaan dan Penyusunan Anggaran Berbasis Kiner', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('980', 'Pelaporan Pertanggungjawaban Bendahara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('981', 'Konsepsi Anggaran Berbasis Kinerja dan Standar Pel', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('982', 'Pengantar Akuntansi Pemerintah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('983', 'Akuntansi Belanja dan SAP terkait', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('984', 'Akuntansi Pendapatan dan SAP terkait', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('985', 'Akuntansi atas Transaksi Non Pendapatan dan Belanj', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('986', 'SABMD', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('987', 'SIMDA', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('988', 'Pelaksanaan Pengadaan Tahap Evaluasi dan Persiapan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('989', 'Filosofi Akuntansi Akrual', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('990', 'Belanja dan Beban', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('991', 'Pendapatan LO dan Pendapatan LRA', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('992', 'Pembiayaan, Pos Luar Biasa dan Koreksi Kesalahan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('993', 'Praktik Penyusunan Laporan Realisasi Anggaran dan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('994', 'Aset Lancar, Investasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('995', 'Aset Tetap ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('996', 'Kewajiban ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('997', 'Praktek Penyusunan Laporan Perubahan Ekuitas (LPE)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('998', 'Praktek Penyusunan CaLK ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('999', 'Praktek Penyusunan Laporan Realisasi Anggaran dan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1000', 'Tata Cara Pemungutan dan Pelaporan Pajak', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1001', 'Penyajian Laporan Keuangan Pemda yang Akuntabel', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1002', 'Reviu Hasil Pemeriksaan Reguler', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1003', 'Gambaran Umum Pengelolaan Keuangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1004', 'Muatan Lokal', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1005', 'Gambaran Umum Reviu RKA KL', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1006', 'Kebijakan Pelayanan Publik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1007', 'Peran BMKG dalam Menunjang Keselamatan Masyarakat ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1008', 'Reviu Laporan Pelaksanaan Anggaran', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1009', 'Reviu Laporan Finansial', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1010', 'Reviu Laporan Realisasi Anggaran dan Laporan Arus ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1011', 'Reviu Laporan Operasional dan Perubahan Ekuitas', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1012', 'Reviu  Neraca', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1013', 'Pemahaman Bisnis Entitas', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1014', 'Rencana Kerja', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1015', 'Analisis Tujuan dan Analisis Lingkungan Pengendali', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1016', 'CEE (Tabulasi dan Validasi)', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1017', 'Evaluasi dan Perumusan Existing Control ', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1018', 'Perumusan Perbaikan Control Activities', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1019', 'RTP (Rencana Tindak Pengendalian) Lingkungan Penge', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1020', 'Penyempurnaan Kertas Kerja Self Assessment', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1021', 'Monitoring Penyelenggaraan SPIP', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1022', 'Konsep Dasar Sistem Diklat, Pendekatan Andragogi, ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1023', 'Perencanaan Pelaksanaan Diklat, Koordinasi Penyele', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1024', 'Laporan Pelaksanaan Diklat, Pelayanan Prima Pelaks', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1025', 'Team Building, Sarana Prasarana Diklat', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1026', 'Komunikasi Efektif Penyelenggaraan Diklat, Studi L', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1027', 'CEE (Control Environment Evaluation)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1028', 'Konsep Sub Unsur Lingkungan Pengendalian', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1029', 'Monitoring dan Evaluasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1030', 'Konsep IACM', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1031', 'Assessment Kapabilitas', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1032', 'Laporan Hasil Assessment Kapabilitas', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1033', 'Penyamaan Persepsi Pentingnya Peran APIP', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1034', 'Kebijakan Pembinaan Penerapan JFA', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1035', 'Langkah Peningkatan Menuju Level 2 (Infrastruktur)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1036', 'Identifikasi Area Of Improvement Kapabilitas pada ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1037', 'Membangun Infrastruktur elemen 1, 2, 3, 4, 5 dan 6', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1038', 'Pengukuran, Verifikasi, Pemenuhan KPA, dan Penyimp', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1039', 'Exit Meeting dan Pelaporan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1040', 'Budaya Kerja Organisasi Pemerintah', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1041', 'Senam Kesegaran Jasmani', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1042', 'Ujian Prajab II', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1043', 'Pelaksanaan Keuangan Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1044', 'Pelaporan Pertanggungjawaban Keuangan Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1045', 'Peran dan Tanggung Jawab Auditor Intern; Manajemen', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1046', 'Penugasan Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1047', 'Penugasan Reviu, Evaluasi, dan Intern Lainnya', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1048', 'Akuntansi untuk Non Akuntan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1049', 'Reviu atas Laporan Keuangan Pemerintah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1050', 'Gambaran Umum Audit Pengadaan Barang dan Jasa dan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1051', 'Probity Audit Perencanaan Umum', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1052', 'Probity Audit Pengadaan Barang oleh Pihak III', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1053', 'Probity Audit Pengadaan Konstruksi', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1054', 'Probity Audit Pengadaan Jasa Konsultansi', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1055', 'Probity Audit Pengadaan Jasa Lainnya', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1056', 'Pedoman Probity Audit PBJ (Swakelola)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1057', 'Penyusunan, Penyajian, dan Pengungkapan Laporan Ke', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1058', 'ccc', '', '1111.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1059', 'Penyusunan Laporan Keuangan Berbasis Akrual', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1060', 'Akuntansi Beban dan Belanja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1061', 'Akuntansi Pendapatan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1062', 'Akuntansi Aset', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1063', 'Akuntansi PPKD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1064', 'Laporan Keuangan SKPD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1065', 'Akuntansi Konsolidasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1066', 'Laporan Keuangan Pemerintah Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1067', 'aktivitaspengendalian', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1068', 'Menyusun dan mereviu kertas kerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1069', 'Expose & Simulasi Sidang Pengadilan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1070', 'Audit Pemanfaatan BMD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1071', 'Cara Pengisian CEE (Control Environment Evaluation', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1072', 'Reviu dan Pemeriksaan Laporan Keuangan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1073', 'Konsep Dasar Sistem Pengendalian Intern', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1074', 'Unsur-unsur Sistem Pengendalian Intern', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1075', 'Penyelenggaraan SPIP Tingkat Entitas dan Aktivitas', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1076', 'Siklus Penyelenggaraan SPIP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1077', 'Pelaksanaan dan Penatausahaan Pendapatan Daerah da', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1078', 'Pelaksanaan dan Penatausahaan Pengeluaran Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1079', 'Penyusunan Rencana Tindak Pengendalian (RTP)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1080', 'Penyusunan Rencana Pembelajaran (RP)', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1081', 'Pembuatan Bahan Tayang', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1082', 'Praktek Mengajar', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1083', 'Gambaran Umum IA-CM', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1084', 'Gambaran Umum Pengawasan Intern', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1085', 'Identifikasi Tujuan dan Lingkungan Pengendalian', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1086', 'Identifikasi Risiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1087', 'Evaluasi Pengendalian yang Terpasang', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1088', 'Rencana Perbaikan Pengendalian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1089', 'Komunikasi Audit Intern I', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1090', 'Manajemen Pemerintahan Pusat I', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1091', 'Manajemen Pemerintahan Daerah I', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1092', 'Tata Kelola, Manajemen Risiko dan Pengendalian Int', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1093', 'Audit Intern', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1094', 'Praktik Audit Intern - Audit Kinerja', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1095', 'Praktik Audit Intern - Audit Investigasi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1096', 'Praktik Audit Intern - Reviu Laporan Keuangan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1097', 'Praktik Audit Intern - Evaluasi AKIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1098', 'Reviu Laporan Keuangan Pemerintah Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1099', 'Penjelasan tentang Gratifikasi, Whistle Blower Sys', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1100', 'Konsep Manajemen Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1101', 'Konsep Audit Berbasis Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1102', 'Penilaian Tingkat Kematangan Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1103', 'Perencanaan Audit Makro', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1104', 'Pelaksanaan Audit Individu Pendekatan Pengendalian', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1105', 'Pelaksanaan Audit Individu Pendekatan Control Base', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1106', 'Pelaksanaan Audit Individu Pendekatan AIBR', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1107', 'Analisis Tujuan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1108', 'Evaluasi Existing Control Activities', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1109', 'Penyempurnaan Kebijakan SOP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1110', 'Overview dan Pengarahan Program', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1111', 'Integritas', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1112', 'Isu Strategis', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1113', 'Diagnostic Reading', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1114', 'Penjelasan Proyek Perubahan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1115', 'Coaching dan Counselling', '', '585.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1116', 'Budaya Kerja dalam Efektivitas Kepemimpinan', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1117', 'Inovasi', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1118', 'Jejaring Kerja', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1119', 'Membangun Tim Efektif', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1120', 'Branchmarking ke Best Practice', '', '45.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1121', 'Merancang Proyek Perubahan', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1122', 'Persiapan Seminar', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1123', 'Seminar Presentasi Proyek Perubahan', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1124', 'Pembekalan Implementasi Proyek Perubahan', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1125', 'Seminar Laboratorium Kepemimpinan', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1126', 'Evaluasi Kepemimpinan', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1127', 'Fraud Control Plan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1128', 'Pelaporan Good Corporate Governance', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1129', 'Konsep Dasar Layanan Umum Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1130', 'Konsep Dasar Audit Kinerja Sektor Publik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1131', 'Perencanaan Audit Kinerja Badan Layanan Umum Daera', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1132', 'Audit Pendahuluan dam Audit Kinerja Badan Layanan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1133', 'Pengujian Sistem Manajemen Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1134', 'Audit Rinci dan Penyusunan Temuan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1135', 'Penyusunan Laporan Hasil Audit Kinerja dan Pemanta', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1136', 'Konsep Dasar Badan Layanan Umum Daerah (BLUD)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1137', 'Perencanaan Audit Kinerja Badan Layanan Umum Daera', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1138', 'Audit Pendahuluan dalam Audit Kinerja Badan Layana', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1139', 'International Professional Practices Framework (IP', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1140', 'COSO 2013', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1141', 'Enterprise Risk Management', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1142', 'Risk Based Annual Planning', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1143', 'Exam - IPPF and COSO 2013', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1144', 'Engagement Planning and Tools', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1145', 'Performing the Engagement', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1146', 'Exam - ERM dan RBAP', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1147', 'Communicating Results', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1148', 'Performance Audit', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1149', 'Management Accounting', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1150', 'Audit Sampling', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1151', 'Managing Internal Audit Activities', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1152', 'Strategic Management', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1153', 'Assurance & Consulting Engagement', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1154', 'Audit Communication', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1155', 'Exam - Managerial (MIAA, SM, ACE, CIIA, AC, CG)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1156', 'IS Audit', '', '12.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1157', 'Current Issues in Internal Audit', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1158', 'Corporate Governance', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1159', 'Exam - EPT and PE', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1160', 'Exam - CR and IS Audit', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1161', 'Exam - PA and Fraud Auditing', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1162', 'Exam - MA and AS', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1163', 'Presentation Exam', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1164', 'Out Bond', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1165', 'Organisasi Keuangan Pemerintah', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1166', 'Ujian Pilihan Ganda US AAP-B', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1167', 'Ujian Essai US AAP-B', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1168', 'Ujian Studi Kasus US AAP-B', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1169', 'Penyusunan Temuan Audit PAD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1170', 'Audit Pendapatan BLUD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1171', 'Audit Pendapatan, Biaya dan Pendanaan BLUD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1172', 'Audit Ketaatan RSB dan RBA', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1173', 'Penyusunan Temuan Audit BLUD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1174', 'Penyusunan LHA untuk PAD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1175', 'Penyusunan LHA untuk BLUD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1176', 'Fundamental Bisnis', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1177', 'Ekonomi dan Bisnis', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1178', 'Manajemen Informasi dan Enterprise Resource Planni', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1179', 'Metode Kuantitatif Bisnis, Analisis, dan Pelaporan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1180', 'Pembahasan Soal-Soal', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1181', 'Akuntansi Manajemen dan Pelaporan Keuangan', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1182', 'Penganggaran, Akuntansi dan Pelaporan BLUD', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1183', 'Pengukuran Kinerja Manajemen dan Balance Scorecard', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1184', 'Manajemen Mutu Terpadu', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1185', 'Manajemen Stratejik', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1186', 'Perencanaan Stratejik', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1187', 'Manajemen Operasi, Pemasaran Stratejik', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1188', 'Keuangan Perusahaan, Capital Budgeting', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1189', 'Corporate Governance dan Manajemen Resiko', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1190', 'Sistem Pengendalian Intern, Manajemen Resiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1191', 'Etika Bisnis, Tanggung jawab Sosial, dan Pelaporan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1192', 'Ujian Rundown CPMA Review', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1193', 'Penyempurnaan Kebijakan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1194', 'Penilaian Lingkungan Pengendalian (Pengisian Kuesi', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1195', 'Kebijakan Publik', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1196', 'Pengelolaan Risiko dan Pengendalian Intern III', '', '40.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1197', 'Praktek Audit Intern I', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1198', 'Pre Test Kode Etik dan Standar Audit Intern', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1199', 'Pos Test Kode Etik dan Standar Audit Intern', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1200', 'Pre Test Tata Kelola, Manajemen Risiko dan Pengend', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1201', 'Pos Test Tata Kelola, Manajemen Risiko dan Pengend', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1202', 'Pre Test Komunikasi Audit Intern', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1203', 'Pos Test Komunikasi Audit Intern', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1204', 'Konsep Akuntansi Keuangan Daerah Berbasis Akrual', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1205', 'Laporan Keuangan, Laporan Realisasi Anggaran, Lapo', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1206', 'Akuntansi Persediaan, Akuntansi Investasi, Akuntan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1207', 'Jurnal Akuntansi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1208', 'Latihan Penyusunan Laporan Keuangan Berbasis Akrua', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1209', 'Standar Akuntansi Instansi (SAI)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1210', 'Pemahaman atas Entitas', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1211', 'Program Diklat', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1212', 'Etos Kerja Penyelenggara Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1213', 'Etika Penyelenggara Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1214', 'Kebutuhan Peserta Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1215', 'Keselamatan dan Kesehatan Kerja dalam Lingkungan D', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1216', 'Fasilitas Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1217', 'Penjelasan Studi Lapangan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1218', 'Studi Lapangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1219', 'Seminar Studi Lapangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1220', 'Kebijakan Training of Facilitator (TOC) Diklatpim', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1221', 'Kebijakan Pembaharuan Sistem Diklat Aparatur', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1222', 'Pengarahan Program, Pembagian Agenda Pembelajaran,', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1223', 'Landasan Filosofis dan Tahapan Pembelajaran Diklat', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1224', 'Strategi Fasilitasi Agenda Pembelajaran Diklatpim ', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1225', 'Presentasi Peserta (per kelompok)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1226', 'Pengarahan Kepala Biro', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1227', 'SOP Sispedap', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1228', 'Pengenalan Sispedap Baru', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1229', 'Trouble Shooting Entri Sispedap', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1230', 'Portal Kepegawaian', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1231', 'Rencana Pengembangan Modul HRIS 2015', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1232', 'Aplikasi Penetapan Diklat', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1233', 'Aplikasi Penilaian Angka Kredit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1234', 'Introducing to The Reporting Application', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1235', 'Audit Kinerja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1236', 'Reviu Laporan Keuangan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1237', 'Komunikasi Audit Intern II', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1238', 'Audit Investigatif ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1239', 'Tata Kelola, Manajemen Risiko dan Pengendalian Int', '', '40.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1240', 'Praktik Audit Intern III', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1241', 'Manajemen Konflik', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1242', 'Analisis Kebijakan Publik ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1243', 'Perencanaan Penugasan Audit Intern', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1244', 'Pelaksanaan dan Supervisi Audit Intern', '', '40.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1245', 'Manajemen Strategi Audit Intern', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1246', 'Program Jaminan Kualitas (PJK)', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1247', 'Akuntansi Keuangan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1248', 'Akuntansi Biaya', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1249', 'Akuntansi Manajemen', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1250', 'Akuntansi Keuangan Instansi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1251', 'Akuntabilitas Kinerja Instansi Pemerintah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1252', 'Auditing (Dasar-dasar Audit dan Audit Lanjutan)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1253', 'Audit Pengadaan Barang dan Jasa', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1254', 'Audit Pendapatan Asli Daerah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1255', 'Audit Forensik', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1256', 'Audit Pinjaman / Hibah Luar Negeri (PHLN) ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1257', 'Perencanaan Pengawasan Berbasis Risiko ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1258', 'Audit berbasis risiko mikro ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1259', 'Electronic Data Processing (EDP) Audit ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1260', 'Audit Kepegawaian', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1261', 'Audit Kinerja - Instansi Publik', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1262', 'Audit Kinerja - Corporate', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1263', 'Standar Profesi Aparat Pengawasan Intern Pemerinta', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1264', 'Reviu Laporan Keuangan Pemerintah Pusat', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1265', 'Teknik dan Proses Reviu', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1266', 'Audit Pengelolaan Sarana Prasarana (BMN/D)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1267', 'Audit Perencanaan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1268', 'Audit Berbantu Teknologi Informasi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1269', 'Audit Badan Layanan Umum/Daerah (BLU/D)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1270', 'Audit Penerimaan Negara Bukan Pajak (PNBP)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1271', 'Managing Policy', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1272', 'Policy Evaluation ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1273', 'Manajemen Perkantoran', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1274', 'Manajemen Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1275', 'Budaya Kerja', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1276', 'Pengelolaan Badan Layanan Umum/Daerah (BLU/D)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1277', 'Pengelolaan Penerimaan Negara Bukan Pajak (PNBP)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1278', 'Knowledge Management', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1279', 'Sistem Informasi Akuntansi Pemerintah Daerah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1280', 'Sistem Informasi Akuntansi Pemerintah Pusat', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1281', 'Sistem Akuntansi Keuangan Daerah (SAKD/SIMDA/SP2D)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1282', 'Sistem Akuntansi Instansi (SAI) dan Sistem Informa', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1283', 'Sistem Akuntabilitas Kinerja Instansi Pemerintah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1284', 'Sistem Akuntansi Barang Milik Negara/Daerah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1285', 'Anggaran Berbasis Kinerja Pemerintah Daerah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1286', 'Anggaran Berbasis Kinerja Pemerintah Pusat', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1287', 'Governance IT', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1288', 'Good Government Governance (GGG)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1289', 'Teknik Pembelajaran', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1290', 'Budaya Organisasi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1291', 'Key Performance Indicator', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1292', 'Analisis Pemecahan Masalah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1293', 'Perbendaharaan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1294', 'Penilaian Aset', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1295', 'Pengelolaan Keuangan Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1296', 'Pengelolaan Keuangan Pemerintah Pusat', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1297', 'Overview GCG BUMN', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1298', 'Overview GCG BUMD', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1299', 'Organ GCG BUMN', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1300', 'Organ GCG BUMD', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1301', 'Infrastruktur GCG BUMN/D', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1302', 'Petunjuk Teknis GCG BUMD', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1303', 'Assessment GCG-BUMN (ISO 9001:2008)', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1304', 'Rancangan dan Simulasi Scorecard Assessment GCG BU', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1305', 'Simulasi Assessment GCG BUMN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1306', 'Aplikasi Assessment GCG BUMN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1307', 'Pelaporan GCG BUMN/D', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1308', 'Current Issues', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1309', 'Hukum Kontrak (Perikatan)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1310', 'Kapita Selekta KUHAP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1311', 'Kapita Selekta KUHP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1312', 'Hukum Pembuktian', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1313', 'Undang-undang Tipikor', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1314', 'Gambaran Umum Sistem Akuntansi Pemerintah Daerah', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1315', 'Penjelasan Pengoperasian Penyusunan Anggaran', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1316', 'Penjelasan Teori dan Praktik Pengoperasian Akuntan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1317', 'Manajemen Pemerintahan Pusat II', '', '25.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1318', 'Manajemen Pemerintahan Daerah II', '', '25.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1319', 'Tata Kelola, Manajemen Risiko, dan Pengendalian In', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1320', 'Praktikk Audit Intern III', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1321', 'Penerapan Manajemen Risiko Sektor Corporate', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1322', 'Praktik Aplikasi SIMDA', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1323', 'Penyusunan Bahan Tayang', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1324', 'Praktik Mengajar', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1325', 'Substansi SIMDA Keuangan ', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1326', 'Aplikasi SIMDA Keuangan Versi 2.7', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1327', 'Teknik Presentasi dan Praktik Mengajar', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1328', 'Gambaran Umum Akuntansi Pemerintah Daerah Berbasis', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1329', 'Sistem dan Prosedur Akuntansi Pemerintah Daerah Be', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1330', 'Bagan Akun Standar dan PUSAP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1331', 'Jurnal Standar', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1332', 'System Requirement SIMDA Keuangan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1333', 'Install Aplikasi SIMDA', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1334', 'Gambaran Umum Pengoperasian Aplikasi SIMDA Versi 2', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1335', 'Input Data Umum', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1336', 'Input Data Anggaran', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1337', 'Input Anggaran Kas, Posting APBD, DPA', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1338', 'Input Data Penatausahaan', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1339', 'Input Data Akuntansi', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1340', 'Paradigma Baru Internal Auditor', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1341', 'Standar Audit Internal Pemerintah Indonesia (AAIP)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1342', 'Audit Kinerja (Pembahasan Kasus)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1343', 'Penjelasan Aktualisasi', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1344', 'Akuntabilitas Pegawai Negeri Sipil', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1345', 'Nasionalisme', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1346', 'Etika Publik', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1347', 'Komitmen Mutu', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1348', 'Anti Korupsi', '', '27.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1349', 'Evaluasi Pemahaman', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1350', 'Rancangan dan Pembimbingan Akutualisiasi', '', '72.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1351', 'Aktualisasi di Tempat Kerja', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1352', 'Evaluasi Aktualisasi', '', '60.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1353', 'Rapat Kelulusan', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1354', 'Perencanaan dan Penganggaran', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1355', 'Anggaran Pendapatan dan Biaya BLUD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1356', 'Penatausahaan Keuangan BLUD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1357', 'Pedoman/Standar Akuntansi BLUD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1358', 'Gambaran Umum Evaluasi Akuntabilitas Kinerja Insta', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1359', 'Overview Akuntabilitas Kinerja Instansi Pemerintah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1360', 'Pengertian Kebijakan Publik', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1361', 'Evaluasi kebijakan Publik', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1362', 'Contoh Penelitian Kebijakan Publik', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1363', 'Penulisan Laporan Evaluasi Kebijakan Publik', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1364', 'Pengertian Analisa Kebijakan Publik', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1365', 'Analisa Kebijakan Publik', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1366', 'Contoh Penelitian Analisa Kebijakan Publik', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1367', 'Penulisan Laporan Analisa Kebijakan Publik', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1368', 'Langkah-langkah Penelitian Ekonomi tentang Masalah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1369', 'Contoh Pelaksanaan Penelitian Kuantitatif Mengguna', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1370', 'Contoh Pelaksanaan Penelitian Kualitatif Menggunak', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1371', 'Analisa dan Pembuatan Laporan Hasil Penelitian', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1372', 'Kurikulum Diklat JFA 2014', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1373', 'Pembekalan Instruktur Diklat JFA Kurikulum 2014', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1374', 'Overview Diklat JFA Pembentukan Auditor Terampil/A', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1375', 'Praktik Mengajar Diklat JFA Pembentukan Auditor Te', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1376', 'Overview Diklat JFA Penjenjangan Auditor Muda', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1377', 'Praktik Mengajar Diklat JFA Penjenjangan Auditor M', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1378', 'Bimbingan Persiapan Microteaching', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1379', 'Praktik Mengajar Microteaching', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1380', 'Reviu atas Laporan Perubahan SAL', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1381', 'Overview Audit Forensic', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1382', 'Overviu Audit Forensik dan SKKNI', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1383', 'Penilaian Risiko', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1384', 'Overview SAKIP (Perpres 29 Tahun 2014) dan Pedoman', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1385', 'Kebijakan SAKIP BPKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1386', 'Reviu Kinerja (Permenpan 53 Tahun 2014)', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1387', 'Konsep Dasar Kebijakan Fiskal', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1388', 'Analisis Peningkatan Peran Kebijakan Fiskal', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1389', 'Case Pembahasan APBN-P 2015', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1390', 'Konsep Dasar Metodologi RIA', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1391', 'RIA:Case Kebijakan Subsidi Energi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1392', 'Pelaksanaan Revisi Anggaran', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1393', 'Praktik/Simulasi Penyusunan RKA dan Revisi RKA', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1394', 'Monitoring', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1395', 'Penyusunan Makalah', '', '40.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1396', 'Pilar-pilar Kebangsaan', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1397', 'Standar Etika Publik', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1398', 'SANRI', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1399', 'Pembekalan MTSI', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1400', 'Pengenalan Potensi Diri', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1401', 'Berpikir Kreatif dan Inovasi', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1402', 'Koordinasi dan Kolaborasi', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1403', 'Banchmarking ke Best Practive', '', '45.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1404', 'Pengantar dan Problematika Evaluasi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1405', 'Desain Evaluasi, Matrik, dan Instrumen Evaluasi', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1406', 'Pengolahan dan Analisis Data ', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1407', 'Pelaporan dan Hasil Evaluasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1408', 'Diskusi Umum dan Latihan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1409', 'Pengantar Keprotokolan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1410', 'Keprotokolan BPKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1411', 'Strategi Komunikasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1412', 'Layanan Informasi Publik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1413', 'MC Teori', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1414', 'MC Praktik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1415', 'Manajemen Bencana', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1416', 'Penerimaan Tamu', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1417', 'Prosedur Pengadaan Barang dan Jasa', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1418', 'E-Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1419', 'Overview PPK BLUD dan SIA BLUD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1420', 'Pengelolaan Keuangan BLUD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1421', 'Instalasi Program', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1422', 'Setting Aplikasi - Anggaran (RBA)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1423', 'Setting Aplikasi - Saldo Awal Neraca dan Hutang Pi', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1424', 'Setting Aplikasi - Rekening dan Data Pendukung', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1425', 'Modul Bendahara Pengeluaran', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1426', 'Latihan Modul Bendahara Pengeluaran', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1427', 'Modul Bendahara Penerimaan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1428', 'Latihan Modul Bendahara Penerimaan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1429', 'Modul Akuntansi', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1430', 'Latihan Modul Akuntansi', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1431', 'Modul Hutang/Piutang', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1432', 'Latihan Modul Hutang/Piutang', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1433', 'Dasar-dasar Jaringan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1434', 'Perintah SQL dalam Pengolahan Data', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1435', 'Permasalahan dalam Implementasi SIA BLUD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1436', 'Konsep Risiko dan Penilaian Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1437', 'Metodologi Penilaian Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1438', 'Pengertian Identifikasi Risiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1439', 'Penyusunan Kriteria Risiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1440', 'Prosedur Identifikasi Risiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1441', 'Praktik Identifikasi Risiko', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1442', 'Konsep Analisis Risiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1443', 'Praktik Analisis Risiko', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1444', 'Diskusi Pembahasan Kasus (Tahap Pemilihan)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1445', 'Diskusi Pembahasan Kasus (Tahap Persiapan Pemiliha', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1446', 'Diskusi Pembahasan Kasus (Tahap Pelaksanaan)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1447', 'Diskusi Pembahasan Kasus (Tahap Jasa Konsultansi)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1448', 'Pedoman Probity Audit PBJ (Tahap Persiapan Pemilih', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1449', 'Diskusi Kelompok Pembahasan Kasus', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1450', 'Benchmarking ke Best Practice', '', '27.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1451', 'Pola Diklat dan Pengantar Makalah', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1452', 'Bimbingan Penyusunan Makalah', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1453', 'Presentasi Makalah', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1454', 'Ujian JFA', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1455', 'Seminar Rancangan pada Diklat Prajab III', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1456', 'Pengelolaan Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1457', 'Gambaran Umum Pelaksanaan Penugasan APIP', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1458', 'Konsep Pendapatan Asli Daerah (PAD)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1459', 'Strategi Optimalisasi Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1460', 'Teknik Analisis Keuangan dan Non Keuangan PAD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1461', 'Intensifikasi dan Ekstensifikasi PAD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1462', 'Potensi Riil PAD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1463', 'Rencana Strategi OPAD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1464', 'Pengantar Tunas Integritas', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1465', 'Tunas Integritas', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1466', 'Sinkronisasi Dokumen Perencanaan pada Kementerian/', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1467', 'Sinkronisasi Data Kinerja Kementerian/Lembaga', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1468', 'Pengukuran Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1469', 'Pelaporan Kinerja', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1470', 'Reviu Kinerja', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1471', 'Renstra dan Profil Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1472', 'Peraturan Perundang-undangan di Bidang Pengelolaan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1473', 'Overview Sistem Akuntansi Pemerintahan Pusat dan D', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1474', 'Pengarahan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1475', 'Ujian Pilihan Ganda US AAP A', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1476', 'Ujian Komprehensif', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1477', 'Ujian Essai US AAP A', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1478', 'Pentingnya Peningkatan Kapabilitas APIP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1479', 'Grand Design Peningkatan Kapabilitas APIP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1480', 'Monitoring Kapabilitas APIP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1481', 'Dukungan Sistem Informasi Kapabilitas APIP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1482', 'Kapabilitas APIP', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1483', 'Self Assessment Kapabilitas APIP', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1484', 'Quality Assurance ', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1485', 'Self Improvement dan Monitoring Kapabilitas APIP', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1486', 'Infrastruktur Kapabilitas APIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1487', 'Kebijakan Monitoring Kapabilitas APIP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1488', 'Sistem Informasi Kapabilitas APIP', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1489', 'Teori Peraturan Perundang-undangan dan Dasar-dasar', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1490', 'Jenis, Fungsi, dan Materi Muatan Peraturan Perunda', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1491', 'Metodologi Penyusunan dan Bahasa Penyusunan Peratu', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1492', 'Proses Penyusunan Peraturan Perundang-undangan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1493', 'Teknik Penyusunan Peraturan Perundang-undangan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1494', 'Harmonisasi dan Pembuatan Konsep Peraturan Perunda', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1495', 'Proses Litigasi Peraturan Perundang-undangan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1496', 'Penyusunan Naskah Akademik', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1497', 'Legisiasi Semu dan Penetapan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1498', 'Memahami Undang-undang Nomor 30 Tahun 2014 tentang', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1499', 'Peranan Prolegnas dalam Hukum Nasional', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1500', 'Efektifitas Peraturan Perundang-undangan dalam Mas', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1501', 'Penyusunan dan Analisa Kontrak Pengadaan Barang da', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1502', 'Peran Hukum Kontrak dalam Dunia Bisnis', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1503', 'Dasar-dasar Pembuatan Kontrak Bisnis (Komersial)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1504', 'Strategi Negosiasi dalam Penyusunan Kontrak', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1505', 'Mekanisme Penyelesaian Sengketa serta Penegakan Hu', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1506', 'Gambaran Umum Pengelolaan Keuangan Daerah: Perenca', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1507', 'Gambaran Umum Pengelolaan Keuangan Daerah: Pelaksa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1508', 'Gambaran Umum Akuntansi Berbasis Akrual', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1509', 'Gambaran Umum dan System Requirement serta Instala', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1510', 'Pelatihan Pengoperasian SIMDA Keuangan Versi 2.7 (', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1511', 'Pelatihan Pengoperasian SIMDA Keuangan Versi 2.7 (', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1512', 'Pelatihan Pengoperasian SIMDA Keuangan Versi 2.7 (', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1513', 'Gambaran Umum Pengelolaan Barang Milik Daerah: Tug', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1514', 'Gambaran Umum Pengelolaan Barang Milik Daerah: Sik', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1515', 'Gambaran Umum dan Sysreq SIMDA BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1516', 'Pelatihan Pengoperasian Aplikasi SIMDA BMD', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1517', 'Overview SIA PDAM', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1518', 'Brainstorming Menu Sistem Informasi Akuntansi PDAM', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1519', 'Brainstorming Menu Sistem Informasi Akuntansi PDAM', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1520', 'Brainstorming Menu Sistem Informasi Akuntansi PDAM', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1521', 'Brainstorming Menu Sistem Informasi Akuntansi PDAM', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1522', 'Pengenalan Struktur Database SIA PDAM-Data Umum', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1523', 'Pengenalan Struktur Database SIA PDAM-Data Umum, A', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1524', 'Pengenalan Struktur Database SIA PDAM-Billing', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1525', 'Ekspor Data dari Database MySQL ke MsExcel, MsAcce', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1526', 'Ekspor Data dari Database MySQL ke MsAccess', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1527', 'Ekspor Data dari Database MySQL ke Format Tabel La', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1528', 'Pengolahan Data lewat MsExcel dan MsAccess', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1529', 'Pengolahan Data lewat MsAccess', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1530', 'Pengolahan Data MySQL dengan Menggunakan SQL Yog d', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1531', 'Pengolahan Data MySQL dengan Menggunakan MySQL Que', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1532', 'Migrasi Data dari MsExcell, MsAccess, dan Tabel Fo', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1533', 'Migrasi Data dari MsAccess ke MySQL', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1534', 'Migrasi Data dari Tabel Format Lain ke MySQL', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1535', 'Prinsip-prinsip PBJ dan Perbedaan Proses Pengadaan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1536', 'Perbedaan Proses Pengadaan di Lingkungan BUMN deng', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1537', 'Metodologi Proses Pengadaan Barang dan Jasa BUMN s', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1538', 'Hal-hal Terkait Implementasi Pengadaan Barang dan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1539', 'Latar Belakang Ketentuan Pengadaan Barang dan Jasa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1540', 'Peraturan Menteri Negara BUMN Nomor PER-05/MBU/200', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1541', 'Keputusan Menteri BUMN Nomor 15/MBU/2012 Tanggal 2', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1542', 'Penjelasan tentang \"Sinergi BUMN\"', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1543', 'Proses Pengadaan Barang dan Jasa di Lingkungan Kon', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1544', 'Sharring Session- Mitigasi Risiko Pengadaan Barang', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1545', 'Konsep Output dalam Renstra BPKP 2015-2019', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1546', 'Pengenalan New IPMS', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1547', 'New IPMS: Tugas Admin Unit', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1548', 'New IPMS: Penyusunan KAP dan PKPT/PKAU', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1549', 'New IPMS: Penyusunan Surat Tugas', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1550', 'New IPMS: Monitoring Penugasan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1551', 'Pengenalan Aplikasi dan Instalasi SimHP25New', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1552', 'Instalasi Aplikasi SimHP25New', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1553', 'Praktek Input Data LHA (Data Umum, Temuan s.d TL)', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1554', 'Praktek Pemisahan dan Penggabungan Data', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1555', 'Pencetakan Adhoc dan Cara Mengekspor Report Hasil ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1556', 'Pengenalan Query untuk Penfilteran Data, Report, d', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1557', 'Praktek Penambahan, Perubahan, dan Penghapusan Dat', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1558', 'Cara Konfigurasi Server', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1559', 'Permasalahan Pelaksanaan PBJ di Lingkungan BUMN', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1560', 'Metodologi Pengembangan Dashboard', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1561', 'Pengertian Dashboard', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1562', 'Setup Browser', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1563', 'Dashboard Monitoring Penugasan', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1564', 'Dashboard Current Issues', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1565', 'Dashboard Kepegawaian', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1566', 'Dashboard dan Pengambilan Keputusan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1567', 'Gambaran Umum Internal Audit Capability Model (IAC', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1568', 'Kebijakan Pengawasan Pendapatan Asli Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1569', 'Regulasi Pajak dan Retribusi Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1570', 'Strategi Pengawasan Optimalisasi Pendapatan Asli D', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1571', 'Petunjuk Pelaksanaan Pengawasan Optimalisasi Penda', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1572', 'Perencanaan Potensi Pendapatan Asli Daerah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1573', 'Pemeriksaan Pendapatan Asli Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1574', 'Evaluasi Penyelenggaraan SPIP Pengelolaan Pendapat', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1575', 'Pedoman Probity Audit PBJ (Tahap Perencanaan)', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1576', 'Diskusi Pembahasan Kasus (Tahap Perencanaan)', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1577', 'Undang-undang Informasi dan Transaksi Elektronik (', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1578', 'Undang-undang Keterbukaan Informasi Publik (KIP)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1579', 'Pengolahan Arsip Aktif ( Central File)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1580', 'Kebijakan Kearsipan Nasional', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1581', 'Tata Kearsipan Dinamis', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1582', 'Pengolahan Arsip di Unit Pengolah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1583', 'Pengolahan Arsip di Unit Kearsipan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1584', 'Penataan dan Penyimpanan Arsip', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1585', 'Penilaian dan Penyusutan Arsip', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1586', 'Pelaksanaan dan Penatausahaan Penerimaan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1587', 'Pelaksanaan dan Penatausahaan Pengeluaran', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1588', 'Ceramah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1589', 'TOEFL', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1590', 'Manajemen Risiko Sektor Publik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1591', 'Peran APIP dalam Manajemen Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1592', 'APIP sebagai Fasilitator dalam Manajemen Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1593', 'Penetapan Konteks dan Identifikasi Risiko', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1594', 'Penanganan dan Mitigasi Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1595', 'Monitoring atas Mitigasi Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1596', 'Simulasi Manajemen Risiko dengan Metode CSA', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1597', 'Organisasi Berkinerja Tinggi', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1598', 'Perencanaan Kinerja Diklat', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1599', 'Penyelenggaraan Diklat', '', '12.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1600', 'Study Kasus', '', '17.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1601', 'Penyusunan Laporan dan Seminar Studi Lapangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1602', 'Overview Kapabilitas APIP', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1603', 'Self Improvement Kapabilitas APIP', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1604', 'Narrative Techniques in Writing', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1605', 'Cognos', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1606', 'Introduction to ITIL v3', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1607', 'Service Strategy Setup', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1608', 'Service Design', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1609', 'Service Transition dan Service Operation', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1610', 'Continual Service Improvement (CSI)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1611', 'Tehnik Penulisan Berita', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1612', 'Penulisan Berita 1', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1613', 'Penulisan Berita 2', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1614', 'Praktek Penulisan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1615', 'Evaluasi Penulisan Berita', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1616', 'Tehnik Wawancara dan Penulisan Profil', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1617', 'Tehnik Wawancara ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1618', 'Praktek Penulisan Profil dan Wawancara', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1619', 'Editing Penulisan/Hasil Wawancara (dan Evaluasi Tu', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1620', 'Tehnik Fotografi, Dasar-Dasar Fotografi Jurnalisti', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1621', 'Cara Membuat Foto yang Menarik dan Evaluasi serta ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1622', 'Praktek Fotografi', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1623', 'Evaluasi Fotografi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1624', 'Tehnik Penulisan Pers Release', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1625', 'Bagaimana Membuat Pers Release agar Dimuat Di Medi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1626', 'Praktek Penulisan Pers Release', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1627', 'Evaluasi Penulisan Pers Release', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1628', 'Pemaparan mengenai Desain, termasuk Metodologi Pen', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1629', 'Simulasi Penyusunan Desain Penelitian ', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1630', 'Presentasi dan Pembahasan Rancangan Desain Penelit', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1631', 'Pemaparan Pemilihan Metodologi yang Tepat', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1632', 'Simulasi Perumusan Metodologi Penelitian ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1633', 'Operasionalisasi Variabel', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1634', 'Metode Pengolahan/Analisis Data secara Kuantitatif', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1635', 'Analisis Regresi, Estimasi Interval, Analisis Kore', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1636', 'Metode Pengolahan/Analisis Data secara Kualitatif', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1637', 'Interpretasi Data', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1638', 'Overview SPI BUMN/BUMD/BUL', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1639', 'Evaluasi Penerapan SPI untuk BUMN/BUMD/BUL', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1640', 'Overview Diklat', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1641', 'Penggunaan Barang Milik Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1642', 'Pemanfaatan Barang Milik Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1643', 'Penghapusan Barang Milik Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1644', 'Pengadaan Barang Milik Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1645', 'Kebijakan Akuntansi Barang Milik Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1646', 'Aplikasi SIMAK Barang Milik Negara dan Persediaan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1647', 'Pemindahtanganan Barang Milik Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1648', 'Penyusunan SOP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1649', 'Formasi dan SKS', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1650', 'Tugas Belajar, Izin Belajar, dan UD/UPI', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1651', 'Penilaian 360 derajat', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1652', 'E-PUNPS, SISPEDAP, dan LHKPN/LHKASN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1653', 'Pembebasan Sementara, Pengangkatan, dan Kenaikan P', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1654', 'Disiplin Pegawai, Pola Mutasi, dan Pool Talent (Pr', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1655', 'Perencanaan dan Pelaporan Reviu Laporan Keuangan P', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1656', 'Pemahaman Entitas (Penelaahan Kebijakan Akuntansi ', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1657', 'Reviu Laporan Keuangan Pemerintah Daerah Berbasis ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1658', 'Program Kerja Reviu (PKR) dan Kertas Kerja Reviu (', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1659', 'Isu Aktual/Jam Pimpinan', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1660', 'Peran dan Kompetensi Korwas', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1661', 'Pengembangan Potensi/Komunikasi/Interpesonal Skill', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1662', 'Kepemimpinan yang Efektif', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1663', 'Networking, Kolaborasi dan Koordinasi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1664', 'Problem Solving Analysis (Analisis Situasi, Analis', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1665', 'Kepemimpinan Transformasional: Manajemen Perubahan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1666', 'Kepemimpinan Transformasional: Kepemimpinan Strate', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1667', 'Reformasi Birokrasi: Grand Design RB', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1668', 'Reformasi Birokrasi: Road Map dan Quick win', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1669', 'Manajemen Perubahan: Pembentukan agen perubahan ya', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1670', 'Perubahan Manajemen di BPKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1671', 'Manajemen Perubahan: Pengembangan nilai-nilai untu', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1672', 'Sharing Session Manajemen Perubahan di Kementerian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1673', 'Rencana Aksi Perubahan: Manajemen Perubahan Pola P', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1674', 'Rencana Aksi Perubahan: PMPRB-BPKP (Penilaian Mand', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1675', 'Fondasi Audit Internal', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1676', 'Standar Profesi Audit Internal', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1677', 'Proses Audit Internal', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1678', 'Gambaran Umum Pengawasan Lintas Sektoral', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1679', 'Konsep Pengawasan Lintas Sektoral', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1680', 'Persiapan dan Perencanaan Pengawasan Lintas Sektor', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1681', 'Pelaksanaan Pengawasan Lintas Sektoral', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1682', 'Pelaporan dan Monitering Tindak Lanjut atas Rekome', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1683', 'Teori Penyusunan ABKJ Pejabat Fungsional Tertentu ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1684', 'Praktik Penyusunan ABKJ Non Auditor (PFT dan PFU)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1685', 'Teori Penyusunan ABKJ Auditor', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1686', 'Praktek Penyusunan ABKJ Auditor', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1687', 'Teori Penyusunan dan Penilaian Prestasi Kerja PNS', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1688', 'Praktik Penyusunan dan Penilaian Prestasi Kerja PN', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1689', 'Pelayanan Prima Kepegawaian', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1690', 'Pengelolaan Fungsi Audit Internal', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1691', 'Internal Audit: Assurance and Consulting Services', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1692', 'Diskusi dan Presentasi', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1693', 'Mata Ajar Hari Pertama', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1694', 'Mata Ajar Hari Kedua', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1695', 'Mata Ajar Hari Ketiga', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1696', 'Mata Ajar Hari Keempat', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1697', 'Mata Ajar Hari Kelima', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1698', 'Gambaran Umum LKPD Berbasis Akrual', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1699', 'Gambaran Umum Reviu Laporan Keuangan Berbasis Akru', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1700', 'Evaluasi Kinerja Kementerian/Lembaga', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1701', 'Akuntansi Konsolidasi dan Laporan Keuangan Pemerin', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1702', 'Busines Proces dan Indikator Kinerja - Pajak', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1703', 'Busines Proces dan Indikator Kinerja - Bea Cukai', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1704', 'Laboratorium Kepemimpinan', '', '540.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1705', 'Reviu Kebijakan Diklat dan Tindak Lanjut', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1706', 'Strategi dan Kebijakan Pengembangan Sumber Daya Ma', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1707', 'Overview Kebijakan Diklat', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1708', 'Membangun Komitmen Bersama', '', '54.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1709', 'Pelaporan dan QA Audit Klaim', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1710', 'Argumentasi Hukum (Legal Opinion)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1711', 'Hukum Kontrak Konstruksi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1712', 'Barang Milik Negara dan Barang Milik Daerah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1713', 'Hukum Kepegawaian', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1714', 'Hukum Pertanahan dan Penyelesaian Sengketa Pertana', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1715', 'Overview Optimalilsasi Pendapatan Asli Daerah', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1716', 'SPIP Pengelolaan Pendapatan', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1717', 'Gambaran Umum Aplikasi SIMDA Pendapatan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1718', 'System Requirement Aplikasi SIMDA Pendapatan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1719', 'Instalasi SQL Server dan Aplikasi SIMDA Pendapatan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1720', 'Pengelolaan Pendapatan Asli Daerah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1721', 'Pelatihan Aplikasi SIMDA Pendapatan', '', '27.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1722', 'Overview Program Prioritas Pembangunan Nasional', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1723', 'Program Akselerasi Swasembada Pangan', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1724', 'Konsep Monitoring dan Evaluasi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1725', 'Kasus Program Swasembada Pangan dan Dwelling Time', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1726', 'Pembahasan Kasus Program Swasembada Pangan dan Dwe', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1727', 'Penyusunan Rekomendasi Strategis atas Hasil Monev', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1728', 'Materi Diklat Trampil dan Ahli Pertama', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1729', 'Materi Diklat Auditor Muda', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1730', 'Materi Diklat Pengendali Teknis (Dalnis)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1731', 'Materi Diklat Auditor Utama', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1732', 'Overview IPM', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1733', 'Seleksi Peserta Diklat', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1734', 'Menetapkan Kriteria Widyaiswara/Pengajar/Instruktu', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1735', 'Menyusun Panduan Diklat/RBPMD dan RP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1736', 'Menetapkan Metode Pembelajaran', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1737', 'Evaluasi Diklat Level 1 (Reaksi) dan Level 2 (Lear', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1738', 'Evaluasi Diklat Level 3 (Behavior)', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1739', 'Evaluasi Diklat Level 4 (Behavior)', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1740', 'Kebijakan Umum BPKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1741', 'Regulasi Kebijakan Pengelolaan Keuangan Desa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1742', 'Perencanaan Keuangan Desa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1743', 'Pelaksanaan dan Penatausahaan Keuangan Desa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1744', 'Pelaporan dan Pertanggungjawaban Keuangan Desa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1745', 'System Requirement dan Gambaran Umum SISKEUDES', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1746', 'Pelatihan Simulasi  Penganggaran SISKEUDES', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1747', 'Pelatihan Simulasi Penatausahaan dan Pelaporan Keu', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1748', 'Pengganggaran Keuangan Desa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1749', 'Aplikasi Kapabilitas APIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1750', 'Quality Assurance Kapabilitas APIP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1751', 'Konsep Consulting dan Assurance', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1752', 'Peran BPKP sebagai Auditor Internal', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1753', 'Kasus Consulting Pengadaan Barang dan Jasa', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1754', 'Concelling Softskill', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1755', 'Konsultasi Penyusunan Laporan Keuangan Berbasis Ak', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1756', 'Bina Damai', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1757', 'Konsep Akuntansi Berbasis Akrual', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1758', 'Aplikasi SAIBA dan Jurnal Penyesuaian ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1759', 'Persediaan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1760', 'Studi Kasus', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1761', 'Pengembangan Bahasa Indonesia yang Benar dalam Mod', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1762', 'Pengembangan Kurikulum dan Bahan Ajar', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1763', 'Pengembangan Bahan Ajar E-Learning', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1764', 'Penggunaan Bahasa Indonesia yang Benar dalam Modul', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1765', 'Kebijakan Pengawalan BPKP dan Regulasi Kebijakan P', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1766', 'Perencanaan dan Penganggaran Keuangan Desa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1767', 'Pelatihan Simulasi Penatausahaan SISKEUDES', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1768', 'Pelatihan Simulasi Pelaporan SISKEUDES', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1769', 'Micro Teaching', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1770', 'Pengantar Jurnalistik: Strategi Memenangkan Isu di', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1771', 'Jurnalistik Media Online dan Teknik Mempopulerkan ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1772', 'Menggali Ide Berita, Teknik Wawancara dan Menulis ', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1773', 'Praktek Penulisan dan Evaluasi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1774', 'Pengantar Photoshop, Editing, dan Foto Caption', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1775', 'Pengantar Photostation dan Pengarsipan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1776', 'Praktek dan Evaluasi Photostation dan Pengarsipan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1777', 'Praktek dan Evaluasi Photoshop, Editing, dan Foto ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1778', 'Pengantar Merancang, Membuat, dan Menyajikan Video', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1779', 'Software Editing Video dan Videobumper untuk Sosia', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1780', 'Video untuk Sosial Media dan Website dan Merancang', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1781', 'Praktek dan Evaluasi Merancang, Membuat, dan Menya', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1782', 'Pengantar Merancang dan Menentukan Konsep Sampul d', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1783', 'Mengenal Software Adobe Indisign', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1784', 'Praktek Membuat Majalah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1785', 'Evaluasi Pembuatan Majalah', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1786', 'Pengantar Merancang dan Menentukan Topik untuk Inf', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1787', 'Mengenal Software Infografis', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1788', 'Membuat Infografis dengan Adobe Ilustrator dan Pra', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1789', 'Overview Audit Klaim, APH, dan EHKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1790', 'Overview APH', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1791', 'Penetapan Penugasan APH', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1792', 'Pelaksanaan APH', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1793', 'Pelaporan APH', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1794', 'Studi Kasis APH', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1795', 'Indikator Makro Pembangunan Nasional', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1796', 'Teknik Pengawasan Monitoring dan Evaluasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1797', 'Grand Design Pengelolaan Hasil Pengawasan', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1798', 'Prosedur Pengelolahan dan Pelaporan Hasil Pengawas', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1799', 'Aplikasi Pengelolahan Hasil Pengawasan', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1800', 'Teori/Gambaran Umum/Overview SPIP dan Implementasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1801', 'Strategi Penguatan Efektivitas SPIP', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1802', 'Grand Design Pengembangan SPIP', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1803', 'Gambaran Umum Maturitas SPIP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1804', 'Mekanisme Penilaian Tingkat Maturitas Penyelenggar', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1805', 'Strategi Peningkatan Maturitas Penyelenggaraan SPI', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1806', 'Kertas Kerja dan Form-Form Penilaian Maturitas SPI', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1807', 'Simulasi dan Diskusi - Menetapkan Sample dan Respo', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1808', 'Simulasi dan Diskusi - Tabulasi Kuesioner', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1809', 'Simulasi dan Diskusi - Uji Konsistensi', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1810', 'Simulasi dan Diskusi - Menetapkan Fokus Penilaian', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1811', 'Simulasi dan Diskusi - Pengujian', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1812', 'Simulasi dan Diskusi - Penyusunan Area of Improvem', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1813', 'Strategi Kebijakan Pengembangan SDM Aparat Sipil N', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1814', 'Konsep Proyek Perubahan', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1815', 'Seminar RPP', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1816', 'Install Aplikasi SIMDA dan Gambaran Umum Aplikasi ', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1817', 'Kebijakan Pembinaan Jabatan Fungsional Analis Kepe', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1818', 'Tim Penilai Angka Kredit Jabatan Fungsional Terten', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1819', 'Pengembangan Karier Jabatan Fungsional Tertentu', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1820', 'Butir Kegiatan Analis Kepegawaian sesuai Perka BKN', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1821', 'Petunjuk Teknis Jabatan Analis Kepegawaian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1822', 'Sasaran Kerja Pegawai Analis Kepegawaian (Berdasar', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1823', 'Penulisan Karya Tulis Ilmiah Analis Kepegawaian', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1824', 'Penilaian dan Penetapan Angka Kredit Jabatan Fungs', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1825', 'Simulasi Penilaian Angka Kredit Analis Kepegawaian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1826', 'Presentasi Penilaian Angka Kredit Analis Kepegawai', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1827', 'coffee Break', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1840', 'Overviu Proses Bisnis Migas', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1839', 'Proses Bisnis Migas', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1838', 'Gambaran Umum Audit Migas', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1837', 'Pajak Migas', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1836', 'Audit Pajak', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1835', 'Perka BPKP Nomor: 709/K/JF/2009', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1834', 'Perka BPKP Nomor: 707/K/JF/2009', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1833', 'Perka BPKP Nomor: 708/K/JF/2009', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1832', 'Perka BPKP Nomor: 503/K/JF/2009', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1831', 'Simulasi Penilaian dan Penetepan Angka Kredit', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1830', 'Simulasi Penilaian dan Penetepan Angka Kredit (Lan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1829', 'Konsep Kapabilitas APIP (IACM)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1828', 'Self Assessment dan Self Improvement Kapabilitas A', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1841', 'Gambaran Umum Audit serta Paradigma dan Peran Audi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1842', 'Standar, Kode Etik, dan Proses Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1843', 'Perencanaan Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1844', 'Pelaksanaan Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1845', 'Komunikasi Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1846', 'Penggunaan, Pengamanan, dan Pemeliharaan BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1847', 'Pemanfaatan dan Penilaian BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1848', 'Pemindahtanganan, Pemusnahan dan Penghapusan BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1849', 'Penatausahaan, Pembinaan, Pengawasan dan Pengendal', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1850', 'Gambaran Umum Pengelolaan BMD dan Perencanaan Kebu', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1851', 'Kebijakan Pengawalan Pengelolaan Keuangan Desa ole', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1852', 'Regulasi Keuangan Desa', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1853', 'Gambaran Umum Pengelolaan keuangan Desa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1854', 'Pelaksanaan, Penatausahaan, Pelaporan dan Pertangg', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1855', 'Information Resource Management (IRM)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1856', 'Teknik Pengumpulan dan Analisis Data', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1857', 'Penulisan Laporan Sesuai Kaidah Bahasa Indonesia', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1858', 'Pengelolaan Kinerja Pengawasan Melalui Integrasi S', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1859', 'Penyusunan Laporan Presiden dan Menteri/Pimpinan L', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1860', 'Pengendalian Risiko pada Perencanaan Barang dan Ja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1861', 'Teori SPIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1862', 'Pengendalian Risiko pada Perencanaan Barang dan Ja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1863', 'Pengendalian Risiko pada Penatausahaan Barang dan ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1864', 'Reviu Penyelenggaraan SPIP atas Pengelolaan Barang', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1865', 'Penanganan Kegagalan Instail dan Setting Program', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1866', 'Management Database SQL dan Jaringan Komputer', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1867', 'Modul Setting', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1868', 'Latihan Input Anggaran dan Saldo AWal', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1869', 'Latihan Input Anggaran dengan Perintah Dasar SQL', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1870', 'Overview Peer Review', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1871', 'Pedoman Peer Review', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1872', 'Simulasi Peer Review', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1873', 'Penyusunan Kertas Kerja Peer Review', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1874', 'Penyusunan Kertas Kerja Peer Review Intern BPKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1875', 'Penyusunan Laporan Peer Review', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1876', 'Arah Pembinaan JFA sesuai Undang-Undang ASN', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1877', 'Pembinaan Karir ASN', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1878', 'Tata Cara dan Prosedur Penyusunan Peraturan Perund', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1879', 'Strategi Pembinaan JFA yang Efektif', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1880', 'Pedoman Umum Pengawasan Lintas Sektoral', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1881', 'IPM dalam Audit Kinerja JKN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1882', 'Proses Bisnis JKN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1883', 'Sharing Knowledge dan Latihan Audit Kinerja JKN', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1884', 'Pengawasan Lintas Sektoral', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1885', 'Force Field Analysis', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1886', 'Pedoman Pengawasan Kawasan Ekonomi Khusus', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1887', 'Sharing Knowledge dan Latihan KEK', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('1', 'Pembukaan', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('2', 'Penutupan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('3', 'Out Bound', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('4', 'Pre Test', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('5', 'Post Test', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('6', 'Aspek Hukum dari Audit Klaim, Audit Penyesuaian Ha', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('7', 'Overview Penugasan HKP, Eskalasi dan Klaim', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('8', 'Penetapan Penugasan Audit Klaim', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('9', 'Permasalahan Audit Klaim', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('10', 'Pelaksanaan Audit Klaim', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('11', 'Pelaksanaan dan Pelaporan Audit Kinerja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('12', 'Studi kasus Audit Klaim', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('13', 'Overview, Penetapan Penugasan EHKP', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('14', 'Pelaksanaan, Pelaporan, dan QA EHKP', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('15', 'Overview Audit Penyesuaian Harga', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('16', 'Penetapan Penugasan Audit Penyesuaian Harga', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('17', 'Pelaksanaan Audit Penyesuaian Harga', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('18', 'Pelaporan Audit Penyesuaian Harga', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('19', 'Studi Kasus Audit Penyesuaian Harga', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('20', 'Kode Etik dan Standar Audit Intern', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('21', 'Gambaran Umum Audit Internal', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('22', 'Sistem Pengendalian Internal Pemerintahan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('23', 'Laporan Hasil Audit', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('24', 'Pemantauan dan Tindak Lanjut', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('25', 'Akuntansi Keuangan Daerah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('26', 'Gambaran Umum Reviu Laporan Keuangan Instansi Peme', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('27', 'Perencanaan Reviu atas Laporan Keuangan Instansi P', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('28', 'Reviu Penyajian Sesuai SAP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('29', 'Reviu Penelusuran Angka', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('30', 'Pemahaman Perpres 54/2010 dan Perpres 70/2012 (Per', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('31', 'Evaluasi Pengukuran Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('32', 'Evaluasi Pelaporan Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('33', 'Ujian Sertifikasi PPB/J Pemerintah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('34', 'Overviu Manajemen Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('35', 'Penetapan Sasaran', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('36', 'Respon Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('37', 'Aktivitas Pengendalian, Informasi, dan Komunikasi ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('38', 'Konsepsi Laporan Hasil Audit', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('39', 'Proses Penulisan Laporan Hasil Audit', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('40', 'Teknik Penulisan LHA yang Efektif', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('41', 'Penulisan Laporan Hasil Audit Investigatif', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('42', 'Penulisan Laporan Hasil Evaluasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('43', 'Penulisan Laporan Hasil Reviu Laporan Keuangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('44', 'Penyusunan KKA Evaluasi SPM', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('45', 'Penyusunan KKA Pengujian Substantif', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('46', 'Penyusunan KKA Pengembangan Temuan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('47', 'Menyusun Simpulan KKA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('48', 'Pemberkasan KKA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('49', 'Akuntansi Pemda', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('50', 'Gambaran Umum Aplikasi Penyusunan Laporan Keuangan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('51', 'Perencanaan Reviu Laporan Keuangan Pemda', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('52', 'Konsepsi Audit Investigatif', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('53', 'Pemantauan Pengendalian Intern', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('54', 'Pre award Audit PBJ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('55', 'Gambaran Umum Probity Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('56', 'Probity Audit', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('57', 'How to Become The Best Facilitator', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('58', 'Control Self Assessment (CSA)', '', '12.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('59', 'Pedoman Teknis SPIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('60', 'Communication Skill', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('61', 'Identifikasi dan Analisis Risiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('62', 'Pembelajaran Hasil Piloting SPIP (lesson learnt) C', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('63', 'Mekanisme Pengelolaan Anggaran', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('64', 'Reformasi Keuangan Negara', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('65', 'Pelaksanaan APBN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('66', 'Penyusunan RKA-KL dan DIPA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('67', 'Revisi RKA-KL dan DIPA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('68', 'Mekanisme Pelaksanaan Pencairan Belanja', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('69', 'Mekanisme Pelaksanaan Verifikasi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('70', 'Standar Biaya ', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('71', 'Aspek Hukum bagi Auditor Investigatif', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('72', 'Overviu Investigatif', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('73', 'Overview Pelaksanaan Fasilitasi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('74', 'Change Management', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('75', 'Konsep Control Self Assessment (CSA)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('76', 'Langkah-langkah CSA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('77', 'Teknik Fasilitasi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('78', 'Simulasi Penetapan Konteks dan Tujuan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('79', 'Lingkungan Pengendalian', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('80', 'Teknik Komunikasi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('81', 'Simulasi Penilaian Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('82', 'Evaluasi Existing Kegiatan Pengendalian', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('83', 'Simulasi Perbaikan Kegiatan Pengendalian', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('84', 'Simulasi Evaluasi', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('85', 'Simulasi Infokom dan Pemantauan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('86', 'Simulasi dan Diskusi - Pelaporan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('87', 'Sistem Akuntansi Pemerintah Daerah Berbasis Akrual', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('88', 'Standar Audit Auditor Intern Pemerintah', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('89', 'Pencatatan Transaksi', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('90', 'Penyusunan Laporan Keuangan SKPD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('91', 'Sinkronisasi Laporan Keuangan dan laporan BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('92', 'Penyusunan Laporan Keuangan SKPKD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('93', 'Penyusunan Catatan atas Laporan Keuangan (CaLK) SK', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('94', 'Struktur Pemerintahan RI dan Reformasi Birokrasi (', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('95', 'Reformasi Birokrasi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('96', 'Pengelolaan Kinerja Pemerintah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('97', 'Perencanaan Keuangan Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('98', 'Pelaksanaan Anggaran Keuangan Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('99', 'Pertanggungjawaban Keuangan Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('100', 'Pengantar Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('101', 'Pengantar Audit (Lanjutan)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('102', 'Penugasan Auditor Pemerintah (Audit)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('103', 'Penugasan Auditor Pemerintah (Reviu, Evaluasi, Mon', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('104', 'Gambaran Umum Sistem Pengendalian Intern Pemerinta', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('105', 'Aturan Kepegawaian Menjelang Purna Bhakti', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('106', 'Mind Setting/Persiapan Menghadapi Pensiun', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('107', 'Entrepreneurship dan Motivasi', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('108', 'Kunjungan Lapangan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('109', 'Sharing Experience Kewirausahaan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('110', 'Diskusi Kelompok Menyusun Proposal Usaha', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('111', 'Dasar-dasar Auditing', '', '40.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('112', 'Pengantar SPM', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('113', 'Sistem Administrasi Keuangan Negara I', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('114', 'Sistem Administrasi Keuangan Daerah I', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('115', 'Pedoman Pelaksanaan Anggaran I', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('116', 'Kode Etik dan Standar Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('117', 'Akuntabilitas Instansi Pemerintah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('118', 'Teknik Komunikasi Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('119', 'Penjelasan JFA ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('120', 'Auditing', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('121', 'Sistem Pengendalian Manajemen', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('122', 'Sistem Adminsitrasi Keuangan Negara II', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('123', 'Pedoman Pelaksanaan Anggaran II', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('124', 'Sistem Administrasi Keuangan Daerah II', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('125', 'Auditing-Teori', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('126', 'Auditing-Peraga', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('127', 'Auditing-Kasus', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('128', 'Sistem Administrasi Keuangan Daerah/Negara II', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('129', 'Auditing II', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('130', 'Sistem Administrasi Keuangan Negara II', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('131', 'Sampling Audit', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('132', 'Penulisan Laporan Hasil Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('133', 'Reviu Kertas Kerja Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('134', 'Fraud Auditing', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('135', 'Teknik Penilaian SPM dan Penyusunan PKA', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('136', 'Sistem Informasi Manajemen', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('137', 'Kepemimpinan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('138', 'Manajemen Pengawasan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('139', 'Perencanaan Penugasan Audit', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('140', 'Supervisi Audit', '', '30.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('141', 'Audit Berpeduli Risiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('142', 'Etika dan Fraud dalam Audit', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('143', 'Interpersonal Skill', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('144', 'Ekonomi Makro', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('145', 'Penjelasan JFA dan Pola Diklat', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('146', 'Kebijakan Pengawasan', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('147', 'Filosofi Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('148', 'Kendali Mutu Pengawasan', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('149', 'Manajemen Pengawasan Stratejik', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('150', 'Perencanaan Audit Berbasis Risiko dan Penugasan Au', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('151', 'Praktek Merencanakan Penugasan Audit Individual', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('152', 'Penyusunan Program Kerja Audit ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('153', 'Evaluasi Sistem Pengendalian Intern', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('154', 'Audit Lanjutan (rinci) dan Teknik Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('155', 'Penyusunan Laporan Hasil Audit', '', '1.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('156', 'Program Pemantauan Tindak Lanjut Hasil Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('157', 'Overviu Fraud dan Strategi Pemberantasan Korupsi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('158', 'Perencanaan Audit Investigatif', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('159', 'Pengumpulan dan Evaluasi Bukti', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('160', 'Hubungan Bukti dan Alat Bukti Menurut Hukum', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('161', 'Teknik Wawancara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('162', 'Laporan Hasil Audit Investigatif', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('163', 'Overviu Audit Forensik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('164', 'SKKNI Bidang Audit Forensik', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('165', 'Kerangka Hukum', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('166', 'Keterangan Ahli', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('167', 'Valuasi Bisnis', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('168', 'Money Laundering', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('169', 'Assets Tracing', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('170', 'Teknik Audit Transaksi Keuangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('171', 'Perilaku Menyimpang', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('172', 'Konsep Penilaian Risiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('173', 'Pencegahan dan Pendeteksian Fraud', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('174', 'Kecurangan Pengadaan Barang dan Jasa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('175', 'Gambaran Umum ABR', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('176', 'Penetapan Audit Universe', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('177', 'Penetapan Auditable Unit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('178', 'Perencanaan Penugasan Makro', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('179', 'Penilaian Manajemen Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('180', 'Pengujian Keandalan Pengendalian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('181', 'Perencanaan Keuangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('182', 'Gambaran Umum Audit Kinerja Berbasis Risiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('183', 'Perencanaan Audit Kinerja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('184', 'Survei Pendahuluan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('185', 'Pengujian Sistem Pengendalian Intern', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('186', 'Pengujian Atas Sistem Pengukuran Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('187', 'Pengujian Atas Data Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('188', 'Audit Rinci dan Pengembangan Temuan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('189', 'Laporan Hasil Audit Kineja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('190', 'Gambaran Umum Pengadaan Barang dan Jasa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('191', 'Gambaran Umum Audit Pengadaan Barang dan Jasa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('192', 'Evaluasi Perencanaan Umum PBJ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('193', 'Audit Perencanaan Umum PBJ (Audit Operasional DPA-', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('194', 'Audit Pengadaan Barang Oleh Pihak Ke III', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('195', 'Audit Pengadaaan Konstruksi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('196', 'Audit Pengadaan Jasa Konsultansi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('197', 'Audit Pengadaan Jasa Lainnya', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('198', 'Audit Pengadaan Barang dan Jasa Swakelola', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('199', 'Laporan Hasil Audit Pengadaan Barang dan Jasa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('200', 'Overview dan Gambaran Umum AKIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('201', 'Evaluasi Perencanaan Kinerja', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('202', 'Pengukuran dan Pelaporan Kinerja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('203', 'Evaluasi Atas Evaluasi Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('204', 'Evaluasi Pencapaian Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('205', 'Penyusunan Laporan Hasil Evaluasi Kinerja', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('206', 'Gambaran Umum Laporan Hasil Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('207', 'Penulisan Laporan Hasil Audit Kinerja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('208', 'Konsep Kertas Kerja Audit dan Bukti Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('209', 'Program Kerja, Teknik, dan Bukti Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('210', 'Teknik Penulisan KKA', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('211', 'Teknik Penyusunan KKA', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('212', 'Penyusunan KKA Survei Pendahuluan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('213', 'Perencanaan Strategis dan Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('214', 'Pengukuran Kinerja Instansi Pemerintah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('215', 'Evaluasi Kinerja', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('216', 'Penyusunan LAKIP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('217', 'Akuntansi Transaksi SKPKD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('218', 'Akuntansi Transaksi SKPKD pada BUD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('219', 'Laporan Keuangan SKPKD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('220', 'Laporan Konsolidasi', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('221', 'Laporan Keuangan Pemda', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('222', 'Gambaran Umum Akuntansi Pemerintah Daerah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('223', 'SAP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('224', 'Gambaran Umum Simda', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('225', 'Akuntansi Pemerintah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('226', 'Gambaran Umum Reviu Laporan Keuangan Pemerintah Da', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('227', 'Pengujian SPI', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('228', 'Penelusuran Angka', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('229', 'Pengujian Penerapan SAP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('230', 'Pelaporan Laporan Hasil Reviu', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('231', 'Dasar Akuntansi Pemerintah Kementerian/Lembaga', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('232', 'Sistem Akuntansi Instansi - Akuntansi Keuangan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('233', 'Gambaran Umum Reviu Laporan Keuangan Kementerian/L', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('234', 'Proses Bisnis Entitas', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('235', 'Penilaian Sistem Pengendalian Intern (SPI)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('236', 'Reviu Laporan Realisasi Anggaran (LRA)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('237', 'Reviu Neraca', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('238', 'Reviu CaLK', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('239', 'Penyusunan Laporan Hasil Reviu ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('240', 'Dasar Akuntansi Pemerintah Pusat', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('241', 'Gambaran Umum Manajemen Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('242', 'Penetapan Konteks Risiko', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('243', 'Identifikasi Risiko dan Analisis Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('244', 'Analisis Risiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('245', 'Evaluasi Risiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('246', 'Pengelolaan Risiko', '', '7.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('247', 'Informasi dan Monitoring Risiko', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('248', 'Produk Manajemen Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('249', 'Proses Manajemen Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('250', 'Kebijakan MR dan Maturity Level Manajemen Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('251', 'Lingkungan Internal', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('252', 'Penaksiran Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('253', 'Aktivitas Pengendalian', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('254', 'Sharing Experience', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('255', 'IT Risk Assesment', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('256', 'IT Controls', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('257', 'Simulasi Penyusunan Profil Risiko Perusahaan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('258', 'Peran Audit Internal dalam CG dan RM', '', '8.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('259', 'Gambaran Umum Auditing', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('260', 'Standar Audit dan Kode Etik', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('261', 'Teknik Audit Pengujian Fisik dan Dokumen', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('262', 'Teknik Audit Memperoleh Keterangan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('263', 'Teknik Audit Analisis', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('264', 'Penyusunan Simpulan dan Temuan Hasil Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('265', 'Penetapan Tujuan dan Risiko Audit', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('266', 'Survai Pendahuluan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('267', 'Evaluasi SPI', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('268', 'Pemantauan Hasil Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('269', 'Gambaran Umum Audit BMD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('270', 'Audit Perencanaan BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('271', 'Audit Penggunaan, Pemeliharaan, dan Pengamanan BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('272', 'Audit Pemanfaatan BMN', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('273', 'Audit Penghapusan dan Pemindahtanganan BMD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('274', 'Pengujian Keakuratan dan Keandalan Penatausahaan d', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('275', 'Konsepsi Pendapatan Asli Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('276', 'Gambaran Umum  Audit PAD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('277', 'Audit Penetapan Target PAD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('278', 'Audit Pemungutan dan Penyetoran PAD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('279', 'Pengujian Keandalan Penatausahaan dan Pelaporan PA', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('280', 'Audit Perencanaan Umum Pengadaan Barang dan Jasa', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('281', 'Gambaran Umum Pola PNBP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('282', 'Pengujian Penganggaran Rencana Penerimaan dan Bela', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('283', 'Audit Rinci', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('284', 'Pengujian Mekanisme Penghitungan, Penetapan dan Pe', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('285', 'Pengujian Penatausahaan dan Pelaporan PNBP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('286', 'Laporan Hasil Audit PNBP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('287', 'Gambaran Umum Manajemen  Risiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('288', 'Hubungan Bukti Audit dengan Alat Bukti Menurut Huk', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('289', 'Pelaporan dan Pemberian Keterangan Ahli', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('290', 'Gambaran Umum Badan Layanan Umum Daerah (BLUD)', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('291', 'Menguji Keselarasan RSB dan RBA', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('292', 'Menguji Kewajaran Perhitungan Tarif', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('293', 'Mampu Menguji Pelaksanaan RBA-Siklus Pendapatan', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('294', 'Menguji Pelaksanaan RBA-Siklus Biaya', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('295', 'Menguji Pelaksanaan RBA-Siklus Pendanaan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('296', 'Menguji Kesesuaian Laporan Keuangan dengan SAK', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('297', 'Menyusun Laporan Hasil Audit BLU', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('298', 'Gambaran Umum Audit Barang Milik Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('299', 'Audit Perencanaan BMN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('300', 'Audit Penggunaan, Pemeliharaan, dan Pengamanan BMN', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('301', 'Audit Penghapusan dan Pemindahtanganan BMN', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('302', 'Pengujian Keakuratan dan Keandalan Penatusahaan da', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('303', 'Akuntabilitas dan Good Governance', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('304', 'Konsepsi Pengukuran dan Evaluasi Kinerja Instansi ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('305', 'Konsep Kinerja', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('306', 'Praktek Penyusunan LAKIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('307', 'Praktek Pengukuran Kinerja Instansi Pemerintah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('308', 'Praktek Evaluasi LAKIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('309', 'Praktek Evaluasi Kinerja', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('310', 'Gambaran Umum Reviu Lk Kementerian Lembaga', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('311', 'Penilaian SPI', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('312', 'Reviu  Laporan Operasional (LO)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('313', 'Standar Akuntansi Pemerintahan (SAP)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('314', 'Gambaran Umum RLK Kementerian/Lembaga', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('315', 'Perencanaan Berbasis Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('316', 'Reviu Laporan Realisasi Anggaran dan Laporan Opers', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('317', 'Reviu Ketaatan SAK', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('318', 'Reviu Catatan atas Laporan Keuangan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('319', 'Overview Penilaian Risiko', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('320', 'Penetapan Konteks', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('321', 'Evaluasi dan Kebijakan Risiko', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('322', 'Pemahaman Perpres 54/2010 dan Persiapan Pengadaan ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('323', 'Persiapan PBJ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('324', 'Pelaksanaan Pengadaan Barang/Konstruksi/Jasa Lainn', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('325', 'Pelaksanaan Pengadaan Jasa Konsultansi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('326', 'Pelaksanaan PBJ dengan Cara Swakelola', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('327', 'Pendayagunaan Produksi Dalam Negeri dan Pinjaman/H', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('328', 'E-Procurement', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('329', 'Pembahasan Kasus', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('330', 'Mekanisme Keuangan BLUD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('331', 'Akuntansi BLU', '', '15.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('332', 'Penyusunan Laporan Keuangan BLU', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('333', 'Mekanisme Anggaran', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('334', 'Fungsi dan Kedudukan Bendahara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('335', 'Pelaksanaan Anggaran', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('336', 'Perpajakan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('337', 'Pembukuan Bendahara', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('338', 'Pelaporan dan Pertanggungjawaban ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('339', 'Gambaran Umum Abk', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('340', 'Standar Pelayanan Minimal (SPM)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('341', 'Penyusunan PKPT', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('342', 'Penyusunan KKA Audit Rinci', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('343', 'Penyusunan Standar Analisis Belanja (SAB)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('344', 'Penyusunan ABK', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('345', 'Teknik Optimalisasi Pendapatan Asli Daerah', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('346', 'Pemungutan dan Penyetoran Pendapatan Asli Daerah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('347', 'Penatausahaan dan Pelaporan Pendapatan Asli Daerah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('348', 'Konsepsi PNBP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('349', 'Penetapan Objek dan Tarif PNBP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('350', 'Penganggaran, Rencana Penerimaan dan Belanja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('351', 'Mekanisme Penghitungan, Penetapan dan Penyetoran', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('352', 'Penatausahaan dan Pelaporan PNBP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('353', 'Gambaran Umum Pengelolaan Keuangan Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('354', 'Perencanaan Keuangan Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('355', 'Pelaksanaan dan Penatausahaan Pendapatan Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('356', 'Pelaksanaan dan Penatausahaan Belanja Daerah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('357', 'Akuntansi dan Pertanggungjawaban Keuangan Daerah', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('358', 'Konsepsi Pelaksanaan, Kodifikasi dan Penggolongan,', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('359', 'Pelaksanaan dan Penatausahaan BMD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('360', 'Pelaporan Pertanggungjawaban', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('361', 'Gambaran Umum Tentang Aset Negara/Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('362', 'Gambaran Umum Tentang Penilaian Aset Negara/Daerah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('363', 'Penilaian Aset Non-Lancar Untuk Penyusunan Laporan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('364', 'Penilaian Aset Lancar  & Investasi Untuk Penyusuna', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('365', 'Penilaian Aset Daerah Untuk Tujuan Non Laporan Keu', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('366', 'Standar Pelayanan Minimum', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('367', 'Penyusunan Rencana Kerja Tahunan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('368', 'Penyusunan Harga  Satuan Kegiatan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('369', 'Penyusunan Rencana Kerja dan Anggaran Kementerian/', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('370', 'Gambaran Umum Pengelolaan Keuangan Negara/Daerah', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('371', 'Pengujian Perencanaan Keuangan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('372', 'Pengujian Pelaksanaan dan Penatausahaan Penerimaan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('373', 'Pengujian Pelaksanaan dan Penatausahaan Pengeluara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('374', 'Pengujian Akuntansi dan Pertanggungjawaban', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('375', 'Averviu APM', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('376', 'Analisis Situasi (AS)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('377', 'Analisis Persoalan (AP)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('378', 'Analisis Keputusan (AK)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('379', 'Analisis Persoalan Potensial (APP)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('380', 'Gambaran Umum Pengelolaan Barang Milik Daerah (BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('381', 'Perencanaan Kebutuhan dan Pemeliharaan BMD', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('382', 'Penggunaan, Pemanfaatan, Pemeliharaan, dan Pengama', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('383', 'Pemindahtanganan BMN', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('384', 'Penatausahaan dan Akuntansi BMD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('385', 'Perencanaan Pengawasan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('386', 'Pengorganisasian Pengawasan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('387', 'Pelaksanaan dan Pengendalian Pengawasan', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('388', 'Konsep Lingkungan Pengendalian ', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('389', 'Konsep Kegiatan Pengendalian dan Konsep Infokom', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('390', 'Perumusan Informasi dan Komunikasi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('391', 'Pemantauan Pengendalian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('392', 'Study Kasus SPIP', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('393', 'Gambaran Umum Diklat Keinvestigasian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('394', 'Fraud dan Strategi Pemberantasan Korupsi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('395', 'Praktek Presentasi Teknik Wawancara ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('396', 'Audit Klaim', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('397', 'Evaluasi HKP', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('398', 'Audit Penyesuaian Harga', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('399', 'Tugas dan Fungsi Seorang Instruktur', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('400', 'Teori dan Teknik Pengajaran', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('401', 'Menyusun Materi Diklat', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('402', 'Teknik Presentasi - Sharing Session', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('403', 'Fraud dan Strategi Pemberantasan Korupsi (Konsepsi', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('404', 'Pra Perencanaan dan Perencanaan Audit Investigatif', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('405', 'Pengumpulan dan Evaluasi Bukti (Konsepsi, presenta', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('406', 'Hubungan Bukti dan Alat Bukti menurut Hukum (Konse', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('407', 'Teknik Wawancara (Konsepsi, presentasi, evaluasi)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('408', 'Pelaporan Hasil Audit Investigatif (Konsepsi, pres', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('409', 'Etika Organisasi Pemerintah', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('410', 'Manajemen Kepegawaian Negara', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('411', 'Pelayanan Prima', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('412', 'Wawasan Kebangsaan ', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('413', 'Percepatan Pemberantasan Korupsi', '', '12.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('414', 'Budaya Kerja Aparatur Negara', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('415', 'Membangun Kerjasama Tim', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('416', 'Komunikasi yang Efektif', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('417', 'Manajemen Perkantoran Modern', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('418', 'Kepemerintahan yang Baik', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('419', 'Dinamika Kelompok', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('420', 'Mind Setting', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('421', 'Sistem Penyelenggaraan Pemerintahan NKRI', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('422', 'Pengarahan Program', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('423', 'MTSL', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('424', 'Baris Berbaris', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('425', 'Tata Upacara Sipil', '', '6.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('426', 'Kesehatan Mental dan Kesehatan Jasmani', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('427', 'Pola Pikir (Mind Setting PNS)', '', '24.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('428', 'Ujian Akhir', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('429', 'Evaluasi', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('430', 'Pengembangan Program Diklat', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('431', 'Pemberdayaan SDM', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('432', 'Sistem Pengelolaan Keuangan dan Aset Pemerintahan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('433', 'Isu Aktual sesuai Tema', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('434', 'Seminar KKK dan  KKA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('435', 'Seminar KKP', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('436', 'Penjelasan dan Bimbingan KKK dan KKA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('437', 'Penjelasan dan Bimbingan KKP', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('438', 'Penjelasan Persiapan OL', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('439', 'Membangun Kepemerintahan Yang Baik', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('440', 'Pengembangan Potensi Diri', '', '9.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('441', 'Kepemimpinan dalam Organisasi', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('442', 'Analisis Kebijakan ', '', '20.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('443', 'Kepemimpinan dalam Keberagaman Budaya', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('444', 'Negosiasi, kolaborasi dan jejaring kerja', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('445', 'Teknik Analisis Manajemen', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('446', 'KIAT I', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('447', 'KIAT II', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('448', 'Teori dan Indikator Pembangunan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('449', 'Hukum Administrasi Keuangan Negara', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('450', 'AKIP dan Pengukuran Kinerja', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('451', 'Pembangunan Daerah, Sektoral dan Nasional', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('452', 'Dasar-dasar Kepemerintahan yang Baik', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('453', 'Operasionalisasi Pelayanan Prima', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('454', 'Konsep dan Indikator Pembangunan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('455', 'Kebijakan dan Program Pembangunan Nasional', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('456', 'Kecerdasan Emosional', '', '18.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('457', 'Pengenalan dan Pengukuran Potensi Diri', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('458', 'Teknik Komunikasi dan Presentasi yang Efektif', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('459', 'Etika Kepemimpinan Aparatur', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('460', 'Manajemen SDM', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('461', 'Koordinasi Pengawasan dan Program Jaminan Kualitas', '', '4.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('462', 'Otonomi dan Pembangunan Daerah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('463', 'Manajemen Keuangan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('464', 'Dasar-dasar Administrasi Publik', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('465', 'tes', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('466', 'Gambaran Umum Pengelolaan Keuangan Negara', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('467', 'Penyusunan Rencana Bisnis dan Anggaran (RBA)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('468', 'Penyusunan Rencanan Strategi Bisnis (RSB)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('469', 'Konsepsi Badan Layanan Umum (BLU)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('470', 'Ujian Sertifikasi Nasional', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('471', 'Pemahaman Perpres 54/2010 dan Perubahan-perubahann', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('472', 'Penyusunan Harga Satuan Pokok Kegiatan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('473', 'Perencanaan Strategis dan Standar Pelayanan Minima', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('474', 'Konsepsi ABK', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('475', 'Pengantar Pengadaan Barang/Jasa Pemerintah', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('476', 'Penyelesaian TPT/TGR dikaitkan dengan UU No.1 Tahu', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('477', 'Laporan Keuangan Pemerintah (LKP)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('478', 'Perpajakan Bendahara Pengeluaran', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('479', 'Pembukuan  dan Pertanggungjawaban Bendahara Pengel', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('480', 'Pencairan Anggaran Belanja Negara', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('481', 'Pokok-pokok Pelaksanaan Anggaran', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('482', 'Laporan Keuangan Berbasis Akrual', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('483', 'Penyusunan Anggaran Kas', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('484', 'Penyusunan Rencana Bisnis Anggaran (RBA)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('485', 'Penyusunan Rencana Bisnis Strategis  (RBS)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('486', 'Gambaran Umum BLU (Infrastruktur Proses Bisnis)', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('487', 'Perencanaan Reviu Laporan Keuangan Pemerintah', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('488', 'Akuntansi Pemerintah Daerah', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('489', 'Laporan Konsolidasi dan Laporan Keuangan Pemerinta', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('490', 'Perencanaan Kinerja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('491', 'Perencanaan Strategis', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('492', 'Pemantauan Tindak Lanjut Hasil Audit', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('493', 'Audit Lanjutan (rinci)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('494', 'Evaluasi Sistem Pengendalian Intern (SPI)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('495', 'Persiapan Audit', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('496', 'Kode Etik dan Standar  Audit ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('497', 'Paradigma dan Peran Auditor Internal', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('498', 'Pre-award Audit PBJ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('499', 'Pengujian Penetapan Objek dan Tarif PNBP', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('500', 'Gambaran Umum Audit PAD', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('501', 'Teknik Optimalisasi PAD', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('502', 'Penyusunan Laporan Hasil Audit Kinerja', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('503', 'Teknik Wawancara dan Penyusunan Berita Acara Klari', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('504', 'Aspek Hukum bagi Audit Investigatif', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('505', 'Teknik Wawancara dan Komunikasi Lanjutan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('506', 'Teknik Audit atas Kecurangan Transaksi Keuangan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('507', 'Penelusuran Aset', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('508', 'Pencucian Uang', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('509', 'Pemberian Keterangan Ahli', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('510', 'Kerangka Acuan Pengawasan', '', '12.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('511', 'Penilaian Kewajaran dan Keandalan Penatausahaan da', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('512', 'Audit Penggunaan, Pemanfaatan, Pemeliharaan, dan P', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('513', 'Penetapan Risiko Residual dan penyusunan Program K', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('514', 'Penilaian Kecukupan Daftar Risiko dan pengujian Pe', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('515', 'Pengidentifikasian Potential Auditable Unit dan Pe', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('516', 'Pengidentifikasian Audit Universe dan Penilaian ri', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('517', 'Gambaran Umum Proses Manajemen Risiko dan Audit Be', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('518', 'Kebijakan Risiko dan Respon Risiko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('519', 'Pengujian Penganggaran, Rencana Penerimaan dan Bel', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('520', 'Pengujian Penetapan Obyek dan Tarif PNBP', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('521', 'Wawancara', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('522', 'Penilaian Kewajaran dan Keandalan Penatausahaan da', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('523', 'Audit Penggunaan, Pemanfaatan, Pemeliharaan, dan P', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('524', 'Menguji Pelaksanaan RBA-Siklus Pendapatan', '', '2.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('525', 'Sistem Pengendalian Intern (SPI)', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('526', 'Sistem Akuntansi Instansi (SAI)', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('527', '', '', '0.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('528', 'Dasar-dasar Akuntansi Pemda', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('529', 'Evaluasi LAKIP', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('530', 'Aktivitas Pengendalian, Informasi dan Komunikasi d', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('531', 'Evaluasi  Pelaporan Kinerja', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('532', 'Penyusunan LHA Kinerja', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('533', 'Perencanaan Audit Individu', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('534', 'Gambaran Umum Audit Berbasis Risiko ', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('535', 'Informasi dan  Komunikasi dan Pemantauan Pengendal', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('536', 'Lingkungan  Pengendalian', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('537', 'IT Risk Assessment & IT Controls', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('538', 'Respon Risiko,Aktivitas Pengendalian, Informasi Ko', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('539', 'Lingkungan Internal, Penetapan Sasaran, Identifika', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('540', 'Gambaran Umum, produk, proses Manajemen Risiko dan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('541', 'Pengendalian Pengawasan', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('542', 'Pelaksanaan Pengawasan', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('543', 'Penggunaan, Pemanfaatan, Pemeliharaan, dan Pengama', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('544', 'Gambaran Umum Pengelolaan Barang Milik Negara', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('545', 'Penyusunan LHA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('546', 'Survey Pendahuluan', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('547', 'Audit Rinci dan Teknik Audit', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('548', 'Penyusunan Laporan Keuangan Pemda', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('549', 'Akuntansi SKPKD Selaku SKPD', '', '10.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('550', 'Perbaikan Kebijakan dan SOP ', '', '5.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('551', 'Seminar KKK dan KKA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('552', 'Observasi lapangan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('553', 'Pengelolaan informasi dan teknik pelaporan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('554', 'Manajemen materiil', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('555', 'SANKRI', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('556', 'Kebijakan & Program Pembangunan Nasional', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('557', 'Pola Kerja Terpadu', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('558', 'Pemecahan Masalah & Pengambilan Keputusan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('559', 'Ceramah Pimpinan / MTSL', '', '21.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('560', 'Penjelasan Teknis Penyelenggaraan Diklat', '', '3.0', '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('561', 'Evaluasi program', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('562', 'OL', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('563', 'Ujian ', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('564', 'Teknologi Informasi dalam Kepemerintahan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('565', 'Telaahan Staf Paripurna', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('566', 'Bimbingan KKP', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('567', 'Bimbingan KKK dan KKA', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('568', 'Dasar-Dasar Auditing-Peraga', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('569', 'Dasar-Dasar Auditing-Teori', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('570', 'Auditing  Kasus', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('571', 'Auditing Peraga', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('572', 'Auditing  Teori', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('573', 'Outbound', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('574', 'Auditing kasus', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('575', 'Gambaran Umum Tentang Aset Negara', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('576', 'Gambaran Umum Tentang Penilaian Aset Negara', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('577', 'Penilaian Aset Non-Lancar Untuk Penyusunan Laporan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('578', 'Penilaian Aset Lancar & Investasi Untuk Penyusunan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('579', 'Penilaian Aset Untuk Tujuan Non Laporan Keuangan', '', null, '1471836961', '1471836961', '1', '1');
INSERT INTO `len_mata_ajar` VALUES ('580', 'Penentuan Indikator Kinerja (IK)', '', null, '1471836961', '1471836961', '1', '1');

-- ----------------------------
-- View structure for `view1`
-- ----------------------------
DROP VIEW IF EXISTS `view1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`127.0.0.1` SQL SECURITY DEFINER VIEW `view1` AS select `k`.`kaldikID` AS `kaldikID`,`k`.`kaldikDesc` AS `kaldikDesc`,`k`.`kaldikMonth` AS `kaldikMonth`,`k`.`kaldikYear` AS `kaldikYear`,`y`.`yearName` AS `yearName`,`d`.`diklatID` AS `diklatID`,`d`.`diklatName` AS `diklatName`,`b`.`biayaName` AS `biayaName`,`k`.`kelas` AS `kelas`,`kr`.`kurikulumID` AS `kurikulumID`,`kr`.`kurikulumName` AS `kurikulumName`,`m`.`metodeID` AS `metodeID`,`m`.`metodeName` AS `metodeName`,`k`.`KetUnitKerja` AS `ketUnitKerja`,concat(date_format(min(`ks`.`startDate`),'%d'),' ',(case date_format(min(`ks`.`startDate`),'%m') when '01' then 'Januari' when '02' then 'Februari' when '03' then 'Maret' when '04' then 'April' when '05' then 'Mei' when '06' then 'Juni' when '07' then 'Juli' when '08' then 'Agustus' when '09' then 'September' when '10' then 'Oktober' when '11' then 'November' when '12' then 'Desember' end),' ',date_format(min(`ks`.`startDate`),'%Y')) AS `strStartDate`,min(`ks`.`startDate`) AS `startDate`,concat(date_format(max(`ks`.`endDate`),'%d'),' ',(case date_format(max(`ks`.`endDate`),'%m') when '01' then 'Januari' when '02' then 'Februari' when '03' then 'Maret' when '04' then 'April' when '05' then 'Mei' when '06' then 'Juni' when '07' then 'Juli' when '08' then 'Agustus' when '09' then 'September' when '10' then 'Oktober' when '11' then 'November' when '12' then 'Desember' end),' ',date_format(max(`ks`.`endDate`),'%Y')) AS `strEndDate`,max(`ks`.`endDate`) AS `endDate`,`k`.`kaldikStat` AS `kaldikStat`,`dl`.`diklatLocID` AS `diklatLocID`,`dl`.`diklatLocName` AS `diklatLocName`,`ua`.`KodeAsal` AS `KodeAsal`,`ua`.`NamaUnitAsal` AS `NamaUnitAsal`,`k`.`color` AS `color`,substr(`k`.`kaldikID`,5,4) AS `strKaldikID` from ((((((((`len_kaldik` `k` join `len_diklat` `d` on((`d`.`diklatID` = `k`.`diklatID`))) join `len_biaya` `b` on((`b`.`biayaID` = `k`.`biayaID`))) join `len_diklat_location` `dl` on((`dl`.`diklatLocID` = `k`.`diklatLocID`))) join `len_year` `y` on((`k`.`kaldikYear` = `y`.`yearID`))) join `len_kurikulum` `kr` on((`kr`.`kurikulumID` = `d`.`kurikulumID`))) join `len_metode` `m` on((`m`.`metodeID` = `k`.`metodeID`))) join `len_unit_asal` `ua` on((`ua`.`KodeAsal` = `k`.`KodeAsal`))) join `len_kaldik_sesi` `ks` on((`ks`.`kaldikID` = `k`.`kaldikID`))) group by `k`.`kaldikID`;

-- ----------------------------
-- Function structure for `getAvailable`
-- ----------------------------
DROP FUNCTION IF EXISTS `getAvailable`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getAvailable`(pTanggalCuti date, pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	select count(pegawaiID) into vCount from len_cuti_pegawai where tanggalCuti = pTanggalCuti and pegawaiID = pPegawaiID;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getAvailableRealisasi`
-- ----------------------------
DROP FUNCTION IF EXISTS `getAvailableRealisasi`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getAvailableRealisasi`(pTanggalCuti date, pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	select count(pegawaiID) into vCount from len_cuti_pegawai where tanggalCuti = pTanggalCuti and pegawaiID = pPegawaiID;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getCountKonversi`
-- ----------------------------
DROP FUNCTION IF EXISTS `getCountKonversi`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getCountKonversi`(pJadwalID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	select count(1) into vCount from len_konversi where jadwalID = pJadwalID;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getCountMataAjarKurikulum`
-- ----------------------------
DROP FUNCTION IF EXISTS `getCountMataAjarKurikulum`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getCountMataAjarKurikulum`(pKurikulumID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	set vCount = 0;
	select count(1) into vCount from len_kurikulum k join len_kurikulum_sesi ks on ks.kurikulumID = k.kurikulumID join len_sesi s on s.sesiID = ks.sesiID join len_metode m on m.metodeID = s.metodeID join len_kurikulum_detail kd on kd.kurikulumSesiID = ks.kurikulumSesiID where k.kurikulumID = pKurikulumID;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getCountPengajar`
-- ----------------------------
DROP FUNCTION IF EXISTS `getCountPengajar`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getCountPengajar`(pJadwalID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	set vCount = 0;
	select count(1) into vCount from len_pengajar where jadwalID = pJadwalID;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getEndDate`
-- ----------------------------
DROP FUNCTION IF EXISTS `getEndDate`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getEndDate`(pKaldikID int) RETURNS date
BEGIN
	#Routine body goes here...
	declare vDate date;
	select max(ks.endDateRealisasi) into vDate from len_kaldik k join len_kaldik_sesi ks on ks.kaldikID = k.kaldikID where k.kaldikID = pKaldikID group by k.kaldikID;
	RETURN vDate;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getHariKe`
-- ----------------------------
DROP FUNCTION IF EXISTS `getHariKe`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getHariKe`(pSesiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vHariKe int;
	set vHariKe = 0;
	select coalesce(max(harike), 0) into vHariKe from len_kurikulum_detail kd where kd.sesiID = pSesiID;
	RETURN vHariKe;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getHariKurikulum`
-- ----------------------------
DROP FUNCTION IF EXISTS `getHariKurikulum`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getHariKurikulum`(pKurikulumID varchar(255)) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vHari int;
	select coalesce(harike, 0) into vHari from len_kurikulum k join len_kurikulum_rinci r on (k.kurikulumID = r.kurikulumID) join len_mata_ajar m on (m.mataAjarID = r.MataAjarID) where k.kurikulumID = pKurikulumID order by harike desc limit 1;
	RETURN vHari;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getHoliday`
-- ----------------------------
DROP FUNCTION IF EXISTS `getHoliday`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getHoliday`(pStartDate date, pEndDate date) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vHari int;
	select count(1) into vHari from len_holiday where holidayDate between pStartDate and pEndDate;
	RETURN vHari;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJamLat`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJamLat`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJamLat`(pTanggal date, pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vJamLat int;
	set vJamLat = 0;
	select j.jamlat into vJamLat from len_pengajar pe join len_jadwal j on j.jadwalID = pe.jadwalID join len_pegawai p on p.pegawaiID = pe.pegawaiID where j.tanggal = pTanggal and p.pegawaiID = pPegawaiID;
	RETURN vJamLat;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJamLatAll`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJamLatAll`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJamLatAll`(pPegawaiID int, pKaldikMonth int, pKaldikYear int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vSum int;
	select coalesce(sum(jamlatR), 0) into vSum from len_pengajar peng join len_jadwal jad on jad.jadwalID = peng.jadwalIDR join len_kaldik k on k.kaldikID = jad.kaldikID join len_biaya b on b.biayaID = k.biayaID where (peng.pegawaiIDR = pPegawaiID and k.kaldikMonth = pKaldikMonth) and (k.kaldikYear = pKaldikYear);
	RETURN vSum;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJamlatNonTatapMuka`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJamlatNonTatapMuka`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJamlatNonTatapMuka`(pPegawaiID int,  pKonversiMonth int, pKonversiYear int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vSum int;
	select coalesce(sum(kegiatanDetailJP * k.volume), 0) into vSum from len_konversi k join len_kegiatan_detail kd on k.kegiatanDetailID = kd.kegiatanDetailID where (k.konversiMonth = pKonversiMonth and k.konversiYear = pKonversiYear) and k.pegawaiID = pPegawaiID;
	RETURN vSum;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJamLatOther`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJamLatOther`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJamLatOther`(pPegawaiID int, pKaldikMonth int, pKaldikYear int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vSum int;
	select coalesce(sum(jamlatR), 0) into vSum from len_pengajar peng join len_jadwal jad on jad.jadwalID = peng.jadwalIDR join len_kaldik k on k.kaldikID = jad.kaldikID join len_biaya b on b.biayaID = k.biayaID where (peng.pegawaiIDR = pPegawaiID and k.kaldikMonth = pKaldikMonth) and (k.kaldikYear = pKaldikYear and b.biayaID not in ('7', '0', '1', '2'));
	RETURN vSum;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJamLatPnbp`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJamLatPnbp`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJamLatPnbp`(pPegawaiID int, pKaldikMonth int, pKaldikYear int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vSum int;
	select coalesce(sum(jamlatR), 0) into vSum from len_pengajar peng join len_jadwal jad on jad.jadwalID = peng.jadwalIDR join len_kaldik k on k.kaldikID = jad.kaldikID join len_biaya b on b.biayaID = k.biayaID where (peng.pegawaiIDR = pPegawaiID and k.kaldikMonth = pKaldikMonth) and (k.kaldikYear = pKaldikYear and b.biayaID in ('2'));
	RETURN vSum;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJamLatRealisasi`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJamLatRealisasi`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJamLatRealisasi`(pTanggal date, pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vJamLat int;
	set vJamLat = 0;
	select coalesce(sum(j.jamlat), 0) into vJamLat from len_pengajar pe join len_jadwal j on j.jadwalID = pe.jadwalID join len_pegawai p on p.pegawaiID = pe.pegawaiIDR where j.tanggal = pTanggal and p.pegawaiID = pPegawaiID;
	RETURN vJamLat;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJamLatRM`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJamLatRM`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJamLatRM`(pPegawaiID int, pKaldikMonth int, pKaldikYear int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vSum int;
	select coalesce(sum(jamlatR), 0) into vSum from len_pengajar peng join len_jadwal jad on jad.jadwalID = peng.jadwalIDR join len_kaldik k on k.kaldikID = jad.kaldikID join len_biaya b on b.biayaID = k.biayaID where (peng.pegawaiIDR = pPegawaiID and k.kaldikMonth = pKaldikMonth) and (k.kaldikYear = pKaldikYear and b.biayaID in ('0', '1'));
	RETURN vSum;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJamLatStar`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJamLatStar`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJamLatStar`(pPegawaiID int, pKaldikMonth int, pKaldikYear int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vSum int;
	select coalesce(sum(jamlatR), 0) into vSum from len_pengajar peng join len_jadwal jad on jad.jadwalID = peng.jadwalIDR join len_kaldik k on k.kaldikID = jad.kaldikID join len_biaya b on b.biayaID = k.biayaID where (peng.pegawaiIDR = pPegawaiID and k.kaldikMonth = pKaldikMonth) and (k.kaldikYear = pKaldikYear and b.biayaID in ('7'));
	RETURN vSum;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getJumlahKurikulumDiklat`
-- ----------------------------
DROP FUNCTION IF EXISTS `getJumlahKurikulumDiklat`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getJumlahKurikulumDiklat`(pDiklatID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	set vCount = 0;
	select count(1) into vCount from len_diklat_kurikulum dk where dk.diklatID = pDiklatID; 
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getKurikulumSesi`
-- ----------------------------
DROP FUNCTION IF EXISTS `getKurikulumSesi`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getKurikulumSesi`(pKurikulumID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	set vCount = 0;
	select count(1) into vCount from len_kurikulum_sesi where kurikulumID = pKurikulumID;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMaxKelasDay`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMaxKelasDay`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMaxKelasDay`(pDiklatLoc int, pStartDate date) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vInt int;
	select count(1) into vInt from len_pertemuan p join len_kaldik k on (k.kaldikID = p.kaldikID) join len_diklat_location l on (l.diklatLocID = k.diklatLocID) where k.diklatLocID = pDiklatLoc and p.startDate = pStartDate;
	RETURN vInt;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguAfterAkhir`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguAfterAkhir`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguAfterAkhir`(pDate date) RETURNS date
BEGIN
	#Routine body goes here...
	declare vDate date;
	SELECT pDate + INTERVAL 12 - weekday(pDate) day into vDate from dual;
	RETURN vDate;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguAfterAwal`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguAfterAwal`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguAfterAwal`(pDate date) RETURNS date
BEGIN
	#Routine body goes here...
	declare vDate date;
	SELECT pDate + INTERVAL 7 - weekday(pDate) day into vDate from dual;
	RETURN vDate;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguAkhir`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguAkhir`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguAkhir`(pDate date, pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vDateAwal date;
	declare vDateAkhir date;
	declare vCount int;
	SELECT pDate + INTERVAL 7 - weekday(pDate) day into vDateAwal from dual;
	SELECT pDate + INTERVAL 12 - weekday(pDate) day into vDateAkhir from dual;
	select coalesce(sum(jamlat), 0) into vCount from len_pengajar p join len_jadwal j on j.jadwalID = p.jadwalID where pegawaiID = pPegawaiID and tanggal between vDateAwal and vDateAkhir;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguBefore`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguBefore`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguBefore`(pDate date, pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vDateAwal date;
	declare vDateAkhir date;
	declare vCount int;
	SELECT pDate - INTERVAL 7 + weekday(pDate) day into vDateAwal from dual;
	SELECT pDate - INTERVAL 2 + weekday(pDate) day into vDateAkhir from dual;
	select coalesce(sum(jamlat), 0) into vCount from len_pengajar p join len_jadwal j on j.jadwalID = p.jadwalID where pegawaiID = pPegawaiID and tanggal between vDateAwal and vDateAkhir;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguBeforeAkhir`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguBeforeAkhir`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguBeforeAkhir`(pDate date) RETURNS date
BEGIN
	#Routine body goes here...
	declare vDate date;
	SELECT pDate - INTERVAL 2 + weekday(pDate) day into vDate from dual;
	RETURN vDate;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguBeforeAwal`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguBeforeAwal`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguBeforeAwal`(pDate date) RETURNS date
BEGIN
	#Routine body goes here...
	declare vDate date;
	SELECT pDate - INTERVAL 7 + weekday(pDate) day into vDate from dual;
	RETURN vDate;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguIni`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguIni`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguIni`(pDate date, pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vDateAwal date;
	declare vDateAkhir date;
	declare vCount int;
	SELECT pDate - INTERVAL weekday(pDate) day into vDateAwal from dual;
	SELECT pDate + INTERVAL 5 - weekday(pDate) day into vDateAkhir from dual;
	select coalesce(sum(jamlat), 0) into vCount from len_pengajar p join len_jadwal j on j.jadwalID = p.jadwalID where pegawaiID = pPegawaiID and tanggal between vDateAwal and vDateAkhir;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguIniAkhir`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguIniAkhir`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguIniAkhir`(pDate date) RETURNS date
BEGIN
	#Routine body goes here...
	declare vDate date;
	SELECT pDate + INTERVAL 5 - weekday(pDate) day into vDate from dual;
	RETURN vDate;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getMingguIniAwal`
-- ----------------------------
DROP FUNCTION IF EXISTS `getMingguIniAwal`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getMingguIniAwal`(pDate date) RETURNS date
BEGIN
	#Routine body goes here...
	declare vDate date;
	SELECT pDate - INTERVAL weekday(pDate) day into vDate from dual;
	RETURN vDate;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getNamaHari`
-- ----------------------------
DROP FUNCTION IF EXISTS `getNamaHari`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getNamaHari`(pTanggal date) RETURNS varchar(20) CHARSET latin1
BEGIN
	#Routine body goes here...
	declare vHari varchar(20);
	set vHari = '';
	select case date_format(pTanggal, '%w') when '0' then 'Minggu'  when '1' then 'Senin' when '2' then 'Selasa' when '3' then 'Rabu' when '4' then 'Kamis' when '5' then 'Jumat' when '6' then 'Sabtu' End into vHari from dual; 
	RETURN vHari;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getPengajarTanggal`
-- ----------------------------
DROP FUNCTION IF EXISTS `getPengajarTanggal`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getPengajarTanggal`(pPegawaiID int, pTanggal date) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vSum int;
	select coalesce(sum(jamLat), 0) into vSum from len_pegawai p join len_pengajar pe on pe.pegawaiID = p.pegawaiID join len_jadwal j on j.jadwalID = pe.jadwalID where tanggal = pTanggal and pe.pegawaiID = pPegawaiID;
	RETURN vSum;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getPengampu`
-- ----------------------------
DROP FUNCTION IF EXISTS `getPengampu`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getPengampu`(pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	set vCount = 0;
	select count(1) into vCount from len_pengampu where pegawaiID = pPegawaiID;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getPengampuPengajar`
-- ----------------------------
DROP FUNCTION IF EXISTS `getPengampuPengajar`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getPengampuPengajar`(pMataAJarID int, pPegawaiID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	set vCount = 1;
	select count(1) as jml into vCount from len_pengampu pe join len_mata_ajar ma on ma.mataAjarID = pe.mataAjarID where ma.MataAjarID = pMataAjarID and pe.pegawaiID = pPegawaiID;
	RETURN vCount;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getStartDate`
-- ----------------------------
DROP FUNCTION IF EXISTS `getStartDate`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getStartDate`(pKaldikID int) RETURNS date
BEGIN
	#Routine body goes here...
	declare vDate date;
	select max(ks.startDateRealisasi) into vDate from len_kaldik k join len_kaldik_sesi ks on ks.kaldikID = k.kaldikID where k.kaldikID = pKaldikID group by k.kaldikID;
	RETURN vDate;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getSunday`
-- ----------------------------
DROP FUNCTION IF EXISTS `getSunday`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getSunday`(pStartDate date, pEndDate date) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vDiff int;
	declare vHasil int;
	declare vDay int;
	declare i int;
	set i = 1;
	set vHasil = 0;
	select datediff(pEndDate, pStartDate) into vDiff from dual;
	
	while i <= vDiff do
			select dayofweek(adddate(pStartDate, i)) into vDay from dual;
			if(vDay = 1) then
					set vHasil = vHasil + 1;
			end if;
			set i = i + 1;
	end while;
	RETURN vHasil;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getTanggalStr`
-- ----------------------------
DROP FUNCTION IF EXISTS `getTanggalStr`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getTanggalStr`(pTanggal date) RETURNS varchar(50) CHARSET latin1
BEGIN
	#Routine body goes here...
	declare vTanggal varchar(50);
	set vTanggal = '';
  select concat(date_format(pTanggal, '%e'),' ',case date_format(pTanggal, '%m') when '01' then 'Jan' when '02' then 'Feb' when '03' then 'Mar' when '04' then 'Apr' when '05' then 'Mei' when '06' then 'Jun' when '07' then 'Jul' when '08' then 'Agust' when '09' then 'Sep' when '10' then 'Okt' when '11' then 'Nov' when '12' then 'Des' END, ' ', date_format(pTanggal, '%Y')) into vTanggal from dual;
	RETURN vTanggal;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getTanggalStrFull`
-- ----------------------------
DROP FUNCTION IF EXISTS `getTanggalStrFull`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getTanggalStrFull`(pTanggal date) RETURNS varchar(50) CHARSET latin1
BEGIN
	#Routine body goes here...
	declare vTanggal varchar(50);
	set vTanggal = '';
  select concat(date_format(pTanggal, '%e'),' ',case date_format(pTanggal, '%m') when '01' then 'Januari' when '02' then 'Februari' when '03' then 'Maret' when '04' then 'April' when '05' then 'Mei' when '06' then 'Juni' when '07' then 'Juli' when '08' then 'Agustus' when '09' then 'September' when '10' then 'Oktober' when '11' then 'November' when '12' then 'Desember' END, ' ', date_format(pTanggal, '%Y')) into vTanggal from dual;
	RETURN vTanggal;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getTotalHariKurikulum`
-- ----------------------------
DROP FUNCTION IF EXISTS `getTotalHariKurikulum`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getTotalHariKurikulum`(pKurikulumJenisID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vTotalHari int;
	set vTotalHari = 0;
	select coalesce(sum(maxhari), 0) into vTotalHari from (select max(harike) as maxhari from len_kurikulum_jenis kj join len_kurikulum k on k.kurikulumID = kj.kurikulumID join len_jenis j on j.jenisID = kj.jenisID join len_kurikulum_sesi ks on ks.kurikulumJenisID = kj.kurikulumJenisID join len_kurikulum_detail kd on kd.sesiID = ks.sesiID  where kj.kurikulumJenisID = pKurikulumJenisID group by kd.sesiID) as hari;
	RETURN vTotalHari;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getTotalJamKe`
-- ----------------------------
DROP FUNCTION IF EXISTS `getTotalJamKe`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getTotalJamKe`(pKurikulumID int, pHariKe int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vSum int;
	set vSum= 0;
	select sum(jamlat) into vSum from len_kurikulum kr join len_kurikulum_sesi ks on ks.kurikulumID = kr.kurikulumID join len_kurikulum_detail kd on kd.kurikulumSesiID = ks.kurikulumSesiID where kr.kurikulumID = pKurikulumID  and harike = pHariKe;
	RETURN vSum;
END
;;
DELIMITER ;

-- ----------------------------
-- Function structure for `getTotalPengajar`
-- ----------------------------
DROP FUNCTION IF EXISTS `getTotalPengajar`;
DELIMITER ;;
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `getTotalPengajar`(pJadwalID int) RETURNS int(11)
BEGIN
	#Routine body goes here...
	declare vCount int;
	set vCount = 0;
	select count(1) into vCount from len_pengajar where jadwalID = pJadwalID;
	RETURN vCount;
END
;;
DELIMITER ;
