package week7;

public class MahasiswaAktif extends mahasiswa{ //extends merupakan subclass
    public int usia;
    public int semester;

    public MahasiswaAktif(String nim, String nama, String tanggal_lahir, int semester, int usia)
    {
        super(nim, nama, tanggal_lahir);
        this.semester = semester;
        this.usia = usia;
    }

    //getter
    public int getUsia()
    {
        return usia;
    }
    public int getSmt()
    {
        return semester;
    }
    public void getIdentitas2()
    {
        System.out.println("NIM Mahasiswa : "+super.getNim());
        System.out.println("Nama : Mahasiswa : " +super.getNama());
        System.out.println("Tanggal Lahir : "+super.getTglLahir());
        System.out.println("Semester : " +getSmt());
        System.out.println("Usia : "+getUsia());

    }
}
