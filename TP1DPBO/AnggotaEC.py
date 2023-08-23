from Mahasiswa import Mahasiswa

class AnggotaEC(Mahasiswa) :
    # Variabel Private
    __jabatan = ""
    
    
    # Konstruktor
    def __init__(self, nama = '', gender = '', nim = '', jumlahBuku = 0, laptop = '', jabatan = ""):
        # Mengakses variabel yang terdapat pada ortunya
        super().__init__(nama, gender, nim, jumlahBuku, laptop)
        # ini punya kelas AnggotaEC
        self.__jabatan = jabatan
    
    # Getter
    def get_jabatan(self) :
        return self.__jabatan
    
    # Setter
    def set_jabatan(self, jabatan):
        self.__jabatan = jabatan
    
    # Method yang bisa dilakukan oleh Anggota BEM
    def belajarEC(self):
        print("Aku belajar bahasa inggris")
    def merancangProkerMasaDepan(self):
        print("Masa depan adalah hal terpenting dalam english club")
    # Method apabila menjabat sebagai ketua maka tidak boleh memilih
    def pemilihan(self) :
        if(self.__jabatan.lower() == "ketua") :
            print("Kamu tidak bolehh ikut memilih")
        else :
            print("Kamu anggota, kamu boleh memilih")