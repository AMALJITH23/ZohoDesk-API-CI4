<div class="sidebar" data-color="rose" data-background-color="white"
    data-image="<?php echo base_url() ; ?>/template/assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="" class="simple-text logo-normal">
    Ticket Desk
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item <?php $request = \Config\Services::request(); 
                if ($request->uri->getSegment(1) == 'tickets') { 
                        echo " active" ; 
                    }  ?>">
                <a class="nav-link" href="/tickets">
                    <i class="material-icons">local_offer</i>
                    <p>Tickets</p>
                </a>
            </li>
            <li class="nav-item <?php 
                                $request = \Config\Services::request(); 
                                if ($request->uri->getSegment(1) == 'generate') { ?> active
                                  <?php }  ?>
                                ">
                <a class="nav-link" href="/generate">
                    <i class="material-icons">content_paste</i>
                    <p>Generate</p>
                </a>
            </li>
        </ul>
    </div>
</div>