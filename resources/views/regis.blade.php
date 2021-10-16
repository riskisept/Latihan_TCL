<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Latihan TCL</title>
  </head>
  <body>
    <header>
        <div class="container">
        <h1>Latihan TCL</h1>
      </div>
    </header>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{'regis'}}">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Masukkan NIK</label>
                        <input type="text" class="form-control mb-2" id="nik" name="nikRegis" value="{{ old('nikRegis') }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Masukkan Nama</label>
                        <input type="text" class="form-control mb-2" id="nama" name="namaRegis" value="{{ old('namaRegis') }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Masukkan Alamat</label>
                        <input type="text" class="form-control mb-2" id="alamat" name="alamatRegis" value="{{ old('alamatRegis') }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Masukkan Nama Poli</label>
                        <input type="text" class="form-control mb-2" id="namaPoli" name="nama_poli">
                      </div>
                      <input type="submit" class="btn btn-primary" name="submit" value="Input">
                      @csrf
                    </form>
                </div>
            </div>
          </div>
    <div class="container">
        <div class="card">
            <div class="card-body">

            </div>
          </div>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach ($regisList as $list)
                  <tr>
                      <th>{{ $list->nik }}</th>
                      <th>{{ $list->nama }}</th>
                      <th>{{ $list->alamat }}</th>
                  </tr> 
                  @endforeach
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nama Poli</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($antriList as $db)
                <tr>
                  <th>{{ $db->nama_poli }}</th>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

       

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>