/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/*
 * Saya Muhammad Azka Atqiya (2100812) mengerjakan Tugas Masa Depan
 * dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk
 * keberkahanNya maka saya tidak melakukan kecurangan seperti 
 * yang telah dispesifikasikan. Aamiin.
 */

/*
 * ASSET IMAGE:
 * https://img.freepik.com/free-vector/modern-rocket-composition-with-flat-design_23-2147895651.jpg?w=740&t=st=1686887648~exp=1686888248~hmac=ef491a590fa058ed18c0facc2af4b0d4230adf81384f0ebcf7ae395201fa8211
 * https://img.freepik.com/free-vector/astronaut-dabbing-cartoon-vector-icon-illustration-science-technology-icon-concept-isolated-premium-vector-flat-cartoon-style_138676-3360.jpg?w=740&t=st=1686888683~exp=1686889283~hmac=103fa4b7fd78f91dd53cfdf57382cce5690eaacefaedaafae8b76dd7f9728539
 * https://img.freepik.com/free-vector/gradient-galaxy-background_23-2148983655.jpg?w=1060&t=st=1686888713~exp=1686889313~hmac=cd5257ea9bc907a352be6f31c07c313ee81109332cfe87df2ffef531a1ab869f
 * 


 ASSET BGM
 https://www.zedge.net/ringtone/3ee64700-c81d-3989-aa44-6b1ac9e9207d
 */
package model;
import java.sql.Connection;
import java.sql.Statement;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;


/**
 *
 * @author Azka
 */
public class dbConn {
    private String ConAddress = "jdbc:mysql://localhost/db_tmd?user=root&password=";
    private Statement stmt = null;
    private ResultSet rs = null;
    private Connection conn = null;
    
    public dbConn() throws Exception, SQLException {
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            conn = DriverManager.getConnection(ConAddress);
            conn.setTransactionIsolation(conn.TRANSACTION_READ_UNCOMMITTED);
        } catch (SQLException es) {
            throw es;
        }
    }
    
   public void createQuery(String Query) throws Exception, SQLException {
        try {
            stmt = conn.createStatement();
            rs = stmt.executeQuery(Query);
            if(stmt.execute(Query)) {
                rs = stmt.getResultSet();
            }
        } catch (SQLException es) {
            throw es;
        }
    }
    
    public void createUpdate(String Query)throws Exception, SQLException {
        try {
            stmt = conn.createStatement();
            int hasil = stmt.executeUpdate(Query);
        } catch (SQLException es) {
            throw es;
        }
    }
     public ResultSet getResult() throws Exception {
        ResultSet Temp = null;
        try {
            return rs;
        } catch (Exception e) {
            return Temp;
        }
    }
    
    public void closeResult() throws Exception, SQLException {
        if(rs != null) {
            try {
                rs.close();
            }
            catch(SQLException es){
                rs = null;
                throw es;
            }
        }
        if(stmt != null) {
            try {
                stmt.close();
            } catch (SQLException es) {
                stmt = null;
                throw es;
            }
        }
    }
    
    public void closeConnection() throws Exception, SQLException {
        if(conn != null) {
            try {
                conn.close();
            }
            catch(SQLException es){
                conn = null;
            }
        }
    }
}
