from tugasb import Timbola

# instansiasi objek
Tim1 = Timbola()
Tim1.setNama("Meikarta FC")
Tim1.setNegaraAsal("Indonesia")
Tim1.setTahunBerdiri("2020")
pemain = ["Bambang Riza", "Andi Riza", "Aldo Riza", "Didi Riza", "Doni Riza"]
Tim1.setPemain(pemain)

# output
print("NAMA : " + str(Tim1.getNama()))
print("NegaraAsal : " + str(Tim1.getNegaraAsal()))
print("TahunBerdiri : " + str(Tim1.getTahunBerdiri()))

for i in range(5):
    print("Pemain " + str(i+1) + ": " + str(Tim1.getPemain(i)))