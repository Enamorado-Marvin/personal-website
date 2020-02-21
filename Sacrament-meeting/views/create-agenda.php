<!-- Navigation -->
    <?php include "navigation.php"; ?>

    <!-- Header -->
    <div class="container pt-lg-5">     
      <section id="page-top">
        <p>Welcome <?php echo $_SESSION["display_name"].", ".$calling; ?></p>
          <header class="">            
              <h1>Create New Agenda</h1>           
          </header>
      </section>
      <div class="row">
        <div class="col col-md-5">
          <section>
            <div class="mb-4"></div>
              <form role="form" method="post">
                <input type="hidden" name="action" value="create-new-agenda">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
                
                <div class="form-group">
                  
                  <div class="input-group">              

                    <!-- <input type="text" class="form-control input-lg" name="agenda_date" placeholder="Sacrament Meeting Date" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required> -->

                    <input type="text" id="date" name="agenda_date" class="form-control input-lg" placeholder="Sacrament Meeting Date" readonly="true">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="presiding_leader" placeholder="Presiding leader">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="directing_leader" placeholder="directing leader">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <textarea class="form-control input-lg" name="announcements" placeholder="Announcements (optional)"></textarea>

                  </div>

                </div>                

                <div class="input-group mb-3">                 
                  <select class="form-control input-lg" id="openingHymn" name="opening_hymn">
                    <option value="">Opening hymn</option>
                    <?php foreach ($hymns as $key => $value): ?>

                      <option value="<?php echo $value["hymn_number"]." ".$value["hymn_name"]?>"><?php echo $value["hymn_number"]." ".$value["hymn_name"]?></option>

                     <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="opening_prayer" placeholder="Opening Prayer">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <textarea class="form-control input-lg" name="ward_business" placeholder="Ward Businesses (optional)"></textarea>

                  </div>

                </div>

                <div class="input-group mb-3">                  
                  <select class="form-control input-lg" id="sacramentHymn" name="sacrament_hymn">
                    <option value="">Sacrament hymn</option>
                    <?php foreach ($hymns as $key => $value): ?>

                      <option value="<?php echo $value["hymn_number"]." ".$value["hymn_name"]?>"><?php echo $value["hymn_number"]." ".$value["hymn_name"]?></option>

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
                    <input type="text" class="form-control input-lg" name="special_hymn" placeholder="Special Hymn (optional)">
                  </div>
                </div>

                <div class="input-group mb-3">                  
                  <select class="form-control input-lg" id="closingHymn" name="closing_hymn">
                    <option value="">Closing hymn</option>
                    <?php foreach ($hymns as $key => $value): ?>

                      <option value="<?php echo $value["hymn_number"]." ".$value["hymn_name"]?>"><?php echo $value["hymn_number"]." ".$value["hymn_name"]?></option>

                     <?php endforeach; ?>
                  </select>
                </div>                    

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="closing_prayer" placeholder="Closing Prayer">

                  </div>

                </div>

              <button type="submit" class="btn btn-primary">Save Agenda</button>

            </form>
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