<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil DASS</title>
  <link rel="stylesheet" href="css/hasidass.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>
<style>
  .containerbox{
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    height: auto;
  }
  .containerbox .box{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 20rem;
    height : auto;
    margin-right: 1rem;
    background-color: #ffff;
  }
  .containerbox .box .textatas{
    display: flex;
    align-items: center;
    width: 2rem;
    justify-content: center;
  }
  .containerbox .box .textatas h1{
    color: #000;
    line-height: 200;
    text-align: center;
    font-size: 1rem;
  }
  .containerbox .box .texthasil p{
    color: #000;
    text-align: justify;
    margin:0.5rem;
    font-size: 1rem;
  }

</style>
<body>
<!-- <div class="gambardokter"></div> -->
    <div class="pembungkus">
      <div class="navbar">
        <a href="/index.php">Home</a>
        <a href="index.php#about1">About us</a>
        <a href="ChatApp/index.php">Chat</a>
      </div>
    </div>
    <div class="container text-center">
      <div class="row justify-content-evenly">

          <div class="kotak1">
          <div class="textatas">
            <h1>Stress</h1>
        </div>
          <div class="texthasil">
            <p id="stress">
              
            </p>
          </div>
          </div>


          <div class="kotak1">
          <div class="textatas">
          <h1>Depresi</h1>
        </div>
        <div class="texthasil">
          <p id="depresi">

          </p>
        </div>
          </div>


          <div class="kotak2">
          <div class="textatas">
            <h1>Anxiety</h1>
        </div>
          <div class="texthasil">
            <p id="anxiety">
              
            </p>
          </div>
          </div>

      </div>
    </div>
<script>
  // Function to get URL parameters by name
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  // Retrieve totals from URL parameters
var totalDepresi = parseInt(getParameterByName('totalDepresi')) || 0;
var totalAnxiety = parseInt(getParameterByName('totalAnxiety')) || 0;
var totalStress = parseInt(getParameterByName('totalStress')) || 0;

// Menentukan kategori dan saran untuk depresi
var kategoriDepresi = '';
var saranDepresi = '';

if (totalDepresi >= 21) {
    kategoriDepresi = 'Berat';
    saranDepresi = '1. Tetap terhubung dengan orang lain. 2. Lakukan hal yang menyenangkan. 3. Aktif Bergerak. 4. Konsumsi makanan sehat. 5. Dapatkan paparan sinar matahari.';
} else if (totalDepresi >= 14) {
    kategoriDepresi = 'Sedang';
    saranDepresi = '1. Tetap terhubung dengan orang lain. 2. Lakukan hal yang menyenangkan. 3. Aktif Bergerak. 4. Konsumsi makanan sehat. 5. Dapatkan paparan sinar matahari.';
} else if (totalDepresi >= 10) {
    kategoriDepresi = 'Ringan';
    saranDepresi = '1. Tetap terhubung dengan orang lain. 2. Lakukan hal yang menyenangkan. 3. Aktif Bergerak. 4. Konsumsi makanan sehat. 5. Dapatkan paparan sinar matahari.';
} else {
    kategoriDepresi = 'Normal';
    saranDepresi = 'Anda tidak mengalami depresi.';
}

// Menampilkan hasil depresi ke dalam paragraf dengan ID 'depresi'
document.getElementById('depresi').innerHTML = `<strong>Kategori depresi:</strong> ${kategoriDepresi}<br><strong>Saran:</strong> ${saranDepresi}`;

// Menentukan kategori dan saran untuk kecemasan
var kategoriAnxiety = '';
var saranAnxiety = '';

if (totalAnxiety >= 15) {
    kategoriAnxiety = 'Berat';
    saranAnxiety = '1. Ambil Napas Panjang. 2. Berpikir Positif. 3. Lampiaskan cemas dengan olahraga. 4. Bicara dengan orang lain. 5. Lakukan hal yang Anda senangi.';
} else if (totalAnxiety >= 10) {
    kategoriAnxiety = 'Sedang';
    saranAnxiety = '1. Ambil Napas Panjang. 2. Berpikir Positif. 3. Lampiaskan cemas dengan olahraga. 4. Bicara dengan orang lain. 5. Lakukan hal yang Anda senangi.';
} else if (totalAnxiety >= 8) {
    kategoriAnxiety = 'Ringan';
    saranAnxiety = '1. Ambil Napas Panjang. 2. Berpikir Positif. 3. Lampiaskan cemas dengan olahraga. 4. Bicara dengan orang lain. 5. Lakukan hal yang Anda senangi.';
} else {
    kategoriAnxiety = 'Normal';
    saranAnxiety = 'Anda tidak mengalami kecemasan.';
}

// Menampilkan hasil kecemasan ke dalam paragraf dengan ID 'anxiety'
document.getElementById('anxiety').innerHTML = `<strong>Kategori kecemasan:</strong> ${kategoriAnxiety}<br><strong>Saran:</strong> ${saranAnxiety}`;

// Menentukan kategori dan saran untuk stres
var kategoriStress = '';
var saranStress = '';

if (totalStress >= 26) {
    kategoriStress = 'Berat';
    saranStress = '1. Jangan mengisolasi diri. 2. Lakukan aktivitas yang menyenangkan. 3. Cukup tidur. 4. Lakukan gaya hidup sehat. 5. Fokus pada saat ini.';
} else if (totalStress >= 19) {
    kategoriStress = 'Sedang';
    saranStress = '1. Jangan mengisolasi diri. 2. Lakukan aktivitas yang menyenangkan. 3. Cukup tidur. 4. Lakukan gaya hidup sehat. 5. Fokus pada saat ini.';
} else if (totalStress >= 15) {
    kategoriStress = 'Ringan';
    saranStress = '1. Jangan mengisolasi diri. 2. Lakukan aktivitas yang menyenangkan. 3. Cukup tidur. 4. Lakukan gaya hidup sehat. 5. Fokus pada saat ini.';
} else {
    kategoriStress = 'Normal';
    saranStress = 'Anda tidak mengalami stres.';
}

// Menampilkan hasil stres ke dalam paragraf dengan ID 'stress'
document.getElementById('stress').innerHTML = `<strong>Kategori stres:</strong> ${kategoriStress}<br><strong>Saran:</strong> ${saranStress}`;

</script>

</body>
</html>
