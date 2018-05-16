import cv2
import sys

yuzTanim = cv2.cascadeClassifier ("haarcascade_frontalfaces_default.xml")

resim = cv2.imread("news.jpg")
gri = cv2.cvtCOLOR (resim, cv2.COLOR_BGR2GRAY)

yuzler = yuzTanim.detectMultiScale (gri,
ScaleFactor = 1.05,
minNeighbors = 5,
minSize = (30,30)
)

print ("Bulunan {0} yüz!" . format (len (yuzler) ) )

for (x,y,w,h) in faces:
cv2.rectangle (resim, (x,y), (x+w, y+h), (0,255,0), 2)

cv2.imshow ("Yüz Bulundu!", resim)
cv2.waitKey(0)


import cv2
import glob

resimler = glob.glob ("*.jpg")

for r in resimler:

gri = cv2.imread (r,0)
r100 = cv2.resize (gri,(200,200)

cv2.imshow ("100x100", r100)
cv2.waitKey (1000)
cv2.destroyAllWindows()
cv2.imwrite ("100x100" + r, r100)


import cv2

res1 = cv2.imread ("Galaxy.jpg",0)

print (type(res1)
print (res1.shape)
print (res1.ndim)
print (res1)

rs1_b = cv2.resize (res1, (int (res1.shape [0] / 2 ), int (res1.shape [1] / 2) ) )
cv2.imwrite ("Galaksi%50.jpg", rrs1_b)

cv2.imshow ("Galaksi", rs1_b)
cv2.waitKey (2000)






