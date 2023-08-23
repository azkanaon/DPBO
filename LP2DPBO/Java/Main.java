// package Java;
import java.util.Scanner;
import java.util.ArrayList;

// ini kelas kakek
class Human {
    protected String nik;
    protected String nama;
    protected String jenis_kelamin;

    // ini konstruktor
    Human(String nama, String nik, String jenis_kelamin) {
        this.nama = nama;
        this.nik = nik;
        this.jenis_kelamin = jenis_kelamin;
    }

    // Get nama
    public String getNama() {
        return this.nama;
    }

    // Set nama
    public void setNama(String nama) {
        this.nama = nama;
    }

    // Get nik
    public String getNik() {
        return this.nik;
    }

    // Set nik
    public void setNik(String nik) {
        this.nik = nik;
    }

    // Get jenis_kelamin
    public String getJenisKelamin() {
        return this.jenis_kelamin;
    }

    // Set jenis_kelamin
    public void setJenisKelamin(String jenis_kelamin) {
        this.jenis_kelamin = jenis_kelamin;
    }

}

// Ini kelas ortu
class Mahasiswa extends Human {
    protected String nim;
    protected String fakultas;
    protected String prodi;

    // ini konstruktor
    Mahasiswa(String nama, String nik, String jenis_kelamin, String nim, String prodi, String fakultas) {
        // mengambil variabel dari kakek
        super(nama, nik, jenis_kelamin);
        // variabel punya ortu 
        this.nim = nim;
        this.prodi = prodi;
        this.fakultas = fakultas;
    }
    // Get nim
    public String getNim() {
        return this.nim;
    }
    
    // Set nim
    public void setNim(String nim) {
        this.nim = nim;
    }

    // Get prodi
    public String getProdi() {
        return this.prodi;
    }
    
    // Set prodi
    public void setProdi(String prodi) {
        this.prodi = prodi;
    }

    // Get fakultas
    public String getFakultas() {
        return this.fakultas;
    }

    // Set fakultas
    public void setFakultas(String fakultas) {
        this.fakultas = fakultas;
    }
}

// ini Kelas Anak
class SivitasAkademik extends Mahasiswa{
    protected String asal_universitas;
    protected String email_edu;
    
    SivitasAkademik(String nama, String nik, String jenis_kelamin, String nim, String prodi, String fakultas, String asal_univertas, String email_edu) {
        // ini mengambil data dari ortu
        super(nama, nik, jenis_kelamin, nim, prodi, fakultas);
        // variabel punya anak 
        this.asal_universitas = asal_univertas;
        this.email_edu = email_edu;
    }
    
    // Get asal_universitas
    public String getAsalUniv() {
        return this.asal_universitas;
    }

    // Set asal_universitas
    public void setAsalUniv(String asal_universitas) {
        this.asal_universitas = asal_universitas;
    }

    // Get email_edu
    public String getEmailEdu() {
        return this.email_edu;
    }

    // Set email_edu
    public void setEmailEdu(String email_edu) {
        this.email_edu = email_edu;
    }
}


class Main {
    public static void main(String[] args) {
        // list untuk menampung masukkan
        ArrayList<SivitasAkademik> data = new ArrayList<SivitasAkademik>();
        Scanner sc = new Scanner(System.in);
        String nik;
        String nama;
        String gender;
        String nim;
        String prodi;
        String fakultas;
        String asalUniv;
        String email;

        //masukkan
        System.out.print("Nik             : ");
        nik = sc.next();
        System.out.print("Nama            : ");
        nama = sc.next();
        System.out.print("Gender          : ");
        gender = sc.next();
        System.out.print("NIM             : ");
        nim = sc.next();
        System.out.print("Prodi           : ");
        prodi = sc.next();
        System.out.print("Fakultas        : ");
        fakultas = sc.next();
        System.out.print("Asal Univertas  : ");
        asalUniv = sc.next();
        System.out.print("Email Edu       : ");
        email = sc.next();
        // masukkan dimasukkan ke var data
        data.add(new SivitasAkademik(nama, nik, gender, nim, prodi, fakultas, asalUniv, email));

        // output
        for (SivitasAkademik cek : data) {
            System.out.println("Data Mahasiswa");
                System.out.println("  NIK       : " + cek.getNik());
                System.out.println("  Nama      : " + cek.getNama());
                System.out.println("  Gender    : " + cek.getJenisKelamin());
                System.out.println("  NIM       : " + cek.getNim());
                System.out.println("  Prodi     : " + cek.getProdi());
                System.out.println("  Fakultas  : " + cek.getFakultas());
                System.out.println("  AsalUniv  : " + cek.getAsalUniv());
                System.out.println("  Email Edu : " + cek.getEmailEdu());
        }
        sc.close();
    }

    
}