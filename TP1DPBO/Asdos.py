from Mahasiswa import Mahasiswa

class Asdos(Mahasiswa) :
    # Variabel Private
    __dosenPembimbing = ''
    __mataKuliah = ''
    
    # Konstruktor
    def __init__(self, nama = '', gender = '', nim = '', jumlahBuku = 0, laptop = '', dosenPembimbing = '', mataKuliah = ''):
        # Mengakses variabel yang terdapat pada ortunya
        super().__init__(nama, gender, nim, jumlahBuku, laptop)
        # ini punya kelas AnggotaEC
        self.__dosenPembimbing = dosenPembimbing
        self.__mataKuliah = mataKuliah
    
    # Getter
    def get_dosenPembimbing(self) :
        return self.__dosenPembimbing
    def get_mataKuliah(self) :
        return self.__mataKuliah
    
    # Setter
    def set_dosenPembimbing(self, dosenPembimbing):
        self.__dosenPembimbing = dosenPembimbing
    def set_mataKuliah(self, mataKuliah):
        self.__mataKuliah = mataKuliah
    
    # Method yang bisa dilakukan oleh Anggota BEM
    def mengajar(self):
        print("Aku sedang mengajar")
    def memberiTugas(self):
        print("Aku sedang memberi tugas")