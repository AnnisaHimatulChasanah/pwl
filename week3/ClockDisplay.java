package week3;

public class ClockDisplay {
    private NumberDisplay hours; //atribut dengan tipe data numberDisplay
    private NumberDisplay minutes;
    private String displayString;

    //constructor
    public ClockDisplay()
    {
        hours = new NumberDisplay(24);
        minutes = new NumberDisplay(60);
        updateDisplay();
    }

    public ClockDisplay(int hour, int minute)
    {
        hours = new NumberDisplay(24);
        minutes = new NumberDisplay(60);
        setTime(hour, minute);
    }
    public void timeTick() // menambahkan 1 nilai
    {
        minutes.increment(); //minutes objek yang terbentuk dari cons, inctrment method
        if(minutes.getValue() == 0)
        {
            hours.increment();
        }
        updateDisplay();
    }
    public void setTime(int hour, int minute) // ngeset nilai
    {
        hours.setValue(hour);
        minutes.setValue(minute);
        updateDisplay();
    }

    public String getTime()
    {
        return displayString;
    }
    private void updateDisplay()
    {
        displayString = hours.getDisplayValue() + ":" + minutes.getDisplayValue(); // menampilkan jam : menit
    }
}
