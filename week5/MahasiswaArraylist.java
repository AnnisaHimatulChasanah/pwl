package week5;

import week0.mahasiswa;
import java.util.*;

public class MahasiswaArraylist {
    public static void main(String[] args) {
        mahasiswa mhs = new mahasiswa("13980", "nisa");
        // mhs.insertNilai(100);
        mhs.insertNilai(100);
        mhs.insertNilai(90);
        mhs.insertNilai(152);
        mhs.insertNilai(104);
        mhs.insertNilai(122);

        mhs.insertMatkul("PBO", "4410", 4);
        mhs.getIdentitas();       
    }
}
