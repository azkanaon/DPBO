/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */


/*
 * ASSET IMAGE:
 * https://img.freepik.com/free-vector/modern-rocket-composition-with-flat-design_23-2147895651.jpg?w=740&t=st=1686887648~exp=1686888248~hmac=ef491a590fa058ed18c0facc2af4b0d4230adf81384f0ebcf7ae395201fa8211
 * https://img.freepik.com/free-vector/astronaut-dabbing-cartoon-vector-icon-illustration-science-technology-icon-concept-isolated-premium-vector-flat-cartoon-style_138676-3360.jpg?w=740&t=st=1686888683~exp=1686889283~hmac=103fa4b7fd78f91dd53cfdf57382cce5690eaacefaedaafae8b76dd7f9728539
 * https://img.freepik.com/free-vector/gradient-galaxy-background_23-2148983655.jpg?w=1060&t=st=1686888713~exp=1686889313~hmac=cd5257ea9bc907a352be6f31c07c313ee81109332cfe87df2ffef531a1ab869f
 * 
 * 
 * 
 * 

 ASSET BGM
 https://www.zedge.net/ringtone/3ee64700-c81d-3989-aa44-6b1ac9e9207d
 */
package viewmodel;


import java.awt.Canvas;
import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Image;
import java.awt.Toolkit;
import java.awt.image.BufferStrategy;
import java.io.File;
import java.io.IOException;
import java.util.ArrayList;

import javax.sound.sampled.AudioInputStream;
import javax.sound.sampled.AudioSystem;
import javax.sound.sampled.Clip;
import javax.sound.sampled.LineUnavailableException;
import javax.sound.sampled.UnsupportedAudioFileException;
import javax.swing.JOptionPane;

import view.Menu;
import view.Window;
import model.GameObject;
import model.Obstacle;
import viewmodel.Handler;
import model.Player;
import model.TableUser;


/**
 *
 * @author Satria Ramadhani
 */
public class Game extends Canvas implements Runnable
{
    /**
     * 
     * Attribute declaration.
     */
    
    /* View-related attributes. */
    public static final int width = 640;
    public static final int height = 480;
    private Window display;
    
    /* Process-related attributes. */
    private boolean running;
    private Handler handler;
    private Thread thread;
    
    /* Animation-related attributes. */
    private boolean startCounting = false;
    private int score = 0;
    private int counter = 0;
    private int stateCounter = 0;
    private int direction = 0;
    private int waktu = 0;

    // set skor dari database
    private int standing;
    private int skor;
    private String username;

    private Clip clip = null;
    // Default constructor.
    public Game(){
        try
        {
            // Initialize display.
            display = new Window(width, height, "Keep Standing");
            display.open(this); 
            
            // Initialize game handler.
            handler = new Handler();
            
            // Initialize controller (keyboard input).
            this.setFocusable(true);
            this.requestFocus();
            this.addKeyListener(new KeyInput(this, handler));
            
            // Initialize all object.
            running = true;
            if(running)
            {
                handler.add(new Player(320, 160));
                int titikY = 480;
                // play musik
                playMusic("bgm1.wav");
                // untuk memunculkan obstacle awal
                for(int i = 0; i < 4; i++){
                    handler.add(new Obstacle(0, titikY));
                    // karena lebar dari obstacle adalah 40, maka di set 80 sehingga ada jarak sebelum menampilkan obstacle selanjutnya
                    titikY -= 80;
                }
            }
        } catch(Exception e){
            System.err.println("Failed to instance data.");
        }
    }
    
    /* Game running status. */
    public boolean isRunning(){
        return running;
    }

    public void setRunning(boolean running){
        this.running = running;
    }
    
    // Close display.
    public void close(){
        display.close();
    }
    
    // Start threading.
    public synchronized void start(){
        thread = new Thread(this);
        thread.start(); running = true;
    }
    
    // Stop threading.
    public synchronized void stop(){
        try{
            thread.join();
            running = false;
        }catch(InterruptedException e){
            System.out.println("Thread error : " + e.getMessage());
        }
    }
    
    // Initialize game when it run for the first time.
    public void render(){
        // Use buffer strategy.
        BufferStrategy bs = this.getBufferStrategy();
        if(bs == null){
            this.createBufferStrategy(SOMEBITS);
            return;
        }
        
        // Initialize graphics.
        Graphics g = bs.getDrawGraphics();
        Image bg = Toolkit.getDefaultToolkit().getImage(getClass().getResource("/assets/bg/game.jpg"));
        g.drawImage(bg, 0, 0, null);
        
        if(running == true){
            // Render handler.
            handler.render(g);
            
            // Render score.
            Font oldFont = g.getFont();
            Font newFont = oldFont.deriveFont(oldFont.getSize());
            g.setFont(newFont);
            g.setColor(Color.ORANGE);
            g.drawString("User : " + this.username, 20, 30);
            g.drawString("Score : " + Integer.toString(this.skor), 20, 50);
            g.drawString("Standing : " + Integer.toString(this.standing), 20, 70);
        }
        
        // Loop the process so it seems like "FPS".
        g.dispose();
        bs.show();
    }
    
    // Main loop proccess.
    public void tick()
    {
        // waktu++ sebagai tanda untuk memunculkan obstacle selanjutnya
        waktu++;
        GameObject player = null;
        ArrayList<GameObject> obs = new ArrayList<GameObject>();
        // jika waktu merupakan modulus 80, maka tampilkan obstacle selanjutnya,
        // karena obstacle memiliki tinggi 40, maka waktu menggunakan modulus 80 agar ada jarak antar obstacle
        if(waktu % 80 == 0){
            handler.add(new Obstacle(0, 480));
        }
        handler.tick();
        if(this.running)
        {   
            counter++;
            if(startCounting){
                stateCounter++;
            }
            
            if(stateCounter >= 40){
                stateCounter = 0;
                startCounting = false;
            }
            
            
            if(counter >= 50){
                direction = (direction == 0) ? 1 : 0;
                counter = 0;
            }
            
            // loop semua objek yang telah dibuat
            for(int i = 0; i < handler.count(); i++){
                // jika tipenya adalah player, maka masukkan ke variabel player
                if(handler.get(i).getType().equals("Player")){
                    player = handler.get(i);
                // jika tipenya adalah player, maka masukkan ke array obstacle
                }else if(handler.get(i).getType().equals("Obstacle")){
                    obs.add(handler.get(i));
                }
            }

            // Loop semua obstacle
            for(int i =0; i<obs.size(); i++){
                // cek dulu apakah player berada tepat diatas nilai
                // collision bawah
                // cek dulu apakah player ada tepat diatas obstacle atau tidak
                if(player.getY()+35 < obs.get(i).getY()+5){
                    // cek apakah bagian bawah player menabrak bagian atas obstacle atau tidak
                    if((player.getY()+35 >= obs.get(i).getY())){
                        // cek apakah lebar player ada diantara obstacle atau tidak
                        if((player.getX() >= 0) && (player.getX() <= obs.get(i).getWidth())){
                            // setY menjadi posisi obstacle, -35 mengindikasikan bagian atas player
                            player.setY(obs.get(i).getY()-35);
                            // set skor dan standing jika getStep masih false
                            if(!obs.get(i).getStep()){
                                standing++;
                                skor += obs.get(i).getBobot();
                                // setStep diubah true agar ketika objek  yang bersentuhan lagi, skor tidak bertambah
                                obs.get(i).setStep(true);
                            }
                        }
                    }
                }

                // collision atas
                // cek apakah bagian atas player ada dibawah obstacle atau tidak
                if(player.getY() > obs.get(i).getY()+35){
                    // jika ada maka cek apakah getY player melewati bagian bawah obstacle atau tidak
                    if(player.getY() <= obs.get(i).getY()+40){
                        // cek apakah lebar player ada diantara obstacle atau tidak
                        if((player.getX() >= 0) && (player.getX() <= obs.get(i).getWidth())){
                            // set posisi player ke obstacle bagian bawah 
                            player.setY(obs.get(i).getY()+40);
                        }
                    }
                }
            }
        }
    }
    
    /**
     * 
     * Override interface.
     */
    
    @Override
    public void run(){
        double fps = 60.0;
        double ns = (1000000000 / fps);
        double delta = 0;
        
        // Timer attributes.
        long time = System.nanoTime();
        long now = 0;
        long timer = System.currentTimeMillis();
        
        int frames = 0;
        while(running){
            now = System.nanoTime();
            delta += ((now - time) / ns);
            time = now;
            
            while(delta > 1){
                tick();
                delta--;
            }
            
            if(running){
                render();
                frames++;
            }
            
            if((System.currentTimeMillis() - timer) > 1000){
                timer += 1000;
                frames = 0;
            }
            // mencari objek dengan tipe obstacle
            GameObject obs = null;
            for (int i = 0; i < handler.count(); i++) {
                if (handler.object.get(i).getType() == "Obstacle") {
                    obs = handler.object.get(i);
                    int velocity = -1;
                    // atur velocity obstacle (gunanya agar obstacle bergerak ke atas)
                    obs.setVelY(velocity);
                }
            }
            
            // cari objek  dengan tipe player
            GameObject player = null;
            for (int i = 0; i < handler.count(); i++) {
                if (handler.object.get(i).getType() == "Player") {
                    player = handler.object.get(i);
                    // jika player melebihi bagian atas atau bagian bawah layar, maka game over
                    if(player.getY() >= height || player.getY() < -40){
                        running = false;
                        // memasukkan data ke database
                        saveScore();
                        // menampilkan menu
                        new Menu().setVisible(true);
                        // matikan musik
                        stopSound();
                        // matikan layar game
                        close();
                    }
                }
            }
        }
        stop();
    }

    // proses simpan data
    public void saveScore(){
        try{
            TableUserProses tuser = new TableUserProses();
            // lakukan penyimpanan data, data yang dipakai dari username, skor dan standing 
            tuser.storeData(this.username, this.skor, this.standing); 
            JOptionPane.showMessageDialog(null, "Username: " + this.username + "\nSkor: " + this.skor + "\nStanding: " + this.standing, "Game Over!", JOptionPane.INFORMATION_MESSAGE);
        }catch(Exception e){
            e.printStackTrace();
        }
    }


    public void playMusic(String filename){
        try {
            // buka lokasi musik yang akan ditampilkan
            AudioInputStream audioIn = AudioSystem.getAudioInputStream(new File("music/" + filename).getAbsoluteFile());
            // Get a sound clip resource.
            clip = AudioSystem.getClip();
            // Open audio clip and load samples from the audio input stream.
            clip.open(audioIn);
            //loop berulang-ulang
            clip.loop(clip.LOOP_CONTINUOUSLY);
            clip.start();
        } catch (UnsupportedAudioFileException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        } catch (LineUnavailableException e) {
            e.printStackTrace();
        }
    }

    //method ketika background music dimatikan
    public void stopSound(){
        //stop dan tutup musicnya
        clip.stop();
        clip.close();
    }


    // Username Setter
    public void setUsername(String username) {
        this.username = username;
    }
    // Username Setter
    public void setSkor(int skor) {
        this.skor = skor;
    }
    // Username Setter
    public void setStanding(int standing) {
        this.standing = standing;
    }
    
}
