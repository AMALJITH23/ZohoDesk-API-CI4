<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('common/head_new'); ?>
</head>

<body class="">
<style>
#loading {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: fixed;
  display: block;
  opacity: 0.7;
  background-color: #fff;
  z-index: 99;
  text-align: center;
}

#loading-image {
  /* position: absolute;
  top: 100px;
  left: 240px; */
  /* z-index: 100; */
  
    z-index: 100;
    position: fixed;
    top: 25%;
    left: 36%;
}
</style>
    <div class="wrapper ">
        <?php echo view('common/sidebar_new'); ?>

        <div class="main-panel">
            <!-- Navbar -->
            <?php echo view('common/navbar_new'); ?>
            <!-- End Navbar -->
            <div class="content" id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header card-header-rose d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title ">Submit a ticket <i
                                                class="material-icons">perm_identity</i>
                                        </h4>
                                        <div>
                                            <p class="card-category"> Ticket Information</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                <form method="post" enctype="multipart/form-data" name="generate_form" id="generate_form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Email address</label>
                                                <input id="email"
                                                       name="email" type="email" value="<?php echo $user['email'] ; ?>"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Full Name</label>
                                                <input id="full_name"
                                                       name="full_name"  type="text" value="<?php echo $user['full_name'] ; ?>"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Date Of Birth</label>
                                                <input id="dob"
                                                       name="dob"  type="text"
                                                value="<?php echo date_format(date_create($user['dob']),"M-d-Y") ;?>"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Gender</label>
                                                <input id="gender"
                                                       name="gender"  type="text" value="<?php echo $user['gender'] ; ?>"
                                                    class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Department</label>
                                                <input id="department"
                                                       name="department"  type="text"
                                                    class="form-control" required >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Subject</label>
                                                <input id="subject"
                                                       name="subject"  type="text" 
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Category</label>
                                                <input id="category"
                                                       name="category"  type="text"
                                                    class="form-control" required >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Priority</label>
                                                <input id="priority"
                                                       name="priority"  type="text" 
                                                    class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Description</label>
                                                <input id="description"
                                                       name="description"  type="text" 
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button  id="submit_form" 
                                                       name="submit_form" 
                                                     type="submit" class="btn btn-sm btn-success">
                                                     Submit Ticket
                                            </button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <?php echo view('common/footer_new'); ?>
            <!-- footer -->

        </div>
    </div>
    <!-- driver page scripts -->
    
    
    <script>
    $(document).ready(function () {
        resetForms();
    });
    </script>
</body>

</html>