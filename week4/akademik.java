package week4;

import week0.mahasiswa;
import java.util.*;
public class akademik {
    public static void main(String[] args) {

        int n; // integer -> mengampu inputan
        System.out.print("Masukkan Jumlah Data : ");
        // buat objek dari class scenner untuk menginput data

        Scanner inp = new Scanner(System.in);
        n = inp.nextInt();

        //buat variable array dengan tipe mahasiswa

        mahasiswa[] mhs = new mahasiswa[n]; //tipe array

        String nim;
        String nama;
        Double ipk;

        for(int i = 0; i < n ; i++)
        {
            System.out.println("Data ke-" +(i+1));
            System.out.print("Masukkan NIM : ");
            nim = inp.next();
            System.out.print("Masukkan IPK : ");
            ipk = inp.nextDouble();
            System.out.print("Masukkan Nama : " );
            nama = inp.next();

            mhs[i] = new mahasiswa(nim, nama, ipk);
        }

        System.out.println("Hasil : ");
        //Hasil dari inputan ( menampilkan semua inputan)
        for (int i = 0; i<n; i++)
        {
            System.out.println("Data ke-" +(i+1));
            mhs[i].getIdentitas();
        }
    }   
} // add nambah get mengambil
