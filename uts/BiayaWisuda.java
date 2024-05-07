package uts;

public class BiayaWisuda {
    private int biaya_wisuda, biaya_sidang;
    
    public BiayaWisuda(String nim, int biaya_sidang) {
        this.biaya_wisuda = setBiayaWisuda(nim);
        this.biaya_sidang = biaya_sidang;
    }

    // public void setBiayaWisuda(int biayaWisuda){
    //     biaya_wisuda = biayaWisuda;
    // }

    public void setBiayaSidang(int biayaSidang){
        biaya_sidang = biayaSidang;
    }

    public int getBiayaWisuda(){
        return biaya_wisuda;
    }

    public int getBiayaSidang(){
        return biaya_sidang;
    }

    public int setBiayaWisuda(String x){
        String kode = x.substring(0, 3);

        if(kode.equals("A11") || kode.equals("A12")){
            return 2000000;
        } else if(kode.equals("A14")){
            return 1750000;
        } else if(kode.equals("A15")){
            return 1500000;
        }else {
            return 1250000;
        }
    }
}
