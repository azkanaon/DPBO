class Course :
    # Konstruktor
    def __init__(self, namaMatkul = ""):
        self.__namaMatkul = namaMatkul
    
    # get
    def get_namaMatkul(self) :
        return self.__namaMatkul;
    
    # set
    def set_namaMatkul(self, namaMatkul):
        self.__namaMatkul = namaMatkul
    
