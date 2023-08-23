using namespace std;

//Mahasiswa adalah child, sivitasAkademik adalah parent
class Mahasiswa : public SivitasAkademik{
    // variabel yang dimiliki kelas ini
    protected:
        string nim;
        string fakultas;

    public:
        //konstruktor
        // Mahasiswa(){}
        // konstruktor sekaligus mengakses variabel parentnya
        Mahasiswa(string nik,string nama, string jenis_kelamin,string asal_universitas, string email_edu, string nim, string fakultas) : SivitasAkademik(nik, nama, jenis_kelamin, asal_universitas, email_edu){
            this->nim = nim;
            this->fakultas = fakultas;
        }

        // Getter dan setter
        // Getter
        string getNim() {
            return this->nim;
        }
        string getFakultas() {
            return this->fakultas;
        }

        // Setter
        void setNim(string nim) {
            this->nim = nim;
        }
        void setFakultas(string fakultas) {
            this->fakultas = fakultas;
        }

        // Destruktor
        ~Mahasiswa(){}
};