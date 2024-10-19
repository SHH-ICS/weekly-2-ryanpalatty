print("Calculates Area and Circumference of a Circle")
diameter = float(float(input("Enter Diameter: "))) 
radius = diameter/2
pi = float(3.14)
area = (radius**2)*(pi)
circumference = radius*pi*2
print("Area: ",area)
print("Circumference: ",circumference)