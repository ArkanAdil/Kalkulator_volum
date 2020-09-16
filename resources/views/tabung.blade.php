<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Tabung</title>
  </head>
  <body>
  <form action="/tabung" method='POST'>
  @csrf
  <div class='container mt-4'>
  <h3>Kalkulator Menghitung Volume Tabung</h3>
    <label class='mt-4' for="jari">Jari Jari</label>
    <input class='form-control' id='jari' type="number" name='bungjari' placeholder='Masukan Jari Jari'>
    <label class='mt-4' for="tinggi">Tinggi</label>
    <input class='form-control' id='tinggi' type="number" name='bungtinggi' placeholder='Masukan Tinggi Tabung'>
    <p>	V = π × r2 × t</p>
    @if(session('tabung'))
  <div class="alert alert-info">
      {{session('tabung')}}
  </div>
    @endif
    <div>
    <div class='col-6 mt-5'>
    <button class='btn btn-success mr-2'>Hitung</button>
    <a class='btn btn-primary' href="index">Kembali</a>
    </div>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>