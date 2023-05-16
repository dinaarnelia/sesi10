<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>
    
    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" id="nama" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" id="jk" name="txJK" value="L">Laki-Laki
            <input type="radio" id="jk" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN" id="jurusan">
            <option value="TI-KAB">TI-KAB</option>
            <option value="TI-MTI">TI-MTI</option>
            <option value="TI-PAR">TI-PAR</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="DGM">Desain Grafis Multimedia</option>
            <option value="BD">Bisnis Digital</option>
            <option value="SK">Sistem Komputer</option>
            </select>
        </div>

        <div>
            Hobi
            <input type="checkbox" id="txhobi" name="musik">Musik
            <input type="checkbox" id="txhobi" name="membaca">Membaca
            <input type="checkbox" id="txhobi" name="traveling"> Traveling
            <input type="checkbox" id="txhobi" name="olahraga">Olahraga
            <input type="checkbox" id="txhobi" name="tidur">Tidur
            <input type="checkbox" id="txhobi" name="melukis">Melukis
            <input type="checkbox" id="txhobi" name="menyanyi">Menyanyi
            <input type="checkbox" id="txhobi" name="menari">Menari
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>

        <script>
            function checkform(){
                let f = document.getElementById("Latihan02").elements;
                let nim = f.nim.value;
                let nama = f.nama.value;
                let jeniskelamin = f.jk.value;
                let jurusan = f.jurusan.value;
                let hobi_musik = f.txhobi[0].checked;
                let hobi_membaca = f.txhobi[1].checked;
                let hobi_traveling = f.txhobi[2].checked;
                let hobi_olahraga = f.txhobi[3].checked;
                let hobi_tidur = f.txhobi[4].checked;
                let hobi_melukis = f.txhobi[5].checked;
                let hobi_menyanyi = f.txhobi[6].checked;
                let hobi_menari = f.txhobi[7].checked;

                
                console.log("NIM: "+nim);
                console.log("Nama: "+nama);
                console.log("JenisKelamin: "+jeniskelamin);
                console.log("Jurusan: "+jurusan);
                console.log("Musik: "+hobi_musik);
                console.log("Membaca: "+hobi_membaca);
                console.log("Traveling: "+hobi_traveling);
                console.log("Olahraga: "+hobi_olahraga);
                console.log("Tidur: "+hobi_tidur);
                console.log("Melukis: "+hobi_melukis);
                console.log("Menyanyi: "+hobi_menyanyi);
                console.log("Menari: "+hobi_menari);
                return false;
            }
        </script>
</body>
</html>