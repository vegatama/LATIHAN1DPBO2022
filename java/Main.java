public class Main {
    public static void main(String[] args){
        // instansiasi objek
        Tugasb Tim1 = new Tugasb();
        Tim1.setNama("Meikarta FC");
        Tim1.setNegaraAsal("Indonesia");
        Tim1.setTahunBerdiri("2020");
        String[] pemain = {"Bambang Riza", "Andi Riza", "Aldo Riza", "Didi Riza", "Doni Riza"};
        Tim1.setPemain(pemain);

        // output
        System.out.println("NAMA : " + Tim1.getNama());
        System.out.println("NegaraAsal : " + Tim1.getNegaraAsal());
        System.out.println("TahunBerdiri : " + Tim1.getTahunBerdiri());

        for(int i=1; i<6; i++){
            System.out.println("Pemain " + i + ": " + Tim1.getPemain(i-1));
        }
    }
}
