public class Dosen04 {
    String idDosen;
    String nama;
    String bidangKeahlian;
    boolean statusAktif;
    int tahunBergabung;

    public Dosen04() {
    }
    public Dosen04(String idDosen, String nm, boolean statusAktif, int thnGabung, String bidangKeahlian) {
        this.idDosen = idDosen;
        nama = nm;
        this.statusAktif = statusAktif;
        tahunBergabung = thnGabung;
        this.bidangKeahlian = bidangKeahlian;
    }
    public void tampilInformasi() {
        System.out.println("ID Dosen: " + idDosen);
        System.out.println("Nama: " + nama);
        System.out.println("Status Aktif: " + statusAktif);
        System.out.println("Tahun Bergabung: " + tahunBergabung);
        System.out.println("Bidang Keahlian: " + bidangKeahlian);
    }
    public void setStatusAktif(boolean status) {
        this.statusAktif = status;
        System.out.println("Status aktif dosen saat ini : " + statusAktif);
    }
    public int hitungMasaKerja(int thnSkrg) {
        return thnSkrg - tahunBergabung;
    }
    public void ubahKeahlian(String bidang) {
        this.bidangKeahlian = bidang;
        System.out.println("Bidang keahlian dosen saat ini : " + bidangKeahlian);
    }
}