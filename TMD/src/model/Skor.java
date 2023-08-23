
/*
 * Saya Muhammad Azka Atqiya (2100812) mengerjakan Tugas Masa Depan
 * dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk
 * keberkahanNya maka saya tidak melakukan kecurangan seperti 
 * yang telah dispesifikasikan. Aamiin.
 */

package model;

public class Skor {
    private String username;    
    private int score;         
    private int standing;           
    
    public Skor() {
        //
    }
    
    // Setter and Getter
    public void setUsername(String username) {
        this.username = username;
    }
    
    public String getUsername() {
        return this.username;
    }
    
    public void setSkor(int score) {
        this.score = score;
    }
    
    public int getSkor() {
        return this.score;
    }
    
    public void setStanding(int standing) {
        this.standing = standing;
    }
    
    public int getStanding() {
        return this.standing;
    }
}
