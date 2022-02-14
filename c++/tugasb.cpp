#include <iostream>
#include <string>

using namespace std;

class Timbola{
	private:
	/*atribut ptivate*/
		string Nama;
		string NegaraAsal;
		string TahunBerdiri;
		string Pemain[5];

	public:
		/*constructor*/
		Timbola(){
			this->Nama = this->NegaraAsal = this->TahunBerdiri = "";
			this->Pemain[0] = this->Pemain[1] = this->Pemain[2] = this->Pemain[3] = this->Pemain[4] = "";
		}

		/*getter/setter*/
		void setNama(string Nama){
			this->Nama = Nama;
		}
		string getNama(){
			return this->Nama;
		}
		void setnegaraAsal(string NegaraAsal){
			this->NegaraAsal = NegaraAsal;
		}
		string getnegaraAsal(){
			return this->NegaraAsal;
		}
		void setTahunBerdiri(string TahunBerdiri){
			this->TahunBerdiri = TahunBerdiri;
		}
		string getTahunBerdiri(){
			return this->TahunBerdiri;
		}
		void setPemain(string Pemain[]){
			this->Pemain[0] = Pemain[0];
			this->Pemain[1] = Pemain[1];
			this->Pemain[2] = Pemain[2];
			this->Pemain[3] = Pemain[3];
			this->Pemain[4] = Pemain[4];
		}
		string getPemain(int i){
			return this->Pemain[i-1];
		}
		/*destructor*/
		~Timbola(){}
};