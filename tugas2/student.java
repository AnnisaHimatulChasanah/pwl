package tugas2;

public class student extends person{
        String nim;

        public String getNim()
        {
            return nim;
        }

        @Override
        public void identity()
        {
            System.out.println("NIM : "+getNim());
            super.identity();
        }
}
