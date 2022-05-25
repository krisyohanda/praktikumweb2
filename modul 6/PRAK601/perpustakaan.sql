CREATE DATABASE perpustakaan;

USE perpustakaan;

CREATE TABLE member (
    id_member INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_member VARCHAR(250) NOT NULL,
    nomor_member VARCHAR(15) NOT NULL,
    alamat TEXT(500) NOT NULL,
    tgl_mendaftar DATETIME NOT NULL,
    tgl_terakhir_bayar DATE NOT NULL  
);

CREATE TABLE peminjaman(
    id_peminjaman INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tgl_pinjam DATE NOT NULL,
    tgl_kembali DATE NOT NULL
);

CREATE TABLE buku(
    id_buku INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    judul_buku VARCHAR(500) NOT NULL,
    penulis VARCHAR(500) NOT NULL,
    penerbit VARCHAR(250) NOT NULL,
    tahun_terbit INT NOT NULL
);

ALTER TABLE member ADD password VARCHAR(255);
ALTER TABLE member MODIFY password VARCHAR(255) NOT NULL;

INSERT INTO member (id_member, nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar, password) VALUES 
(1, 'Shendy Krisyohanda', '0852440093xx', 'New York City West 99', '2022-01-12 12:12:12', '2022-01-12', '$2y$10$N6QZL4Bd6gA.3upJLAn.yO4tTZTav/aAtJbWgbWv5LqJX5HgtMbe.'),
(2, 'Doctor Strange', '989204902xx', 'Universe 661', '2022-05-04 00:00:00', '2022-05-04', '$2y$10$N6QZL4Bd6gA.3upJLAn.yO4tTZTav/aAtJbWgbWv5LqJX5HgtMbe.'),
(3, 'Scarlet Witch', '989348194xx', 'Gotham City', '2022-03-12 18:13:15', '2022-04-20', '$2y$10$2AKKZBUgtZJQbjZZrCBw.u1o8SoTF2cJehJfQiDYbM7oWfKYDwRri'),
(4, 'admin', 'admin', 'admin', '2022-03-12 18:13:15', '2022-05-20', '$2y$10$34cek4AzDLvMLK1AVMRqwOdNsVlC83JARaslDtXk/M7v/bzYvrk0K');

INSERT INTO buku (id_buku, judul_buku, penulis, penerbit, tahun_terbit) VALUES
(1, 'The Subtle Art of Not Giving a Fuck', 'Mark Manson', 'Harper', 2019),
(2, 'Ego is the Enemy: The Fight to Master Our Greatest Opponent', 'Ryan Holiday', 'Profile Books Ltd', 2016),
(3, 'Everything Is F*cked: A Book About Hope', 'Mark Manson', 'HarperCollins', 2019),
(4, 'The Things You Can See Only When You Slow Down: How to Be Calm and Mindful in a Fast-Paced World', 'Haemin Sunim', 'Penguin Books', 2017),
(5, 'Why We Sleep: Unlocking the Power of Sleep and Dreams', 'Matthew Walker, PhD', 'Scribner', 2017);

INSERT INTO peminjaman (id_peminjaman, tgl_pinjam, tgl_kembali) VALUES
(1, '2022-04-12', '2022-05-01');