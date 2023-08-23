# import parent nya
from Human import Human

class Dosen(Human) :
    # Variabel Protected
    __jumlahSpidol = 0
    __nip = ""
    __laptop = ""
    __mahasiswa = []
    
    # Konstruktor
    def __init__(self, nama = '', gender = '', nip = "", jumlahSpidol = 0, laptop = "", mahasiswa =[]):
        # Mengakses variabel yang terdapat pada ortunya
        super().__init__(nama, gender)
        # ini punya kelas Dosen
        self.__nip = nip
        self.__jumlahSpidol = jumlahSpidol
        self.__laptop = laptop
        self.__mahasiswa = mahasiswa
        
    # Getter
    def get_nip(self) :
        return self.__nip
    def get_jumlahSpidol(self) :
        return self.__jumlahSpidol 
    def get_laptop(self) :
        return self.__laptop

            
    
    # Setter
    def set_nip(self, nip):
        self.__nip = nip
    def set_jumlahSpidol(self, jumlahSpidol):
        self.__jumlahSpidol = jumlahSpidol
    def set_laptop(self, laptop):
        self.__laptop = laptop

    # Method-methood yang dapat dijalankan dosen
    def mengajar(self):
        print(f"Sedang mengajar")
    def memberiTugas(self):
        print(f"Sedang memberi tugas")
    # setiap mahasiswa diberikan nilai dengan asumsi bahwa dosen mengetahui dengan pasti urutan absen mahasiswa
    def nilaiMahasiswa(self, nilai):
        for index, i in enumerate(self.__mahasiswa) :
            i.set_nilai(nilai[index])