/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */



package viewmodel;

import model.Skor;
import java.util.ArrayList;
import javax.swing.table.DefaultTableModel;
import model.TableUser;


public class TableUserProses {
    private String error; 
    private TableUser table;  
    private ArrayList<Skor> data; 
    
    // Constructor
    public TableUserProses() {
        try {
            // Inisiaslisasi table dan data
            table = new TableUser();
            data = new ArrayList<Skor>();
        } catch(Exception e) {
            error = e.toString();
        }
    }
    
    // Ambil data dari databse kemudian kirim dalam bentuk defaultTableModel agar bisa diakses oleh table pada Menu
    public DefaultTableModel readData() {
        DefaultTableModel dataTbl = null;
        try {
            // Ambil data dari database
            Object[] column = {"Username", "Score", "Standing"};
            dataTbl = new DefaultTableModel(null, column);
            // ambil keseluruhan data ke table
            table.getData();
            while (table.getResult().next()) {
                // Hasil disimpan ke variabel skor
                Skor exp = new Skor();
                exp.setUsername(table.getResult().getString(1));
                exp.setSkor(table.getResult().getInt(2));
                exp.setStanding(table.getResult().getInt(3));
                
                Object[] row = new Object[3];
                // variabel row menyimpan nilai yang sama kemudian nanti dimasukkan ke dataTable
                row[0] = table.getResult().getString(1);
                row[1] = exp.getSkor();
                row[2] = exp.getStanding();
                
                // Add Data to List
                dataTbl.addRow(row);
                data.add(exp);
            }
            // Close
            table.closeResult();

            // Close database
            table.closeConnection();
        } catch(Exception e) {
            error = e.toString();
        }
        return dataTbl;
    }

    // Cek apakah data username ada di database atau tidak
    public boolean isDataExist(String username) {
        boolean result = false;
        try {
            table.getData();
            while (table.getResult().next()) {
                if (table.getResult().getString(1).equals(username)) {
                    result = true;
                    break;
                }
            }
        } catch (Exception e) {
            error = e.toString();
        }

        return result;
    }

    // Ambil data dengan username tertentu
    public void getData(String username) {
        try {
            table.getDataSpesifik(username);
            Skor exp = new Skor();
            exp.setUsername(table.getResult().getString(1));
            exp.setSkor(table.getResult().getInt(2));
            exp.setStanding(table.getResult().getInt(3));
            // add ke variabel data
            data.add(exp);
            // close database
            table.closeResult();
            table.closeConnection();
        } catch (Exception e) {
            error = e.toString();
        }
    }

    // Store Data
    public void storeData(String username, int skor, int standing) {
        try {
            Skor exp = new Skor();
            exp.setUsername(username);
            exp.setSkor(skor);
            exp.setStanding(standing);
            
            // Cek data apakah ada atau tidak
            if (isDataExist(username)) {
                // jika ada maka update
                table.updateData(exp.getUsername(), exp.getSkor(), exp.getStanding());
            } else {
                // jika tikda ada maka add data
                table.insertData(exp.getUsername(), exp.getSkor(), exp.getStanding());
            }
            table.closeConnection();
        } catch (Exception e) {
            error = e.toString();
        }
    }

    // Get Data
    public String getUsername(int i) {
        return data.get(i).getUsername();
    }

    public int getSkor(int i) {
        return data.get(i).getSkor();
    }

    public int getStanding(int i) {
        return data.get(i).getStanding();
    }

    public int getSize() {
        return data.size();
    }

    public String getError() {
        return this.error;
    }
}
