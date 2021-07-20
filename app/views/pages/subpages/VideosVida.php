<div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-Anico-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Anico" type="button" role="tab" aria-controls="v-pills-Anico" aria-selected="true">Anico</button>
        <button class="nav-link" id="v-pills-NationalLifeGroup-tab" data-bs-toggle="pill" data-bs-target="#v-pills-NationalLifeGroup" type="button" role="tab" aria-controls="v-pills-NationalLifeGroup" aria-selected="false">NationalLifeGroup</button>
        <button class="nav-link" id="v-pills-Ameritas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Ameritas" type="button" role="tab" aria-controls="v-pills-Ameritas" aria-selected="false">Ameritas</button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-Anico" role="tabpanel" aria-labelledby="v-pills-Anico-tab">
            <div class="container-fluid">
                <center><img src="app\views\assets\img\Aseguradoras\AmericanNational.png" height="200px" alt="Anico" title="Anico"></center>
                <div class="row">
                    <?php
                    $ConsultaAnico = new crudVideos("SELECT Nombre, URL FROM videosanico");
                    $resultados = $ConsultaAnico->Read();
                    while ($rows = mysqli_fetch_assoc($resultados)) :

                    ?>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                            <h4 class="text-center"><?php echo $rows['Nombre']; ?></h4>
                            <video src="<?= $rows['URL']; ?>" controls>Lo sentimos el video no esta disponible</video>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-NationalLifeGroup" role="tabpanel" aria-labelledby="v-pills-NationalLifeGroup-tab">
            <div class="container-fluid">
                <center><img src="app\views\assets\img\Aseguradoras\NationalLifeGroup.png" height="200px" alt="Ameritas" title="National Life"></center>
                <div class="row">
                    <?php
                    $ConsultaAnico = new crudVideos("SELECT Nombre, URL FROM videosnationallife");
                    $resultados = $ConsultaAnico->Read();
                    while ($rows = mysqli_fetch_assoc($resultados)) :

                    ?>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                            <h4 class="text-center"><?php echo $rows['Nombre']; ?></h4>
                            <video src="<?= $rows['URL']; ?>" controls>Lo sentimos el video no esta disponible</video>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-Ameritas" role="tabpanel" aria-labelledby="v-pills-Ameritas-tab">
            <div class="container-fluid">
                <center><img src="app\views\assets\img\Aseguradoras\Ameritas.png" height="200px" alt="Ameritas" title="Ameritas"></center>
                <div class="row">
                    <?php
                    $ConsultaAnico = new crudVideos("SELECT Nombre, URL FROM videosameritas");
                    $resultados = $ConsultaAnico->Read();
                    while ($rows = mysqli_fetch_assoc($resultados)) :

                    ?>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5">
                            <h4 class="text-center"><?php echo $rows['Nombre']; ?></h4>
                            <video src="<?= $rows['URL']; ?>" controls>Lo sentimos el video no esta disponible</video>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div><br><br><br>

<div class="container-fluid ColorPrincipal text-white"><br>
    <h4 class="text-white text-center">Contactenos</h4>
    <hr>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
            <img src="app/views/assets/img/LogoColorReal.png" alt="Select Insurance" height="80px" title="Select Insurance"><br><br>
        </div>
        <div class="col-12 col-md-1 col-lg-1"></div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3"><br><br>
            <p><b>CONTÁCTENOS</b></p>
        </div>
        <div class="col-12 col-sm-6 col-md-2 col-lg-2"><br><br>
            <p><b>ENLACES</b></p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3"><br><br>
            <p><b>ZONA DE AFILIADOS</b></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 text-center">
            <p class="fs-7">
                Select Insurance And Financial
                Services nace en el año 2009 teniendo
                en cuenta la necesidad de las personas
                como una compañía dedicada a la venta y el
                asesoramiento de seguros de vida y hoy es
                una compañía especializada en aseguramiento, plan
                de retiro y planes de inversión.
            </p>
        </div>
        <div class="col-12 col-md-1 col-lg-1"></div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">

            <p class="lh-lg">
                Tel.: (786) 216 1936 <br>

                Email: contact@selectinsurance.info <br>

                Skype: contact insurance <br>

                Dirección: 7791 NW 46 ST. SUITE 112 DORAL, FL 33166 <br>
            </p>
        </div>
        <div class="col-12 col-sm-6 col-md-2 col-lg-2">
            <p class="lh-lg">
                Cotizador Online <br>

                Nuestros Servicios <br>

                Testimonios <br>

                Contacto <br>
            </p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
            <p class="lh-lg">
                FAQ <br>

                Blog <br>

                Crm <br>

                Galería <br>
            </p>
        </div>
    </div>
    <h6 class="text-end">Copyright © <?php echo date('Y'); ?> Select Insurance.</h6>