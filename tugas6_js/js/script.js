let i = 1

class Gempa {
    constructor(lokasi, skala) {
        this.loc = lokasi
        this.scale = skala
    }

    dampak() {
        if(this.scale <= 2) {
            this.dampak_gempa = 'Tidak terasa'
        }

        else if(this.scale > 2 && this.scale <= 4) {
            this.dampak_gempa = 'Bangunan retak-retak'
        }

        else if(this.scale > 4 && this.scale <= 6) {
            this.dampak_gempa = 'Bangunan roboh'
        }

        else {
            this.dampak_gempa = 'Bangunan roboh dan berpotensi tsunami'
        }

        return this.dampak_gempa
    }

    infoGempa() {
        document.write(`
            <tr>
                <th scope="row">${i++}</th>
                <td>${this.loc}</td>
                <td>${this.scale}</td>
                <td>${this.dampak()}</td>
            </tr>
        `)
    }
}

g1 = new Gempa('Pantai Morowali', 3.6)
g2 = new Gempa('Kepulauan Talaud', 7)
g3 = new Gempa('Kabupaten Halmahera Selatan', 5.2)
g4 = new Gempa('Kepulauan Mentawai', 5.7)
g5 = new Gempa('Kabupaten Malang', 6.1)
g6 = new Gempa('Kabupaten Sukabumi', 5.6)
g7 = new Gempa('Kota Blitar', 6.2)
g8 = new Gempa('Kota Masohi', 6.1)
g9 = new Gempa('Gunung Kidul', 5.3)
g10 = new Gempa('Kota Mamuju', 6.2)

g1.infoGempa()
g2.infoGempa()
g3.infoGempa()
g4.infoGempa()
g5.infoGempa()
g6.infoGempa()
g7.infoGempa()
g8.infoGempa()
g9.infoGempa()
g10.infoGempa()
