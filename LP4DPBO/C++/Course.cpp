#include <iostream>
#include <string>
using namespace std;

class Course{
    // buat variabelnya dlu
    protected:
        string namaMatkul;

    public:
        // konstruktor
        Course(string namaMatkul){
            this->namaMatkul = namaMatkul;
        }
        
        //Getter
        string getMatkul() {
            return this->namaMatkul;
        }
        
        // Setter
        void setnamaMatkul(string namaMatkul) {
            this->namaMatkul = namaMatkul;
        }
        // Destruktor
        ~Course(){
        }
};