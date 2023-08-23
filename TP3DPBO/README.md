# TP3DPBO2023C2
## Identitas
- Nama  : Muhammad Azka Atqiya
- NIM   : 2100812
- Kelas : C2 2021
## Janji
Saya [Muhammad Azka Atqiya] dengan nim 2100812 mengerjakan TP 3 DPBO dalam mata kuliah [Desain Pemrograman Berorientasi Objek] untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.
## Requirement Soal
Buatlah program menggunakan bahasa pemrograman PHP dengan
spesifikasi sebagai berikut:
● Program bebas, kecuali program Ormawa
● Menggunakan minimal 3 buah tabel
● Terdapat proses Create, Read, Update, dan Delete data
● Memiliki fungsi pencarian dan pengurutan data (kata kunci bebas)
● Menggunakan template/skin form tambah data dan ubah data yang sama
● 1 tabel pada database ditampilkan dalam bentuk bukan tabel, 2 tabel sisanya
ditampilkan dalam bentuk tabel (seperti contoh saat praktikum)
● Menggunakan template/skin tabel yang sama untuk menampilkan tabel
## Desain Program
![image](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/e70d73d6-352e-4383-96af-3d2e3c4ce1ae)

## Alur Program
Halaman Anggota :
  1. Pada halaman awal akan ditampilkan halaman index (list anggota)
  2. jika ingin melihat detail, tinggal klik bagian card pada data yang ingin diinginkan
    a. tekan edit data jika ingin melakukan edit
      1) Isi dengan data baru kemmudian tekan tambah data untuk mengupadate
    b. tekan delete jika ingin menghapus
  3. Dapat melakukan searching berdasarkan nama, bisa penggalannya saja atau full namanya
  4. Tekan button filter descending untuk menampilkan data berdasarkan nama secara descending
  5. Tekan tambah data pada navbar jika ingin menambah data anggota baru
 
Halaman Jabatan
  1. Tekan Daftar Jabatan pada navbar untuk mengakses halaman jabatan
  2. Ditampilkan semua data jabatan
  3. Dapat melakukan searching berdasarkan nama, bisa penggalannya saja atau full namanya
  4. Tekan button filter descending untuk menampilkan data berdasarkan nama secara descending
  5. Langsung isi form pada form yang ada di samping untuk menambah data baru
  6. Tekan icon edit pada aksi untuk melakukan update, ketika update ditekan maka akan ditampilkan data yang ditekan pada form yang telah tersedia, jika ingin edit maka tinggal ubah form tersebut dengan isian baru
  7. Jika ingin menghapus, langsung tekan icon tong sampah pada colum yg telah tersedia, jika ditekan maka akan langsung terhapus apabila tidak ada foreign key dengan huruf tabel anggota, jika ada, maka akan error
 
Halaman Partai:
  1. Tekan Daftar Partai pada navbar untuk mengakses halaman jabatan
  2. Ditampilkan semua data jabatan
  3. Dapat melakukan searching berdasarkan nama, bisa penggalannya saja atau full namanya
  4. Tekan button filter descending untuk menampilkan data berdasarkan nama secara descending
  5. Langsung isi form pada form yang ada di samping untuk menambah data baru
  6. Tekan icon edit pada aksi untuk melakukan update, ketika update ditekan maka akan ditampilkan data yang ditekan pada form yang telah tersedia, jika ingin edit maka tinggal ubah form tersebut dengan isian baru
  7. Jika ingin menghapus, langsung tekan icon tong sampah pada colum yg telah tersedia, jika ditekan maka akan langsung terhapus apabila tidak ada foreign key dengan huruf tabel anggota, jika ada, maka akan error


## Dokumentasi
1. Search Anggota
![Animation](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/648ddc1b-cad6-40e5-8bd0-bc45e9476f99)
2. Filter Anggota
![Animation](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/ad320de6-c0c7-4fdb-9c65-25aa7f51b583)
3. Add Anggota
![add anggota](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/63ccd693-8e29-4f0c-8251-224d2d4e77f4)
4. Tampil Detail Anggota
![detail anggota](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/9ad7a628-513d-4035-a801-aa4d170c39c0)
5. Edit Anggota
![edit anggota](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/54bcf9a5-b900-45ba-ae6b-a44f884943a8)
6. Delete Anggota
![delete anggota](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/aa01cdde-a3c1-4c20-afbe-ab16c7eb66aa)
7. Search Jabatan
![search jabatan](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/3bbb6e90-4068-4289-b30d-12da29e06dbf)
8. Filter Jabatan
![filter jabatan](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/d2c7faeb-52ea-40ec-986c-1ebc3fe29d97)
9. Add Jabatan
![add jabatan](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/0baea858-8977-46a1-a6a5-15322cd161a3)
10. Edit jabatan
![edit jabatan](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/211583b1-fe8c-4f57-97d6-a7c9ed4f8969)
11. Delete jabatan
![delete jabatan](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/dd775712-dbbe-4e97-b359-50f5f7bb09b7)
12. FIlter Partai
![filter partai](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/d92ab4dd-e56b-4b0b-a2b0-ea3bf28efce5)
13. Search Partai
![search partai](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/87fa09bb-1417-453d-be40-13ab9251db82)
14. Add Partai
![add partai](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/f4a926fa-56f1-432f-85d2-6dcf92727233)
15. Edit Partai
![edit partai](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/f13b2eba-43e2-4be8-a82c-7ba2b23c8824)
16. Delete Partai
![delete partai](https://github.com/azkanaon/TP3DPBO2023C2/assets/90915678/a1ce84fb-b745-4adb-bf80-6c660748952f)











