<?php include('header.php') ?>

<!--//END HEADER -->
  <!--============================= Gallery =============================-->
<div class="gallery-wrap">
    <div class="container">
		<!-- Style 2 -->
		<div class="row">
		  <div class="col-md-12">
		    <h3 class="gallery-style">Gallery Photo</h3>
		  </div>
		</div>
	</div>
</div>
<div class="row">
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">

      <figure class="col-md-12">
      	<?php foreach ($all_galeri->result() as $row) : ?>
        <a href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" data-size="1600x1067">
          <img alt="picture" src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="img-fluid">
        </a>
        <?php endforeach;?>
      </figure>


    </div>

  </div>
</div>
<script type="text/javascript">
	// MDB Lightbox Init
$(function () {
$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});
</script>
<!--//End Gallery -->
<!--============================= FOOTER =============================-->
<?php include('footer.php') ?>
