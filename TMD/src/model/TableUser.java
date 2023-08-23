/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;
import java.sql.SQLException;


// tabel user merupakan turunan dari dbConnection
public class TableUser extends dbConn{
    //konstruktor
    public TableUser() throws Exception, SQLException{
        // memanggil konstruktor parent
        super();
    }
    // Mengambil semua data di tabel tscore
    public void getData(){
        try{
            String query = "SELECT * from tscore";
            createQuery(query);
        }catch(Exception e){
            System.err.println(e.toString());
        }
    }
    // fungsi untuk mencari username di database
    public Object[] getDataSpesifik(String username){
        // variabel untuk menyimpan isi data dari hasil searching
        Object[] row = new Object[3];
        try{
            // Proses pencarian data
            String query = "SELECT * from tscore where username ='"+username+"'";
            this.createQuery(query);
            //  Jika ditemukan username
            // maka mengambil isi data tersebut
            if(this.getResult().next()){
                
                row[0] = this.getResult().getString(1);
                row[1] = this.getResult().getInt(2);
                row[2] = this.getResult().getInt(3);
            }
        }catch(Exception e){
            System.err.println(e.toString());
        }
        return row;
    }
    // fungsi untuk menginput data 
    public void insertData(String username, int score, int standing){
        try{
            System.out.println(username);
            String query = "INSERT into tscore VALUES('"+ username +"',"+score+","+standing+")";
            createUpdate(query);
        }catch(Exception e){
            System.err.println(e.toString());
        }
    }
    // fungsi update data
    public void updateData(String username, int score, int standing){
        try {
            String query = "UPDATE tscore SET score = " + score + ", standing= "+ standing +" WHERE username = '" + username + "'";
            createUpdate(query);
        } catch (Exception e) {
            System.out.println(e.toString());
        }
    }
    
}
