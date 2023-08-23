// include parentnya
#include "SivitasAkademik.cpp"
using namespace std;

//Mahasiswa adalah child, sivitasAkademik adalah parent
class Mahasiswa : public SivitasAkademik{
    // variabel yang dimiliki kelas ini
    protected:
        string nim;
        string fakultas;
        string prodi;

    public:
        //konstruktor
        Mahasiswa(){}
        // konstruktor sekaligus mengakses variabel parentnya
        Mahasiswa(string nama, string nik, string jenis_kelamin,string asal_universitas, string email_edu, string nim, string prodi, string fakultas) : SivitasAkademik(nama, nik, jenis_kelamin, asal_universitas, email_edu){
            this->nim = nim;
            this->prodi = prodi;
            this->fakultas = fakultas;
        }

        // Getter dan setter
        // Getter
        string getNim() {
            return this->nim;
        }
        string getProdi() {
            return this->prodi;
        }
        string getFakultas() {
            return this->fakultas;
        }

        // Setter
        void setNim(string nim) {
            this->nim = nim;
        }
        void setProdi(string prodi) {
            this->prodi = prodi;
        }
        void setFakultas(string fakultas) {
            this->fakultas = fakultas;
        }

        // Destruktor
        ~Mahasiswa(){}
};