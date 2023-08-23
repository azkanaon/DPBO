# Import parent
from Human import Human

class SivitasAkademik(Human) :
    # Variabel milik kelas ini
    _asalUniv = ''
    _emailEdu = ''
    
    # Konstruktor
    def __init__(self, nik, nama, jenis_kelamin, asalUniv, emailEdu):
        # Mengakses variabel yang terdapat pada parent nya
        super().__init__(nik, nama, jenis_kelamin)
        # ini milik sendiri
        self._asalUniv = asalUniv
        self._emailEdu = emailEdu
    
    # Getter
    def get_asalUniv(self) :
        return self._asalUniv
    def get_emailEdu(self) :
        return self._emailEdu
    
    # Setter
    def set_asalUniv(self, asalUniv):
        self._asalUniv = asalUniv
    def set_emailEdu(self, emailEdu):
        self._emailEdu = emailEdu