<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->
<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
  <!-- ============ Body content start ============= -->
  <div class="main-content">
    <div class="breadcrumb">
      <h1><img src="https://img.icons8.com/color/512/movie-theater.png" style="width: 25px">&ensp;Movie Master</h1>
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
            <form role="form" id="Form" action="" method="post">
              <div class="row">
                <div class="col-md-3 form-group mb-3">
                  <label for="projectname">Movie Name:</label>
                  <input class="form-control" id="movie_name" type="text" name="movie_name" value="" />
                </div>

                <div class="col-md-3 form-group mb-3">
                  <label for="picker1">Movie Type:</label>
                  <select class="form-control" name="movie_type" id="movie_type">
                  <option selected="disabled">---select movie type---</option>
                     <option value="1">India</option>
                     <option value="1">India</option>
                     <option value="1">India</option>
                  </select>
                </div>


                <div class="col-md-2 form-group mb-3">
                    <label for="job">Release Date:</label>
                    <input type="date" class="form-control" id="release_date" placeholder="" name="release_date" value="<?php echo date('Y-m-d'); ?>">
                </div>


                <div class="col-md-2 form-group mb-3">
                    <label for="picker1">Language:</label>
                    <select class="form-control" name="language" id="language">
                    <option selected="disabled">---select language---</option>
                        <option value="1">India</option>
                        <option value="1">India</option>
                        <option value="1">India</option>
                    </select>
                </div>

                <div class="col-md-2 form-group mb-3">
                <label>Dubbing Language:</label><br>
                   <select id="dubbing_language" class="js-states form-control" multiple>
                        <option>Marathi</option>
                        <option>Hindi</option>
                        <option>Tamil</option>
                        <option>English Basic</option>
                    </select>
              
                </div>

                <!-- <div class="col-md-2 form-group mb-3">
                    <label for="job">Release Date:</label>
                    <input type="date" class="form-control" id="expdate" placeholder="" name="expdate" value="<?php echo date('Y-m-d'); ?>">
                </div> -->
              </div>

              <div class="row">
                <!-- <div class="col-md-3 form-group mb-3">
                  <label for="projectname">Movie Name:</label>
                  <input class="form-control" id="projectname" type="text" name="projectname" value="" />
                </div>

                <div class="col-md-3 form-group mb-3">
                  <label for="picker1">Movie Type:</label>
                  <select class="form-control" name="cname" id="cname">
                     <option value="1">India</option>
                     <option value="1">India</option>
                     <option value="1">India</option>
                  </select>
                </div> -->

                <div class="col-md-2 form-group mb-3">
                <label>Musician/Composer:</label><br>
                   <select id="composer" class="js-states form-control" multiple>
                        <option>Java</option>
                        <option>Javascript</option>
                        <option>PHP</option>
                        <option>Visual Basic</option>
                    </select>
              
                </div>
                <div class="col-md-2 form-group mb-3">
                <label>Artist:</label><br>
                   <select id="artist" class="js-states form-control" multiple>
                        <option>Java</option>
                        <option>Javascript</option>
                        <option>PHP</option>
                        <option>Visual Basic</option>
                    </select>
              
                </div>
                <div class="col-md-2 form-group mb-3">
                <label>Lyrics:</label><br>
                   <select id="lyrics" class="js-states form-control" multiple>
                        <option>Java</option>
                        <option>Javascript</option>
                        <option>PHP</option>
                        <option>Visual Basic</option>
                    </select>
              
                </div>
                
                <div class="col-md-2 form-group mb-3">
                  <label for="projectname">Choreographer:</label>
                  <input class="form-control" id="choreographer	" type="text" name="choreographer	" value="" />
                </div>

                <div class="col-md-2 form-group mb-3">
                  <label for="projectname">Budget:</label>
                  <input class="form-control" id="budget" type="number" name="budget" value="" />
                </div>

                <div class="col-md-2 form-group mb-3">
                  <label for="projectname">Grade:</label>
                  <input class="form-control" id="grade" type="text" name="grade" value="" />
                </div>

              </div>

              <div class="col-12 col-sm-2 col-lg-2 col-md-2">
                                           <div class="mb-3">
                                             <label for="file" style="cursor: pointer;">Photo:</label>
                                           <div class="mb-3">
                                             <img id="output" width="100" height="100px">
                                              <input type="file"  accept="image/*" class="form-control" name="photo" id="photo"  onchange="loadFile(event)">
                                            </div></div>
                                        </div>
              

                <!-- jQuery -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <!-- Select2 -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
                <script>
                  $("#artist,#lyrics").select2({
                    placeholder: "",
                    allowClear: true
                  });
                  $("#composer,#dubbing_language").select2({
                    placeholder: "",
                    allowClear: true
                  });
                </script>





                <div class="col-md-4 form-group mb-3">

                  <div class="container mt-3">

                </div>
                                          </div>
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary" type="button" name="btn_save" id="btn_save"><i class="nav-icon fa-regular fa-circle-check"></i>&nbsp;Submit</button>
                                            <a href="<?=base_url() ?>Movie"> <button class="btn btn-warning text-white" type="button" name="list" id="list"><i class="fa-sharp fa-solid fa-pen-to-square"></i>&nbsp;List</button></a>
                                            

                                        </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url('web_resources');?>/dist/js/jquery.min.js"></script>
<script src="<?php echo base_url('web_resources');?>/dist/js/controllers/MovieCreate.js"></script>