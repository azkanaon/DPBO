#include <iostream>
#include <string>
#include <vector>
using namespace std;

class Prodi {
    private:
        string namaProdi;
        string kode;
        vector<Mahasiswa> mahasiswa;
        vector<Dosen> dosen;
        vector<Course> course;

    public:
        // Konstruktor
        // Penggunaan list disini dikarenakan untuk menyimpan data yang memiliki hubungan composite dengan Prodi
        Prodi(vector<Mahasiswa> mahasiswa = {}, vector<Dosen> dosen = {}, vector<Course> course = {}, string namaProdi = "", string kode = "") {
            this->namaProdi = namaProdi;
            this->kode = kode;
            this->mahasiswa = mahasiswa;
            this->dosen = dosen;
            this->course = course;
        }

        // Getter
        string getNamaProdi(){
            return this->namaProdi;
        }
        string getKode(){
            return this->kode;
        }
        // get mahasiswa untuk menampilkan data semua mahasiswa
        vector<Mahasiswa> get_mahasiswa(){
            // cout <<"    DATA MAHASISWA" <<endl;
            // for(Mahasiswa cek:mahasiswa){
            //     cout << "\t\tNIK              :" << cek.getNik() <<endl;
            //     cout << "\t\tNama Mahasiswa   :" << cek.getNama() <<endl;
            //     cout << "\t\tGender           :" << cek.getJenisKelamin() <<endl;
            //     cout << "\t\tNIM              :" << cek.getNim() <<endl;
            //     cout << "\t\tFakultas         :" << cek.getFakultas()<<endl;
            //     cout << "\t\tAsal Univ        :" << cek.getAsalUniv() <<endl;
            //     cout << "\t\tEmail            :" << cek.getEmailEdu() <<endl;
            // }
            return mahasiswa;
        }
        // get dosen untuk menampilkan data semua dosen
        void get_dosen(){
            cout <<"    DATA DOSEN" <<endl;
            for(Dosen cek:dosen){
                cout << "\t\tNIK                :" << cek.getNik() <<endl;
                cout << "\t\tNama Dosen         :" << cek.getNama() <<endl;
                cout << "\t\tGender             :" << cek.getJenisKelamin() <<endl;
                cout << "\t\tNIP                :" << cek.getNip() <<endl;
                cout << "\t\tFakultas           :" << cek.getFakultas()<<endl;
                cout << "\t\tKeahlian           :" << cek.getKeahlian()<<endl;
                cout << "\t\tPendidikan Akhir   :" << cek.getPendidikanAkhir()<<endl;
                cout << "\t\tAsal Univ          :" << cek.getAsalUniv() <<endl;
                cout << "\t\tEmail              :" << cek.getEmailEdu() <<endl;
            }
        }
        // get course untuk menampilkan data semua course
        void get_course(){
            cout <<"    DATA MATKUL" <<endl;
            for(Course cek:course){
                cout << "\t\tNama Matkul        :" << cek.getMatkul() <<endl;
            }
        }
        
        // Destruktor
        ~Prodi(){}
};

