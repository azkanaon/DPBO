#include <iostream>
#include <string>
using namespace std;

class Human{
    // buat variabelnya dlu
    protected:
        string nik;
        string nama;
        string jenis_kelamin;

    public:
        // konstruktor
        Human(){}
        Human(string nik, string nama, string jenis_kelamin){
            this->nik = nik;
            this->nama = nama;
            this->jenis_kelamin = jenis_kelamin;
        }
        
        //Getter
        string getNama() {
            return nama;
        }
        string getNik() {
            return nik;
        }
        string getJenisKelamin() {
            return jenis_kelamin;
        }
        

        // Setter
        void setNama(string nama) {
            this->nama = nama;
        }
        void setNik(string nik){
            this->nik = nik;
        }
        void setJenisKelamin(string jenis_kelamin) {
            this->jenis_kelamin = jenis_kelamin;
        }

        // Destruktor
        ~Human(){
        }
};