#include "Mahasiswa.cpp"
#include <vector>
using namespace std;

int main()
{
    // Disimpan pada vektor
    vector<Mahasiswa> data;
    int tekan = 0;
    // Deklarasi variabel
    string nim, nama, prodi, fakultas;
    //  Ucapan Selamat datang dan menu
    cout << "Selamat Datang di CRUD dadakan\n";
    cout << "=================M E N U===================\n";
    cout << "(1) Tambah Data\n";
    cout << "(2) Edit Data\n";
    cout << "(3) Hapus Data\n";
    cout << "(4) Tampilkan Data\n";
    cout << "===========================================\n\n";

    // mulai program
    do{
        int tanda = 0;
        cout << "Silahkan pilih perintah yang ingin dijalankan : ";
        cin >> tekan;
        if(tekan == 1) {
            // Tambah data
            cout << "Masukkan nim         : ";
            cin >> nim;
            // Pengecekan ada data yang sama atau tidak
            for(Mahasiswa& cek : data) {
                if(cek.getNim() == nim) {
                    tanda = 1;
                } else {
                    tanda = 0;
                }
            }
            // Jika tidak ada yang sama, maka lanjut ke masukkan nama prodi dan fakultas
            if(tanda == 0) {
                cout << "Masukkan nama        : ";
                cin >> nama;
                cout << "Masukkan prodi       : ";
                cin >> prodi;
                cout << "Masukkan fakultas    : ";
                cin >> fakultas;
                // masukkan ke data
                data.push_back(Mahasiswa(nama, nim, prodi, fakultas));
            // Error Handling jika ada nim yang sama
            } else if(tanda == 1) {
                cout << "===================NIM TELAH TERSEDIA=====================\n";
            }
        } else if(tekan == 2) {
            // Edit data
            cout << "Masukkan NIM mahasiswa yang ingin di edit : ";
            cin >> nim;
            // Mengecek ada nim yang sama atau tidak
            for(Mahasiswa& cek : data) {
                if(cek.getNim() == nim) {
                    // Jika ada nim yang sama maka lakukan pengeditan
                    cout << "Masukkan nama baru        : ";
                    cin >> nama;
                    cout << "Masukkan prodi baru       : ";
                    cin >> prodi;
                    cout << "Masukkan fakultas baru    : ";
                    cin >> fakultas;
                    // timpa nilai sebelumnya
                    cek.setNama(nama);
                    cek.setProdi(prodi);
                    cek.setFakultas(fakultas);
                    cout << "Data Berhasil diedit\n";
                    // tanda bahwa telah melakukan pengeditan
                    tanda = 1;
                    break;
                }
            }
            // Jika tidak ada nim yang sama, ini error handlingnya
            if(tanda == 0) {
                cout << "===================NIM TIDAK TERSEDIA=====================\n";
            }
        }
        else if(tekan == 3){
            // Hapus data
            int ciri = 0;
            string nim;
            cout << "Masukkan NIM mahasiswa yang ingin di hapus : ";
            cin >> nim;
            // Mengecek ada nim yang sama atau tidak
            for(Mahasiswa& cek : data){
                if(cek.getNim() == nim){
                    tanda = 1;
                    break;
                }
                ciri++;
            }
            // Jika ada data yang sama, lakukan hapus data
            if(tanda == 1){
                data.erase(data.begin() + ciri);
                cout << "Data Berhasil Dihapus" << endl;
            // Error handling jika tidak ada nim yang sama
            } else {
                cout << "===================NIM TIDAK TERSEDIA=====================" << endl;
            }
        } else if(tekan == 4){
            // Jika datanya kosong, ini error handlingnya
            if(data.size() == 0){
                cout << "Data Kosong!" << endl;
            // Menampilkan outputan
            } else {
                int i = 1;
                for(Mahasiswa& mahasiswa : data){
                    cout << "Mahasiswa ke-" << i << endl;
                    cout << " NIM       : " << mahasiswa.getNim() << endl;
                    cout << " Nama      : " << mahasiswa.getNama() << endl;
                    cout << " Prodi     : " << mahasiswa.getProdi() << endl;
                    cout << " Fakultas  : " << mahasiswa.getFakultas() << endl;
                    i++;
                }
            }
        }
        // Memulai ulang program
        cout << endl;
        cout << "========================================================" << endl;
        cout << "Tekan 1 sampai 4 untuk melanjutkan menjalankan perintah" << endl;
        cout << "Tekan angka selain 1 sampai 4 untuk mengakhiri kode ini" << endl;
        cout << "========================================================" << endl;
        cout << endl;
    } while ((tekan >=1) && (tekan <= 4));
    
    // Akhir dari perjalanan ini
    cout<< "Terima kasih telah mencoba kode ini" <<endl;
    return 0;
}



