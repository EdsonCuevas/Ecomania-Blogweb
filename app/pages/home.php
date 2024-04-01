
<?php include '../app/pages/includes/header.php'; ?>

  <main>
    
    <?php include '../app/pages/includes/carrousel.php'; ?>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <!-- Reemplazar el rectángulo con la etiqueta image -->
            <image href="<?=ROOT?>/../public/assets/imgs/g4.gif" width="100%" height="100%" />
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <!-- Reemplazar el rectángulo con la etiqueta image -->
            <image href="<?=ROOT?>/../public/assets/imgs/g1.gif" width="100%" height="100%" />
          </svg>
          <h2 class="fw-normal">Recycling in México</h2>
          <p>Data presented by Forbes shows that 68% of companies in México use recycled materials.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <!-- Reemplazar el rectángulo con la etiqueta image -->
            <image href="<?=ROOT?>/../public/assets/imgs/g3.gif" width="100%" height="100%" />
          </svg>
          <h2 class="fw-normal">Heading</h2>
          <p>And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div>

    <!--Box-COntent-->
    <div class="col-lg-8 mx-auto" style="padding: 10px; margin-top: 100px;">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1"> What is Ecomania? <span class="text-body-secondary">A simple
              school project?.</span></h2>
          <p class="lead">We are a team united by the cause of climate action, our initiative is focused on addressing
            the challenges of climate change and actively contribute to Sustainable Development Goal number 13 of the
            ONU.</p>
        </div>
        <div class="col-md-5">
          <img src="<?=ROOT?>/../public/assets/imgs/8.jpg" alt="" width="100%" height="100%">

        </div>
      </div>

      <!---News---->

      <div class="container" style="margin-top: 100px;">
        <div class="row">

          <?php

            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit 6";
            $rows = query($query);
            if($rows){

              foreach($rows as $row){
                include '../app/pages/includes/post-card.php';
              }

            }else {
              echo "No items found!";
            }

            

          ?>

        </div>
      </div>


  </main>

  <?php include '../app/pages/includes/footer.php'; ?>

</body>

</html>