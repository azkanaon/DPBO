/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package model;

import java.awt.Graphics;

public abstract class GameObject
{
    /**
     * Attribute declaration.
     */
    
    protected int x, y;          // Position.
    protected int width, height; // Dimension.
    protected int velX, velY;    // Velocity.
    protected String type;       // Tipe Objek (untuk menentukan mana obstacle mana player).
    protected boolean step;
    protected int bobot;

    
    /**
     * Constructor.
     */
    
    // Default constructor.
    public GameObject()
    {
        this.x = 0;
        this.y = 0;
        this.type = "";
    }
    
    // Konstruktor dengan koordinat masukkan
    public GameObject(int x, int y, String type)
    {
        this.x = x;
        this.y = y;
        this.type = type;
    }
    
    
    /**
     * Getter and Setter.
     */

    /* Object X position. */
    
    public int getX()
    {
        return x;
    }

    public void setX(int x)
    {
        this.x = x;
    }

    /* Object Y position. */
    
    public int getY()
    {
        return y;
    }
    
    public void setY(int y)
    {
        this.y = y;
    }
    
    /* Object width. */
    
    public int getWidth()
    {
        return width;
    }

    public void setWidth(int width)
    {
        this.width = width;
    }
    
    /* Object height. */
    
    public int getHeight()
    {
        return height;
    }

    public void setHeight(int height)
    {
        this.height = height;
    }
    
    /* Object X velocity. */
    
    public int getVelX()
    {
        return velX;
    }

    public void setVelX(int velX)
    {
        this.velX = velX;
    }

    /* Object Y velocity. */
    
    public int getVelY()
    {
        return velY;
    }

    public void setVelY(int velY)
    {
        this.velY = velY;
    }
    
    /* Object type. */
    
    public String getType()
    {
        return type;
    }

    public void setType(String type)
    {
        this.type = type;
    }
    

    // set Step untuk tanda ketika player bersentuhan dengan obstacle
    public void setStep(boolean step){
        this.step = step;
    }
    
    // get Step
    public boolean getStep(){
        return this.step;
    }

    // get bobot
    public int getBobot(){
        return this.bobot;
    }
    
    // set bobot
    public void setBobot(int bobot){
        this.bobot = bobot;
    }

    /**
     * Override interface (unused, only to avoid error).
     */
    
    public abstract void tick();
    public abstract void render(Graphics g);
}
