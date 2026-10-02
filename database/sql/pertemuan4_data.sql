USE praktikum_web_2401020044;

-- 1. Insert 2 Program Studi
INSERT INTO program_studi (nama_prodi) VALUES
    ('Teknik Informatika'),
    ('Sistem Informasi');

-- 2. Insert 4 Mahasiswa (Termasuk 1 data sementara)
INSERT INTO mahasiswa (nim, nama, email, usia, program_studi_id) VALUES
    ('2401020001', 'Rian Hidayat', 'rian@example.com', 20, 1),
    ('2401020002', 'Dina Lestari', 'dina@example.com', 19, 1),
    ('2401020003', 'Fajar Pratama', 'fajar@example.com', 21, 2),
    ('2401020099', 'Data Sementara', 'sementara@example.com', 18, 2);

-- 3. Update Email
UPDATE mahasiswa 
SET email = 'rian.hidayat@example.com' 
WHERE nim = '2401020001';

-- 4. Delete Data Sementara
DELETE FROM mahasiswa 
WHERE nim = '2401020099';

-- 5. Select JOIN (Menampilkan 3 data akhir)
SELECT m.nim, m.nama, m.email, m.usia, p.nama_prodi
FROM mahasiswa AS m
JOIN program_studi AS p ON p.id = m.program_studi_id
ORDER BY m.nim;