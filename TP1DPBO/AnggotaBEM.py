from Mahasiswa import Mahasiswa

class AnggotaBEM(Mahasiswa) :
    # Variabel Private
    __jabatan = ""
    __divisi = ""
    __proker = ""
    __jalan = False
    
    
    # Konstruktor
    def __init__(self, nama = '', gender = '', nim = '', jumlahBuku = 0, laptop = '', divisi = "", jabatan = "", proker = False):
        # Mengakses variabel yang terdapat pada ortunya
        super().__init__(nama, gender, nim, jumlahBuku, laptop)
        # ini punya kelas AnggotaBEM
        self.__jabatan = jabatan
        self.__divisi = divisi
        self.__proker = proker

    
    # Getter
    def get_jabatan(self) :
        return self.__jabatan
    def get_divisi(self) :
        return self.__divisi
    
    
    # Setter
    def set_jabatan(self, jabatan):
        self.__jabatan = jabatan
    def set_divisi(self, divisi):
        self.__divisi = divisi
    
    # Method yang bisa dilakukan oleh Anggota BEM
    def merancangProker(self):
        print("Proses merancang Proker")
    # jika ada proker yang berjalan maka dapat melakukan evaluasi
    def menjalankanProker(self):
        if self.__proker :
            print("Proker dijalankan")
            # untuk tanda agar evaluasi dapat berjalan
            self.__jalan = True
        else :
            print("Proker Tidak berjalan")

    def evaluasi(self):
        # jika jalan true maka boleh evaluasi
        if self.__jalan :
            print("Kamu boleh ikut evaluasi")
        else :
            print("Kamu belum menjalankan proker, apa yang mau dieval ?")