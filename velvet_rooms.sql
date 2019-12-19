-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2019 pada 14.12
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velvet_room`
--
CREATE DATABASE IF NOT EXISTS `velvet_room` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `velvet_room`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `avatar`
--

DROP TABLE IF EXISTS `avatar`;
CREATE TABLE `avatar` (
  `id_avatar` int(11) NOT NULL,
  `filename` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `avatar`
--

INSERT INTO `avatar` (`id_avatar`, `filename`) VALUES
(0, ''),
(0, ''),
(0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion`
--

DROP TABLE IF EXISTS `discussion`;
CREATE TABLE `discussion` (
  `id_discussion` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `discuss_name` varchar(50) NOT NULL,
  `discuss_thread` text NOT NULL,
  `likes` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `discussion`
--

INSERT INTO `discussion` (`id_discussion`, `id_user`, `discuss_name`, `discuss_thread`, `likes`, `link`) VALUES
(1, 4, 'Halo Semua', 'Saya Lapar', 0, ''),
(2, 4, 'Game Baru', 'Yang bagus', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion_comment`
--

DROP TABLE IF EXISTS `discussion_comment`;
CREATE TABLE `discussion_comment` (
  `likes` int(11) NOT NULL,
  `text` text NOT NULL,
  `dis_comment_id` int(11) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `id_dis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `discussion_comment`
--

INSERT INTO `discussion_comment` (`likes`, `text`, `dis_comment_id`, `nickname`, `id_dis`) VALUES
(0, 'Ya makan bang', 1, 'ariesliantono', 1),
(0, 'makan', 2, 'dittoraka', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE `friends` (
  `id_user` int(11) NOT NULL,
  `id_friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `friends`
--

INSERT INTO `friends` (`id_user`, `id_friend`) VALUES
(2, 4),
(4, 2),
(6, 4),
(4, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id_group`, `nama`, `deskripsi`) VALUES
(1, 'Curhatan Para Gamer(CPG)', 'game berisi curhatan kami'),
(2, 'Group asal', 'hai'),
(3, 'dummy1', 'halo'),
(4, 'dummy2', 'halo'),
(5, 'dummy3', 'halo'),
(6, 'dummy4', 'halo'),
(7, 'dummy5', 'halo'),
(8, 'dummy6', 'halo'),
(9, 'dummy7', 'halo'),
(10, 'dummy8', 'halo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_post_comment`
--

DROP TABLE IF EXISTS `group_post_comment`;
CREATE TABLE `group_post_comment` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `nickname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `group_post_comment`
--

INSERT INTO `group_post_comment` (`id_post`, `id_user`, `comments`, `nickname`) VALUES
(1, 2, 'baka', 'NickBaruCie'),
(2, 4, 'apa', 'dittoraka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_penerima` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `id_user`, `id_penerima`, `message`) VALUES
(1, 'sayaraka', 'ariesliantono', 'asd'),
(2, 'sayaraka', 'ariesliantono', 'asd'),
(3, 'sayaraka', 'ariesliantono', 'gak kok'),
(4, 'sayaraka', 'ariesliantono', 'gak kok'),
(5, 'ariesliantono', 'sayaraka', 'woe'),
(6, 'ariesliantono', 'sayaraka', 'woe'),
(7, 'arisliantono', 'sayaraka', 'woe'),
(8, 'arisliantono', 'sayaraka', 'woe'),
(9, 'sayaraka', 'arisliantono', 'ggg'),
(10, 'sayaraka', 'arisliantono', 'ggg'),
(11, 'sayaraka', 'arisliantono', 'halo'),
(12, 'sayaraka', 'arisliantono', 'hai'),
(13, 'ariesliantono', 'sayaraka', 'woe'),
(14, 'sayaraka', 'ariesliantono', 'apa'),
(15, 'sayaraka', 'ariesliantono', 'halo'),
(16, 'sayaraka', 'ariesliantono', 'halo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_comment`
--

DROP TABLE IF EXISTS `post_comment`;
CREATE TABLE `post_comment` (
  `id_commentuser` int(11) NOT NULL,
  `comments` text NOT NULL,
  `likes` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `nickname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post_comment`
--

INSERT INTO `post_comment` (`id_commentuser`, `comments`, `likes`, `id_post`, `nickname`) VALUES
(9, 'Makan apa', 0, 5, 'dittoraka'),
(10, 'kuching', 0, 5, 'NickBaruCie'),
(11, 'wkw', 0, 9, 'NickBaruCie'),
(12, 'okay', 0, 9, 'ariz'),
(13, 'baka', 0, 1, 'NickBaruCie'),
(14, 'gajelas', 0, 8, 'NickBaruCie'),
(15, 'toxic', 0, 8, 'NickBaruCie'),
(16, 'cacad', 0, 17, 'NickBaruCie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_group`
--

DROP TABLE IF EXISTS `post_group`;
CREATE TABLE `post_group` (
  `id_group` int(11) NOT NULL,
  `post` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `id_post` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post_group`
--

INSERT INTO `post_group` (`id_group`, `post`, `link`, `nama_user`, `id_post`, `likes`) VALUES
(2, 'Farrel noob', '', 'sayaraka', 1, 0),
(3, 'Halo', '', 'sayaraka', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_avatar` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nickname` varchar(16) NOT NULL,
  `profil_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_avatar`, `username`, `password`, `email`, `nickname`, `profil_picture`) VALUES
(2, 1, 'ariesliantono', 'titijelek2', 'nowiplaydota71@gmail.com', 'NickBaruCie', ''),
(3, 1, 'benedictoRaka', 'titijelek2', 'aris@gmail.com', 'aris', ''),
(4, 1, 'sayaraka', '123', 'BenedictoRaka@gmail.com', 'dittoraka', ''),
(5, 1, 'arislian', '123', 'newemail@gmail.com', 'kashiki', ''),
(6, 1, 'arisliantono', '123', 'arislia@gmail.com', 'ariz', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_gallery`
--

DROP TABLE IF EXISTS `user_gallery`;
CREATE TABLE `user_gallery` (
  `id_user` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_group`
--

DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_group`
--

INSERT INTO `user_group` (`id_group`, `id_user`) VALUES
(0, 0),
(1, 2),
(2, 4),
(3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_post`
--

DROP TABLE IF EXISTS `user_post`;
CREATE TABLE `user_post` (
  `id_user` int(11) NOT NULL,
  `post` text NOT NULL,
  `likes` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `id_post` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_post`
--

INSERT INTO `user_post` (`id_user`, `post`, `likes`, `link`, `id_post`, `nama_user`, `gambar`) VALUES
(2, 'aw', 0, '', 12, 'NickBaruCie', ''),
(2, '', 0, '', 17, 'NickBaruCie', '1576133148.jpg'),
(2, '', 0, '', 18, 'NickBaruCie', '1576136928.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id_discussion`);

--
-- Indeks untuk tabel `discussion_comment`
--
ALTER TABLE `discussion_comment`
  ADD PRIMARY KEY (`dis_comment_id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indeks untuk tabel `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id_commentuser`);

--
-- Indeks untuk tabel `post_group`
--
ALTER TABLE `post_group`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id_discussion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `discussion_comment`
--
ALTER TABLE `discussion_comment`
  MODIFY `dis_comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id_commentuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `post_group`
--
ALTER TABLE `post_group`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
