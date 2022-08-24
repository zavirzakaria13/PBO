<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="jadwal ujian.css">

    <title>Hello, world!</title> 
  </head>
  <body>

    <from action="Jadwal Ujian" method="post">


    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand" href="#">SELAMAT DATANG | <b>POLITEKNIK NEGERI BANYUWANGI</b></a>
      
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="dashboard.php">Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Pendaftaran KP</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Surat Izin</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Lembar Kerja</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Pendaftaran Ujian</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="jadwal-ujian.php">Jadwal Ujian</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Menguanggah Nilai</a><hr class="bg-secondary">
          </li>
         
          
          
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-tachemeter-alt mr-2"></i><b>PENDAFTARAN UJIAN</b><hr>
        <style>
      .wrap {
        width: 800px;
        margin: 10px auto;
        padding: 1px;
      }
    </style>
        <div class="wrap" style="background-color: white">
      <form>
      
        <table widht="750">
          <h3 style="background-color: grey" align="center">Informasi Personal</h3>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>NIM</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>Tempat, tanggal lahir</td>
            <td><input type="text" name="" /> <input type="date" name="" /></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><textarea></textarea></td>
          </tr>
          <tr>
            <td>Agama</td>
            <td>
              <select>
                <option></option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Katolik</option>
                <option>Konghucu</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>
              <input type="radio" name="" />Laki-Laki

              <input type="radio" name="" />Perempuan
            </td>
          </tr>
          <tr>
            <td>Status</td>
            <td>
              <select>
                <option></option>
                <option>Menikah</option>
                <option>Belum Menikah</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Kewarganegaraan</td>
            <td>
              <select>
                <option></option>
                <option>WNI</option>
                <option>WNA</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Kelurahan</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>Kecamatan</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>Kabupaten/Kota</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>Provinsi</td>
            <td>
              <select>
                <option>Pilih Provinsi</option>
                <option value=""></option>
                <option value="51">Aceh</option>
                <option value="51">Sumatera Utara</option>
                <option value="51">Sumatera Selatan</option>
                <option value="51">Sumatera Barat</option>
                <option value="51">Bengkulu</option>
                <option value="51">Riau</option>
                <option value="51">Kepulauan Riau</option>
                <option value="51">Jambi</option>
                <option value="51">Lampung</option>
                <option value="51">Bangka Belitung</option>
                <option value="51">Kalimantan Barat</option>
                <option value="51">Kalimantan Timur</option>
                <option value="51">Kalimantan Selatan</option>
                <option value="51">Kalimantan Tengah</option>
                <option value="51">Kalimantan Utara</option>
                <option value="51">Banten</option>
                <option value="51">DKI Jakarta</option>
                <option value="51">Jawa Tengah</option>
                <option value="51">Jawa Barat</option>
                <option value="51">DI Yogyakarta</option>
                <option value="51">Jawa Timur</option>
                <option value="51">Bali</option>
                <option value="51">NTT</option>
                <option value="51">NTB</option>
                <option value="51">Gorontalo</option>
                <option value="51">Sulawesi Barat</option>
                <option value="51">Sulawesi Tengah</option>
                <option value="51">Sulawesi Utara</option>
                <option value="51">Sulawesi Selatan</option>
                <option value="51">Maluku Utara</option>
                <option value="51">Maluku</option>
                <option value="51">Papua Barat</option>
                <option value="51">Papua (Daerah Khusus)</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>No Telpon</td>
            <td><input type="text" name="" /></td>
          </tr>
        </table>
        <table widht="650">
          <h3 style="background-color: grey" align="center">Informasi Universitas</h3>
          <tr>
            <td>Nama Universitas</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>
              <select>
                <option></option>
                <option>Teknik Informatika</option>
                <option>Teknik Mesin</option>
                <option>Teknik Sipil</option>
                <option>Teknik Manufaktur Kapal</option>
                <option>Manajemen Bisnis Pariwisata</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Prodi</td>
            <td>
              <select>
                <option></option>
                <option>D4-Teknologi Rekayasa Perangkat Lunak</option>
                <option>D4-Manajemen Bisnis</option>
                <option>D4-Rekayasa Komputer</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Dosen Pembimbing</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>NIP Dosen Pembimbing</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>Tahun Lulus</td>
            <td>
              <select>
                <option></option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
              </select>
            </td>
          </tr>
        </table>
        <table width="550">
          <h3 style="background-color: grey" align="center">Informasi Perusahaan</h3>
          <tr>
            <td>Nama Perusahaan</td>
            <td><input type="text" name="" /></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><textarea></textarea></td>
          </tr>
        </table>
        <button type="submit" class="btn btn-primary">Daftar</button>
      </form>
    </div>
      </div>
    </div>

    

    <h1></h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js">
    </script>
  </body>
</html>