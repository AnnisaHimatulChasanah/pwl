package week3;

public class NumberDisplay 
{
    private int limit; // batas = 60s
    private int value; // nilai = 16s

    //constructor
    public NumberDisplay(int rollOverLimit)
    {
        limit = rollOverLimit;
        value = 0;
    }

    public int getValue()
    {
        return value;
    }
    public void setValue(int nilai) // nilai parameter
    {
        if((nilai >= 0) && (nilai < limit))
        {
            value = nilai;
        }
    }
    public String getDisplayValue()
    {
        if(value < 10)
        {
            return "0" + value; // concatenate kalau angka 0-9 pada jam akan ditambahkan 0 ; jam 09 : ...
        }
        else {
            return "" + value;
        }
    }
    public void increment()
    {
        value = (value+1) % limit;
    }
}
