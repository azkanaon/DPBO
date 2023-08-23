mg = img.resize((200, 200)) 
    photo_img = ImageTk.PhotoImage(img)

    frame = Frame(root, padx=10, pady=10)  # Buat frame baru
    frame.pack(padx=10, pady=10)

    img_label = Label(frame, image=photo_img)
    img_label.pack()