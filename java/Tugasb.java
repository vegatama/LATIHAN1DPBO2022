public class Tugasb {
	// atribut private
    private String Nama;
	private String NegaraAsal;
	private String TahunBerdiri;
	private String[] Pemain;

	// setter/getter
	public void setNama(String Nama) {
		this.Nama = Nama;
	}
	public String getNama() {
		return Nama;
	}
	public void setNegaraAsal(String NegaraAsal) {
		this.NegaraAsal = NegaraAsal;
	}
	public String getNegaraAsal() {
		return NegaraAsal;
	}
	public void setTahunBerdiri(String TahunBerdiri) {
		this.TahunBerdiri = TahunBerdiri;
	}
	public String getTahunBerdiri() {
		return TahunBerdiri;
	}
	public void setPemain(String[] Pemain) {
		this.Pemain = Pemain;
	}
	public String getPemain(int i) {
		return Pemain[i];
	}
}