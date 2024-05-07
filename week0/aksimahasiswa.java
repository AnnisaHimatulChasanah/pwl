package week0;
public class aksimahasiswa
{
    public static void main(String[] agrs) //konsep kayak int main
    {
        mahasiswa mhs = new mahasiswa();  //nama objek = mhs1;;;; untuk tipe data sejenis float = mahasiswa
        mhs.nim = "A11.22.14319"; //mhs1 untuk class
        mhs.nama = "Shelomita";
        mhs.usia = 19;
        mhs.getIdentitas();
        mhs.belajar();

        // mahasiswa mhs2 = new mahasiswa();  //nama objek = mhs1;;;; untuk tipe data sejenis float = mahasiswa
        // mhs2.nim = "A11.22.14319"; //mhs1 untuk class
        // mhs2.nama = "Shelomita";
        // mhs2.usia = 19;
        // mhs2.getIdentitas();
        // mhs2.belajar();
    }
}

// untuk buat class "javac week1\aksimahasiswa.java"
// untuk run "java week1.aksimahasiswa"