from SivitasAkademik import SivitasAkademik

# Dosen adalah anak dari sivitas akademik
class Dosen(SivitasAkademik) :
    # Konstruktor
    def __init__(self, nik = "", nama = "", jenis_kelamin = "", asalUniv ="", emailEdu = "", nip = "", fakultas = "", pendidikanAkhir = "", keahlian = ""):
        # Mengambil data ortunya
        super().__init__(nik, nama, jenis_kelamin, asalUniv, emailEdu)
        # Inisiaslisasi untuk dirinya sendiri
        self.__nip = nip
        self.__fakultas = fakultas
        self.__pendidikanAkhir = pendidikanAkhir 
        self.__keahlian = keahlian
    
    # Get
    def get_nip(self):
        return self.__nip
    def get_fakultas(self):
        return self.__fakultas
    def get_pendidikanAkhir(self):
        return self.__pendidikanAkhir
    def get_keahlian(self):
        return self.__keahlian
    
    # Set
    def set_nip(self, nip):
        self.__nip = nip
    def set_fakultas(self, fakultas):
        self.__fakultas = fakultas
    def set_pendidikanAkhir(self, pendidikanAkhir):
        self.__pendidikanAkhir = pendidikanAkhir
    def set_keahlian(self, keahlian):
        self.__keahlian = keahlian