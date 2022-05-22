<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>SPOT</title>
  <link href="css/daftarMataKuliah.css" rel="stylesheet" type="text/css" />
  <link href="css/component/navbar.css" rel="stylesheet" type="text/css" />
  <script src="script.js"></script>
</head>

<body>
  <nav class="shadow-sm">
    
  </nav>
  <?php include('components/sidebar.php'); ?>
  
  <div class="main-content">
    <div class="p-2">
      <div class="row">
        <div class="col-md-6">
          <div aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <i class="icon ico-dark" data-feather="list"></i>
                <span class="breadcrumb-item-text">&nbsp;Daftar Mata Kuliah</span>
              </li>
            </ol>
          </div>
        </div>
        <div class="col-6">
          <div class="date">
            <i class="ico ico-dark" data-feather="calendar"></i>
            <span class="date-text">&nbsp;Rabu, 28 Maret</span>
          </div>
        </div>
      </div>
      <div class="row g-2">
        <div class="col-lg-4">
          <div class="matkul-card shadow-sm rounded">
            <div class="matkul-info">
              <div class="matkul-header">
                <div class="matkul-kode">
                  RL210
                </div>
                <div class="matkul-title">
                  Pemrograman Web
                  <div class="badge badge-primary schedule-tag"><span>today</span></div>
                </div>
              </div>
              <div class="matkul-sks">
                4 SKS
              </div>
              <div class="matkul-dosen">
                <i class="ico ico-dark" data-feather="user"></i>
                &nbsp;Hendriyana, S.T., M.Kom.
              </div>
              <div class="matkul-description">
                Mata kuliah ini mengajarkan prinsip-prinsip dasar Internet dan teknologi yang dapat digunakan untuk membangun sebuah Aplikasi Internet. HTML dan CSS yang merupakan komponen dasar dari halaman web, merupakan dua topik pertama yang dibahas dalam mata kuliah ini. Mata kuliah ini kemudian membahas penampilan web secara dinamis menggunakan Javascript. Javascript juga merupakan dasar pemrograman Ajax yang juga akan diperkenalkan pada mata kuliah ini. Pemrograman dari sisi server juga akan dibahas dengan menggunakan bahasa PHP dan ASP. Mahasiswa juga diajarkan untuk menganalisis berbagai aspek kualitas pada aplikasi internet, seperti: usability, security, dan performance.
              </div>
              <a href="pertemuan.html" class="btn btn-primary cta-matkul">Go</a>
            </div>
          </div> 
        </div>
        <div class="col-lg-4">
          <div class="matkul-card shadow-sm rounded">
            <div class="matkul-info">
              <div class="matkul-header">
                <div class="matkul-kode">
                  RL210
                </div>
                <div class="matkul-title">
                  Konstruksi Perangkat Lunak
                  <div class="badge badge-primary schedule-tag"><span>today</span></div>
                </div>
              </div>
              <div class="matkul-sks">
                4 SKS
              </div>
              <div class="matkul-dosen">
                <i class="ico ico-dark" data-feather="user"></i>
                &nbsp;Dr. Asep Wahyudin, S.Kom., M.T.
              </div>
              <div class="matkul-description">
                Mata kuliah yang melatih mahasiswa menjadi bagian dari solusi dunia kerja, industri, instansi pemerintahan dan atau komunitas masyarakat tertentu.
              </div>
              <a href="pertemuan.html" class="btn btn-primary cta-matkul">Go</a>
            </div>
          </div> 
        </div>
        <div class="col-lg-4">
          <div class="matkul-card shadow-sm rounded">
            <div class="matkul-info">
              <div class="matkul-header">
                <div class="matkul-kode">
                  RL210
                </div>
                <div class="matkul-title">
                  Bisnis Teknologi
                </div>
              </div>
              <div class="matkul-sks">
                4 SKS
              </div>
              <div class="matkul-dosen">
                <i class="ico ico-dark dosen-icon" data-feather="user"></i>
                &nbsp;Dr. Asep Wahyudin, S.Kom., M.T.
              </div>
              <div class="matkul-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, aliquid! Aliquid quam voluptate iste distinctio dolor beatae nisi. Aliquam at aut adipisci, nostrum delectus eius ipsum accusantium amet nesciunt tempore!
              </div>
              <a href="pertemuan.html" class="btn btn-primary cta-matkul">Go</a>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>

  <script>
    getdata();
  </script>
</body>
</html>
<script>
  feather.replace()
</script>