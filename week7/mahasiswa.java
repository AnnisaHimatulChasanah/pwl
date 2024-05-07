package week7;
import java.util.ArrayList;
import java.util.Iterator;

import week5.Matakuliah;

public class mahasiswa
{
    protected String nim, nama, tanggal_lahir, asal_sekolah; //karakter
    // private int usia; //atribut
    // private Double ipk;
    private ArrayList<Double> nilai = new ArrayList<Double>(); //bentuknya array list, setiap mhs mempunyai nilai masing2
    //class Double, kalau double ..
    private ArrayList<Matakuliah> mk = new ArrayList<Matakuliah>();

    public mahasiswa(String nim, String nama){ // konstraktor
        this.nim = nim;
        this.nama = nama;
        // this.ipk = ipk;
    }
    public mahasiswa(String nim, String nama, String tanggal_lahir, String asal_sekolah){ // konstraktor
        this.nim = nim;
        this.nama = nama;
        this.tanggal_lahir = tanggal_lahir;
        this.asal_sekolah = asal_sekolah;
        // this.ipk = ipk;
    }
    //getter
    public String getNim()
    {
        return nim;
    }
    public String getNama()
    {
        return nama;
    }
    public String getTglLahir()
    {
        return tanggal_lahir;
    }
    public String getAsalSekolah()
    {
        return asal_sekolah;
    }

    public void insertNilai(double nl) { //primitiv
        nilai.add(nl); // add method array list
    }

    public void insertMatkul(String matkul, String kelompok, int sks)
    {
        mk.add(new Matakuliah(matkul, kelompok, sks));
    }

    public void belajar() //method(perilaku,identitas), sebgai prosedur
    {
        System.out.println(nama + " belajar");
    } 

    public void mainGame()
    {
        System.out.println(nama + " main game");
    }

    public void getIdentitas()
    {
        System.out.println("Nama mahasiswa: " + nama);
        System.out.println("NIM mahasiswa: " + nim);
        // System.out.println("Tanggal Lahir Mahasiswa: " +tanggal_lahir);
        // System.out.println("IPK: " + ipk);
        getNilai();
        // getMatkul();
  
    }
    public void getNilai(){ //looping panggil class  yang mau di loop
        Iterator<Double> it = nilai.iterator();
        while(it.hasNext())
        {
            System.out.println(it.next());
        }
    }
    public void getMatkul()
    {
        System.out.println("Daftar Mata Kuliah :");
        Iterator<Matakuliah> matkul = mk.iterator();
        while(matkul.hasNext())
        {
            Matakuliah m = matkul.next();
            System.out.println(m.getNamaMatkul()+" - "+m.getKelompok()+" - "+m.getSks());
        }
    }
}