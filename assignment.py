import math
print("Calculates Area and Circumference of a Circle")
diameter = float(float(input("Enter Diameter: "))) 
radius = diameter/2
area = (radius**2)*(math.pi)
circumference = radius*math.pi*2
print("Area: ",area)
print("Circumference: ",circumference)