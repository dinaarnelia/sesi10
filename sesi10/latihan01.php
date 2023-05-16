<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>
    
    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN">
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
            <input type="checkbox" name="musik">Musik
            <input type="checkbox" name="membaca">Membaca
            <input type="checkbox" name="traveling"> Traveling
            <input type="checkbox" name="olahraga">Olahraga
            <input type="checkbox" name="tidur">Tidur
            <input type="checkbox" name="melukis">Melukis
            <input type="checkbox" name="menyanyi">Menyanyi
            <input type="checkbox" name="menari">Menari
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>

        <script>
            function checkform(frm){
                let f = frm.elements;
                let nim = f.namedItem("txNIM").value;
                let nama = f.namedItem("txNAMA").value;
                let jeniskelamin = f.namedItem("txJK").value;
                let jurusan = f.namedItem("txJURUSAN").value;
                let hobi_musik = f.namedItem("musik").checked;
                let hobi_membaca = f.namedItem("membaca").checked;
                let hobi_traveling = f.namedItem("traveling").checked;
                let hobi_olahraga = f.namedItem("olahraga").checked;
                let hobi_tidur = f.namedItem("tidur").checked;
                let hobi_melukis = f.namedItem("melukis").checked;
                let hobi_menyanyi = f.namedItem("menyanyi").checked;
                let hobi_menari = f.namedItem("menari").checked;

                
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