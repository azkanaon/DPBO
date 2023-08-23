class Mahasiswa:
    # membuat private
    __nama = ""
    __nim = ""
    __prodi = ""
    __fakultas = ""
    
    # bikin konstruktor
    def __init__(self, nama = "", nim = "", prodi = "", fakultas = ""):
        self.__nama = nama
        self.__nim = nim
        self.__prodi = prodi
        self.__fakultas = fakultas
    
    
    # Getter dan Setter
    # Get nama
    def get_nama(self):
        return self.__nama
    # Set nama
    def set_nama(self, nama):
        self.__nama = nama
    
    # Get nim
    def get_nim(self):
        return self.__nim
    # Set nim
    def set_nim(self, nim):
        self.__nim = nim

    # Get prodi
    def get_prodi(self):
        return self.__prodi
    # Set prodi
    def set_prodi(self, prodi):
        self.__prodi = prodi

    # Get fakultas
    def get_fakultas(self):
        return self.__fakultas
    # Set fakultas
    def set_fakultas(self, fakultas):
        self.__fakultas = fakultas