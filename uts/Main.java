package uts;

import java.io.Console;
import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        String nim, nama, tanggal_lahir, asal_sekolah, judul_skripsi;
        int nomor_urut;

        Scanner inp = new Scanner(System.in);
        Console input = System.console();

        System.out.println("## Masukkan Data ##");
        System.out.print("Nama: ");
        nama = inp.next();
        System.out.print("NIM: ");
        nim = inp.next();
        System.out.print("Tanggal Lahir: ");
        tanggal_lahir = inp.next();
        System.out.print("Asal_sekolah: ");
        asal_sekolah = input.readLine();
        System.out.print("Nomor urut: ");
        nomor_urut = inp.nextInt();
        System.out.print("Judul Skripsi: ");
        judul_skripsi = input.readLine();

        MahasiswaWisuda mahasiswa = new MahasiswaWisuda(nama, nim, tanggal_lahir, asal_sekolah, nomor_urut, judul_skripsi);
        BiayaWisuda biaya = new BiayaWisuda(nim, 350000);

        ArrayList<Integer> biaya_wisuda = new ArrayList<>();
        biaya_wisuda.add(biaya.getBiayaWisuda());
        mahasiswa.setBiayaWisuda(biaya_wisuda);

        ArrayList<Integer> biaya_sidang = new ArrayList<>();
        biaya_sidang.add(biaya.getBiayaSidang());
        mahasiswa.setBiayaSidang(biaya_sidang);

        // tampilin data
        System.out.println(mahasiswa.getNIM().substring(0, 3));
        System.out.println(biaya.getBiayaWisuda());
        System.out.println("\n## Data Mahasiswa ##");
        mahasiswa.dataWisuda();
    }
}
