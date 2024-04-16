#シグモイド関数
import numpy as np
def sigmoid(x): #シグモイド関数
    return 1 / (1 + np.exp(-x))

A1=np.array([0.1,0.2,0.3])
Z1=sigmoid(A1)

print(A1)
print(Z1)