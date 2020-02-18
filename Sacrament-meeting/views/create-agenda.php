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

                    <input type="text" class="form-control input-lg" name="agenda_date" placeholder="Sacrament Meeting Date" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                    <!-- <input type="text" id="date" name="agenda_date" class="form-control input-lg" placeholder="Sacrament Meeting Date" readonly="true"> -->

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
                  <input type="text" class="form-control input-lg" placeholder="Opening Hymn" aria-label="Opening Hymn" id="openingHymn" name="opening_hymn" aria-describedby="basic-addon2" readonly>
                  <div class="input-group-append">
                    <p>
                      <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Select Hymn
                      </a>                      
                    </p>
                    </div>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">

                        <div class="box-body">
        
                         <table class="table table-bordered table-striped dt-responsive tableHymns" width="100%">
                           
                          <thead>
                           
                           <tr>                             
                             <th>#</th>
                             <th>Name</th>
                             <th>Action</th>
                           </tr> 

                          </thead>
                          <tbody>
                            <?php

                            $item = null;
                            $valor = null;
                            $table = "public.hymns";

                            $hymns = get_hymns($table, $item, $valor);

                            foreach ($hymns as $key => $value) {
                              $idHymn = $value["id"];
                              echo '<tr>

                              <td class="tabst">'.$value["hymn_number"].'</td>

                              <td class="tabst">'.$value["hymn_name"].'</td>
                              <td class="tabst">

                                <div class="btn-group">
                                    
                                  <p class="btn btn-success newsize addHymn" id="id" numberHymn="'.$value["hymn_number"].'" nameHymn="'.$value["hymn_name"].'" onclick="changeText()">Add</p>';
                                echo '</div>

                              </td>

                              </tr>';

                            }

                            ?>

                          </tbody>    

                         </table>
                      </div>
                    </div>
                  
                </div>
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

                <div class="form-group">
                  
                  <div class="input-group">
                    <input type="text" class="form-control input-lg" name="sacrament_hymn" placeholder="Sacrament Hymn">
                  </div>
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

                <div class="form-group">
                  
                  <div class="input-group">
                    <input type="text" class="form-control input-lg" name="closing_hymn" placeholder="Closing Hymn">
                  </div>
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