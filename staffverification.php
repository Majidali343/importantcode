<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<style>
    body {
        background-color: #eaf8f7;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: white;
        margin-top: 5vh;
        border-radius: 10px;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        padding: 5px;
    }

    .card-body {
        padding: 15px;
        padding-top: 0px;
    }

    .text-center {
        text-align: center;
    }

    .text-dark {
        color: #333;
    }

    .lead {
        font-size: 18px;
        line-height: 1.6;
    }

    .container p {
        margin-bottom: 15px;
    }

    .container b {
        font-weight: bold;
    }

    .m-5 {
        margin: 2.3rem 0;
    }

    .verifyimage {
        height: 145px;
        width: 165px;
        border-radius: 5px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }
</style>
<?php var_dump($employee) ?>

<body>

    <div class="container p-5 my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="p-3 text-center card-header">
                            <h1 style="color: #0a8870;">
                                Employee Profile
                            </h1>
                        </div>
                        <div class="card-body">
                            <div style="display: flex; justify-content:space-between">
                                <div>
                                    <p class="lead">
                                        This is to certify that <b><?php echo $employee->firstname . " " . $employee->lastname ?></b> <?php if ($employee->active == 1) {
                                                                                                                                            echo "is currently serving";
                                                                                                                                        } else {
                                                                                                                                            echo "served";
                                                                                                                                        } ?> as a valuable member of the Glaxit team, contributing dedicatedly to the operations of the

                                        <?php if ($employee->role_name) { ?>
                                            <b><?php echo $employee->role_name ?></b>  Department.
                                        <?php } else { ?>
                                            Company.
                                        <?php } ?>
                                    </p>


                                    <p class="lead">
                                        His/Her employment began on <b>
                                            <?php
                                            if ($employee->hiringdate == "0000-00-00") {
                                                echo 'Not yet mentioned';
                                            } else {
                                                echo date('Y-m-d', strtotime($employee->hiringdate));
                                            }
                                            ?>
                                        </b>
                                    </p>

                                    <?php if ($employee->active == 1) {
                                        // Do nothing
                                    } else {
                                        if ($employee->leavingdate == NULL) { ?>
                                            <p class="lead">
                                                His/Her employment ended on <b>Not yet mentioned</b>
                                            </p>
                                        <?php } else { ?>
                                            <p class="lead">
                                                His/Her employment ended on <b><?php echo date('Y-m-d', strtotime($employee->leavingdate)); ?></b>
                                            </p>
                                    <?php }
                                    } ?>



                                </div>
                                <div style="padding:10px">
                                    <?php echo staff_profile_image($employee->staffid, ['img', 'img-responsive', 'verifyimage', 'staff-profile-image-thumb'], 'thumb'); ?>
                                </div>
                            </div>

                            <p class="lead">
                                    This certificate from GLAXIT recognizes  
                                 <b><?php echo $employee->firstname . " " . $employee->lastname ?>'s</b> professionalism, meeting all legal requirements with care and honesty.
                            </p>
                            <p class="lead">
                                Issued on <b><?php echo date('Y-m-d', strtotime($employee->datecreated)); ?></b> at <b><?php echo date('H:i A', strtotime($employee->datecreated)); ?></b>
                            </p>
                            <img src="<?php echo base_url('uploads/glaxitbiglogo.png'); ?>" alt="">
                            <p class="" style="font-weight: bold;">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="13" height="13">
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                </svg> info@glaxit.com <br>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15">
                                    <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                </svg> (+92) 343-5698913

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<!-- http://localhost/glaxitemployees/verification/isemployee -->