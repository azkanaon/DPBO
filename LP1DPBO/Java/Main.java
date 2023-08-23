import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        // Scanner untuk string dan integer
        Scanner sc = new Scanner(System.in);
        Scanner sc2 = new Scanner(System.in);
        
        //List
        ArrayList<Mahasiswa> data = new ArrayList<Mahasiswa>();

        int tekan = 0;
        //  Ucapan Selamat datang dan menu
        System.out.println("Selamat Datang di CRUD dadakan");
        System.out.println("=================M E N U===================");
        System.out.println("(1) Tambah Data                           ");
        System.out.println("(2) Edit Data                             ");
        System.out.println("(3) Hapus Data                            ");
        System.out.println("(4) Tampilkan Data                        ");
        System.out.println("===========================================");
        System.out.println("");
        
        // Deklarasi variabel
        String nim;
        String nama;
        String prodi;
        String fakultas;

        // mulai program
        do {
            int tanda = 0;
            System.out.print("Silahkan pilih perintah yang ingin dijalankan : ");
            tekan = sc.nextInt();
            if(tekan == 1){
                // Tambah data
                System.out.print("Masukkan nim         : ");
                nim = sc2.next();
                // Pengecekan ada data yang sama atau tidak
                for(Mahasiswa cek : data){
                    if(cek.getNim().equals(nim)){
                        tanda = 1;
                    }else{
                        tanda = 0;
                    }
                }
                // Jika tidak ada yang sama, maka lanjut ke masukkan nama prodi dan fakultas
                if(tanda == 0){
                    System.out.print("Masukkan nama        : ");
                    nama = sc2.next();
                    System.out.print("Masukkan prodi       : ");
                    prodi = sc2.next();
                    System.out.print("Masukkan fakultas    : ");
                    fakultas = sc2.next();
                    // masukkan ke data
                    data.add(new Mahasiswa(nama, nim, prodi, fakultas));
                // Error Handling jika ada nim yang sama
                }else if( tanda == 1){
                    System.out.println("===================NIM TELAH TERSEDIA=====================");
                }
            }else if(tekan == 2){
                // Edit data
                System.out.print("Masukkan NIM mahasiswa yang ingin di edit : ");
                nim = sc2.next();
                // Mengecek ada nim yang sama atau tidak
                for(Mahasiswa cek : data){
                    if(cek.getNim().equals(nim)){
                        // Jika ada nim yang sama maka lakukan pengeditan
                        System.out.print("Masukkan nama baru        : ");
                        nama = sc2.next();
                        System.out.print("Masukkan prodi baru       : ");
                        prodi = sc2.next();
                        System.out.print("Masukkan fakultas baru    : ");
                        fakultas = sc2.next();
                        // timpa nilai sebelumnya
                        cek.setNama(nama);
                        cek.setProdi(prodi);
                        cek.setFakultas(fakultas);
                        System.out.println("Data Berhasil diedit");
                        // tanda bahwa telah melakukan pengeditan
                        tanda = 1;
                        break;
                    }
                }
                // Jika tidak ada nim yang sama, ini error handlingnya
                if(tanda == 0){
                    System.out.println("===================NIM TIDAK TERSEDIA=====================");
                }

            }else if(tekan == 3){
                // Hapus data
                int ciri = 0;
                System.out.print("Masukkan NIM mahasiswa yang ingin di hapus : ");
                nim = sc2.next();
                // Mengecek ada nim yang sama atau tidak
                for(Mahasiswa cek : data){
                    if(cek.getNim().equals(nim)){
                        tanda = 1;
                        break;
                    }
                    ciri++;
                }
                // Jika ada data yang sama, lakukan hapus data
                if(tanda == 1){
                    data.remove(ciri);
                    System.out.println("Data Berhasil Dihapus");
                // Error handling jika tidak ada nim yang sama
                }else{
                    System.out.println("===================NIM TIDAK TERSEDIA=====================");
                }

            }else if(tekan == 4){
                // Jika datanya kosong, ini error handlingnya
                if(data.size() == 0){
                    System.out.println("Data Kosong!");
                // Menampilkan outputan
                }else{
                    int i = 1;
                    for(Mahasiswa mahasiswa : data){
                        System.out.println("Mahasiswa ke-" + i);
                        System.out.println("  NIM      : " + mahasiswa.getNim());
                        System.out.println("  Nama     : " + mahasiswa.getNama());
                        System.out.println("  Prodi    : " + mahasiswa.getProdi());
                        System.out.println("  Fakultas : " + mahasiswa.getFakultas());
                        i++;
                    }
                }
            }

            // Memulai ulang program
            System.out.println("");
            System.out.println("========================================================");
            System.out.println("Tekan 1 sampai 4 untuk melanjutkan menjalankan perintah");
            System.out.println("Tekan angka selain 1 sampai 4 untuk mengakhiri kode ini");
            System.out.println("========================================================");
            System.out.println("");
        } while ((tekan >= 1) && (tekan <= 4));
        
        // Akhir dari perjalanan ini
        System.out.println("Terima kasih telah mencoba kode ini");

        sc.close();
        sc2.close();
    }
}
        