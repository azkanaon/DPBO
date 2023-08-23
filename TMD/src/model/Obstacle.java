package model;

import viewmodel.Game;
import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Image;
import java.awt.Toolkit;
import java.awt.image.BufferedImage;
import java.util.Random;

public class Obstacle extends GameObject
{
    private boolean cek = false;
    private int lebar = 0;
    /**
     * Constructor.
     */
    
    // Default constructor.
    public Obstacle(){
        super(0, 0, "Obstacle");
    }

    // Constructor with Obstacle position.
    public Obstacle(int x, int y){
        super(x, y, "Obstacle");
        this.step = false;
    }

    /**
     * Override interface.
     */
    
    @Override
    public void render(Graphics object)
    {
        
        if(cek == false){
            // random lebar terlebih dahulu
            lebar= RNG(0,500);
            // kemudian masukkanke setWidht untuk keperluan collision nantinya
            super.setWidth(lebar);
            cek = true;
            // proses pembobotan, semakin besar lebar maka semakin kecil nilainya
            if(lebar <= 500 && lebar >= 450){
                super.setBobot(10);
            }else if(lebar < 450 && lebar >= 400){
                super.setBobot(20);
            }else if(lebar < 400 && lebar >= 350){
                super.setBobot(30);
            }else if(lebar < 350 && lebar >= 300){
                super.setBobot(40);
            }else if(lebar < 300 && lebar >= 250){
                super.setBobot(50);
            }else if(lebar < 250 && lebar >= 200){
                super.setBobot(60);
            }else if(lebar < 200 && lebar >= 150){
                super.setBobot(70);
            }else if(lebar < 150 && lebar >= 100){
                super.setBobot(80);
            }else if(lebar < 100 && lebar >= 50){
                super.setBobot(90);
            }else if(lebar < 50 && lebar >= 0){
                super.setBobot(100);
            }
        }
        // simpan bobot yang nantinya diprint di samping obstacle
        String tampung = Integer.toString(super.getBobot());

        // obstacle dipasang diubah menjadi sebuah gambar
        Image bg = Toolkit.getDefaultToolkit().getImage(getClass().getResource("/assets/bg/roket.png"));
        BufferedImage resizedImage = new BufferedImage(lebar, 40, BufferedImage.TYPE_INT_ARGB);
        Graphics2D g2d = resizedImage.createGraphics();
        g2d.drawImage(bg, 0, 0, lebar, 40, null);
        g2d.dispose();
        object.drawImage(resizedImage, x, y, null);
        
        // warna font
        object.setColor(Color.RED);
        // set fontFAmily 
        Font font = new Font("Arial", Font.BOLD, 20);
        object.setFont(font);
        // print nilai bobot ke layar di samping obstacle
        object.drawString(tampung, lebar + 10, y + 20);
        
    }
    
    @Override
    public void tick(){
        // Initialize velocity, so object can move.
        this.x += this.velX;
        y += velY;
    }

    // fungsi random untuk keperluan random lebar obstacle
    public static int RNG(int min, int max) {
        Random random = new Random();
        int result = random.nextInt((max - min) + 1) + min;
        return result;
    }

}