package tt;

import java.util.Scanner;

public class nothesap {
	
public static void main(String[] args) {
	
	
	Scanner i = new Scanner(System.in);
	
	int turkce, mat, tarih, kimya, fizik;
	
	System.out.println("Türkçe Notunuz: ");
	turkce = i.nextInt();
	
	System.out.println("Matematik Notunuz: ");
	mat = i.nextInt();
	
	System.out.println("Tarih Notunuz: ");
	tarih = i.nextInt();
	
	System.out.println("Kimya Notunuz: ");
	kimya = i.nextInt();
	
	System.out.println("Fizik Notunuz: ");
	fizik = i.nextInt();
	
	
	double toplam = (mat + turkce + tarih + kimya + fizik);
	double sonuc = toplam/5.0;
    
    if(sonuc < 50) {
 	   System.out.println("Kaldınız" + sonuc);
    }
    else if(sonuc >= 85) {
        System.out.print("Takdir Belgesi Aldınız" + sonuc);
    }
    else if(sonuc >= 70) {
        System.out.print("Teşekkür Belgesi Aldınız" + sonuc);
    }  
    else 
 	   System.out.print("Geçtiniz" + sonuc);
	
	
	
	
	
}
}
