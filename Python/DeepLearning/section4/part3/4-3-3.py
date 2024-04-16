import numpy as np
import matplotlib.pylab as plt

######　数値微分 #######
def numerical_diff(f,x):
    h = 1e-4 #0.0001
    return (f(x+h)-f(x-h))/(2*h)

######　式(4.6) #######
def function_2(x):
    return x[0]**2 + x[1]**2

def function_tmp1(x0):
    return x0*x0 +4.0**2.0

ans1 = numerical_diff(function_tmp1,3.0)
print(ans1)

def function_tmp2(x1):
    return 3.0**2.0 + x1*x1

ans2 = numerical_diff(function_tmp2,4.0)
print(ans2)

