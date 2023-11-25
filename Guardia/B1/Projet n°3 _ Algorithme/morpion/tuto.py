from os import name
from tkinter import *
from turtle import position

class Mywindow(Tk):
    def __init__(self):
        Tk.__init__(self)
        self.mylist = [
            [0, 0, 0],
            [0, 0, 0],
            [0, 0, 0]
        ]
        self.canvas = Canvas(self, width=500, height=500, background='white')
        ligne2 = self.canvas.create_line(166, 0, 166, 500)
        ligne2 = self.canvas.create_line(332, 0, 332, 500)
        ligne3 = self.canvas.create_line(0, 166, 500, 166)
        ligne3 = self.canvas.create_line(0, 342, 500, 342)
        self.canvas.pack()



        self.canvas.bind('<Button-1>', self.clic)
        

    def clic(self, event):
        X = event.x 
        Y = event.y
        print(X)
        print(Y)
        print("------")
        self.create_rond()

    def position(self, x, y):
        if(y <= 166 and x<= 166):
            self.mylist[0][0] = 1
            self.create_rond(2, 164)
        elif(y <= 166 and (x <= 332 and x > 166)):
            self.mylist[0][1] = 1
            self.create_rond(168, 330)
        elif(y <= 166 and (x <= 498 and x > 332)):
            self.mylist[0][1] = 1
            self.create_rond(334, 496)







    def create_rond(self):
        #ligne = self.canvas.create_oval(6, 8, 160, 160, width=2)
        #ligne = self.canvas.create_oval(172, 8, 320, 160, width=2)
        #ligne = self.canvas.create_oval(340, 8, 496, 160, width=2)
            #+20 +20 -20 -20
        ligne = self.canvas.create_oval(21, 21, 146, 146, width=2)
        ligne = self.canvas.create_oval(186, 21, 312, 146, width=2)
        ligne = self.canvas.create_oval(186, 21, 312, 146, width=2)
        


    def create_croix(self, x, y):
        ligne = self.canvas.create_line(0, 0, x, y)
        ligne = self.canvas.create_line(0, y, x, 0)
        self.canvas.pack()

window = Mywindow()

window.mainloop()