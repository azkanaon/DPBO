#include "Mahasiswa.cpp"
#include <vector>

using namespace std;

int main(int argc, char const *argv[])
{
    // deklarasi variabel
    string nik;
    string nama;
    string gender;
    string nim;
    string prodi;
    string fakultas;
    string asalUniv;
    string email;

    // buat vector untuk menampung nilai masukkan
    vector<Mahasiswa> data;
    
    // Masukkan
    cout << "Silahkan masukkan data diri anda" << endl;
    cout << "NIK        : ";
    cin >> nik;
    cout << "Nama       : ";
    cin >> nama;
    cout << "Gender     : ";
    cin >> gender;
    cout << "NIM        : ";
    cin >> nim;
    cout << "Prodi      : ";
    cin >> prodi;
    cout << "Fakultas   : ";
    cin >> fakultas;
    cout << "Asal Univ  : ";
    cin >> asalUniv;
    cout << "Email      : ";
    cin >> email;
    // masukkan menggunakan method push_back
    data.push_back(Mahasiswa(nik, nama, gender, asalUniv, email, nim, prodi, fakultas));

    // Output
    cout << "\nBerikut adalah data diri yang telah diinputkan" << endl;
    for(Mahasiswa cek : data){
        cout <<"NIK             : " << cek.getNik() << endl;
        cout <<"Nama            : " << cek.getNama() << endl;
        cout <<"Jenis Kelamin   : " << cek.getJenisKelamin() << endl;
        cout <<"NIM             : " << cek.getNim() << endl;
        cout <<"Prodi           : " << cek.getProdi() << endl;
        cout <<"Fakultas        : " << cek.getFakultas() << endl;
        cout <<"Asal Kampus     : " << cek.getAsalUniv() << endl;
        cout <<"Email           : " << cek.getEmailEdu() << endl;
    }
    return 0;
}
