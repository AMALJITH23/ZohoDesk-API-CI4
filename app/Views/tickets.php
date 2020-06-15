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
    <div class="wrapper ">
        <?php echo view('common/sidebar_new'); ?>

        <div class="main-panel">
            <!-- Navbar -->
            <?php echo view('common/navbar_new'); ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-rose d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title ">Tickets <i class="material-icons">local_offer</i></h4>
                                        <p class="card-category"> All Tickets</p>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Filter
                                                <i class="fa fa-filter"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="?status=open">Open</a>
                                                <a class="dropdown-item" href="?status=closed">Closed</a>
                                                <a class="dropdown-item" href="?status=all">All Tickets</a>
                                            </div>
                                        </div>
                                        <button class="btn  btn-sm btn-secondary" 
                                            onclick="add_new();"
                                            data-toggle="tooltip" data-placement="top" title="Add Ticket"
                                            type="button"
                                            style="height: 41px;"
                                            id="csvExport" >
                                            <i class="fa fa-plus"></i> Add New
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <?php if($tickets_count>0){ ?>
                                            <thead class=" text-rose">
                                                <th style="font-weight: 500;">ID</th>
                                                <th style="font-weight: 500;">Email</th>
                                                <th style="font-weight: 500;">Phone</th>
                                                <th style="font-weight: 500;">Subject</th>
                                                <th style="font-weight: 500;">Priority</th>
                                                <th style="font-weight: 500;">Status</th>
                                            </thead>
                                            <tbody>
                                                <?php $session = \Config\Services::session(); ?>
                                                <?php foreach($tickets as $value){  ?>
                                                    <?php if($value['email']==$session->get('email')){ ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $value['id'] ?>
                                                        </td>
                                                        <td>
                                                            <?php  echo $value['email'] ?>
                                                        </td>
                                                        <td class="text-primary">
                                                            <?php  echo $value['phone'] ?>
                                                        </td>
                                                        <td class="text-primary">
                                                            <?php  echo $value['subject'] ?>
                                                        </td>
                                                        <td> 
                                                        
                                                        <?php if($value['priority']=='low'){ ?>
                                                        <span class="badge btn-success p-1 pl-3 pr-3">Low</span>
                                                        <?php }else if($value['priority']=='high'){ ?>
                                                        <span class="badge btn-danger p-1 pl-3 pr-3">High</span>
                                                        <?php }else{ ?>
                                                        <span class="badge badge-info"><?php  echo $value['priority'] ; ?></span>
                                                        <?php } ?>
                                                        </td>
                                                        <td>

                                                        <?php if($value['status']=='Open'){ ?>
                                                        <span class="badge btn-success p-1 pl-3 pr-3">Open</span>
                                                        <?php }else if($value['status']=='Closed'){ ?>
                                                        <span class="badge btn-danger p-1 pl-3 pr-3">Closed</span>
                                                        <?php }else{ ?>
                                                        <span class="badge badge-info">Closed</span>
                                                        <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                <?php } ?>
                                            </tbody>
                                            <?php } else { ?>
                                            <p class=" text-rose" style="font-weight: 500;">Sorry... No data found..</p>
                                            <?php } ?>
                                        </table>
                                    </div>
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
    <script>
    function add_new(){
        console.log("add new");
     window.location.replace('<?php echo base_url() ?>/generate');
    }
    </script>
</body>


</html>