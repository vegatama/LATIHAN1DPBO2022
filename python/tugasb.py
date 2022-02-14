class Timbola:
	# atribut private
	Nama = ""
	NegaraAsal = ""
	TahunBerdiri = ""
	Pemain = ["", ""]

	# getter/setter
	def setNama(self, Nama):
		self.Nama = Nama

	def getNama(self):
		return self.Nama

	def setNegaraAsal(self, NegaraAsal):
		self.NegaraAsal = NegaraAsal

	def getNegaraAsal(self):
		return self.NegaraAsal
	
	def setTahunBerdiri(self, TahunBerdiri):
		self.TahunBerdiri = TahunBerdiri

	def getTahunBerdiri(self):
		return self.TahunBerdiri

	def setPemain(self, Pemain):
		self.Pemain = Pemain

	def getPemain(self, i):
		return self.Pemain[i]