
<style>
    

    .arrow{
      position: relative;
      width:300px;
      background: red
      height:40px;
      line-height: 40px;
      margin-bottom:30px; 
      text-align:center;
      font-size:20px;
      color:#fff;
    }
    
    .arrow-right:after{
        content: "";
        position: absolute;
        right: -20px;
        top: 0;
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
        border-left: 20px solid red; 
    }
    .horizontal{
        display: block;
    content: "";
    height: 30px;
    margin-top: -31px;
    border-style: solid;
    border-color: Grey;
    border-width: 0 0 2px 0;
    border-radius: 20px;
    
    }
    .card:hover{
         transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
    .card-body{
        height: 100%;
        
    }
    </style>
            <!-- =============== Left side End ================-->
            <div class="main-content-wrap sidenav-open d-flex flex-column">
                <!-- ============ Body content start ============= -->
                <div class="main-content">
                    <div class="breadcrumb">
                        <h1>Music Dashboard</h1>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <div class="mycard mb-4"> -->
                                <div class="card-body">
                                    <form role="form" id="Form" action="" method="post">
                                        <!-- <div class="row">
                                         <div class="col-md-3 form-group mb-3">
                                                <label for="picker1">Branch name</label>
                                                <select class="form-control" name="branchname">
                                                    <option value="1">India</option>
                                                    <option value="1">Chin</option>
                                                    <option value="1">Africa</option>
                                                    <option value="1">America</option>
                                                  
                                                </select>
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="">Startdate</label>
                                                <input class="form-control" type="date" name="startdate" id="startdate"  value="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                                <label for="">Enddate</label>
                                                <input class="form-control" type="date" name="endtdate" id="enddate"  value="<?php echo date('Y-m-d'); ?>"/>
                                            </div>
                                            <div class="col-md-3 form-group mb-3">
                                            <img src="<?=base_url();?>Assets\images\Search-Png-Image (3).png" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:30px;margin-top:30px;">
                                            </div> 
                                            
    
    
                                           
                                        </div> -->
                                    </form>
                                </div>
                            <!-- </div> -->
                        </div>
    </div>
    <!-- <div class="separator-breadcrumb border-top"></div> --> 
                  <div class="row">
                       
                        <div class="col-lg-4 col-md-6 col-sm-6">
                           
                              <div class="arrow arrow-right bg-danger text-white" style="width:250px;">Users</div>
                        </div>
                      
                       
                    </div> 
                    
                    <div class="row">
                        <div class="card"></div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                                <div class="card-body bg-info text-center"><img src="https://img.icons8.com/officel/512/add-user-group-man-man.png" style="height:80px" >
                                    <div class="content">
                                        
                                        <h4 class=" text-white mt-0 mb-1">Daily User</h4>
                                        <p class="text-white text-24 line-height-1 mb-1">100</p>
                                        <p class="text-white text-14 mb-1">compared to last week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                                <div class="card-body bg-light text-center"><img src="https://img.icons8.com/officel/512/remove-user-male.png" style="height:80px">
    
                                    <div class="content">
                                    <h4 class="text-white mt-0 mb-1">Delete User</h4>
                                        <p class="text-white text-24 line-height-1 mb-1">30</p>
                                        <p class="text-white text-14 mb-1">compared to last week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                                <div class="card-body bg-warning text-center"><img src="https://img.icons8.com/officel/512/cheap-2.png" style="height:80px">
                                    <div class="content">
                                    <h4 class="text-white mt-0 mb-1">Monthly Sale</h4>
                                        <p class="text-white text-24 line-height-1 mb-1">200</p>
                                        <p class="text-white text-14 mb-1">compared to last week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
    <hr class="horizontal">
                    <div class="row">
                       
                       <div class="col-lg-4 col-md-6 col-sm-6">
                          
                             <div class="arrow arrow-right bg-danger text-white" style="width:250px;">Release Songs</div>
                              
                               
                              
                       </div>
                     
                      
                   </div> 
                   
                   <div class="row">
                       <div class="card"></div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-warning text-center"><img src="https://img.icons8.com/officel/512/music-library--v1.png" style="height:80px">
                                   <div class="content">
                                       
                                       <h4 class="text-white mt-0 mb-1">Daily Songs</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">100</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-info text-center"><img src="https://img.icons8.com/stickers/512/treble-clef.png" style="height:80px">
    
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Monthly Songs</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">30</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-success text-center"><img src="https://img.icons8.com/dusk/512/music-record.png" style="height:80px">
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Yearly Songs</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">200</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                      
                   </div>
                   <hr class="horizontal">
                   <div class="row">
                       
                       <div class="col-lg-4 col-md-6 col-sm-6">
                          
                             <div class="arrow arrow-right bg-danger text-white" style="width:250px;">Recently Watched</div>
                              
                               
                              
                       </div>
                     
                      
                   </div> 
                   
                   <div class="row">
                       <div class="card"></div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-success text-center"><img src="https://img.icons8.com/dusk/2x/add-record.png" style="height:80px">
                                   <div class="content">
                                       
                                       <h4 class="text-white mt-0 mb-1">Dailywise </h4>
                                       <p class="text-white text-24 line-height-1 mb-1">100</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-light text-center"><img src="https://img.icons8.com/bubbles/512/apple-music.png" style="height:80px">
    
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Weeklywise</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">30</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-info text-center"><img src="https://img.icons8.com/stickers/512/musical-stories.png" style="height:80px">
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Monthwise</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">200</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       
                      
                   </div>
                   <!-- <hr class="horizontal">
                   <div class="row">
                       
                       <div class="col-lg-4 col-md-6 col-sm-6">
                          
                             <div class="arrow arrow-right bg-danger text-white" style="width:300px;"> Purchase Order</div>
                              
                               
                              
                       </div>
                     
                      
                   </div> 
                    
                   <div class="row">
                       <div class="card"></div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-warning text-center"><i class="fa-solid fa-calculator" style="color:white"></i>
                                   <div class="content">
                                       
                                       <h4 class="text-white mt-0 mb-1">Todays Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">0</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-primary text-center"><i class="fa fa-eur" aria-hidden="true" style="color:white"></i>
    
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Total Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">13</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-success text-center"><i class="nav-icon fa fa-hourglass-half" aria-hidden="true" style="color:white"></i>
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Pending Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">0</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                      
                   </div>-->
                   <!-- <hr class="horizontal"> -->
                   <!-- <div class="row">
                       
                       <div class="col-lg-4 col-md-6 col-sm-6">
                          
                             <div class="arrow arrow-right bg-danger text-white" style="width:300px;">Invoice</div>
                              
                               
                              
                       </div>
                     
                      
                   </div>  -->
                   <!-- <div class="row">
                       <div class="card"></div>
                       <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-warning text-center"><i class="fa-solid fa-calculator" style="color:white"></i>
                                   <div class="content">
                                       
                                       <h4 class="text-white mt-0 mb-1">Todays Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">0</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-primary text-center"><i class="fa fa-eur" aria-hidden="true" style="color:white"></i>
    
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Total Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">13</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-success text-center"><i class="nav-icon fa fa-hourglass-half" aria-hidden="true" style="color:white"></i>
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Pending Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">0</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-warning text-center"><i class="fa-solid fa-calculator" style="color:white"></i>
                                   <div class="content">
                                       
                                       <h4 class="text-white mt-0 mb-1">Todays Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">0</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-primary text-center"><i class="fa fa-eur" aria-hidden="true" style="color:white"></i>
    
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Total Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">13</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4">
                               <div class="card-body bg-success text-center"><i class="nav-icon fa fa-hourglass-half" aria-hidden="true" style="color:white"></i>
                                   <div class="content">
                                   <h4 class="text-white mt-0 mb-1">Pending Count</h4>
                                       <p class="text-white text-24 line-height-1 mb-1">0</p>
                                       <p class="text-white text-14 mb-1">compared to last week</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       
                   </div> -->
                   <div class="row">
                       
                       <div class="col-lg-4 col-md-6 col-sm-6">
                          
                             <div class="arrow arrow-right bg-danger text-white" style="width:250px;"> Invoice </div>    
                              
                       </div>  
                   </div>        
                   <div class=row>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4 abc">
                                <div class="card-body bg-info text-center">
                                    <div class="content">
                                    <img src="https://img.icons8.com/officel/512/add-user-group-man-man.png" style="height:80px" >
                                        <lable class="text-white text-24 line-height-1 mb-1 mt-2 "style="margin-left:15px;">20</lable>
                                        <p class="text-white text-16 mb-1">Todays Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4 abc">
                                <div class="card-body bg-light text-center">
                                    <div class="content">
                                   <img src="https://img.icons8.com/officel/512/cheap-2.png" style="height:80px">
    
                                        <lable class="text-white text-24 line-height-1 mb-1 mt-2 "style="margin-left:15px;">20</lable>
                                        <p class="text-white text-16 mb-1">&nbsp;&nbsp;Total Sale</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4 abc">
                                <div class="card-body bg-success text-center">
                                    <div class="content">
                                    <img src="https://img.icons8.com/bubbles/512/amazon-music.png" style="height:80px">
                                        <lable class="text-white text-24 line-height-1 mb-1 mt-2"style="margin-left:15px;">20</lable>
                                        <p class="text-white text-16 mb-1">Release songs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4 abc">
                                <div class="card-body bg-warning text-center">
                                    <div class="content">
                                    <img src="https://img.icons8.com/officel/512/time-machine--v1.png" style="height:80px">
                                        <lable class="text-white text-24 line-height-1 mb-1 mt-2"style="margin-left:15px;">20</lable>
                                        <p class="text-white text-16 mb-1">Recently Watched</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="card card-icon-bg card-icon-bg-white o-hidden mb-4 abc">
                                <div class="card-body bg-primary text-center">
                                    <div class="content">
                                    <img src="https://img.icons8.com/officel/512/photos-folder.png" style="height:80px">
                                        <lable class="text-white text-24 line-height-1 mb-1 mt-2 "style="margin-left:40px;">20</lable>
                                        <p class="text-white text-14 mb-1">Total Publish Songs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                       
                        
                        
    </div>
    
                   <hr class="horizontal">
             
    <script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
    <script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/StudentCreate.js"></script>
                       
                           
                   
                
                  
                   
       
                           
                   
                