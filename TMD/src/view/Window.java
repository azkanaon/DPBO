/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package view;

import viewmodel.Game;
import java.awt.Canvas;
import java.awt.Color;
import java.awt.Dimension;
import javax.swing.JFrame;

/**
 *
 * @author Satria Ramadhani
 */
public class Window extends Canvas
{
    // JFrame declaration.
    private JFrame frame;
    
    /**
     * Constructor.
     */
    
    // Default constructor.
    public Window()
    {
        this.frame = new JFrame();
    }
    
    // Constructor with Frame data.
    public Window(int width, int height, String title)
    {
        // Initialize frame and its dimension.
        this.frame = new JFrame(title);        
        this.frame.setPreferredSize(new Dimension(width, height));
        this.frame.setMinimumSize(new Dimension(width, height));
        this.frame.setMaximumSize(new Dimension(width, height));
        
        // Initialize additional options.
        this.frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        
        // agar posisi frame ada di tengah
        this.frame.setLocationRelativeTo(null);
        // agar tidak bisa di resize ukuran frame nya
        this.frame.setResizable(false);
    }
    
    // Open / show game Window. 
    public void open(Game game)
    {
        this.frame.add(game);
        this.frame.setVisible(true);
        
        game.start();
    }
    
    // Close game Window.
    public void close()
    {
        this.frame.setVisible(false);
        this.frame.dispose();
    }
}
