from Dosen import Dosen
from Mahasiswa import Mahasiswa
from AnggotaBEM import AnggotaBEM
from AnggotaEC import AnggotaEC
from Asdos import Asdos

# list
mhs = []
anggotaBEM = []
anggotaEC = []
asdos = []
dosen = []

# hardcode kode
mhs.append(Mahasiswa("Resyad", "Laki", "210000", 2, "ASUS TUF"))
asdos.append(Asdos("Mila", "Perempuan", "220000", 3, "ROG", "Bu Rose", "Alpro"))
# true disini adalah tanda bahwa pahri menjalanakan proker, jika tidak menjalankan proker mana tidak dapat evaulasi
anggotaBEM.append(AnggotaBEM("Pahri", "Laki", "230000", 5, "MSI", "SOSPOL", "Staff", True))
anggotaEC.append(AnggotaEC("Getsbi", "Laki", "240000", 1, "HP", "ketua"))
anggotaEC.append(AnggotaEC("Angga", "Laki", "250000", 4, "Legion", "Anggota"))

# semua yang telah input, dimasukkan ke mhs
mhs.extend(anggotaBEM)
mhs.extend(anggotaEC)
mhs.extend(asdos)

# mhs dimasukkan ke dosen untuk dilakukan proses penginputan nilai
dosen.append(Dosen("Bu Rose", "Perempuan", '310000', 7, "Omen", mhs))
# proses input nilai mahasiswa dengan hardcode
for i in dosen:
    i.nilaiMahasiswa([90,80,10,30,20])

# Output
print("DATA Mahasiswa")
for i in mhs:
    print(f"\tNama        : {i.get_nama()}")
    print(f"\tGender      : {i.get_gender()}")
    print(f"\tNIM         : {i.get_nim()}")
    print(f"\tJumlah Buku : {i.get_jumlahBuku()}" )
    print(f"\tLaptop      : {i.get_laptop()}")
    print(f"\tNilai       : {i.get_nilai()}")
    print("")
    
print("DATA Anggota BEM")
for i in anggotaBEM:
    print(f"\tNama        : {i.get_nama()}")
    print(f"\tGender      : {i.get_gender()}")
    print(f"\tNIM         : {i.get_nim()}")
    print(f"\tJumlah Buku : {i.get_jumlahBuku()}" )
    print(f"\tLaptop      : {i.get_laptop()}")
    print(f"\tNilai       : {i.get_nilai()}")
    print(f"\tJabatan     : {i.get_jabatan()}")
    print(f"\tProker      : ", end="")
    i.menjalankanProker()
    print(f"\tEvaluasi    : ", end = "")
    i.evaluasi()


print("\nDATA Anggota EC")
for i in anggotaEC:
    print(f"\tNama        : {i.get_nama()}")
    print(f"\tGender      : {i.get_gender()}")
    print(f"\tNIM         : {i.get_nim()}")
    print(f"\tJumlah Buku : {i.get_jumlahBuku()}" )
    print(f"\tLaptop      : {i.get_laptop()}")
    print(f"\tNilai       : {i.get_nilai()}")
    print(f"\tJabatan     : {i.get_jabatan()}")
    print(f"\tPemilihan   : ", end="")
    i.pemilihan()
    print("")

print("DATA Asdos")
for i in asdos:
    print(f"\tNama        : {i.get_nama()}")
    print(f"\tGender      : {i.get_gender()}")
    print(f"\tNIM         : {i.get_nim()}")
    print(f"\tJumlah Buku : {i.get_jumlahBuku()}" )
    print(f"\tLaptop      : {i.get_laptop()}")
    print(f"\tNilai       : {i.get_nilai()}")
    print(f"\tDosPem      : {i.get_dosenPembimbing()}")
    print(f"\tMatkul      : {i.get_mataKuliah()}",)
    print("")

print("DATA Dosen")
for i in dosen:
    print(f"\tNama          : {i.get_nama()}")
    print(f"\tGender        : {i.get_gender()}")
    print(f"\tNIP           : {i.get_nip()}")
    print(f"\tJumlah Spidol : {i.get_jumlahSpidol()}" )
    print(f"\tLaptop        : {i.get_laptop()}")
    print("")






