from user import *
class game :
    def __init__(self, point_user, point_ia, list, user_choice):
        self.point_user = point_user
        self.point_ia = point_ia
        self.list = ["Pierre", "Feuille", "Ciseau"]
        self.user_choice = user.choice


    def launch_game():
        print("--------------")
        print("-Début du jeu-")
        print("---Made  by---")
        print("-Les intellos-")
        print("--------------")

    def win_or_fail(self):
        if(self.user_choice == "Pierre"):
            print(self.user_choice)


res = game_class.user_choice
