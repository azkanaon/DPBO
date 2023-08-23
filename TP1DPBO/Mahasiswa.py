# import parent nya
from Human import Human

class Mahasiswa(Human) :
    # Variabel Protected
    __jumlahBuku = 0
    __nim = ""
    __laptop = ""
    __nilai = 0
    
    # Konstruktor
    def __init__(self, nama = '', gender = '', nim="", jumlahBuku = 0, laptop = ""):
        # Mengakses variabel yang terdapat pada ortunya
        super().__init__(nama, gender)
        # ini punya kelas Mahasiswa
        self.__nim = nim
        self.__jumlahBuku = jumlahBuku
        self.__laptop = laptop
    
    # Getter
    def get_nim(self) :
        return self.__nim
    def get_jumlahBuku(self) :
        return self.__jumlahBuku 
    def get_laptop(self) :
        return self.__laptop
    def get_nilai(self) :
        return self.__nilai
    
    # Setter
    def set_nim(self, nim):
        self.__nim = nim
    def set_jumlahbuku(self, jumlahBuku):
        self.__jumlahBuku = jumlahBuku
    def set_laptop(self, laptop):
        self.__laptop = laptop
    def set_nilai(self, nilai):
        self.__nilai = nilai
    
    
    