from apartemen import Apartemen
from rumah import Rumah
from indekos import Indekos
from tkinter import *
from PIL import ImageTk, Image

hunians = []
hunians.append(Apartemen("Nelly Joy", 3, 3))
hunians.append(Rumah("Sekar MK", 5, 2))
hunians.append(Indekos("Bp. Romi", "Cahya"))
hunians.append(Rumah("Satria", 1, 4))

root = Tk()
root.title("Praktikum DPBO Python")
photo_images = []


def details(index):
    top = Toplevel()
    top.title("Detail " + hunians[index].get_jenis())

    d_frame = LabelFrame(top, text="Data Residen", padx=10, pady=10)
    d_frame.pack(padx=10, pady=10)

    d_summary = Label(d_frame, text="Summary: " +"\n" +hunians[index].get_summary() + hunians[index].get_detail(), anchor="w").grid(row=0, column=0, sticky="w")
    
    # proses foto
    img = Image.open("./code/assets/" + hunians[index].get_photo()) 
    img = img.resize((200, 200)) 
    photo_img = ImageTk.PhotoImage(img)
    photo_images.append(photo_img)
    img_label = Label(d_frame, image=photo_img)
    img_label.grid(row=1, column=0)



def landing(): 
    def detail(): 
        # hapus semua komponen yang ada di fungsi landing, biar rapi
        label.destroy()
        frame111.destroy()
        img_label.destroy()
        button.destroy()
        frame = LabelFrame(root, text="Data Seluruh Residen", padx=10, pady=10)
        frame.pack(padx=10, pady=10)

        opts = LabelFrame(root, padx=10, pady=10)
        opts.pack(padx=10, pady=10)

        b_add = Button(opts, text="Add Data", state="disabled")
        b_add.grid(row=0, column=0)

        b_exit = Button(opts, text="Exit", command=root.quit)
        b_exit.grid(row=0, column=1)

        for index, h in enumerate(hunians):
            idx = Label(frame, text=str(index+1), width=5, borderwidth=1, relief="solid")
            idx.grid(row=index, column=0)

            type = Label(frame, text=h.get_jenis(), width=15, borderwidth=1, relief="solid")
            type.grid(row=index, column=1)

            if h.get_jenis() != "Indekos": 
                name = Label(frame, text=" " + h.get_nama_pemilik(), width=40, borderwidth=1, relief="solid", anchor="w")
                name.grid(row=index, column=2)
            else:
                name = Label(frame, text=" " + h.get_nama_penghuni(), width=40, borderwidth=1, relief="solid", anchor="w")
                name.grid(row=index, column=2)

            b_detail = Button(frame, text="Details ", command=lambda index=index: details(index))
            b_detail.grid(row=index, column=3)
            
    # label nya
    label = Label(root, text="ini adalah landing page", font=('Arial', 16))
    label.pack()
    
    #setting foto
    img = Image.open("./code/assets/pdip.jpg")
    img = img.resize((200, 200))
    photo_img = ImageTk.PhotoImage(img)
    photo_images.append(photo_img)
    frame111 = Frame(root, padx=10, pady=10)
    frame111.pack(padx=10, pady=10)
    img_label = Label(frame111, image=photo_img)
    img_label.pack()

    # button menuju halaman detail
    button = Button(root, text='Halaman detail', font=('Arial', 16), command=detail)
    button.pack(side=BOTTOM)
    
landing()


root.mainloop()
