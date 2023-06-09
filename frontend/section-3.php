<section class="section-3" id="resume">
    <div class="content-resume">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between w-100">
                    <div class="title">
                        <p>PENGALAMAN KERJA</p>
                    </div>
                    <p class="fs-1">03</p>
                </div>
            </div>
            <div class="col-12 mb-5 d-flex flex-column flex-md-row">
                <!-- Full Time Start -->
                <div class="col-12 col-sm-4 my-3">
                    <div class="professional">
                        <h5 class="fw-800 fs-3">Kerja Agensi</h5>
                        <ul>
                            <?php 
                                $sql_fulltime = "SELECT * FROM tbl_resume";
                                $query_fulltime = mysqli_query($db,$sql_fulltime);
                                while ($fulltime = mysqli_fetch_array($query_fulltime)) {
                                if ($fulltime['resume_type'] == 'ft') {
                            ?>
                            <li>
                                <div>
                                    <h6 class="text mb-1"><?= $fulltime['resume_org'] ?></h6>
                                    <?= $fulltime['resume_desc'] ?>
                                </div>
                            </li>
                            <?php
                            }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- Full Time End -->
                <!-- Freelance Start -->
                <div class="col-12 col-sm-4 my-3">
                    <div class="freelance">
                        <h5 class="fw-800 fs-3">Kerja Lepas</h5>
                        <ul>
                            <?php 
                                $sql_freelance = "SELECT * FROM tbl_resume";
                                $query_freelance = mysqli_query($db,$sql_freelance);
                                while ($freelance = mysqli_fetch_array($query_freelance)) {
                                if ($freelance['resume_type'] == 'fr') {
                            ?>
                            <li>
                                <div>
                                    <h6 class="text mb-1"><?= $freelance['resume_org'] ?></h6>
                                    <?= $freelance['resume_desc'] ?>
                                </div>
                            </li>
                            <?php
                            }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- Freelance End -->
                <img class="col-12 col-sm-4" src="assets/img/<?= $user['resume_img'] ?>" alt="Photo About">
            </div>
        </div>
    </div>
</section>