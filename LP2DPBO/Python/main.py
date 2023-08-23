from Mahasiswa import Mahasiswa

# List
data = []

# Masukkan
print("Silahkan masukkan data diri anda")
print("NIK          : ", end='')
nik = str(input())
print("Nama         : ", end='')
nama = str(input())
print("Gender       : ", end='')
gender = str(input())
print("NIM          : ", end='')
nim = str(input())
print("Prodi        : ", end='')
prodi = str(input())
print("Fakultas     : ", end='')
fakultas = str(input())
print("Asal Univ    : ", end='')
asalUniv = str(input())
print("Email Edu    : ", end='')
emailEdu = str(input())
# Masukkan di append ke data
data.append(Mahasiswa(nik, nama, gender,asalUniv, emailEdu, nim,prodi, fakultas))

# Outputan
print("\nBerikut adalah data diri yang telah diinputkan");
for cek in data :
    print("NIK          : " + cek.get_nik())
    print("Nama         : " + cek.get_nama())
    print("Jenis Kelamin: " + cek.get_jenis_kelamin())
    print("NIM          : " + cek.get_nim())
    print("Prodi        : " + cek.get_prodi())
    print("Fakultas     : " + cek.get_fakultas())
    print("Asal Univ    : " + cek.get_asalUniv())
    print("Email Edu    : " + cek.get_emailEdu())