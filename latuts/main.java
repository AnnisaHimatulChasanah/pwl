package latuts;
import java.util.ArrayList;
import java.util.*;

public class main {
    public static void main(String[] args) {
        String nim, nama, tanggal_lahir, asal_sekolah, judul_skripsi;
        int nomor_urut;
        Double diskon;
        int n;
        System.out.println("Masukkan Jumlah data : ");
        Scanner input = new Scanner(System.in);
        n = input.nextInt();

        mahasiswawisuda[] mhs = new mahasiswawisuda[n];
        biayawisuda[] biaya = new biayawisuda[n];

        for(int i = 0; i < n ; i++){
            System.out.println("Masukkan data");
            System.out.print("Nim : ");
            nim = input.next();
            System.out.print("Nama : ");
            nama = input.next();
            System.out.print("Tanggal Lahir : ");
            tanggal_lahir = input.next();
            System.out.print("Asal Sekolah : ");
            asal_sekolah = input.next();
            System.out.print("nomor urut : ");
            nomor_urut = input.nextInt();
            System.out.print("Judul Skripsi : ");
            judul_skripsi = input.next();
            System.out.print("Diskon : ");
            diskon = input.nextDouble();
            
            mhs[i] = new mahasiswawisuda(nama, nim, tanggal_lahir, asal_sekolah, nomor_urut, judul_skripsi, diskon);
            biaya[i] = new biayawisuda(nim, 350000);

            ArrayList<Integer> biaya_wisuda = new ArrayList<>();
            biaya_wisuda.add(biaya[i].getBiayawisuda());
            mhs[i].setBiayawisuda(biaya_wisuda);

            ArrayList<Integer> biaya_sidang = new ArrayList<>();
            biaya_sidang.add(biaya[i].getBiayasidang());
            mhs[i].setBiayasidang(biaya_sidang);

        }
        for (int i = 0; i<n; i++)
        {
            //menampilkan
            System.out.print(mhs[i].getNim().substring(0, 3));
            System.out.println(biaya[i].getBiayawisuda());
            System.out.println("Data Mahasiswa ke - "+(i+1));
            mhs[i].TampilData();
        }
    }
}
