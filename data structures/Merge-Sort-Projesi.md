Proje 2
[16,21,11,8,12,22] -> Merge Sort

Yukarıdaki dizinin sort türüne göre aşamalarını yazınız.
Big-O gösterimini yazınız.

Çözüm:
1. aşama: [16,21,11]---[8,12,22] Diziyi ikiye ayır ve sırala.
2. aşama: [16,21,11]---[8,12,22] Diziyi tek elemanlı gruplar olana kadar parçalamalıyım.
3. aşama: [16,21]-[11]---[8,12]-[22]
4. aşama: [16]-[21]-[11]---[8]-[12]-[22]
5. aşama: [11]-[16]-[21]---[8]-[12]-[22] Diziyi sırala ve birleştir.
6. aşama: [11,16,21]---[8,12,22]
7. aşama: [8,11,12,16,21,22]

Big-O gösterimi O(nlogn)
