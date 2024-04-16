import numpy as np
import scipy as sp
import matplotlib.pyplot as plt
############### 初期条件 ###############
k=1.1
L=6.0

node_total =4 #節点数(>=2)
ele_total = node_total-1 #要素数

############### 入力データの用意 ###############

print("node_total = ",node_total, ",  ele_total = ",ele_total)

#節点のx座標を定義(0〜L)
print("Global node X")
node_x_glo = np.empty(node_total, np.float64) #節点のx座標
node_x_glo = np.linspace(0,L, node_total) #計算領域を等分割
print(node_x_glo)

#以下有限要素解を[A][u]=[v]として計算していく

########## 要素行列[A]を求める ##########
e_1=L/ele_total #e1=e2=e3,...,en=L
########## 第1項目 ##########
#初期値設定
a1_ele=1/e_1
b1_ele=2/e_1
c1_ele=-1/e_1

#行列生成
mat_a1=np.zeros((node_total,node_total))
mat_a1[0,0]=a1_ele
mat_a1[ele_total,ele_total]=a1_ele
for i in range(1,ele_total):
    mat_a1[i,i]=b1_ele

for i in range(ele_total):
    mat_a1[i,i+1]=c1_ele
for i in range(1,node_total):
    mat_a1[i,i-1]=c1_ele

print(mat_a1)

########## 第2項目 ##########
#初期値設定
a2_ele=2*e_1
b2_ele=4*e_1
c2_ele=e_1

#行列生成
mat_a2=np.zeros((node_total,node_total))
mat_a2[0,0]=a2_ele
mat_a2[ele_total,ele_total]=a2_ele
for i in range(1,ele_total):
    mat_a2[i,i]=b2_ele

for i in range(ele_total):
    mat_a2[i,i+1]=c2_ele
for i in range(1,node_total):
    mat_a2[i,i-1]=c2_ele

print(mat_a2)

########## [A] ##########
mat_a_a=mat_a1-k**(2)/6*mat_a2
print(mat_a_a)

############### 連立方程式を解く ###############

###[v]の生成###
mat_v=np.zeros((node_total,1))

#vの初期値
mat_v[0,0]=-3.5 #-u'(0)
mat_v[ele_total,0]=3.5  #u'(L)
print(mat_v)

print("近似解")
#近似解
unknown_u = np.linalg.solve(mat_a_a,mat_v)
print(unknown_u)

#厳密解

exact_x = np.arange(0,L,0.01)
exact_y = np.sin(k*exact_x)/np.sin(k*L)

############### 計算結果を可視化 ###############
#plt.rcParams['font.family'] = 'Times New Roman'  #全体のフォントを設定
#plt.rcParams['font.size'] = 10  #フォントサイズを設定
#plt.rcParams['lines.linewidth'] = 2  # 線の太さ設定
#plt.title("Finite element analysis of 1D Poisson's equation")  #グラフタイトル
plt.xlabel("$x$")  #x軸の名前
plt.ylabel("$u(x)$")  #y軸の名前
plt.grid()  #点線の目盛りを表示


#厳密解をプロット
plt.plot(exact_x,exact_y, label="$u(x)$", color='#ff0000')  #折線グラフを作成

#近似解をプロット
plt.plot(node_x_glo,unknown_u, label="$\hat{u}(x)$", color='#0000ff')  #折線グラフを作成
plt.scatter(node_x_glo,unknown_u)  #点グラフを作成

#更に体裁を整える
plt.axis('tight') #余白を狭くする
plt.axhline(0, color='#000000')  #x軸(y=0)の線
plt.axvline(0, color='#000000')  #y軸(x=0)の線
plt.legend(loc='best')  #凡例(グラフラベル)を表示
for n in range(node_total):  #節点番号をグラフ内に表示
    plt.text(node_x_glo[n],unknown_u[n], n, ha='center',va='bottom', color='#0000ff')

plt.show()  #グラフを表示

############### 入力データの用意 ###############