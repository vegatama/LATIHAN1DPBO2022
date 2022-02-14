#include "tugasb.cpp"

int main(){
	/*instansiasi objek*/
	Timbola Tim1;
	Tim1.setNama("Meikarta FC");
	Tim1.setnegaraAsal("Indonesia");
	Tim1.setTahunBerdiri("2020");
	string pemain[5] = {"Bambang Riza", "Andi Riza", "Aldo Riza", "Didi Riza", "Doni Riza"};
	Tim1.setPemain(pemain);

	/*output*/
	cout << "NAMA : " << Tim1.getNama() << endl;
	cout << "NegaraAsal : " << Tim1.getnegaraAsal() << endl;
	cout << "TahunBerdiri : " << Tim1.getTahunBerdiri() << endl;

	for (int i = 1; i < 6; i++){
		cout << "Pemain " << i << ": " << Tim1.getPemain(i) << endl;
	}

	return 0;
}