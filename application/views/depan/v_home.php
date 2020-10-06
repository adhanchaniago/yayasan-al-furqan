<?php include('header.php') ?>

      <?php
          function limit_words($string, $word_limit){
              $words = explode(" ",$string);
              return implode(" ",array_splice($words,0,$word_limit));
          }
      ?>
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-1.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Donasi Ponpes</h1>
                            <h4>Donasi Ponpes Tahfizh & Beasiswa Santri Ponpes Tahfizhul Qur'an Furqoon, Cileungsi, Bogor <br> Itulah yang kami lakukan.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('artikel');?>" class="btn btn-default">Baca Selangkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-2.jpg'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                          <h1>Donasi Ponpes</h1>
                          <h4>Donasi Ponpes Tahfizh & Beasiswa Santri Ponpes Tahfizhul Qur'an Furqoon, Cileungsi, Bogor <br> Itulah yang kami lakukan.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('guru');?>" class="btn btn-default">Baca Selangkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-3.jpg'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                          <h1>Donasi Ponpes</h1>
                          <h4>Donasi Ponpes Tahfizh & Beasiswa Santri Ponpes Tahfizhul Qur'an Furqoon, Cileungsi, Bogor <br> Itulah yang kami lakukan.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('galeri');?>" class="btn btn-default">Baca Selangkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <img src="<?php echo base_url().'assets/images/alfurqon garis.png'?>" class="img-fluid" alt="">
    </div>
  </div>
</div>

<!-- welcome -->

<!-- <section class="welcome_about"> -->
    <div class="container">
        <div class="row">
          <div class="col-md-7">
              <img src="<?php echo base_url().'theme/images/welcome-img.png'?>" class="img-fluid" alt="#">
          </div>
            <div class="col-md-5">
                <h2>Amalan Yang Paling di Cintai Allah</h2>
                <p>Sesungguhnya amal yang dicintai oleh Allah Subhanahu wa Ta’ala adalah amal shalih yang dilakukan secara kontiyu (terus menerus) meskipun sedikit.
                  Rasulullah Shallallahu ‘alahi wa sallam bersabda :
                  “Wahai sekalian manusia. Kerjakanlah amalan – amalan sesuai dengan kemampuan kalian.
                  Sesungguhnya Allah tidak bosan sampai kalian bosan. Dan sungguh, amalan yang paling dicintai oleh Allah yaitu yang dikerjakan secara terus – menerus walaupun sedikit.”
                  (HR. al-Bukhari dan Muslim)
                </p>
                </div>

            </div>
        </div>
    <!-- </section> -->

<!-- Welcome -->
<!--============================= Awal Program =============================-->
<div class="container">
  <h3 class="h-program-judul">PROGRAM</h3>
  <img src="<?php echo base_url().'assets/images/garis.png'?>" class="img-fluid" alt="">

    <div class="row">
      <div class="col-sm-3 ">
        <div class="h-program h-program-lgkp">
          <img src="<?php echo base_url().'assets/images/program/logo-putih1.png'?>" class="img-fluid" alt="">
          <p class="h-program-p">Kaleng infaq Coin4Dakwah merupakan program yang memberikan kemudahan
            kepada siapa saja yang mau membantu saudara - saudaranya baik dalam hal
            pengembangan pondok pesantren Tahfizhul Qur'an, beasiswa para penghafal Qur'an,
            aktivis dakwah dan santunan para da'i dengan wadah kaleng infaq yang kami
            sediakan untuk dititipkan di rumah Anda.</p>
        </div>

        <div class="h-program1">
          <a href="#" class="h-program-slgkp"><center>More Detail</center></a>
        </div>

      </div>

      <div class="col-sm-3  ">
        <div class="h-program h-program-lgkp">
          <img src="<?php echo base_url().'assets/images/program/logo-putih2.png'?>" class="img-fluid" alt="">
          <p class="h-program-p">
            Kaleng infaq Coin4Dakwah merupakan program yang memberikan kemudahan kepada
            siapa saja yang mau membantu saudara - saudaranya baik dalam hal pengembangan
            pondok pesantren Tahfizhul Qur'an, beasiswa para penghafal Qur'an, aktivis
            dakwah dan santunan para da'i dengan wadah kaleng infaq yang kami sediakan
            untuk dititipkan di rumah Anda.</p>
        </div>

        <div class="h-program1">
          <a href="#" class="h-program-slgkp"><center>More Detail</center></a>
        </div>

      </div>

      <div class="col-sm-3 ">
        <div class="h-program h-program-lgkp">
          <img src="<?php echo base_url().'assets/images/program/logo-putih3.png'?>" class="img-fluid" alt="">
          <!-- <p class="h-program-p"> -->
          <p class="h-program-p">
            Al Furqon Rescue merupakan program layanan masyarakat berupa mobil ambulan
            gratis 24 jam yang disediakan oleh Baitul Maal Al Furqon untuk membantu
            sesama dalam mempermudah masyarakat mendapat pertolongan,seperti:
            pengantaran dan penjemputan jenazah, tanggap ibu melahirkan, gawat darurat dll.
          </p>
        </div>

        <div class="h-program1">
          <a href="#" class="h-program-slgkp"><center>More Detail</center></a>
        </div>

      </div>

      <div class="col-sm-3  ">
        <div class="h-program h-program-lgkp">
          <img src="<?php echo base_url().'assets/images/program/logo-putih3.png'?>" class="img-fluid" alt="">
          <p class="h-program-p">
            Kami menawarkan kepada siapa saja yang bersedia membantu dengan memberikan
            beasiswa untuk para penghafal Al-Qur'an yang berpotensi namun terkendala
            biaya pendidikannya.

            <br> Kami menyiapkan data para santri penghafal Al-Qur'an
            dari beberapa pondok pesantren yang membutuhkan uluran bantuan dari para muhsinin.
          </p>
        </div>

        <div class="h-program1">
          <a href="#" class="h-program-slgkp"><center>More Detail</center></a>
        </div>

      </div>


    </div>
</div>
<!--============================= Akhir Program =============================-->


<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2>Welcome</h2>
               <p>Kami Menyambut baik terbitnya Website MSCHOOL yang baru , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. </p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/welcome.png'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->

<!--============================= Awal Post Populer =============================-->


<!--============================= Akhir Post Populer =============================-->


<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->
<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                <?php foreach ($pengumuman->result() as $row) :?>
                <div class="row">
                    <div class="col-sm-3"> <img src="<?php echo base_url().'theme/images/announcement-icon.png'?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                    <div class="col-sm-9"> <h3><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h3>
                      <span><?php echo $row->tanggal;?></span>
                      <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>

                    </div><!-- // end .col-sm-7 -->
                </div><!-- // end .row -->
                <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($agenda->result() as $row):?>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                            <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                            <hr class="event_line">
                        </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END EVENTS -->
<!--============================= DETAILED CHART =============================-->




<!--============================= Awal No Rekening =============================-->

<div class="container">
  <div class="col-xs-12 col-sm-12">
    <img src="<?php echo base_url().'theme/images/no-rek.png'?>" class="img-fluid" alt="Responsive image" style="margin: 10px">
  </div>
</div>
<!--============================= Akhir No Rekening =============================-->
<!--============================= FOOTER =============================-->
<?php include('footer.php') ?>
