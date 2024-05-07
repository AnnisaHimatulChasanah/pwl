package latihanuts;
import java.util.ArrayList;
import java.util.*;

public class main {
    public static void main(String[] args) {
        String nim, nama, tanggal_lahir, asal_sekolah, judul_skripsi;
        int nomor_urut;

        Scanner input = new Scanner(System.in);

        System.out.println("Masukkan data");
        System.out.println("Nim : ");
        nim = input.next();
        System.out.println("Nama : ");
        nama = input.next();
        System.out.println("Tanggal Lahir : ");
        tanggal_lahir = input.next();
        System.out.println("Asal Sekolah : ");
        asal_sekolah = input.next();
        System.out.println("nomor urut : ");
        nomor_urut = input.nextInt();
        System.out.println("Judul Skripsi : ");
        judul_skripsi = input.next();
        
        mahasiswawisuda mhs = new mahasiswawisuda(nama, nim, tanggal_lahir, asal_sekolah, nomor_urut, judul_skripsi);
        biayawisuda biaya = new biayawisuda(nim, 350000);

        ArrayList<Integer> biaya_wisuda = new ArrayList<>();
        biaya_wisuda.add(biaya.getBiayawisuda());
        mhs.setBiayawisuda(biaya_wisuda);

        ArrayList<Integer> biaya_sidang = new ArrayList<>();
        biaya_sidang.add(biaya.getBiayasidang());
        mhs.setBiayasidang(biaya_sidang);

        //menampilkan
        System.out.println(mhs.getNim().substring(0, 3));
        System.out.println(biaya.getBiayawisuda());
        System.out.println("Data Mahasiswa");
        mhs.TampilData();
    }
}
