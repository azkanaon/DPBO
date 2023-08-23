class Human:
    __nama = ""
    __gender = ""
    # Constructor
    def __init__(self, nama = "", gender = ""):
        self.__nama = nama
        self.__gender = gender

    # Getter
    def get_nama(self):
        return self.__nama
    def get_gender(self):
        return self.__gender

    #Setter
    def set_nama(self, nama):
        self.__nama = nama
    def set_gender(self, gender):
        self.__gender = gender

    # Method yang bisa dilakukan oleh manusia
    def makan(self):
        print("Aku udah makan")
    def minum(self):
        print("Aku udah minum")
    def tidur(self):
        print("Aku udah tidur")