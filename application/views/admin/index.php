<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <div class="ftco-blocks-cover-1">
        <div class="site-section-cover half-bg">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-8">
                <h1
                  class="mb-3 text-primary font-weight-bold"
                  data-aos="fade-up"
                  style="font-size: 50px;"
                >
                  Korti PTI 2D Adalah...
                </h1>
                <button class="btntmpl btn btn-primary">Tampilkan Hasil</button>
              </div>
              <div
                class="card hasil"
                style="width: 22rem; opacity: 0; pointer-events: none; transition: 0.5s;"
              >
                <img src="<?=base_url('asset/img/calon/').$calon['foto'];?>" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h4 class="card-title text-primary font-weight-bold">
                    <?= $calon['nama'];?>
                  </h4>
                  <p class="card-title text-secondary font-weight-bold">
                    <?=$calon['suara'];?> Pemilih
                  </p>
                </div>
              </div>
              <div class="hit position-absolute" style="right: 12rem;">
                <h1
                  class="mb-3 font-weight-bold"
                  style="font-size: 150px;color:white; opacity: 0; pointer-events: none;"
                >
                  3
                </h1>
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="d-flex justify-content-center">
<ul class="list-group mt-5" style="width: 80%;">
     <li class="list-group-item disabled ">Yang Belum Memilih</li>
     <?php foreach ($belum as $nm) {?>
      <li class="list-group-item list-group-item-danger"><?= $nm?></li>
     <?php } ?>
    </ul>
</div>
 
