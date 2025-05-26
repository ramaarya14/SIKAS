
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE pemasukan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tanggal DATE NOT NULL DEFAULT CURRENT_DATE,
    nominal DECIMAL(15,2) NOT NULL,
    keterangan TEXT NOT NULL
);


CREATE TABLE pengeluaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tanggal DATE NOT NULL DEFAULT CURRENT_DATE,
    nominal DECIMAL(15,2) NOT NULL,
    keterangan TEXT NOT NULL
);
