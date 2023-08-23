#include <iostream>
#include <string>
using namespace std;

class Mahasiswa {
    // Membuat private
    private:
        string nama;
        string nim;
        string prodi;
        string fakultas;
    public:
        // Membuat konstruktor
        Mahasiswa(string nama, string nim, string prodi, string fakultas) {
            this->nama = nama;
            this->nim = nim;
            this->prodi = prodi;
            this->fakultas = fakultas;
        }
        // Getter dan Setter
        // Get nama
        string getNama() {
            return nama;
        }
        // Get nim
        string getNim() {
            return nim;
        }
        // Get prodi
        string getProdi() {
            return prodi;
        }
        // Get fakultas
        string getFakultas() {
            return fakultas;
        }
        // Set nama
        void setNama(string nama) {
            this->nama = nama;
        }
        // Set nim
        void setNim(string nim){
            this->nim = nim;
        }
        // Set prodi
        void setProdi(string prodi) {
            this->prodi = prodi;
        }
        // Set fakultas
        void setFakultas(string fakultas) {
            this->fakultas = fakultas;
        }

        // Destruktor
        ~Mahasiswa(){
        }
};