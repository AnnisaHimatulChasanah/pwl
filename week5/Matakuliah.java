package week5;

public class Matakuliah {
    private String nama;
    private String kelompok;
    private int sks;

    public Matakuliah(String nama, String kelompok, int sks)
    {
        this.nama = nama;
        this.kelompok = kelompok;
        this.sks = sks;
    }

    public String getNamaMatkul()
    {
        return nama;
    }

    public String getKelompok()
    {
        return kelompok;
    }

    public int getSks()
    {
        return sks;
    }
}
