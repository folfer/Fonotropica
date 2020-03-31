<?php
  session_start();
  require "head.php";
  require "header.php";
  include_once ("include/functions.php");
?>

<link rel="stylesheet" href="css/usuario.css">


<section class="site-section pt-5">
<div class="container">
<div class="testbox">
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <h1>Formulário</h1>
        <div class="item">
          <p>Arquivo</p>
          <input type="text" name="name" placeholder="Nome do arquivo"/>
          <input type="date" name="name"/>
          <div class="city-item">
            <input type="text" name="name" placeholder="Tipo de acesso" />
            <input type="text" name="name" placeholder="Grupo taxonomico" />
            <input type="text" name="name" placeholder="Espécie" />
            <input type="text" name="name" placeholder="Espécie" />
          </div>
        </div>
        <div class="item">
          <p>Name</p>
          <div class="name-item">
            <input type="text" name="name" placeholder="First" />
            <input type="text" name="name" placeholder="Last" />
          </div>
        </div>
        <div class="item">
          <p>Daytime Phone</p>
          <input type="text" name="name"/>
        </div>
        <div class="item">
          <p>Your Address</p>
          <input type="text" name="name" placeholder="Street address"/>
          <input type="text" name="name" placeholder="Street address line 2"/>
          <div class="city-item">
            <input type="text" name="name" placeholder="City" />
            <input type="text" name="name" placeholder="Region" />
            <input type="text" name="name" placeholder="Postal / Zip code" />
            <select>
              <option value="">Country</option>
              <option value="1">Russia</option>
              <option value="2">Germany</option>
              <option value="3">France</option>
              <option value="4" selected>Armenia</option>
              <option value="5">USA</option>
            </select>
          </div>
        </div>
        <div class="item">
          <p>Please Explain, including date and time in establishment</p>
          <textarea rows="5"></textarea>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="text" name="name"/>
        </div>
        <input type="file" class="kaka" name="file">
        <button type="submit" name="submit">Upload</button>
      </form>
    </div>
</div>
</section>

<?php
    require "footer.php";
?>