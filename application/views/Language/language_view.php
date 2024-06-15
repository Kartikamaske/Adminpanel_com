
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content" style="margin-top:-50px">
                <div class="breadcrumb">
                    <!-- <h1>Composer</h1> -->
                    <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                            <h3><img src="https://img.icons8.com/stickers/512/globe.png" style="width: 25px">&ensp;Language</h3>

                                <form role="form" id="Form" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-3 form-group mb-3">
                                            <label for="firstName1">Languages:</label>
                                            <input class="form-control" id="language" type="text" placeholder="" name="language" value="" />
                                        </div>

                                        
                                    
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check"></i>&nbsp;Submit</button>
                                            <a href="<?=base_url() ?>Language"> <button class="btn btn-warning text-white" type="button" name="list" id="list"><i class="fa-sharp fa-solid fa-pen-to-square"></i>&nbsp;List</button></a>
                                           

                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>
                  
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>


<script  src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>          
<script  src="<?php echo base_url('web_resources');?>/dist/js/controllers/LanguageCreate.js"></script>
                   
                       
               
            