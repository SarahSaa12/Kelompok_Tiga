<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/evaluasi.css')); ?>">
</head>
<body style="background-image: url('images/pilihan.png');">
<div class="Latihan_log">
    <div class="grid">
        <div class="petunjuk">
            <h3>NOMOR SOAL</h3>
            <div class="kontainer2">
                <div class="nomor_soal">
                    <button class="btn-1">1</button>
                    <button class="btn-2">2</button>
                    <button class="btn-3">3</button>
                    <button class="btn-4">4</button>
                    <button class="btn-5">5</button>
                    <button class="btn-6">6</button>
                    <button class="btn-7">7</button>
                    <button class="btn-8">8</button>
                    <button class="btn-9">9</button>
                    <button class="btn-10">10</button>
                </div>
            </div>
        </div>
        <div class="login">
            <h3>SOAL</h3>
            <div class="kontainer3">
                <div id="soal_1">
                    1.	Apa yang dimaksud dengan perangkat keras (hardware)?<br><br>
                
                        <input type="radio" name="soal_1" onclick="pilihanPengguna(value)" value="a"><label>Komponen fisik yang membentuk sistem komputer</label><br>
                        <input type="radio" name="soal_1" onclick="pilihanPengguna(value)" value="b"><label>Program yang menjalankan tugas-tugas komputer</label><br>
                        <input type="radio" name="soal_1" onclick="pilihanPengguna(value)" value="c"><label>Bahasa pemrograman yang digunakan untuk mengembangkan aplikasi</label><br>
                        <input type="radio" name="soal_1" onclick="pilihanPengguna(value)" value="d"><label>Kumpulan data dan informasi yang disimpan dalam komputer</label><br><br>
                    
                    <div id="btn">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_2">
                    2.	Perangkat keras yang bertanggung jawab untuk menghasilkan output visual pada layar komputer disebut?<br><br>
                
                        <input type="radio" name="soal_2" onclick="pilihanPengguna(value)" value="a"><label>Monitor</label><br>
                        <input type="radio" name="soal_2" onclick="pilihanPengguna(value)" value="b"><label>Printer</label><br>
                        <input type="radio" name="soal_2" onclick="pilihanPengguna(value)" value="c"><label>Keyboard</label><br>
                        <input type="radio" name="soal_2" onclick="pilihanPengguna(value)" value="d"><label>Mouse</label><br><br>
                    
                    <div id="btn2">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_3">
                    3.	Perangkat keras apa yang ditunjukkan pada gambar di bawah ini?<br><br>
                        <img src="<?php echo e(asset('images/perangkatInput/ROM-Drive.png')); ?>" alt="gambar rom-drive">
                        <input type="radio" name="soal_3" onclick="pilihanPengguna(value)" value="a"><label>Mouse</label><br>
                        <input type="radio" name="soal_3" onclick="pilihanPengguna(value)" value="b"><label>ROM-Drive</label><br>
                        <input type="radio" name="soal_3" onclick="pilihanPengguna(value)" value="c"><label>HDMI</label><br>
                        <input type="radio" name="soal_3" onclick="pilihanPengguna(value)" value="d"><label>Sound Card<label><br><br>
                    
                    <div id="btn3">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_4">
                    4.	Gambar di bawah ini menunjukkan jenis koneksi perangkat keras apa?<br><br>
                        <img src="<?php echo e(asset('images/perangkatProses/VGA.png')); ?>" alt="gambar VGA">
                        <input type="radio" name="soal_4" onclick="pilihanPengguna(value)" value="a"><label>USB</label><br>
                        <input type="radio" name="soal_4" onclick="pilihanPengguna(value)" value="b"><label>Ethernet<br>
                        <input type="radio" name="soal_4" onclick="pilihanPengguna(value)" value="c"><label>HDMI<label><br>
                        <input type="radio" name="soal_4" onclick="pilihanPengguna(value)" value="d"><label>VGA</label><br><br>
                    
                    <div id="btn4">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_5">
                    5.	Komponen perangkat keras yang berfungsi untuk menyimpan data dan program secara permanen dalam komputer adalah? <br><br>
                
                        <input type="radio" name="soal_5" onclick="pilihanPengguna(value)" value="a"><label>Random Access Memory (RAM)</label><br>
                        <input type="radio" name="soal_5" onclick="pilihanPengguna(value)" value="b"><label>Central Processing Unit (CPU)</label><br>
                        <input type="radio" name="soal_5" onclick="pilihanPengguna(value)" value="c"><label>Hard Disk Drive (HDD)</label><br>
                        <input type="radio" name="soal_5" onclick="pilihanPengguna(value)" value="d"><label>Solid State Drive (SSD)</label><br><br>
                    
                    <div id="btn5">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_6">
                    6.	Perangkat keras yang digunakan untuk memasukkan data atau perintah ke dalam komputer adalah? <br><br>
                
                        <input type="radio" name="soal_6" onclick="pilihanPengguna(value)" value="a"><label>Monitor</label><br>
                        <input type="radio" name="soal_6" onclick="pilihanPengguna(value)" value="b"><label>Printer</label><br>
                        <input type="radio" name="soal_6" onclick="pilihanPengguna(value)" value="c"><label>Keyboard</label><br>
                        <input type="radio" name="soal_6" onclick="pilihanPengguna(value)" value="d"><label>Mouse</label><br><br>
                    
                    <div id="btn6">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_7">
                    7.	Komponen perangkat keras yang bertanggung jawab untuk menjalankan instruksi dan melakukan pemrosesan data dalam komputer adalah? <br><br>
                
                        <input type="radio" name="soal_7" onclick="pilihanPengguna(value)" value="a"><label>Central Processing Unit (CPU)</label><br>
                        <input type="radio" name="soal_7" onclick="pilihanPengguna(value)" value="b"><label>Random Access Memory (RAM)</label><br>
                        <input type="radio" name="soal_7" onclick="pilihanPengguna(value)" value="c"><label>Graphics Processing Unit (GPU)</label><br>
                        <input type="radio" name="soal_7" onclick="pilihanPengguna(value)" value="d"><label>Motherboard</label><br><br>
                    
                    <div id="btn7">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_8">
                    8.	Instruksi dasar yang bertanggung jawab untuk menjalankan tugas-tugas dasar dalam suatu prosesor disebut sebagai: <br><br>
                
                        <input type="radio" name="soal_8" onclick="pilihanPengguna(value)" value="a"><label>Unit Aritmatika dan Logika (Arithmetic and Logic Unit)</label><br>
                        <input type="radio" name="soal_8" onclick="pilihanPengguna(value)" value="b"><label>Register</label><br>
                        <input type="radio" name="soal_8" onclick="pilihanPengguna(value)" value="c"><label>Unit Kontrol (Control Unit)</label><br>
                        <input type="radio" name="soal_8" onclick="pilihanPengguna(value)" value="d"><label>Bus Data (Data Bus)</label><br><br>
                    
                    <div id="btn8">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_9">
                    9.	Perangkat memory apa yang ditunjukkan pada gambar di bawah ini?
                        <img src="<?php echo e(asset('images/perangkatMemory/ram.jpg')); ?>" alt="gambar ram"><br><br>
                        <input type="radio" name="soal_9" onclick="pilihanPengguna(value)" value="a"><label>Ram</label><br>
                        <input type="radio" name="soal_9" onclick="pilihanPengguna(value)" value="b"><label>Rom</label><br>
                        <input type="radio" name="soal_9" onclick="pilihanPengguna(value)" value="c"><label>SSD</label><br>
                        <input type="radio" name="soal_9" onclick="pilihanPengguna(value)" value="d"><label>NVme</label><br><br>
                    
                    <div id="btn9">
                        <button>Next</button>
                    </div>
                </div>
                <div id="soal_10">
                    10.	Perangkat memory apa yang ditunjukkan pada gambar di bawah ini?
                        <img src="<?php echo e(asset('images/perangkatMemory/rom.jpeg')); ?>" alt="gambar rom"><br><br>
                        <input type="radio" name="soal_10" onclick="pilihanPengguna(value)" value="a"><label>Ram</label><br>
                        <input type="radio" name="soal_10" onclick="pilihanPengguna(value)" value="b"><label>Rom</label><br>
                        <input type="radio" name="soal_10" onclick="pilihanPengguna(value)" value="c"><label>SSD</label><br>
                        <input type="radio" name="soal_10" onclick="pilihanPengguna(value)" value="d"><label>NVme</label><br><br>

                    <div id="btn10">
                        <button onclick="submit()"><a >Submit</a></button>
                    </div>
                </div>
                <div id="hasil">
                    <h4>SELAMAT ANDA TELAH MENYELESAIKAN LATIHAN SOAL!!!</h4>
                        <div class="hasil">
                            <div id="benar" ></div>
                            <div id="salah" ></div>
                            <div id="skor" ></div>

                            <form action="<?php echo e(route('soal.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="number" id = "skorInput" name="skorInput" class ="hidden"/><br>
                                <input type="text" name="namaInput" name="namaInput" placeholder="Masukkan Nama Anda" />
                                <button type="submit" id="submit" class="submit">Oke</button>
                            </form>
                        </div>
                </div>                    
            </div>	
        </div>
    </div>
</div>

<script>
    let btn;
    btn = document.getElementById("btn");
    btn2 = document.getElementById("btn2");
    btn3 = document.getElementById("btn3");
    btn4 = document.getElementById("btn4");
    btn5 = document.getElementById("btn5");
    btn6 = document.getElementById("btn6");
    btn7 = document.getElementById("btn7");
    btn8 = document.getElementById("btn8");
    btn9 = document.getElementById("btn9");
    btn10 = document.getElementById("btn10");

    let button;
    button1 = document.querySelector('.btn-1');
    button2 = document.querySelector('.btn-2');
    button3 = document.querySelector('.btn-3');
    button4 = document.querySelector('.btn-4');
    button5 = document.querySelector('.btn-5');
    button6 = document.querySelector('.btn-6');
    button7 = document.querySelector('.btn-7');
    button8 = document.querySelector('.btn-8');
    button9 = document.querySelector('.btn-9');
    button10 = document.querySelector('.btn-10');

    button1.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='block';
        soal_2.style.display='none';
        soal_3.style.display='none';
        soal_4.style.display='none';
        soal_5.style.display='none';
        soal_6.style.display='none';
        soal_7.style.display='none';
        soal_8.style.display='none';
        soal_9.style.display='none';
        soal_10.style.display='none';
    });

    button2.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='block';
        soal_3.style.display='none';
        soal_4.style.display='none';
        soal_5.style.display='none';
        soal_6.style.display='none';
        soal_7.style.display='none';
        soal_8.style.display='none';
        soal_9.style.display='none';
        soal_10.style.display='none';
    });

    button3.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='none';
        soal_3.style.display='block';
        soal_4.style.display='none';
        soal_5.style.display='none';
        soal_6.style.display='none';
        soal_7.style.display='none';
        soal_8.style.display='none';
        soal_9.style.display='none';
        soal_10.style.display='none';
    });

    button4.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='none';
        soal_3.style.display='none';
        soal_4.style.display='block';
        soal_5.style.display='none';
        soal_6.style.display='none';
        soal_7.style.display='none';
        soal_8.style.display='none';
        soal_9.style.display='none';
        soal_10.style.display='none';
    });

    button5.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='none';
        soal_3.style.display='none';
        soal_4.style.display='none';
        soal_5.style.display='block';
        soal_6.style.display='none';
        soal_7.style.display='none';
        soal_8.style.display='none';
        soal_9.style.display='none';
        soal_10.style.display='none';
    });

    button6.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='none';
        soal_3.style.display='none';
        soal_4.style.display='none';
        soal_5.style.display='none';
        soal_6.style.display='block';
        soal_7.style.display='none';
        soal_8.style.display='none';
        soal_9.style.display='none';
        soal_10.style.display='none';
    });

    button7.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='none';
        soal_3.style.display='none';
        soal_4.style.display='none';
        soal_5.style.display='none';
        soal_6.style.display='none';
        soal_7.style.display='block';
        soal_8.style.display='none';
        soal_9.style.display='none';
        soal_10.style.display='none';
    });

    button8.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='none';
        soal_3.style.display='none';
        soal_4.style.display='none';
        soal_5.style.display='none';
        soal_6.style.display='none';
        soal_7.style.display='none';
        soal_8.style.display='block';
        soal_9.style.display='none';
        soal_10.style.display='none';
    });

    button9.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='none';
        soal_3.style.display='none';
        soal_4.style.display='none';
        soal_5.style.display='none';
        soal_6.style.display='none';
        soal_7.style.display='none';
        soal_8.style.display='none';
        soal_9.style.display='block';
        soal_10.style.display='none';
    });

    button10.addEventListener("click", function(){
        let soal;
        soal_1 = document.querySelector('#soal_1');
        soal_2 = document.querySelector('#soal_2');
        soal_3 = document.querySelector('#soal_3');
        soal_4 = document.querySelector('#soal_4');
        soal_5 = document.querySelector('#soal_5');
        soal_6 = document.querySelector('#soal_6');
        soal_7 = document.querySelector('#soal_7');
        soal_8 = document.querySelector('#soal_8');
        soal_9 = document.querySelector('#soal_9');
        soal_10 = document.querySelector('#soal_10');

        soal_1.style.display='none';
        soal_2.style.display='none';
        soal_3.style.display='none';
        soal_4.style.display='none';
        soal_5.style.display='none';
        soal_6.style.display='none';
        soal_7.style.display='none';
        soal_8.style.display='none';
        soal_9.style.display='none';
        soal_10.style.display='block';
    });


    btn.addEventListener("click", function(){
        let soal_1, soal_2;
        soal_1 = document.getElementById("soal_1");
        soal_2 = document.getElementById("soal_2");

        soal_1.style.display='none'
        soal_2.style.display='block'
    });

    btn2.addEventListener("click", function(){
        let soal_2, soal_3;
        soal_2 = document.getElementById("soal_2");
        soal_3 = document.getElementById("soal_3");

        soal_2.style.display='none'
        soal_3.style.display='block'
    });

    btn3.addEventListener("click", function(){
        let soal_3, soal_4;
        soal_3 = document.getElementById("soal_3");
        soal_4 = document.getElementById("soal_4");

        soal_3.style.display='none'
        soal_4.style.display='block'
    });

    btn4.addEventListener("click", function(){
        let soal_4, soal_5;
        soal_4 = document.getElementById("soal_4");
        soal_5 = document.getElementById("soal_5");

        soal_4.style.display='none'
        soal_5.style.display='block'
    });

    btn5.addEventListener("click", function(){
        let soal_5, soal_6;
        soal_5 = document.getElementById("soal_5");
        soal_6 = document.getElementById("soal_6");

        soal_5.style.display='none'
        soal_6.style.display='block'
    });

    btn6.addEventListener("click", function(){
        let soal_6, soal_7;
        soal_6 = document.getElementById("soal_6");
        soal_7 = document.getElementById("soal_7");

        soal_6.style.display='none'
        soal_7.style.display='block'
    });

    btn7.addEventListener("click", function(){
        let soal_7, soal_8;
        soal_7 = document.getElementById("soal_7");
        soal_8 = document.getElementById("soal_8");

        soal_7.style.display='none'
        soal_8.style.display='block'
    });

    btn8.addEventListener("click", function(){
        let soal_8, soal_9;
        soal_8 = document.getElementById("soal_8");
        soal_9 = document.getElementById("soal_9");

        soal_8.style.display='none'
        soal_9.style.display='block'
    });

    btn9.addEventListener("click", function(){
        let soal_9, soal_10;
        soal_9 = document.getElementById("soal_9");
        soal_10 = document.getElementById("soal_10");

        soal_9.style.display='none'
        soal_10.style.display='block'
    });

    btn10.addEventListener("click", function(){
        let soal_10, hasil;
        soal_10 = document.getElementById("soal_10");
        hasil = document.getElementById("hasil");

        soal_10.style.display='none'
        hasil.style.display='block'
    });

let jawaban=[];
let skor=[];
let skorKet = [];
let kunci=["a","a","b","d","c","c","a","c","a","b"];
let skortotal = 0;
let bnr = 0;
let slh = 0;

function pilihanPengguna(value){
    jawaban.push(value);
}

function submit(){
    document.getElementById("benar").removeAttribute("hidden");
    document.getElementById("salah").removeAttribute("hidden");
    document.getElementById("skor").removeAttribute("hidden");
    for (let i = 0; i < kunci.length; i++) {
        if (kunci[i]==jawaban[i]){
            skor.push(10);
            skorKet.push("benar");
            bnr+=1;
        } else{
            skor.push(0);
            skorKet.push("salah");
            slh+=1;
        } 
    }
    for(i = 0; i <skor.length; i++){
        skortotal += skor[i];
    }
    document.getElementById("benar").innerHTML = "Benar: "+bnr;
    document.getElementById("salah").innerHTML = "Salah: "+slh;
    document.getElementById("skor").innerHTML = "Skor: " +skortotal;

    document.getElementById("skorInput").value = skortotal;
}
</script><?php /**PATH C:\xampp\htdocs\cobaCRUD\resources\views/soal.blade.php ENDPATH**/ ?>