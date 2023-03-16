# www.patika.dev-Sort.Projects
 www.patika.dev
İnsertion-Sort.Project

Proje 1
[22,27,16,2,18,6] -> Insertion Sort
Yukarı verilen dizinin sort türüne göre aşamalarını yazınız.
Big-O gösterimini yazınız.
Time Complexity: Dizi sıralandıktan sonra 18 sayısı aşağıdaki case'lerden hangisinin kapsamına girer? Yazınız
Average case: Aradığımız sayının ortada olması
Worst case: Aradığımız sayının sonda olması
Best case: Aradığımız sayının dizinin en başında olması.

Çözüm 1: 1.aşama en küçük elemanı buluruz ve birinci sıradaki elemanla yerlerini değiştiririz. Dizimiz : [22,27,16,2,18,6].
1. aşama: [2,27,16,22,18,6] olur.
2. aşama: [2,6,16,22,18,27] olmalı. Çünkü bu diziyi sıralamalıyız. Buyüzden 6 ile 2. elemanın yani 27 ile yerini değitirdim.
3. aşama: [2,6,16,22,18,27] 16 doğru yerde karışmıyoruz.
4. aşama: [2,6,16,18,22,27] 18 ile 4. eleman yani 22 ile yerlerini değiştirmeliyim.

Big-O gösterimi: O(n^2)

18 sayısı ortada olduğundan Average case kapsamına girer.

Proje 2
[7,3,5,8,2,9,4,15,6] dizisinin Selection Sort'a göre ilk 4 adımını yazınız.

Çözüm 2: İlk önce en küçük sayıyı 1. elemanla yer değiştiririz.
1. aşama: [2,3,5,8,7,9,4,15,6] olur.
2. aşama: [2,3,5,8,7,9,4,15,6] 3 doğru yerde karışmıyoruz.
3. aşama: [2,3,4,8,7,9,5,15,6] 4 ile 3. eleman yani 5 sayının yerini değiştirmeliyim.
4. aşama: [2,3,4,5,7,9,8,15,6] 5 ile 4. eleman yani 8 sayısının yerini değiştirmeliyim. Bu istenen aşamaya kadar ama devamını yaptım.
5. aşama: [2,3,4,5,6,9,8,15,7] 6 ile 5. eleman yani 7 sayısının yerini değiştirmeliyim.
6. aşama: [2,3,4,5,6,7,8,15,9] 7 ile 6. eleman yani 9 sayısının yerini değiştirmeliyim.
7. aşama: [2,3,4,5,6,7,8,9,15] 9 ile 7. eleman yani 15 sayısının yerini değiştirmeliyim.
