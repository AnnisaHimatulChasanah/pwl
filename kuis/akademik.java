package kuis;
import java.util.*;

public class akademik {
    public static void main(String[] args) {
        int n;
        System.out.println("Masukkan Jumlah Inputan : ");

        Scanner input = new Scanner(System.in);
        n = input.nextInt();

        mahasiswa[] mhs = new mahasiswa[n];

        String nama;
        String nim;
        int sks;
        int smt;
        //int spp;

        for(int i = 0; i < n; i++)
        {
            System.out.println("Data ke-"+(i+1));
            System.out.println("Masukkan NIM : ");
            nim = input.next();
            System.out.println("Masukkan Nama : ");
            nama = input.next();
            System.out.println("Masukkan SKS : ");
            sks = input.nextInt();
            System.out.println("Masukkan Semester : ");
            smt = input.nextInt();
            // System.out.println("Masukkan SPP : ");
            // spp = input.nextInt();

            mhs[i] = new mahasiswa(nama, nim, smt, sks); // spp)
        }
        System.out.println("Hasil : ");
        for(int i = 0; i <n; i++)
        {
            System.out.println("Data ke - "+(i+1));
            mhs[i].getAkademik();
        }
    }
}
