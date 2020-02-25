<!-- Navigation -->
    <?php include "navigation.php"; ?>

    <!-- Header -->
    <div class="container pt-lg-5">     
      <section id="page-top">
        <p>Welcome <?php echo $_SESSION["display_name"].", ".$calling; ?></p>
          <header class="">            
              <h1>Edit Agenda</h1>           
          </header>
      </section>
      <div class="row">
        <div class="col col-md-5">
          <section>
            <div class="mb-4"></div>
            <?php foreach ($agendas as $key => $value): ?>
              <form role="form" method="post">
                <input type="hidden" name="action" value="save-changes-agenda">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
                
                <div class="form-group">
                  
                  <div class="input-group">              

                    <!-- <input type="text" class="form-control input-lg" name="agenda_date" placeholder="Sacrament Meeting Date" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required> -->

                    <input type="text" id="date" name="agenda_date" class="form-control input-lg" placeholder="Sacrament Meeting Date" value="<?php echo $value['agenda_date'] ?>" readonly="true">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="presiding_leader" value="<?php echo $value['presiding_leader'] ?>">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="directing_leader" value="<?php echo $value['directing_leader'] ?>">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <textarea class="form-control input-lg" name="announcements"><?php echo $value['announcements'] ?></textarea>

                  </div>

                </div>                

                <div class="input-group mb-3">                 
                  <select class="form-control input-lg" id="openingHymn" name="opening_hymn">
                    <option value="<?php echo $value['opening_hymn'] ?>"><?php echo $value['opening_hymn'] ?></option>
                    <?php
                      $item = null;
                      $valor = null;
                      $table = "public.hymns";
                      $hymns = get_hymns($table, $item, $valor);
                     foreach ($hymns as $hymn): ?>

                      <option value="<?php echo $hymn["hymn_number"]." ".$hymn["hymn_name"]?>"><?php echo $hymn["hymn_number"]." ".$hymn["hymn_name"]?></option>

                     <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="opening_prayer" value="<?php echo $value['opening_prayer'] ?>">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <textarea class="form-control input-lg" name="ward_business"><?php echo $value['ward_business'] ?></textarea>

                  </div>

                </div>

                <div class="input-group mb-3">                  
                  <select class="form-control input-lg" id="sacramentHymn" name="sacrament_hymn">
                    <option value="<?php echo $value['sacrament_hymn'] ?>"><?php echo $value['sacrament_hymn'] ?></option>
                    <?php
                      $item = null;
                      $valor = null;
                      $table = "public.hymns";
                      $hymns = get_hymns($table, $item, $valor);
                     foreach ($hymns as $hymn): ?>

                      <option value="<?php echo $hymn["hymn_number"]." ".$hymn["hymn_name"]?>"><?php echo $hymn["hymn_number"]." ".$hymn["hymn_name"]?></option>

                     <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <a href="#" class="btn btn-info btn-block">Add Speakers</a>
                    <input type="hidden" name="speakers" value="Brother Enamorado">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">
                    <input type="text" class="form-control input-lg" name="special_hymn" value="<?php echo $value['special_hymn'] ?>">
                  </div>
                </div>

                <div class="input-group mb-3">                  
                  <select class="form-control input-lg" id="closingHymn" name="closing_hymn">
                    <option value="<?php echo $value['closing_hymn'] ?>"><?php echo $value['closing_hymn'] ?></option>
                    <?php
                      $item = null;
                      $valor = null;
                      $table = "public.hymns";
                      $hymns = get_hymns($table, $item, $valor);
                     foreach ($hymns as $hymn): ?>

                      <option value="<?php echo $hymn["hymn_number"]." ".$hymn["hymn_name"]?>"><?php echo $hymn["hymn_number"]." ".$hymn["hymn_name"]?></option>

                     <?php endforeach; ?>
                  </select>
                </div>                    

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="closing_prayer" value="<?php echo $value['closing_prayer'] ?>">

                  </div>

                </div>

              <button type="submit" class="btn btn-primary">Save Agenda</button>

            </form>
          <?php endforeach; ?>
          </section>
        </div>
        <div class="col col-md-7">
          <div class="mb-4"></div>
          <div class="card">
            <div class="card-body">
              A preview of the printable version of the agenda will be displayed here.
            </div>
          </div>
        </div>
      </div>
    </div>    