<!DOCTYPE html>
<html lang="en" dir="">


<!-- Mirrored from demos.ui-lib.com/gull/html/layout1/upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 05:16:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PMS_Comtranse</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />

    <link href="<?=base_url();?>Assets/css/style.css" rel="stylesheet" />

    <link href="<?=base_url();?>Assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/dropzone.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/datatables.min.css" />


    
    <link rel="icon" href="<?=base_url() ?>Assets/images/comlogo.png" sizes="32x32" type="image/png">
   
    <!-- ******* Added New Links***** -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.min.css"  />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- <link rel="stylesheet" type="text/css" href="<?=base_url();?>Assets/css/loader.min.css"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Poppins'">
    <style>
    body{
        font-family: 'Poppins', sans-serif;
    }
</style>

    
    <script>
        var base_path="<?php echo base_url();?>";
     </script>


</head>

<body class="text-left" style="margin-top:0px!important;">
    <div class="app-admin-wrap layout-sidebar-large" >
        <div class="main-header">
            <div class="logo">
                <img src="<?=base_url();?>Assets/images/comlogo.png" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                                </p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="#"><i class="i-Drop"></i> Apps</a>
                                    <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="#"><i class="i-Ambulance"></i> Support</a>
                                </div>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="<?=base_url();?>accordion.html">Accordion</a></li>
                                    <li><a href="<?=base_url();?>alerts.html">Alerts</a></li>
                                    <li><a href="<?=base_url();?>buttons.html">Buttons</a></li>
                                    <li><a href="<?=base_url();?>badges.html">Badges</a></li>
                                    <li><a href="<?=base_url();?>carousel.html">Carousels</a></li>
                                    <li><a href="<?=base_url();?>lists.html">Lists</a></li>
                                    <li><a href="<?=base_url();?>popover.html">Popover</a></li>
                                    <li><a href="<?=base_url();?>tables.html">Tables</a></li>
                                    <li><a href="<?=base_url();?>datatables.html">Datatables</a></li>
                                    <li><a href="<?=base_url();?>modals.html">Modals</a></li>
                                    <li><a href="<?=base_url();?>nouislider.html">Sliders</a></li>
                                    <li><a href="<?=base_url();?>tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <!-- <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div> -->
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
             
                <!-- Notificaiton -->
                <div class="dropdown">
                   
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                      
                    
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end ">
                        <img src="<?=base_url();?>Assets/images/studentlogo.png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right justify-content-center" aria-labelledby="userDropdown">
                            
                        <p class="px-4 ">
                            <label for="">User Id:</label>
                            <?php if(!empty($userByLogin[0]->registrationId)){echo $userByLogin[0]->registrationId;}?>
                        </p>
                        <p class="px-4 ">
                        <label for="">User:</label>
                            <?php if(!empty($userByLogin[0]->fname)){echo $userByLogin[0]->fname;}?>
                        </p>

                        <p class="px-4 ">
                            <label for="">Your Group List:</label>
                            <?php
                            $i=0;
                            foreach($userByLogin as $rw=>$value){
                                echo "<span>".$value->groupname." </span>";
                                $i++;            
                            }
                             ?>
                        </p>
                        
                        <a class="dropdown-item text-primary px-4" href="<?=base_url();?>AdminLogin">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item">
                        <a class="nav-item-hold text-decoration-none" href="<?=base_url() ?>CombineReport">
                        <i class="fa-brands fa-slack fa-xl" style="color:#0613d1de;"></i>
                        <span class="nav-text">Dashboard</span></a>
                    </li>

                    <?php $hideMenu=$this->session->userdata('registrationId'); 
                        if($hideMenu==1){
                    ?>

                    <li class="nav-item " data-item="extraUserLinks">
                        <a class="nav-item-hold text-decoration-none" href="<?=base_url() ?>NewRegistration">
                        <i class="fa-solid fa-user-large fa-xl" style="color:#0613d1de;"></i>
                      <span class="nav-text">User <br>Management</span>
                    </a>
                    </li>
                    <?php }?>
                    
                    <?php $hideMenu=$this->session->userdata('registrationId'); 
                        if($hideMenu==1){
                    ?>
                    <li class="nav-item" data-item="extraGroupLinks"><a class="nav-item-hold text-decoration-none" href="<?=base_url()?>#">
                    <i class="fa-solid fa-users fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Group Management</span>
                      
                    </li>
                    
                    <?php }?>

                    <?php $hideMenu=$this->session->userdata('registrationId'); 
                        if($hideMenu==1){
                    ?>
                    <li class="nav-item" data-item="extraProjectLinks"><a class="nav-item-hold text-decoration-none" href="<?=base_url() ?>" style="margin-top: -15px;">
                    <i class="fa-solid fa-book fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Project Management</span>
                    </li>
                    <?php }?>

                    
                 
                    <li class="nav-item" data-item="extrakits"><a class="nav-item-hold text-decoration-none" href="<?=base_url()?>Taskmanagement">
                    <i class="fa-solid fa-file-circle-plus fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Task Management</span>
                    </li>

                   

                    <?php $hideMenu=$this->session->userdata('registrationId'); 
                        if($hideMenu==1){
                    ?>
                    <li class="nav-item" data-item="taskrequirementlinks"><a class="nav-item-hold text-decoration-none" href="<?=base_url()?>Taskdetails" style="margin-top: -10px;">
                    <i class="fa-solid fa-paste fa-2xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Task Requriment</span>
                    </li>
                    <?php }?>


                    <?php $hideMenu=$this->session->userdata('registrationId'); 
                        if($hideMenu==1){
                    ?>
                    <li class="nav-item" data-item=""><a class="nav-item-hold text-decoration-none" href="<?=base_url()?>Indivisualtask">
                    <i class="fa-solid fa-head-side-virus fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Individual Task</span>
                    </li>
                    <?php }?>


                    <?php $hideMenu=$this->session->userdata('registrationId'); 
                        if($hideMenu==1){
                    ?>
                    <li class="nav-item" data-item="analysisLinks"><a class="nav-item-hold text-decoration-none" href="<?=base_url()?>" style="margin-top: -10px;">
                    <i class="fa-solid fa-chart-pie fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Team Analysis</span>
                    </li>
                    <?php }?>

                    <?php $hideMenu=$this->session->userdata('registrationId'); 
                        if($hideMenu==1){
                    ?>
                    <li class="nav-item" data-item="allmasters"><a class="nav-item-hold text-decoration-none" href="<?=base_url()?>Taskmanagement">
                    <i class="fa-solid fa-envelope-open fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Masters</span>
                    </li>
                    <?php }?>

                    <?php $hideMenu=$this->session->userdata('registrationId'); 
                        if($hideMenu==1){
                    ?>
                    <li class="nav-item" data-item="allReports"><a class="nav-item-hold text-decoration-none" href="<?=base_url()?>" style="margin-top: -5px;">
                    <i class="fa-solid fa-magnifying-glass-arrow-right fa-xl" style="color:#0613d1de;"></i>
                    <span class="nav-text">Reports</span>
                    </li>
                    <?php }?>
                   
                    <li class="nav-item"><a class="nav-item-hold text-decoration-none" href="<?=base_url();?>AdminLogin">
                    <i class="fa-solid fa-right-from-bracket fa-xl" style="color:#0613d1de;"></i>

                    <span class="nav-text">Log out</span></a>
                    </li>
              
                   
                </ul>
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
              
                <ul class="childNav" data-parent="forms">
                    <li class="nav-item"><a href="<?=base_url();?>Role"><i class=" nav-icon far fa-user-circle"></i><span class="item-name">Role</span></a></li>

                </ul>
               
               
                <!-- chartjs-->
                <ul class="childNav" data-parent="charts">
                    <!-- <li class="nav-item"><a href="<?=base_url();?>SelectStudent"><i class=" nav-icon nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Selected List</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>SelectStudent/branch"><i class=" nav-icon nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Branch Wise List</span></a></li>
                    <li class="nav-item dropdown-sidemenu"><a href="<?=base_url();?>SelectStudent/department"><i class=" nav-icon nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Department Wise List</span></a></li>

                    <li class="nav-item dropdown-sidemenu"><a href="<?=base_url();?>SelectStudent/company"><i class=" nav-icon nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Company Wise List</span></a></li> -->
                </ul>

                
                <ul class="childNav" data-parent="extraUserLinks">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>NewRegistration/create">
                    <i class="fa-solid fa-user-plus fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Create New User</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>NewRegistration/index">
                    <i class="fa-solid fa-user-pen fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Modify User</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Attendance">
                    <i class="fa-solid fa-person-chalkboard fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Attendance</span></a></li>


                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>LeaveManagement">
                    <i class="fa-regular fa-calendar-check fa-xl" style="color:#0613d1de;"></i>

                    &emsp;<span class="item-name">LeaveManagement</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-people-arrows fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">User Report</span></a></li>
                   
                </ul>

                
                <ul class="childNav" data-parent="extraGroupLinks">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>AddGroup/create">
                    <i class="fa-solid fa-users-gear fa-xl" style="color:#0613d1de;"></i>

                    &emsp;<span class="item-name">Create New Group</span></a></li>
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>AddGroup/index">
                    <i class="fa-solid fa-users fa-xl" style="color:#0613d1de;"></i>
                     &emsp;<span class="item-name">Modify Group</span></a></li>
                   
                </ul>

                <ul class="childNav" data-parent="extraProjectLinks">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Project/create">
                    <i class="fa-brands fa-windows fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Create New Project</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Project/index">
                    <i class="fa-solid fa-share-from-square fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Modify Project</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-chart-simple fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Project Status</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-magnifying-glass-plus fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Project Report</span></a></li>
                   
                </ul>
               

                <ul class="childNav" data-parent="extrakits">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>TaskCreation/create">
                    <i class="fa-solid fa-file-circle-plus fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Create New Task</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>TaskCreation/index">
                    <i class="fa-solid fa-file-arrow-up fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Modify Task</span></a></li>


                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Grouptype/index">
                    <i class="fa-solid fa-crop-simple fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Task Assign</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-paste fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Task Status</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>AdminTaskReport">
                    <i class="fa-solid fa-file-circle-exclamation fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Task Report</span></a></li>
                   
                </ul>

                  
                <ul class="childNav" data-parent="taskrequirementlinks">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Taskdetails">
                    <i class="fa-solid fa-file-circle-check fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Taskdetails</span></a></li>
                </ul>
                

                <ul class="childNav" data-parent="analysisLinks">
                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-user-pen fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Group Analysis</span></a></li>
                    
                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-chart-simple fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Project Analysis</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-magnifying-glass-minus fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Task Analysis</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-head-side-virus fa-xl" style="color:#0613d1de;"></i>

                    &emsp;<span class="item-name">Individual Analysis</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-user-gear fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Individual Task Analysis</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="#">
                    <i class="fa-solid fa-users fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">User Apprisal Report</span></a></li>
                   
                </ul>

                <ul class="childNav" data-parent="allmasters">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>AddCollage/index">
                    <i class="fa-solid fa-hotel fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Collage</span></a></li>
                    
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Duration/index">
                    <i class="fa-solid fa-clock fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Duration</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Qualification/index">
                    <i class="fa-solid fa-graduation-cap fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Qualification</span></a></li>
                    
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Role_Controller/index">
                    <i class="fa-solid fa-dice-d6 fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Role</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Sem/index">
                    <i class="fa-solid fa-dice fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Sem</span></a></li>
                    
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>Technology/index">
                    <i class="fa-solid fa-circle-nodes fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Technology</span></a></li>
                   
                </ul>
               
                
                <ul class="childNav" data-parent="allReports">
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>FeesReport">
                    <i class="fa-brands fa-twitch fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Fees Report</span></a></li>

                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>GroupStatusReport">
                    <i class="fa-solid fa-chalkboard-user fa-xl" style="color:#0613d1de;"></i>
                    &emsp;<span class="item-name">Group & Status Report</span></a></li>
                   
                </ul>

                <ul class="childNav" data-parent="sessions">
                    <li class="nav-item"><a class="text-decoration-none" href="http://demos.ui-lib.com/gull/html/sessions/signin.html"><i class=" nav-icon nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
                    <li class="nav-item"><a class="text-decoration-none" href="http://demos.ui-lib.com/gull/html/sessions/signup.html"><i class=" nav-icon nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
                    <li class="nav-item"><a class="text-decoration-none" href="http://demos.ui-lib.com/gull/html/sessions/forgot.html"><i class=" nav-icon nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                </ul>
                <ul class="childNav" data-parent="others">
                    <li class="nav-item"><a class="text-decoration-none" href="http://demos.ui-lib.com/gull/html/sessions/not-found.html"><i class=" nav-icon nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
                    <li class="nav-item"><a class="text-decoration-none" href="<?=base_url();?>user.profile.html"><i class=" nav-icon nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
                    <li class="nav-item"><a class="text-decoration-none" class="open" href="<?=base_url();?>blank.html"><i class=" nav-icon nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>

       