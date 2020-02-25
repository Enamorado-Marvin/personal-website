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

                    <input type="text" id="date" name="agenda_date" class="form-control input-lg" placeholder="Sacrament Meeting Date" readonly="true" onchange="add_preview()">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="presiding_leader" placeholder="Presiding leader" id="presiding" onkeyup ="add_preview()">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <input type="text" class="form-control input-lg" name="directing_leader" placeholder="directing leader" id="directing" onkeyup="add_preview()">

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">

                    <textarea class="form-control input-lg" name="announcements" placeholder="Announcements (optional)" id="announcements" onkeyup="add_preview()"></textarea>

                  </div>

                </div>                

                <div class="input-group mb-3">                 
                  <select class="form-control input-lg" id="openingHymn" name="opening_hymn"  onchange="add_preview()">
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

                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalCenter">
                      Add Speakers
                    </button> -->

                    <!-- Modal -->
                    <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Speakers</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            
                              <div class="form-group mb-2">
                                <input type="text" class="form-control" id="speaker" placeholder="Speaker name">
                              </div>
                              <div class="form-group mb-2">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                              </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" onclick="add_speaker()">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="speakerList"></div> -->
                    
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

              <input type="submit" class="btn btn-success" value="Save Agenda" />

            </form>
          </section>
        </div>
        <div class="col col-md-7">
          <div class="mb-4"></div>
          <div class="card">
            <div class="card-body">
              <h4 class="text-center">Sacrament Meeting Agenda</h4>
              <h6 class="text-center text-primary">Jazminez Ward</h6>
              <div class="mb-4"></div>
              <div class="row">
                <div class="col col-4 text-right text-info">
                  Date:
                </div>
                <div class="col col-8" id="date_entered">
                  
                </div>
                <div class="col col-4 text-right text-info">
                  Presiding Leader:
                </div>
                <div class="col col-8" id="presidingL">
                  
                </div>
                <div class="col col-4 text-right text-info">
                  Directing Leader:
                </div>
                <div class="col col-8" id="directingL">                 
                </div>
                <div class="col col-4 text-right text-info">
                  Announcements:
                </div>
                <div class="col col-8" id="annoucementsP"></div>
              </div>
              <hr>
              <div class="row">
                <div class="col col-4 text-right text-info">
                  Opening Hymn:
                </div>
                <div class="col col-8" id="ohymn">
                </div>
                <div class="col col-4 text-right text-info">Opening Prayer:</div>
                <div class="col col-8">Brother James</div>
                <div class="col col-4 text-right text-info">Ward Businesses:</div>
                <div class="col col-8">None</div>
              </div>
              <div class="mb-4"></div>
              <h6 class="text-center text-info">Sacrament Time</h6>
              <div class="row">
                <div class="col col-4 text-right text-info">Sacrament hymn:</div>
                <div class="col col-8">120 Humble</div>
              </div>
              <div class="mb-4"></div>
              <h6 class="text-center text-info">Messages Time</h6>
              <div class="row">
                <div class="col col-4 text-right text-info">First speaker:</div>
                <div class="col col-8">Brother Phelps - Faith</div>
                <div class="col col-4 text-right text-info">Special Hymn (intermediate):</div>
                <div class="col col-8">10 We thank Thee</div>
                <div class="col col-4 text-right text-info">Second speaker:</div>
                <div class="col col-8">Sister Ramirez - Love</div>
              </div>
              <hr>
              <div class="row">
                <div class="col col-4 text-right text-info">Closing Hymn:</div>
                <div class="col col-8">15 Hail to the prophet</div>
                <div class="col col-4 text-right text-info">Closing prayer:</div>
                <div class="col col-8">Brother Hernandez</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    