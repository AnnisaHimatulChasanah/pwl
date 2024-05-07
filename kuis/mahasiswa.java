package kuis;
import java.util.*;

public class mahasiswa {
    private String nama;
    private String nim;
    private int smt;
    private int sks;
    //private int spp; // seharusnya tidak usah cukup di method total tagihan

    //constructor
    public mahasiswa(String nama, String nim, int smt, int sks) //int spp)
    {
        this.nama = nama;
        this.nim = nim;
        this.smt = smt;
        this.sks = sks;
        //this.spp = spp;
    }

    //getter
    public String getNIm()
    {
        return nim;
    }
    public String getNama()
    {
        return nama;
    }
    public int getSmt()
    {
        return smt;
    }
    public int getSks()
    {
        return sks;
    }
    // public int getSpp()
    // {
    //     return spp;
    // }
    
    public int TotalTagihan()
    {
        int total;
        int spp;
        if (smt <=2)
        {
            total = sks*300000;
            spp = 3000000;
        }else if (smt >= 3 && smt <=6){
            total = sks*275000;
            spp = 2900000;
        }else{
            total = sks*250000;
            spp = 2750000;
        }
        return total + spp;
    }

    public void getAkademik()
    {
        System.out.println("NIM mahasiswa : " + nim);
        System.out.println("Nama Mahasiswa : " + nama);
        System.out.println("Jumlah sks mahasiswa : " + sks);
        System.out.println("Semester mahasiswa : " + smt);
        System.out.println("Tagihan mahasiswa : "+ TotalTagihan());
    }
}
