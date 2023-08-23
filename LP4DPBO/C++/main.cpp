// #include <bits/stdc++.h>
// #include <vector>
using namespace std;
#include "Human.cpp"
#include "SivitasAkademik.cpp"
#include "Mahasiswa.cpp"
#include "Dosen.cpp"
#include "Course.cpp"
#include "Prodi.cpp"


int main()
{   
    // Vector semua variabel tampungan
    vector<Mahasiswa> mhs;
    vector<Prodi> prodi;
    vector<Dosen> dosen;
    vector<Course> course;

    // masukkan hardcode
    mhs.push_back(Mahasiswa("3273262803030003", "Azka", "Laki", "UPI", "azkaatqiya4@upi.edu", "2100812", "FPMIPA"));
    mhs.push_back(Mahasiswa("3273262803030003", "Azki", "Laki", "UPI", "azkaatqiya4@upi.edu", "2100812", "FPMIPA"));
    dosen.push_back(Dosen("3273262803030003", "Azka", "Laki", "UPI", "azkaatqiya4@upi.edu", "2100812", "FPMIPA", "S2", "Memancing"));
    course.push_back(Course("IlmuPangan"));
    prodi.push_back(Prodi(mhs, dosen, course, "IlmuKomputer", "L1111"));

    // output
    for(Prodi i:prodi){
        cout<<"Nama Prodi : "<<i.getNamaProdi()<<endl;
        cout<<"Kode Prodi : "<<i.getKode()<<endl;
        cout<<"====================================="<<endl;
        for(Mahasiswa x : i.get_mahasiswa()){
            cout << x.getNik() << endl;
        }
        // i.get_mahasiswa();
        i.get_dosen();
        i.get_course();
    }



    return 0;
}
