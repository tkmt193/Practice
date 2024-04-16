import numpy as np
# 交差エントロピー誤差
def cross_entropy_error(y,t):
    delta = 1e-7
    return -np.sum(t*np.log(y + delta))

t=[0,0,1,0,0,0,0,0,0,0]

y1 = [0.1,0.05,0.6,0.0,0.05,0.1,0.0,0.1,0.0,0.0]
s1 = cross_entropy_error(np.array(y1),np.array(t))
print(s1)

y2 = [0.1,0.05,0.1,0.0,0.05,0.1,0.0,0.6,0.0,0.0]
s2 = cross_entropy_error(np.array(y2),np.array(t))
print(s2)
