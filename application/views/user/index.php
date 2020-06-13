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
                >
                  Selamat <span class="typed-words"></span>
                </h1>
                <h2
                  class="text-secondary font-weight-bold"
                  data-aos="fade-up"
                >
                  <?=$user['nama']?></span>.
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <div class="site-section">
        
          <div class="row ml-2">
          <?php foreach($calon as $row){ ?>
          <div class="col-sm">
            <div class="card mt-5" style="width: 20rem;">
              <img src="<?=base_url('asset/img/calon/').$row->foto;?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h4 class="card-title text-primary font-weight-bold"><?=$row->nama;?></h4>
                <h5 class="card-title">Visi</h5>
                <p class="card-text">
                  <?=$row->visi;?>
                </p>
                <h5 class="card-title">Misi</h5>
                <p class="card-text">
                 <?=$row->misi;?>
                </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?=$row->no;?>" style="width:6rem;">
                  Pilih
                </button>
            </div>
          </div>

          <div class="modal fade" id="modal<?=$row->no;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Anda Yakin?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Pilih <h5 class="font-weight-bold"><?=$row->nama;?></h5>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?=base_url('User/pilih/').$row->no.'/'.$user['nim'];?>" class="btn btn-primary" style="width:6rem;">Pilih</a>
              </div>
              </div>
            </div>
          </div>
        </div>



          <?php } ?>
        </div>
        

       

      </div>


      <div class="site-section">
        <div class="container">
          <div class="row mt-5 justify-content-center">
            <div class="col-md-7 text-center">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                create with
                love by
                Jepri Kusuma
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>