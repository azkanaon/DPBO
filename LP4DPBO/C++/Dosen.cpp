using namespace std;

//Mahasiswa adalah child, sivitasAkademik adalah parent
class Dosen : public SivitasAkademik{
    // variabel yang dimiliki kelas ini
    protected:
        string nip;
        string fakultas;
        string pendidikanAkhir;
        string keahlian;

    public:
        //konstruktor
        // Dosen(){}
        // konstruktor sekaligus mengakses variabel parentnya
        Dosen(string nik,string nama, string jenis_kelamin,string asal_universitas, string email_edu, string nip, string fakultas, string pendidikanAkhir, string keahlian) : SivitasAkademik(nama, nik, jenis_kelamin, asal_universitas, email_edu){
            this->nip = nip;
            this->keahlian = keahlian;
            this->fakultas = fakultas;
            this->pendidikanAkhir = pendidikanAkhir;
        }

        // Getter dan setter
        // Getter
        string getNip() {
            return this->nip;
        }
        string getFakultas() {
            return this->fakultas;
        }
        string getKeahlian() {
            return this->keahlian;
        }
        string getPendidikanAkhir() {
            return this->pendidikanAkhir;
        }

        // Setter
        void setNip(string nip) {
            this->nip = nip;
        }
        void setFakultas(string fakultas) {
            this->fakultas = fakultas;
        }
        void setKeahlian(string keahlian) {
            this->keahlian = keahlian;
        }
        void setPendidikanAkhir(string pendidikanAkhir) {
            this->pendidikanAkhir = pendidikanAkhir;
        }

        // Destruktor
        ~Dosen(){}
};