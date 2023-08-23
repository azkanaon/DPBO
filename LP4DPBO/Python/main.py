from Prodi import Prodi
from Mahasiswa import Mahasiswa
from Dosen import Dosen
from Course import Course

# List
mhs = []
dosen = []
course = []
prodi = []

# Masukkan
jurusan = str(input("Masukkan Nama Jurusan disini : "))
kode = str(input("Masukkan kode jurusan tersebut disini : "))

# Masukkan
print("Masukkan jumlah mahasiswa yang akan diinputkan : ", end="")
jumlahMahasiswa = int(input())

# Masukkan untuk kelas mahasiswa
for i in range(jumlahMahasiswa) :
    print("Silahkan masukkan data mahasiswa")
    nik = str(input("NIK          : "))
    nama = str(input("Nama         : "))
    gender = str(input("Gender       : "))
    nim = str(input("NIM          : "))
    fakultas = str(input("Fakultas     : "))
    asalUniv = str(input("Asal Univ    : "))
    emailEdu = str(input("Email Edu    : "))
    # Masukkan di append ke mhs
    mhs.append(Mahasiswa(nik, nama,gender, asalUniv, emailEdu, nim, fakultas))

print("Masukkan jumlah dosen yang akan diinputkan : ", end="")
jumlahDosen = int(input())
# Masukkan untuk kelas dosen
for i in range(jumlahDosen) :
    print("Silahkan masukkan data dosen")
    nik = str(input("NIK              : "))
    nama = str(input("Nama             : "))
    gender = str(input("Gender           : "))
    nip = str(input("NIP              : "))
    fakultas = str(input("Fakultas         : "))
    pendidikanAkhir = str(input("PendidikanAkhir  : "))
    keahlian = str(input("Keahlian         : "))
    asalUniv = str(input("Asal Univ        : "))
    emailEdu = str(input("Email Edu        : "))
    # Masukkan di append ke dosen
    dosen.append(Dosen(nik, nama, gender, asalUniv, emailEdu, nip, fakultas, pendidikanAkhir, keahlian))

print("Masukkan jumlah Mata kuliah yang akan diinputkan : ", end="")
jumlahMatkul = int(input())
# Masukkan untuk kelas course
for i in range(jumlahMatkul) :
    print("Silahkan masukkan nama mata kuliah")
    namaMatkul = str(input("Nama Matkul          : "))
    # Masukkan di append ke course
    course.append(Course(namaMatkul))

# append ke kelas prodi sebagai kelas yang memiliki relasi diantara kelas lain
prodi.append(Prodi(mhs, dosen, course, jurusan, kode))

# output
print("=========================================================")
print("==================DATA PROGRAM STUDI=====================")
print("=========================================================")
for i in prodi:
    print(f"Nama Jurusan : {i.get_namaProdi()}")
    print(f"Kode Jurusan : {i.get_kode()}")
    i.get_mahasiswa()
    i.get_dosen()
    i.get_course()