import numpy as np
import matplotlib.pylab as plt

######　数値微分 #######
def numerical_diff(f,x):
    h = 1e-4 #0.0001
    return (f(x+h)-f(x-h))/(2*h)

###### 4.3.2 数値微分の例(4.5) ######
def function_1(x): 
    return 0.01*x**2 + 0.1*x

###### 接線の式 ######
def tangent_line(f, x):
    d = numerical_diff(f, x)
    print(d)
    y = f(x) - d*x
    return lambda t: d*t + y
     
x = np.arange(0.0, 20.0, 0.1)
y = function_1(x)
plt.xlabel("x")
plt.ylabel("f(x)")

tf = tangent_line(function_1, 5)
y2 = tf(x)

uf = tangent_line(function_1, 10)
y3 = uf(x)

plt.plot(x, y, label="f(x)")
plt.plot(x, y2, label="x=5")
plt.plot(x, y3, label="x=10")
plt.legend()
plt.show()



