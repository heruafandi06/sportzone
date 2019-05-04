-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jun 2016 pada 07.37
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bola`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'heru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `liga` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `headline` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `liga`, `kategori`, `tanggal`, `headline`) VALUES
('b01', 'Surabaya United Santai Tanggapi Isu Kick Off ISC Molor', '<b>Bola.net</b> - Dibandingkan dengan tim-tim lain, <b>Surabaya United</b> terbilang santai menanggapi wacana mundurnya kick off Indonesia Soccer Championship (ISC). Meski demikian, mereka sangat berharap agar kompetisi benar-benar bergulir kembali.\r\n<br><br>\r\nPelatih Surabaya United, Ibnu Grahan ketika dihubungi Bola.net, Jumat (8/4) siang mengatakan, dirinya tak terlalu pusing mendengar kabar tersebut. "Berdasarkan rencana pertandingan, tanggal 24 April besok kami main lawan Mitra Kukar," kata Ibnu.\r\n<br><br>\r\nSebelumnya, kick-off ISC 2016 rencananya bakal digelar pada 16 April mendatang. Namun, santer diberitakan jika pembukaan kompetisi buatan PT Gelora Trisula Semesta (GTS) tersebut bakal diundur jadi tanggal 29 April.\r\n<br><br>\r\n"Sampai dengan saat ini kami belum mendapat pemberitahuan dari penyelenggara tentang pergantian jadwal. Jadi kami tetap fokus menghadapi ISC," imbuh mantan pelatih Persebaya 1927 ini.\r\n<br><br>\r\nIbnu juga tak memandang sebuah keuntungan atau rugi jika kick off kompetisi benar-benar mundur. "Tidak ada untung ruginya. Yang akan membuat gembira adalah kalau ISC benar-benar diputar," tutup Ibnu. <b>(faw/dzi)</b>', 'Indonesia', 'Indonesia', '2016-05-22 08:29:00', 0),
('b02', 'Pavon Minta Varane Terus Sabar di Real Madrid', '<b>Bola.net</b> - Mantan bek <b>Real Madrid, Francisco Pavon,</b> mengharap <b>Raphael Varane</b> untuk terus bertahan di klub.\n<br><br>\nPavon sempat bermain bersama dengan Zinedine Zidane, yang kini menjadi manajer klub, ketika masih melanjutkan karirnya sebagai pemain di Santiago Bernabeu.\n<br><br>\n"Musim ini berjalan amat sulit untuk seluruh skuat dan Varane adalah salah satu sosok yang menggambarkan tim. Real Madrid amat tidak konsisten, namun saya kira ia bakal menjadi sosok yang mirip seperti Sergio Ramos, ia bakal menjadi masa depan klub selama 10 tahun ke depan," tutur Pavon pada So Foot.\n<br><br>\n"Ketika ia berada dalam kondisi fit, tidak diragukan lagi ia amat pantas menjadi starter."\n<br><br>\n"Jika memang saya harus memberikan nasihat padanya, maka itu adalah agar ia terus sabar dan menunggu kesempatan."\n<br><br>\nMadrid akan bermain melawan Eibar di La Liga akhir pekan ini. <b>(sof/rer)</b>', 'Spanyol', 'Internasional', '2016-05-22 08:59:00', 0),
('b03', 'Ibu James Tak Jamin Anaknya Bertahan di Madrid', '<b>Bola.net</b> - <b>Ibu James Rodriguez</b> mengaku tidak bisa menjamin anaknya bakal terus bertahan di <b>Real Madrid.</b>\n<br><br>\nPilar Rubio mengakui bahwa ia tidak akan mengambil keputusan terlebih dahulu mengenai apakah James harus bertahan atau pergi dari klub.\n<br><br>\n"Terkait hal tersebut, saya tidak ingin mengambil sikap apapun. Ia selalu mampu memutuskan transfer dengan pemikirannya sendiri. Itu adalah keputusan yang bakal dibuat oleh Florentino Perez, sang agen, dan juga dirinya sendiri," tutur Pilar menurut Tribal Football.\n<br><br>\n"Hal yang terpenting adalah bagi dirinya untuk menjadi diri sendiri, dan tidak peduli apapun yang terjadi pada skuat, seragam yang ia kenakan, atau sepatu yang ia pakai," pungkasnya.\n<br><br>\nJames tidak ikut bermain ketika Real menelan kekalahan dari Wolfsburg di Liga Champions, hingga lima menit menjelang laga berakhir di Volkswagen Arena. <b>(tri/rer)</b>', 'Spanyol', 'Internasional', '2016-05-22 09:22:00', 0),
('b04', 'ISC Diundur, Adam Alis Sedih', '<b>Bola.net</b> - <b>Gelandang Barito Putera, Adam Alis</b> angkat bicara terkait kabar diundurnya kick-off Indonesia Soccer Championship (ISC). Pesepakbola asal Jakarta itu menilai kabar tersebut membuatnya merasa sedih.\n<br><br>\n"Duh kalau buat saya bukan cuma kesel, tapi juga sedih," ujar Adam saat dihubungi Bola.net, Jumat (8/4).\n<br><br>\nKekecewaan Adam bukan tanpa alasan. Sebab, mantan pemain Tim Nasional (Timnas) U23 Indonesia itu sudah sangat rindu berlaga di kompetisi sepakbola tanah air.\n<br><br>\n"Pastinya sebagai pemain saya berharap ISC cepat bergulir karena sudah terlalu lama kami menunggu," ungkap Adam.\n<br><br>\nISC sendiri sebelumnya direncanakan bergulir pada 16 April mendatang. Namun, hingga saat ini belum ada kepastian kapan ISC akan dihelat sejak kabar pengunduran jadwal pembukaan tersebut beredar.\n<br><br>\n"Dengan tidak adanya kepastian sama saja pemain di php-in (pemberi harapan palsu)," pungkas Adam. <b>(fit/asa)</b>', 'Indonesia', 'Indonesia', '2016-05-31 11:35:00', 0),
('b05', 'Hala Madrid! Ucapan Terima Kasih Kapten Real Madrid Usai Juara', '<b>Bola.net</b> - Kesuksesan <b>Real Madrid</b> meraih trofi Liga Champions disambut penuh sukacita suporternya. Pesta pun digelar di stadion kebanggaan mereka, Santiago Bernabeu.\n<br><br>\nHadir dalam pesta di Bernabeu tersebut seluruh permain Real Madrid dan juga tim pelatih. Hampir semua pemain memberikan sambutan di depan suporter Los Blancos yang memenuhi bernabeu salah satunya Sang Kapten, Sergio Ramos.\n<br></br>\n<i>Kami telah berjuang untuk impian juara Liga Champions dan anda adalah fans yang paling menuntut di dunia karena kami adalah klub terbaik di dunia dan kami harus menikmati trofi ini. Sebagai kapten, ini adalah kehormatan mengenakan ban kapten dengan bergitu banyak tanggung jawab dan mengangkat trofi Liga Champions di tahun pertama saya sebagai kapten adalah mimipi yang jadi kenyataan.<br><br>\nBeberaoa tahun yang lalu tak ada yang berpikir bahwa kami bisa memenangkan Liga Champions dua kali dalam tiga tahun, ini butuh kerja yang sangat keras. Pengorbanan dan upaya akhirnya terbayar setelah tahun yang sulit.</i>', 'Champions', 'Internasional', '2016-05-31 20:52:00', 1),
('b06', 'Giggs Punya Ambisi Jadi Pelatih Terbaik', '<b>Bola.net</b> - <b>Ikon Manchester United, Ryan Giggs</b>, mengaku ia memiliki ambisi besar untuk menjadi pelatih jempolan di masa yang akan datang.\r\n<br><br>\r\nGiggs mengatakan bahwa ia mendalami dunia manajerial dengan sama seriusnya, seperti kala ia masih menjalani masa keemasan sebagai pemain bintang di Premier League.\r\n<br><br>\r\nGiggs mengatakan pada Inside United: "Saya ingin menjadi yang terbaik sebagai pemain dan saya juga ingin menjadi yang terbaik sebagai pelatih."\r\n<br><br>\r\n"Itu artinya saya harus bekerja keras dan melakukan semua yang saya bisa untuk meraih hal tersebut, namun juga sekaligus menikmati semuanya dan menjalani tantangan yang ada."\r\n<br><br>\r\nUnited saat ini tengah menjadi asisten manajer klub, yang diasuh oleh pelatih kepala, Louis van Gaal.\r\n<br><br>\r\nMereka tengah duduk di peringkat lima klasemen sementara liga dan bakal bermain melawan tim yang duduk di urutan dua, Tottenham, di akhir pekan ini. <b>(ins/rer)</b>', 'Inggris', 'Internasional', '2016-06-11 14:07:00', 0),
('b07', 'Rooney Puji Generasi Emas Anyar Inggris', '<b>Bola.net</b> - <b>Kapten Inggris, Wayne Rooney</b>, mengatakan bahwa manajer Roy Hodgson kini punya banyak pemain muda yang tidak kalah menariknya dengan generasi emas di era Sven-Goran Eriksson.\r\n<br><br>\r\nInggris kini punya gelandang muda Dele Alli, Ross Barkley, dan bek John Stones. Selain itu masih ada nama anyar seperti Eric Dier.\r\n<br><br>\r\n"Ini adalah tim yang amat menarik. Saya kira ini adalah skuat Inggris paling menarik yang pernah saya lihat, jika boleh jujur. Ada banyak hal yang menarik, tidak hanya dari fans, namun juga dari para pemain," tutur Rooney menurut laporan BBC Sport.\r\n<br><br>\r\n"Kami tahu bahwa kami harus membangun kembali kekuatan kami. Saya ingat dua tahun lalu ada banyak tekanan mengapa tidak ada banyak pemain muda Inggris yang berkualitas."\r\n<br><br>\r\n"Saya ingat pernah duduk bersama Roy Hodgson dan ia mengatakan: Lihat para pemain yang baru bergabung ini, bagaimana bisa orang-orang berkata seperti itu? Dan sekarang, sepertinya semuanya perlahan mulai terbukti." <b>(bbc/rer)</b>', 'Inggris', 'Internasional', '2016-06-12 05:41:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` varchar(10) NOT NULL,
  `tim1` varchar(50) NOT NULL,
  `tim2` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `liga` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tim1`, `tim2`, `tanggal`, `waktu`, `liga`) VALUES
('j01', 'Real Madrid', 'Barcelona', '2016-06-12', '01:45:00', 'Spanyol'),
('j02', 'Atletico Madrid', 'Valencia', '2016-06-13', '04:00:00', 'Spanyol'),
('j03', 'Manchester United', 'Manchester City', '2016-06-13', '22:00:00', 'Inggris'),
('j04', 'Arsenal', 'Tottenham Hotspur', '2016-06-14', '00:30:00', 'Inggris'),
('j05', 'Leicester City', 'Chelsea', '2016-06-01', '20:30:00', 'Inggris'),
('j06', 'Bayern Munich', 'Borussia Dortmund', '2016-06-15', '02:00:00', 'German');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasmen`
--

CREATE TABLE IF NOT EXISTS `klasmen` (
  `id_klasmen` varchar(10) NOT NULL,
  `klub` varchar(50) NOT NULL,
  `main` int(5) NOT NULL,
  `menang` int(5) NOT NULL,
  `seri` int(5) NOT NULL,
  `kalah` int(5) NOT NULL,
  `gol_kandang` int(5) NOT NULL,
  `gol_tandang` int(5) NOT NULL,
  `selisih_gol` int(5) NOT NULL,
  `poin` int(5) NOT NULL,
  `liga` varchar(35) NOT NULL,
  PRIMARY KEY (`id_klasmen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasmen`
--

INSERT INTO `klasmen` (`id_klasmen`, `klub`, `main`, `menang`, `seri`, `kalah`, `gol_kandang`, `gol_tandang`, `selisih_gol`, `poin`, `liga`) VALUES
('kl01', 'Leicester City', 38, 23, 12, 3, 68, 36, 32, 81, 'Inggris'),
('kl02', 'Arsenal', 38, 20, 11, 7, 65, 36, 29, 71, 'Inggris'),
('kl03', 'Tottenham Hotspur', 38, 19, 13, 6, 69, 35, 34, 70, 'Inggris'),
('kl04', 'Manchester City', 38, 19, 9, 10, 71, 41, 30, 66, 'Inggris'),
('kl05', 'Manchester United', 5, 2, 1, 2, 10, 8, 2, 7, 'Inggris'),
('kl06', 'Shouthampton', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl07', 'West Ham', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl08', 'Liverpool', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl09', 'Stoke City', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl10', 'Chelsea', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl11', 'Everton', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl12', 'Swansea City', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl13', 'Watford', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl14', 'West Brom', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl15', 'Crystal Palace', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl16', 'Bournemouth', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl17', 'Sunderland', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl18', 'Newcastle', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl19', 'Norwich City', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl20', 'Aston Vila', 0, 0, 0, 0, 0, 0, 0, 0, 'Inggris'),
('kl21', 'Barcelona', 0, 0, 0, 0, 0, 0, 0, 0, 'Spanyol');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
