package uts;

import java.time.LocalDate;
import java.time.Period;
import java.util.ArrayList;
import java.util.Iterator;
import week1.Mahasiswa;

public class MahasiswaWisuda extends Mahasiswa{

    private int nomor_urut;
    private String judul_skripsi;
    private ArrayList<Integer> biaya_wisuda;
    private ArrayList<Integer> biaya_sidang;

    public MahasiswaWisuda(String nama, String nim, String tanggal_lahir, String asal_sekolah, int nomor_urut, String judul_skripsi){
        super(nama, nim, tanggal_lahir, asal_sekolah);
        this.nomor_urut = nomor_urut;
        this.judul_skripsi = judul_skripsi;
        biaya_wisuda = new ArrayList<>();
        biaya_sidang = new ArrayList<>();
    }

    public int getNomorUrut(){
        return nomor_urut;
    }

    public String getJudulSkripsi(){
        return judul_skripsi;
    }

    public void setBiayaWisuda(ArrayList<Integer> b_wisuda){
        biaya_wisuda = b_wisuda;
    }

    public void setBiayaSidang(ArrayList<Integer> b_sidang){
        biaya_sidang = b_sidang;
    }
    
    public int getTotalTagihan(){
        int total = 0;

        // pake iterator
        Iterator<Integer> b_wisuda = biaya_wisuda.iterator();
        while(b_wisuda.hasNext()){
            total += b_wisuda.next();
        }

        // pake for
        for(int b_sidang : biaya_sidang){
            total += b_sidang;
        }

        return total;
    }

    public Double setDiskon(){
        String kode = nim.substring(0, 3);
        Double diskon = 0.0;
        
        if(kode == "A11" || kode == "A12"){
            diskon = 0.1;
        }else {
            diskon = 0.05;
        }

        return diskon;
    }

    public int getDiskon(){
        int diskon;

        diskon = (int) (getTotalTagihan()*0.1);

        return diskon;
    }

    public int getTagihanBayar(){
        int total = 0;

        total = getTotalTagihan() - getDiskon();

        return total;
    }

    public String getUsia(){
        String tgl_lahir = super.getTanggal_lahir();
        String tgl = tgl_lahir.substring(0,2);//01-12-2004
        String bln = tgl_lahir.substring(3,5);
        String thn = tgl_lahir.substring(6);

        LocalDate today = LocalDate.now();
        LocalDate birtdate = LocalDate.of(Integer.parseInt(thn), Integer.parseInt(bln), Integer.parseInt(tgl));

        // LocalDate birtdate = LocalDate.of

        int tahun = Period.between(birtdate, today).getYears();
        int bulan = Period.between(birtdate, today).getMonths();
        // int hari = Period.between(birtdate, today).getDays();

        return Integer.toString(tahun)+" Tahun " + Integer.toString(bulan)+" Bulan";
    }

    public void dataWisuda(){
        System.out.println("Nim: "+super.getNIM());
        System.out.println("Nama: " + super.getNama());
        System.out.println("##Format Tanggal Lahir: Tgl-Bln-Thn##");
        System.out.println("Tanggal Lahir: "+super.getTanggal_lahir());
        System.out.println("Usia: "+getUsia());
        System.out.println("Nomor Urut: "+getNomorUrut());
        System.out.println("Judul Skripsi: "+getJudulSkripsi());
        System.out.println("Jumlah Tagihan: "+getTotalTagihan());
        System.out.println("Diskon: "+(getDiskon()*100/getTotalTagihan())+"%");
        System.out.println("Tagihan harus dibayar: "+getTagihanBayar());
    }
}