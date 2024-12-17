-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2024 at 03:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(18, 'albert', '20241211002029.jpg'),
(20, 'evos', '20241211035846.jpg'),
(22, 'PUBG_2', '20241216011009.jpg'),
(23, 'onic', '20241216033928.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Agenda'),
(2, 'Highlight'),
(5, 'Informasi Penting'),
(6, 'Berita Terbaru');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_website` text COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tiktok` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `no_wa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `tiktok`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Leonz Zephyr', 'Hello, my name is Leanno Athaya Al Jawahiri. I am a student in class 11RB at SMKN 2 Karanganyar. I live in Jongkan, Buran, Tasikmadu, Karanganyar. I have a great passion for online gaming and watching anime, which I often spend my free time enjoying.', 'https://instagram.com/leonzep23', 'https://www.tiktok.com/@leonzzy2309?_t=ZS-8reXD4HXFEg&_r=1', 'leannoatha239@gmail.com', 'Jongkang,Tasikmadu,Karaganyar', 'https://wa.me/');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(24, 'Bigetron Knights  Gugur di PUBG Mobile Global Championship 2024', 'Hasil Last Chance Stage, BTR gugur di PMGC 2024!\r\n\r\nKetegangan mewarnai babak Last Chance Stage PMGC 2024 di mana 2 tim Indonesia, VOIN Donkey dan Bigetron Knights berjuang menembus Grand Final.\r\n\r\nDari 4 tim perwakilan Indonesia, tersisa Bigetron Knights dan VOIN Donkey. Keduanya harus memikul beratnya harapan para penggemar PUBG Mobile di Indonesia.\r\n\r\nPeluang menembus Grand Final terbuka untuk semua tim, setelah babak Survival Stage poin direset dan semua tim kembali memulai dari nol.\r\nPada babak Survival Stage, peluang BTR gugur di PMGC 2024 terbilang tinggi. Beruntung, mereka bertahan di momen terakhir ke Last Chance.\r\n\r\nVOIN Donkey menjadi salah satu wakil Indonesia yang cukup menonjol dari Survival ke Last Chance di PMGC 2024. Permainan cemerlang Potato dkk membuat para penggemar melihat harapan lolos ke Grand Final.\r\n\r\nMeski memang Indonesia memiliki dua wakil di Last Chance, harap harap cemas BTR gugur di PMGC 2024 tetap membayangi Zuxxy dkk.\r\n\r\nPada hari pertama, VOIN berhasil menembus top 6 dengan 70 poin. Sayangnya Bigetron Knights tidak berbicara banyak di posisi ke-12.\r\n\r\nHari kedua, nasib tim-tim Indonesia tidak begitu baik. VOIN Donkey mampu bertahan serta menambah poin mereka di zona aman.\r\n\r\nSayangnya, nasib Bigetron Knights malah sebaliknya. Kembali, peluang BTR gugur di PMGC 2024 pun menguat.\r\n\r\nPada akhirnya, VOIN Donkey menjadi wakil Indonesia di Grand Finals. Dengan BTR gugur di PMGC 2024, artinya 3 tim Indonesia kandas di babak penyisihan.\r\n\r\nTerima kasih atas perjuangan kalian Bigetron Knights, selamat untuk VOIN Donkey berhasil melangkah ke Grand Finals PMGC 2024 di London, Inggris Raya.', '20241126061113.jpg', 'Bigetron-Knights--Gugur-di-PUBG-Mobile-Global-Championship-2024', '2', '2024-11-26', 'admin2'),
(26, 'Jadwal M6 Mobile Legends Knockout Stage Hari ini: RRQ Hoshi Vs SRG', 'Babak knockout stage M6 Mobile Legends berlanjut. Hari ini, RRQ Hoshi akan bertemu tim tuan rumah Selangor Red Giants.\r\nDuel maut keduanya akan bergulir di Axiata Arena, Kuala Lumpur, Malaysia. Pertandingannya akan menjadi penentu bagi mereka, apakah bisa bertahan di kejuaraan dunia Mobile Legends ini.\r\n\r\nPerlu diketahui, dua tim tersebut akan bermain di lower bracket. Jadi mereka tidak punya dua nyawa seperti tim yang berada di upper bracket.\r\n\r\nApabila salah satu di antara keduanya kalah, maka d		ipastikan gugur dari ajang bergengsi ini. Kemudian yang menang melanjutkan perjuangannya di semifinal lower bracket.\r\n\r\nRRQ Hoshi harus turun ke lower, karena sebelumnya kalah dari sedulurnya Team Liquid ID di semifinal upper. Pertarungan keduanya cukup sengit, hingga akhirnya RRQ tumbang dengan skor akhir 2-3.\r\n\r\nSementara Team Liquid ID yang berhasil menang melaju ke final upper bracket. Hari ini mereka juga akan bermain dan bertemu dengan juara MPL PH S14, yaitu Fnatic Onic PH.\r\n\r\nHasil duel antara Fnatic Onic Vs Team Liquid ID akan memastikan, siapa tim pertama yang mengamankan slot di grand final. Meski begitu, tim yang kalah tidak akan langsung gugur, melainkan turun terlebih dahulu ke final lower bracket.\r\n\r\nBerikut jadwal M6 Mobile Legends knockout stage hari ini, dihimpun detikINET dari Liquipedia, Rabu (11/12/2024).\r\n\r\nFalcon Esports Vs Team Spirit - 10.00 WIB\r\nRRQ Hoshi Vs Selangor Red Giants - 14.00 WIB\r\nFnatic Onic Vs Team Liquid ID - 18.00 WIB\r\nSemua pertandingan akan mengusung aturan main best of 5 (Bo3). Jadi bagi tim yang ingin melaju ke laga selanjutnya, maka harus mengamankan tiga game duluan. Contoh skor yang tercipta ialah 3-0, 3-1, atau 3-2.\r\n\r\nBagi penggemar Mobile Legends di Tanah Air yang ingin melihat RRQ Hoshi dan Team Liquid ID berlaga, bisa menyaksikannya secara online. Pihak penyelenggara menayangkan siaran langsung M6 Mobile Legends di kanal YouTube MLBB Esports.\r\n\r\n', '20241211132102.jpg', 'Jadwal-M6-Mobile-Legends-Knockout-Stage-Hari-ini:-RRQ-Hoshi-Vs-SRG', '1', '2024-12-11', 'admin2'),
(27, 'Indonesia Juara Dunia eFootbaall FIFAe World Cup 2024', 'Timnas eFootball Indonesia sukses menyabet gelar juara dunia FIFAe World Cup 2024 kategori konsol. Detik-detik timnas menjadi juara menjadi video yang banyak dibagi netizen.\r\n\r\nPerebutan titel negara dengan pemain eFootball konsol terbaik di dunia mempertemukan Indonesia vs Brasil di final. Laga final tersebut berlangsung secara offline di Riyadh, Arab Saudi, pada pukul 19.30 waktu setempat atau sekitar 22.30 WIB, Kamis (12/12).\r\n\r\nDalam upaya merebut gelar juara, Indonesia mengirim atlet timnas esports eFootball terkuatnya. Adapun pemain yang dimaksud adalah Elga Cahya, Rizky Faidan, dan Akbar Paudie. Sementara Brasil diwakili oleh Guifera, Victor, dan Thiago Avare.\r\n\r\nDi sini Indonesia menurunkan Rizky dan Elga untuk mengalahkan Brasil. Keduanya pun tampil gemilang sejak game pertama bergulir.\r\n\r\nNamun memang Brasil bukan lawan yang mudah, mereka mampu mengimbangi permainan cepat Rizky-Elga di game pertama. Bahkan kerap kali memberikan tekanan, hingga akhirnya mereka berhasil unggul duluan di menit ke-20 dari sepakan kaki kiri Raphael Veiga.\r\n\r\nTertinggal 0-1, Indonesia pun tak tinggal diam. Mereka melakukan serangan bertubi-tubi untuk merobek jala gawang lawan. Cuma memang hal itu sulit dilakukan.\r\n\r\nBrasil cukup solid dalam menahan segala gempuran Rizky-Elga. Alhasil skor 1-0 bertahan sampai babak pertama usai.\r\n\r\nBabak kedua hampir serupa, sampai akhirnya peluang yang tercipta mampu dimanfaatkan dengan baik jelang akhir laga. Gol penyama kedudukan terjadi di menit ke-87, setelah tendangan kaki kiri Egy Maulana Vikri tak bisa dihalau kiper Brasil Bento.\r\n\r\nHal itu membuat semangat Rizky-Elga membara. Seakan tak ingin menyia-nyiakan trend positif yang sudah tercipta, mereka langsung melancarkan serangan dari sisi kanan.\r\n\r\nUmpan ciamik dari Egy, mampu dimanfaatkan dengan baik oleh Ramadhan Sananta. Bola yang disundulnya membentur bagian atas gawang dan memantul ke arah dalam. Skor 2-1 bertahan sampai babak kedua berakhir untuk kemenangan Indonesia.\r\n\r\nBerbeda dengan game pertama, Indonesia lebih seram di game kedua. Atlet esports kebanggaan Tanah Air mampu mendominasi alur permainan.\r\n\r\nHasilnya pun memuaskan, setelah umpan cantik Marselino Ferdinan dapat diterima dengan baik Rafael Struick. Lalu dengan tekukan andalannya, Struick menempatkan bola dengan kaki kanan dan berhasil membobol gawang Beto di menit ke-9.\r\n\r\nBelum puas dengan satu gol, Indonesia kembali membombardir Brasil dengan serangan-serangan selanjutnya. Tak butuh waktu lama untuk menambah keunggulan, karena pada menit ke-18, umpan silang dari Struick kepada Ramadhan Sananta membuahkan hasil memuaskan.\r\n\r\nMelihat peluang yang ada, Ramadhan Sananta tak mengontrol bola terlebih dahulu. Umpan dari Struick langsung dilesatkannya dengan kaki kiri, dan mengoyak jala gawang Brasil. Dengan begitu Indonesia unggul 2-0 pada babak pertama game kedua.\r\n\r\nBrasil mencoba menyusul ketertinggalan di babak kedua. Mereka berharap bisa membalikkan keadaan dengan melancarkan serangan begitu deras ke daerah pertahanan Indonesia. Upaya yang dilakukan Victor dan Guifera terbukti berhasil. Namun hanya mampu menelurkan satu gol saja di menit ke-72.\r\n\r\nSaat itu umpan pendek Joelinton sukses dimanfaatkan Raphael Veiga. Tendangan kencang Raphael Viega tak bisa ditahan kiper timnas Nadeo Argawinata. Brasil pun mempersempit keunggulan Indonesia.\r\n\r\nNamun sayangnya Brasil tak bisa menciptakan gol penyama kedudukan. Malah di menit ke-88, mereka hampir kebobolan lagi setelah tendangan keras Ramadhan Sananta membentuk mistar gawang.\r\n\r\nUsaha terakhir Victor dan Guifera untuk menyamakan kedudukan kandas, setelah umpan Raphinha dari sisi kanan gagal diolah oleh Joelinto. Sundulan Joelinto melebar ke sisi kiri gawang Indonesia.\r\n\r\nSkor 2-1 bertahan hingga pluit tanda berakhirnya babak kedua dibunyikan. Detik-detik terakhir begitu menegangkan, karena saat perpanjangan waktu Brasil dalam posisi menyerang dan melakukan tendangan. Bola keluar seiring dengan waktu berakhir.\r\n\r\nElga Cahya, Rizky Faidan, dan Akbar Paudie bersorak dan berpelukan. Philip Franc atlet timnas untuk kategori mobil turut memberikan selamat. Sementara para suporter di lokasi acara bersorak kegirangan. Semua layar TV menampilkan tulisan \'Champion\' untuk Indonesia.\r\n\r\nDengan begitu, Indonesia berhasil menang dua game sekaligus dan menjadi juara dunia FIFAe World Cup 2024 eFootball kategori konsol.', '20241216012214.jpg', 'Indonesia-Juara-Dunia-eFootbaall-FIFAe-World-Cup-2024', '2', '2024-12-16', 'admin2'),
(28, 'Turnamen Esport 2024 Honor Of Kings Championship Bakal Digelar diIndonesia', 'Gelaran perdana turnamen esports Honor of Kings Invitational Midseason di Riyadh, Arab Saudi, yang merupakan bagian dari rangkaian Esports World Cup baru saja selesai. Di turnamen itu, KPL Dream Team dianugerahi titel sebagai juara perdana. \r\n\r\nKPL Dream Team dan LGD Gaming membawa pulang hadiah sebesar 3 juta dollar AS dan oromatis mendapatkan tiket untuk maju di 2024 Honor of Kings Championship yang bakal digelar di Indonesia. \r\n\r\n\"Honor of Kings Invitational Midseason di Esports World Cup adalah sebuah pentas kelas atas dalam kompetisi esports Honor of Kings dengan tim-tim terbaik di seluruh dunia yang berlomba menampilkan talenta mereka di festival esports terbesar yang pernah ada,\" kata Senior Director Level Infinite Global Esports Center James\r\n\r\nPerlu diketahui, 2024 Honor of Kings Championship yang akan digelar pada Oktober 2024 merupakan puncak dari seri Honor of Kings Global Invitational. Pentas kejuaraan ini akan menghadirkan 16 tim terbaik secara global, yang mana akan dikualifikasi dari Indonesia, Filipina, Myanmar, Turki, Brazil, Timur Tengah dan Afrika Utara, Amerika, Eropa, Pasifik, dan lainnya, demi memperebutkan prize pool sejumlah 1 juta dollar AS. 2024 Honor of Kings Championship akan menjadi gelaran terakhir dari sirkuit seri Honor of Kings Global Invitational 2024.\r\n\r\nSeri ini, yang diumumkan pada Februari 2024 bersamaan dengan komitmen Level Infinite yang mengeluarkan 15 juta dollar as untuk perkembangan ekosistem esports Honor of Kings, mempunyai rangkaian termasuk turnamen S1 di Turki, S2 di Malaysia, Midseason di Riyadh, dan selanjutnya Championship di Indonesia. Bersamaan dengan turnamen tersebut, Honor of Kings juga meluncurkan seri terbuka, yang menjadi jalan menuju pro scene di esports Honor of Kings, dan sejumlah dukungan lainnya pada 2024.\r\n', '20241216014741.jpg', 'Turnamen-Esport-2024-Honor-Of-Kings-Championship-Bakal-Digelar-diIndonesia', '5', '2024-12-16', 'admin2'),
(29, 'Tim EVOS Mewakili Timnas Indonesia diKompetisi Esports Internasional 2024', 'Seluruh pemain alias roster dari salah satu tim profesional Mobile Legends (MLBB) Indonesia, yaitu Evos Glory, mewakili timnas Indonesia di kompetisi e-sports internasional Global Esports Games (GEG) 2024.\r\n  \r\nDi GEG 2024, timnas Indonesia digawangi oleh para pemain Evos Glory, yaitu Saykots (EXP Lane), Van (Jungler), Claw Kun (Mid Lane), Branz (Gold Lane), DreamS (Roamer), dan Panser (Gold Lane cadangan). \r\n\r\nHead Coach Evos Glory, Steven Andreas Gunawan, atau biasa dijuluki \"Age\", mengatakan terpilihnya roster Evos Glory untuk mewakili timnas Indonesia di Global Esports Games 2024 adalah arahan dari Pengurus Besar Esports Seluruh Indonesia (PBESI).\r\n\r\nMenurut Age, PBESI awalnya menunjuk juara MLBB Professional League Season 13 (MPL S13), yaitu Fnatic Onic untuk mewakili Indonesia di GEG 2024. Tetapi, tim tersebut menolak untuk mengikuti turnamen ini. \r\n\r\n\"Fnatic Onic meminta untuk skip GEG 2024, jadi slot turnamen ini diberikan ke Evos Glory yang menjadi runner-up MPL S13,\" kata Age dalam sebuah video berjudul \"A9E\" di kanal YouTube-nya.\r\n\r\nAge tak mengumbar apa alasan penolakan Fnatic Onic tersebut. Ada kemungkinan jadwal latihan dan main Fnatic Onic untuk kompetisi International Esports Federation World Esports Championship (IESF WEC) 2024, menjadi alasan mengapa mereka menolak GEG 2024. \r\n\r\nSeperti diketahui, seluruh roster Fnatic Onic memang akan mewakili timnas Indonesia di IESF WEC 2024 yang akan digelar di Riyadh, Arab Saudi pada November mendatang. \r\n\r\nSementara itu, kompetisi GEG 2024 dimulai pada Oktober ini dan akan berlangsung selama beberapa bulan ke depan hingga Desember mendatang, sehingga ada potensi bentrok dengan jadwal latihan dan main dengan kompetisi GEG 2024.', '20241216022651.jpg', 'Tim-EVOS-Mewakili-Timnas-Indonesia-diKompetisi-Esports-Internasional-2024', '2', '2024-12-16', 'admin2'),
(30, 'Grand Final M6 ONIC PH Berhasil Merebut Juara Mobile Legend M6 di 2024', 'Grand Final M6 World Championship mempertemukan Fnatic ONIC PH dengan Team Liquid ID dalam format Best of 7 dan tim asal Filipina berhasil memenangkan pertandingan dengan skor akhir 4-1.\r\n\r\nBukan hanya menyajikan duel seru, pertemuan kedua tim mencatatkan fakta unik dengan lima game cepat yang semuanya selesai di bawah 15 menit yang menggambarkan menampilkan intensitas permainan tinggi kedua tim.\r\n\r\nSetelah Fnatic ONIC PH juara M6 World Champions usai mengalahkan Team Liquid ID dengan skor 4-1, sang gold laner Kelra sukses memecahkan rekor luar biasa di esports MLBB dunia. Pasalnya, tak hanya gelar juara dunia yang berhasil ia dapatkan dari ajang ini.\r\n\r\nGelaran M6 menjadi panggung pembuktian bagi Kelra bersama Fnatic ONIC PH. Sebagai juara MPL PH S14, tanggung jawab besar ada dipundak mereka untuk melanjutkan dominasi tim-tim Filipina di gelaran M-Series.\r\n\r\nDi sepanjang turnamen, ONIC PH sukses menunjukkan diri sebagai tim terbaik di dunia saat ini. Mereka tidak pernah sekalipun merasakan kekalahan di setiap match yang mereka mainkan, hingga sukses melangkah ke grand final dan mampu menundukkan Liquid ID untuk kali ketiga di sepanjang M6.\r\n\r\nKeberhasilan Fnatic ONIC PH ini pun membuat wakil-wakil MPL PH berhasil melanjutkan dominasi di lima edisi M-Series terakhir dengan selalu menjadi juara. Namun gelar ini juga sangat spesial bagi Kelra di sepanjang kariernya.\r\n\r\nSetelah antarkan ONIC PH juara M6, berarti lengkap sudah koleksi gelar Kelra di scene kompetitif MLBB. Kini dirinya sudah merasakan semua gelar juara turnamen resmi dari Moonton, yaitu MPL PH, MSC, dan M-Series.\r\n\r\nGelar pertama yang berhasil didapat Kelra di turnamen resmi Moonton adalah MSC 2021. Saat itu, sang player yang masih membela Execration sukses menghentikan dominasi Blacklist International untuk merasakan gelar internasional pertamanya usai menjuarai MPL PH S7.\r\n\r\nNamun setelah itu, terutama setelah Execration bubar dan berubah menjadi Smart Omega untuk mengikuti MPL PH S8 yang mulai berubah menjadi franchise, praktis tidak ada lagi gelar juara yang berhasil didapat Kelra. Pencapaian terbaiknya adalah runner-up MPL PH S9 dan posisi ke-3 di dua ajang berbeda, yaitu MPL PH S8 dan MSC 2022.\r\n\r\nJelang MPL PH S13, Kelra memutuskan untuk bergabung Fnatic ONIC PH. Setelah sempat diunggulkan untuk menjadi juara di musim tersebut tapi gagal terwujud, tim melakukan beberapa perubahan dan sukses menjelma menjadi tim yang menakutkan di MPL PH S14.\r\n\r\n Alhasil, Fnatic ONIC PH pun berhasil meraih gelar pertama di MPL PH pada musim tersebut, dan mampu mereka lanjutkan di M6, bahkan dengan julukan unbeaten championship.\r\n\r\nHebatnya lagi, dari tiga gelar yang didapat Kelra, baik di MSC 2021, MPL PH S14, dan M6, Kelra selalu berhasil menyandang gelar sebagai Finals MVP alias pemain terbaik di laga grand final. Hal ini tentu saja melengkapi pencapaian besarnya tersebut.', '20241216032954.jpg', 'Grand-Final-M6-ONIC-PH-Berhasil-Merebut-Juara-Mobile-Legend-M6-di-2024', '6', '2024-12-16', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(5, 'admin', 'leanno', '202cb962ac59075b964b07152d234b70', 'Admin'),
(7, 'admin2', 'leanno23', 'f516dfb84b9051ed85b89cdc3a8ab7f5', 'Admin'),
(8, 'leon23', 'leanno', '6211080fa89981f66b1a0c9d55c61d0f', 'Kontributor'),
(11, 'leonz2', 'leannoatha', 'd8da51620f8a4f3c3db01e1bcc36c2b7', 'Kontributor'),
(12, 'leon9', 'leannoathaya', '81b073de9370ea873f548e31b8adc081', 'Kontributor'),
(13, 'leonz10', 'leanno239', '99c5e07b4d5de9d18c350cdf64c5aa3d', ''),
(14, 'leo2309', 'leanno03', '9fe8593a8a330607d76796b35c64c600', 'Kontributor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
