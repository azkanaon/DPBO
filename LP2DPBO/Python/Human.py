class Human:
    # Constructor
    def __init__(self, nik, nama, jenis_kelamin):
        self._nik = nik
        self._nama = nama
        self._jenis_kelamin = jenis_kelamin

    # Getter
    def get_nama(self):
        return self._nama
    def get_nik(self):
        return self._nik
    def get_jenis_kelamin(self):
        return self._jenis_kelamin

    #Setter
    def set_nama(self, nama):
        self._nama = nama
    def set_nik(self, nik):
        self._nik = nik
    def set_jenis_kelamin(self, jenis_kelamin):
        self._jenis_kelamin = jenis_kelamin
