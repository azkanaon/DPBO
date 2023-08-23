

class Prodi :
    # Deklarasi variabel
    __namaProdi = ""
    __kode = ""
    __mahasiswa = []
    __dosen = []
    __course = []
    
    # Konstruktor
    # Penggunaan list disini dikarenakan untuk menyimpan data yang memiliki hubungan composite dengan Prodi    
    def __init__(self, mahasiswa = [], dosen = [], course = [],namaProdi = "", kode = ""):
        self.__namaProdi = namaProdi
        self.__kode = kode
        self.__mahasiswa = mahasiswa
        self.__dosen = dosen
        self.__course = course
    
    # Get
    def get_namaProdi(self):
        return self.__namaProdi
    def get_kode(self):
        return self.__kode
    
    # Get dari hubungan composite, menggunakan loop karena agar dapat mengambil semua variabel yang ada di kelas mahasiswa
    def get_mahasiswa(self):
        print("    DATA MAHASISWA")
        for index, i in enumerate(self.__mahasiswa) :
            print(f"\tMahasiswa ke-{index+1}")
            print("\t\tNIK              :",i.get_nik())
            print("\t\tNama Mahasiswa   :",i.get_nama())
            print("\t\tGender           :",i.get_jenis_kelamin())
            print("\t\tNIM              :",i.get_nim())
            print("\t\tFakultas         :",i.get_fakultas())
            print("\t\tAsal Univ        :", i.get_asalUniv())
            print("\t\tEmail            :", i.get_emailEdu())
    
    # Get dari hubungan composite, menggunakan loop karena agar dapat mengambil semua variabel yang ada di kelas dosen       
    def get_dosen(self):
        print("    DATA DOSEN")
        for index, i in enumerate(self.__dosen) :
            print(f"\tDosen ke-{index+1}")
            print("\t\tNIK              :",i.get_nik())
            print("\t\tNama Dosen       :",i.get_nama())
            print("\t\tGender           :",i.get_jenis_kelamin())
            print("\t\tNIP              :",i.get_nip())
            print("\t\tFakultas         :",i.get_fakultas())
            print("\t\tPendidikan Akhir :",i.get_pendidikanAkhir())
            print("\t\tKeahlian         :",i.get_keahlian())
            print("\t\tAsal Univ        :", i.get_asalUniv())
            print("\t\tEmail            :", i.get_emailEdu())

    # Get dari hubungan composite, menggunakan loop karena agar dapat mengambil semua variabel yang ada di kelas course
    def get_course(self):
        print("    DATA MATKUL")
        for index, i in enumerate(self.__course) :
            print(f"\tCourse ke-{index+1}")
            print("\t\tNama Matkul      :",i.get_namaMatkul())
