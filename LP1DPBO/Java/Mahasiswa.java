public class Mahasiswa {
    // Membuat private
    private String nama = "";
    private String nim = "";
    private String prodi = "";
    private String fakultas = "";

    // Membuat konstruktor
    public Mahasiswa(String nama, String nim, String prodi, String fakultas) {
        this.nama = nama;
        this.nim = nim;
        this.prodi = prodi;
        this.fakultas = fakultas;
    }

    // Getter dan Setter
    // Get nama
    public String getNama() {
        return this.nama;
    }

    // Set nama
    public void setNama(String nama) {
        this.nama = nama;
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
