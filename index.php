<?php
    include 'tpl/header.php'
?>

<?php
include "tpl/menu.php";
?>



  <carousel class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Novo Mesto.jpg" class="d-block w-100" alt="Novo Mesto">
      </div>
      <div class="carousel-item">
        <img src="Ljubljana.jpg" class="d-block w-100" alt="Ljubljana">
      </div>
      <div class="carousel-item">
        <img src="Piran.jpg" class="d-block w-100" alt="Piran">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </carousel>
  <section>
    Moja tabela

    <table class="table">
      <thead>
        <tr>
          <th>Prvi stolbec</th>
          <th>Drugi stolbec</th>
          <th>Tretji stolbec</th>
          <th>Ctrti stolbec</th>
          <th>Peti stolbec</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Podatek1</td>
          <td>Podatek2</td>
          <td>Podatek3</td>
          <td>Podatek4</td>
          <td>Podatek5</td>
        </tr>
        <tr>
          <td>Podatek6</td>
          <td>Podatek7</td>
          <td>Podatek8</td>
          <td>Podatek9</td>
          <td>Podatek10</td>
        </tr>
      </tbody>
    </table>
  </section>
<?php
include 'tpl/footer.php'
?>