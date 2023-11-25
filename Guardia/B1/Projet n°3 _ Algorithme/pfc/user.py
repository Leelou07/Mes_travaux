class user :
    def __init__(self, choice):
        self.choice = self.__choice()

    def __choice(self):
        return input("Votre coup ?")
