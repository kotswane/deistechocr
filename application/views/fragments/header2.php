<div class="header">
    <!-- Logo -->
    <a class="logo" >
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>DT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"> <img alt="User Image" class="user-image" src="<?php echo base_url();?>dist/img/logo.png" style="width: 400px;"/>
                       </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img alt="User Image" class="user-image" src="<?php echo base_url();?>dist/img/avatar5.png"/>
                        <span class="hidden-xs"><?php echo $this->session->username;?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img alt="User Image" class="img-circle" src="<?php echo base_url();?>dist/img/avatar2.png"/>
							<p><?php echo $this->session->username;?></p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a class="btn btn-default btn-flat" target="_blank" href="https://www.deistech.co.za/contact">My Contacts</a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="<?php echo site_url();?>/user/logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a data-toggle="control-sidebar" href="#"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</div>