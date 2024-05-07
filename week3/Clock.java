package week3;

public class Clock {
    public static void main(String[] args) {
        ClockDisplay jam = new ClockDisplay(15,55);
        jam.timeTick(); // fungsinya nambah 1
        System.out.println(jam.getTime());
    }
}
