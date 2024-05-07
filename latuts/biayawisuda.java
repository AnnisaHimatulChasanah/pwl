package latuts;

public class biayawisuda {
    private int biaya_wisuda, biaya_sidang;

    public biayawisuda(String nim, int biaya_sidang)
    {
        this.biaya_wisuda = setBiayawisuda(nim);
        this.biaya_sidang = biaya_sidang;
    }

    public void setBiayasidang(int biayasidang){
        biaya_sidang = biayasidang;
    }

    public int getBiayawisuda()
    {
        return biaya_wisuda;
    }
    public int getBiayasidang()
    {
        return biaya_sidang;
    }
    public int setBiayawisuda(String awal)
    {
        String AwalNim = awal.substring(0, 3);
        
        if(AwalNim.equals("A11") || AwalNim.equals("A12"))
        {
            return 2000000;
        } else if (AwalNim.equals("A14")){
            return 1750000;
        } else if (AwalNim.equals("A15")){
            return 1500000;
        }else {
            return 1250000;
        }
    }

}
