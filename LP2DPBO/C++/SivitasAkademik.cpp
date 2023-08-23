// include parentnya yakni Human
#include "Human.cpp"
using namespace std;

// Sivitas akademik sebagai child, Human sebagai parent
class SivitasAkademik : public Human{
    // buat variabel untuk kelas ini
    protected:
        string asal_universitas;
        string email_edu;

    public:
        // konstruktor
        SivitasAkademik(){}
        // disini dilakukan pengambilan konstruktor dari parent
        SivitasAkademik(string nama, string nik, string jenis_kelamin, string asal_universitas, string email_edu) : Human(nama, nik, jenis_kelamin) {
            this->asal_universitas = asal_universitas;
            this->email_edu = email_edu;
        }

        // Getter dan setter
        // Getter
        string getAsalUniv() {
            return this->asal_universitas;
        }
        string getEmailEdu() {
            return this->email_edu;
        }

        // Setter
        void setAsalUniv(string asal_universitas) {
            this->asal_universitas = asal_universitas;
        }
        void setEmailEdu(string email_edu) {
            this->email_edu = email_edu;
        }
        
        // Destruktor
        ~SivitasAkademik(){}
};