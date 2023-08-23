# import parent nya
from SivitasAkademik import SivitasAkademik

class Mahasiswa(SivitasAkademik) :
    # Variabel Protected
    _nim = ''
    _prodi = ''
    _fakultas = ''
    
    # Konstruktor
    def __init__(self, nik = "", nama = "", jenis_kelamin = "", asalUniv = "", emailEdu = "", nim = "", fakultas =""):
        # Mengakses variabel yang terdapat pada ortunya
        super().__init__(nik, nama, jenis_kelamin, asalUniv, emailEdu)
        # ini punya kelas Mahasiswa
        self._nim = nim
        self._fakultas = fakultas
    
    # Getter
    def get_nim(self) :
        return self._nim
    def get_fakultas(self) :
        return self._fakultas
    
    # Setter
    def set_nim(self, nim):
        self._nim = nim
    def set_nim(self, fakultas):
        self._fakultas = fakultas
        
        