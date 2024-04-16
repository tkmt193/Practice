import numpy as np
def solve(vec,is_complex=False):
    dim =len(vec)
    if is_complex:
        A = np.zeros((dim,dim),dtype=complex)
    else:
        A = np.zeros((dim,dim))
    A[np.arange(dim-1),1+np.arange(dim-1)] =1
    A[-1,:] = -vec
    ans,vec = np.linalg.eig(A)
    return ans

vec0 =np.array([-120,274,-225,85,-15])
vec1 =np.array([1,0])
vec2 =np.array([-1,5,-10,10,-5])
print(solve(vec0))
print(solve(vec1))
print(solve(vec2))