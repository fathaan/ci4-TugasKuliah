<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>alfathaannn Website</title>
  <link rel="stylesheet" href="<?= base_url('assets-landing') ?>/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <header>
    <h3>alfathaannn <span style="color: #5247B9;">Web.</span></h3>
    <nav>
      <a href="/" class="active">Home</a>
      <a href="#project" class="active">Project</a>
    </nav>
  </header>

  <section class="home" id="home">
    <img src="<?= base_url('assets-landing') ?>/assets/mount2.png" class="mount2">
    <img src="<?= base_url('assets-landing') ?>/assets/mount1.png" class="mount1">
    <img src="<?= base_url('assets-landing') ?>/assets/bush2.png" class="bush2">

    <h1 class="title">Welcome to My Landing Page.</h1>

    <img src="<?= base_url('assets-landing') ?>/assets/bush1.png" class="bush1">
    <img src="<?= base_url('assets-landing') ?>/assets/leaf2.png" class="leaf2">
    <img src="<?= base_url('assets-landing') ?>/assets/leaf1.png" class="leaf1">
  </section>

  <section class="about" id="about">
    <h1>About Me</h1>
    <br>
    <p>Halo! Nama saya Muhammad Al Fathan, dan saya berasal dari Lampung Tengah, tepatnya di Terbanggi Besar. Saya sangat bangga dengan asal-usul saya dan selalu berusaha membawa semangat dan keunikan daerah saya ke dalam setiap aspek kehidupan saya.</p>
    <p>Saat ini, saya sedang menempuh pendidikan di Politeknik Negeri Lampung, jurusan Teknologi Informasi. Saya berasal dari Program Studi Manajemen Informatika, yang telah memberi saya pemahaman mendalam tentang berbagai aspek teknologi informasi dan manajemen data. Di kampus, saya aktif mengikuti berbagai kegiatan akademik dan non-akademik yang membantu saya mengembangkan keterampilan dan pengetahuan di bidang saya.</p>
    <p>Dunia teknologi informasi selalu memikat saya, terutama dalam bidang pengembangan perangkat lunak (software development) dan rekayasa perangkat lunak (software engineering). Saya sangat menikmati proses pembuatan aplikasi web, dari tahap perancangan hingga implementasi. Keinginan saya untuk terus belajar dan berinovasi di bidang ini membuat saya terus mencari tantangan baru dan peluang untuk mengasah keterampilan saya.</p>
    <p>Di waktu luang, saya sering membaca artikel dan mengikuti kursus online untuk memperdalam pengetahuan saya tentang teknologi terbaru. Saya juga terlibat dalam proyek-proyek kecil yang memungkinkan saya untuk menerapkan apa yang telah saya pelajari dan mendapatkan pengalaman praktis yang berharga. Melalui kegiatan ini, saya telah mengembangkan kemampuan dalam berbagai bahasa pemrograman dan alat pengembangan web, serta memahami pentingnya kolaborasi tim dalam menyelesaikan proyek yang kompleks.</p>
    <p>Saya sangat percaya bahwa teknologi memiliki potensi besar untuk mempengaruhi kehidupan manusia secara positif, dan saya berkomitmen untuk menjadi bagian dari perubahan tersebut. Dengan latar belakang pendidikan dan pengalaman praktis yang saya miliki, saya berharap dapat berkontribusi pada industri teknologi informasi dan membantu menciptakan solusi inovatif yang dapat memecahkan masalah nyata di masyarakat.</p>
    <p>Terima kasih telah mengunjungi halaman saya.</p>
    <br> <br> <br>


    <div class="container" id="project">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <p>Dan Berikut adalah List Tugas Pemrograman Framework saya.</p>
              <div class="card">
                <div class="card-body">
                  <center>
                    <h4 class="card-title">LIST MY ASSIGMENT</h4>
                  </center>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="bg-primary text-light">
                          <th>Project</th>
                          <th>Description</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="text-primary">
                          <td>Website Keuangan Gaji Karyawan</td>
                          <td>Membuat Website Menggunakan Framework Codeigniter4, <br>yang dapat menampilkan data data keuangan karyawan serta Admin dapat menggunakan CRUD dengan baik</td>
                          <td><a type="button" class="btn btn-primary" href="<?= base_url('dashboard') ?>">Get!</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?= base_url('assets-landing') ?>/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>