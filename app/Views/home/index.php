<?= $this->extend('layout/template'); ?>


<?= $this->section("content"); ?>


<div id="background" class="mb-5" style="overflow: hidden;">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/img/terjun1.jpg" alt="First slide">
      </div>
      <div class=" carousel-item">
        <img class="d-block w-100" src="/img/terjun2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/img/terjun3.jpg" alt="Third slide">
      </div>
    </div>
  </div>
</div>

<div class="container mb-5">
  <div class="row">
    <div class="col-md">
      <h3 class="text-center">Informasi</h3>
      <p class="text-md-left text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dicta totam ducimus blanditiis sequi cum provident facere consectetur aperiam fugiat!</p>
      <p class="text-md-left text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente facilis ipsum eligendi amet, doloribus fugiat molestias laboriosam facere beatae cumque?</p>
      <p class="text-md-left text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nostrum nulla cum, reprehenderit error at eos nihil doloremque modi alias aut. Veritatis reprehenderit aperiam cumque, cupiditate repudiandae eveniet sunt suscipit?</p>
      <p class="text-md-left text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa exercitationem, unde et molestias, debitis odit at voluptas nemo, magnam esse laborum in. Rem nostrum laborum labore quasi, nihil dicta recusandae!</p>
    </div>
    <div class="col-md overflow-hidden">
      <img src="/img/terjun1.jpg" alt="" style="height: 500px;" class="mx-auto shadow">
    </div>
  </div>
  <h2></h2>
</div>



<?= $this->endSection(); ?>