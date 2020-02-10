<!-- Navigation -->
    <?php include "navigation.php"; ?>

    <!-- Header -->
    <div class="container pt-lg-5"> 
        <section id="page-top">
            <header class="d-flex">
                <h1>Sacrament Meeting</h1>            
            </header>
        </section>
        <section>
            <p>Welcome <?php echo $_SESSION["display_name"]; ?></p>
            <?php foreach ($agendas as $key => $value): ?>                    
            <div class="row">
                <div class="col col-4">Meeting Date:</div>
                <div class="col col-8"><?php echo $value["agenda_date"]; ?></div>
                <div class="col col-4">Presiding Leader:</div>
                <div class="col col-8"><?php echo $value["presiding_leader"]; ?></div>
                <div class="col col-4">Conducting Leader:</div>
                <div class="col col-8"><?php echo $value["directing_leader"]; ?></div>
                <div class="col col-4">Announcements:</div>
                <div class="col col-8"><?php echo $value["announcements"]; ?></div>
                <div class="col col-4">Hymns:</div>
                <div class="col col-8"><?php echo $value["hymns"]; ?></div>
                <div class="col col-4">Opening Prayer:</div>
                <div class="col col-8"><?php echo $value["opening_prayer"]; ?></div>
                <div class="col col-4">Speakers:</div>
                <div class="col col-8"><?php echo $value["speakers"]; ?></div>
                <div class="col col-4">Closing Prayer:</div>
                <div class="col col-8"><?php echo $value["closing_prayer"]; ?></div>
            </div>
            <?php endforeach;?>                  

    
        </section>
    </div>