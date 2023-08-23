package model;

import viewmodel.Game;
import java.awt.Color;
import java.awt.Graphics;
import java.awt.Image;
import java.awt.Toolkit;

public class Player extends GameObject
{
    // untuk gambar player
    private Image icon;
    
    // Default constructor.
    public Player(){
        super(0, 0, "Player");
        this.icon = Toolkit.getDefaultToolkit().getImage(getClass().getResource("/assets/final.png"));
    }
    
    // Constructor with player position.
    public Player(int x, int y)
    {
        super(x, y, "Player");
        super.setHeight(30);
        this.icon = Toolkit.getDefaultToolkit().getImage(getClass().getResource("/assets/final.png"));
    }



    
    @Override
    public void render(Graphics object)
    {
        // render gambar player
        object.drawImage(icon, x, y, null);
    }
    
    @Override
    public void tick()
    {
        // Initialize velocity, so object can move.
        this.x += this.velX;
        this.y += this.velY;
        
        // Setting agar player tidak bisa tembus layar sebelah kanan
        if (x >= Game.width-50) {
            x = Game.width-50;
        }
    }
}
