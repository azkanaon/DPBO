# TP1DPBO2023
## Identitas
- Nama  : Muhammad Azka Atqiya
- NIM   : 2100812
- Kelas : C2 2021

## Janji
Saya [Muhammad Azka Atqiya] dengan NIM 2100812 mengerjakan Tugas Praktikum 1 Praktikum DPBO dalam mata kuliah [Desain Pemrograman Berorientasi Objek] untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Desain Program 
![image](https://user-images.githubusercontent.com/90915678/224971864-19d6f7df-ecc0-4e4f-9102-0acef02debce.png)


### Alasan Desain
- Dari cerita yang terdapat pada soal, saya dapatkan beberapaa kelas yang dapat dibuat, yakni Human, Mahasiswa, Dosen, Anggota BEM, Anggota EC, dan Asdos
- Alasan saya mengaitkan Mahasiswa dan dosen sebagai anak dari Human karena sudah sangat jelas bahwa mahasiswa maupun dosen merupakan manusia,
- Mahasiswa memiiki beberapa anak, yakni AnggotaBem, AnggotaEC, dan Asdos, alasan dari muncul anak ini adalah karena beberapa tokoh yang terdapat dalam soal memiliki kegiatan tersebut, sehingga saya asumsikann bahwa orang-orang yang memiliki kegiatan ini adalah anak dari mahasiswa dengan kesibukan berbeda
- Dosen composite dengan mahasiswa, alasannya karena pada soal dikatakan bahwa dosen dapat menginput nilai mahasiswa, sehingga dosen harus memiiki atribut kelas mahasiswa untuk mendapatkan atribut nilai yang terdapat pada kelas mahasiswa
### Penjelasan Kelas
- Class Human 
  - Atribut :
    - nama => nama orang
    - gender => gender
  - Method :
    - Human => Konstruktor
    - get... => Memanggil nilai atribut
    - set... => Assign nilai ke atribut
    - makan => kegiatan yang dapat dilakukan human
    - minum => kegiatan yang dapat dilakukan human
    - tidur => kegiatan yang dapat dilakukan human
- Class Mahasiswa
  - Atribut :
    - nim => nim mahasiswa
    - jumlahBuku => jumlah buku yang dimiliki oleh mahasiswa
    - laptop => merk laptop tokoh pada soal
    - nilai => atribut yang harus diisi oleh dosen
  - Method :
    - Mahasiswa => Konstruktor (disini saya juga memanggil variabel yang ada di parentnya, yang artinya memanggil parentnya si parent juga)
    - get... => Memanggil nilai atribut
    - set... => Assign nilai ke atribut
  
- Class Dosen
  - Atribut :
    - nip => nip dosen
    - jumlahSpidol => jumlah spido yang dimiliki oleh dooosen
    - laptop => merk laptop tokoh pada soal
    - mahasiswa => untuk memberikan nilai pada mahasiswa
  - Method :
    - Dosen => Konstruktor (disini saya juga memanggil variabel yang ada di parentnya, yang artinya memanggil parentnya si parent juga)
    - get... => Memanggil nilai atribut
    - set... => Assign nilai ke atribut
    - mengajar => hal yang dilakukan dosen
    - memberiTugas => hal yang dilakukan dosen
    - memberiNilai => untuk memasukkan nilai mahasiswa
- Class AnggotaBEM
  - Atribut :
    - jabatan => jabatan di organisasi
    - divisi => divisi di organisasi
  - Method :
    - AnggotaBEM => Konstruktor (disini saya juga memanggil variabel yang ada di parentnya, yang artinya memanggil parentnya si parent juga)
    - get... => Memanggil nilai atribut
    - set... => Assign nilai ke atribut
    - merancangProker => hal yang dilakukan anggota BEM
    - melaksanakanProker => hal yang dilakukan anggota BEM
    - menghadiriEvaluasi => sebuah method yang bergantung pada method melaksanakanProker
- Class AnggotaEC
  - Atribut :
    - jabatan => jabatan di organisasi
  - Method :
    - AnggotaEC => Konstruktor (disini saya juga memanggil variabel yang ada di parentnya, yang artinya memanggil parentnya si parent juga)
    - get... => Memanggil nilai atribut
    - set... => Assign nilai ke atribut
    - belajarBahasa => hal yang dilakukan anggota EC
    - merancangProker => hal yang dilakukan anggota EC
    - merancangProkerMasaDepan => hal yang dilakukan anggota EC
    - pemiihan => method yang akan memiliki outputan berbeda tergantung jabatannya
- Class Asdos
  - Atribut :
    - dosenPembimbing => nama dosen pembimbing dari asdos
    - mataKuliah => matkul yang diampu oleh asdos
  - Method :
    - Asdos => Konstruktor (disini saya juga memanggil variabel yang ada di parentnya, yang artinya memanggil parentnya si parent juga)
    - get... => Memanggil nilai atribut
    - set... => Assign nilai ke atribut
    - mengajar => hal yang dilakukan asdos
    - memberiTugas => hal yang dilakukan asdos
    

## Alur Program
1. Semua dihardcode, 
2. print outputnya

## Dokumentasi
hasil akhir
![image](https://user-images.githubusercontent.com/90915678/224971665-a20cfa18-5044-41f9-a38f-580738161613.png)
![image](https://user-images.githubusercontent.com/90915678/224971714-4be749b4-4ece-4e64-b472-55e616357a1b.png)
