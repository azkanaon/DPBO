from Mahasiswa import Mahasiswa

# buat list
print("Selamat Datang di CRUD dadakan")
print("=================M E N U===================")
print("(1) Tambah Data                           ")
print("(2) Edit Data                             ")
print("(3) Hapus Data                            ")
print("(4) Tampilkan Data                        ")
print("===========================================")
print("")
print("Silahkan tekan nomor antara 1 sampai 4 : ", end='')

data = []
tekan = int(input())
while ((tekan >= 1) & (tekan <= 4)):   
    tanda = 0
    if(tekan == 1) :
        # Tambah data
        print("Masukkan nim         : ", end = "")
        nim = str(input())
        # Pengecekan ada data yang sama atau tidak
        for cek in data :
            if(nim == cek.get_nim()):
                tanda = 1
            else :
                tanda = 0
        # Jika tidak ada yang sama, maka lanjut ke masukkan nama prodi dan fakultas
        if(tanda == 0) : 
            print("Masukkan nama        : ", end = "")
            nama = str(input())
            print("Masukkan prodi       : ", end = "")
            prodi = str(input())
            print("Masukkan fakultas    : ", end = "")
            fakultas = str(input())
            # masukkan ke data
            data.append(Mahasiswa(nama, nim, prodi, fakultas))
        # Error Handling jika ada nim yang sama
        elif(tanda == 1) :
            print("===================NIM TELAH TERSEDIA=====================");
            
    elif(tekan == 2) :
        # Edit data
        print("Masukkan NIM mahasiswa yang ingin di edit : ", end='')
        nimBaru = str(input())
        # Mengecek ada nim yang sama atau tidak
        for cek in data:
            if (nimBaru == cek.get_nim()) :
                # Jika ada nim yang sama maka lakukan pengeditan
                print("Masukkan nama baru        : ", end = "")
                nama = str(input())
                print("Masukkan prodi baru       : ", end = "")
                prodi = str(input())
                print("Masukkan fakultas baru    : ", end = "")
                fakultas = str(input())
                # timpa nilai sebelumnya
                cek.set_nama(nama)
                cek.set_prodi(prodi)
                cek.set_fakultas(fakultas)
                print("Data berhasil diedit")
                # tanda bahwa telah melakukan pengeditan
                tanda = 1
                break
            
        # Jika tidak ada nim yang sama, ini error handlingnya
        if(tanda == 0) :
            print("===================NIM TIDAK TERSEDIA=====================")
            
    elif(tekan == 3) :
        # Hapus data
        ciri = 0
        print("Masukkan NIM mahasiswa yang ingin di hapus : ", end='')
        nimHapus = str(input())
        # Mengecek ada nim yang sama atau tidak
        for cek in data :
            if(nimHapus == cek.get_nim()) :
                tanda = 1
                break
            ciri += 1
        # Jika ada data yang sama, lakukan hapus data
        if(tanda == 1) :
            data.pop(ciri)
            print("Data Berhasil Dihapus")
        # Error handling jika tidak ada nim yang sama
        elif(tanda == 0):
            print("===================NIM TIDAK TERSEDIA=====================");  
            
    elif(tekan == 4) :
        # Jika datanya kosong, ini error handlingnya
        if(len(data) == 0) :
            print("Data kosong!")
        # Menampilkan outputan
        else :
            i = 1
            for mahasiswa in data:
                print("Mahasiswa ke-" + str(i))
                print("  NIM      : " + mahasiswa.get_nim())
                print("  Nama     : " + mahasiswa.get_nama())
                print("  Prodi    : " + mahasiswa.get_prodi())
                print("  Fakultas : " + mahasiswa.get_fakultas())
                i+=1
    
    # Memulai ulang program
    print("")
    print("========================================================")
    print("Tekan 1 sampai 4 untuk melanjutkan menjalankan perintah")
    print("Tekan angka selain 1 sampai 4 untuk mengakhiri kode ini")
    print("========================================================")
    print("Silahkan tekan angka : ", end = '')
    tekan = int(input())
    
# Akhir dari perjalanan ini
print("\nTerima kasih karena telah melihat kode ini")