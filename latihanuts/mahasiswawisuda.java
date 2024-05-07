package latihanuts;
import java.util.ArrayList;
import java.util.Iterator;

import week7.mahasiswa;

public class mahasiswawisuda extends mahasiswa{
    private int nomor_urut;
    private String judul_skripsi;
    private ArrayList<Integer> biaya_wisuda = new ArrayList<>();
    private ArrayList<Integer> biaya_sidang = new ArrayList<>();

    public mahasiswawisuda (String nama, String nim, String tanggal_lahir, String asal_sekolah, int nomor_urut, String judul_skripsi)
    {
        super(nim, nama, tanggal_lahir, asal_sekolah);
        this.nomor_urut = nomor_urut;
        this.judul_skripsi = judul_skripsi;
        biaya_wisuda = new ArrayList<>();
        biaya_sidang = new ArrayList<>();
    }

    public int getNomorurut(){
        return nomor_urut;
    }

    public String getJudulskripsi()
    {
        return judul_skripsi;
    }

    public void setBiayawisuda(ArrayList<Integer> biayawisuda)
    {
        biaya_wisuda = biayawisuda;
    }

    public void setBiayasidang(ArrayList<Integer> biayasidang)
    {
        biaya_sidang = biayasidang;
    }

    public int getTotaltagihan()
    {
        int total = 0;

        //iterator
        Iterator<Integer> biayawisuda = biaya_wisuda.iterator();
        while(biayawisuda.hasNext())
        {
            total+=biayawisuda.next();
        }

        Iterator<Integer> biayasidang = biaya_sidang.iterator();
        while(biayasidang.hasNext())
        {
            total+=biayasidang.next();
        }

        return total;
    }

    public Double setDiskonBiaya()
    {
        String awalNim = nim.substring(0, 3);
        Double diskon = 0.0;

        if(awalNim.equals("A11") || awalNim.equals("A12"))
        {
            diskon = 0.1;
        } else {
            diskon = 0.05;
        }
        return diskon;
    }
    public int getDiskonBiaya()
    {
        int diskon;

        diskon = (int) (getTotaltagihan()*setDiskonBiaya());

        return diskon;
    }
    public int getBayarTagihan()
    {
        int total = 0;

        total = getTotaltagihan() - getDiskonBiaya();

        return total;
    }

    public void TampilData()
    {
        System.out.println("NIM : "+super.getNim());
        System.out.println("Nama : "+super.getNama());
        System.out.println("Tanggal Lahir : "+super.getTglLahir());
        System.out.println("Nomor Urut : "+getNomorurut());
        System.out.println("Judul Skripsi : "+getJudulskripsi());
        System.out.println("Jumlah Tagihan : "+getTotaltagihan());
        System.out.println("Diskon : "+(getDiskonBiaya()*100/getTotaltagihan()+"%"));
        System.out.println("Tagihan yang harus dibayar : "+getBayarTagihan());
    }
}
