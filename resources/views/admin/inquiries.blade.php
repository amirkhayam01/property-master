 
 @extends('layouts.admin_layouts.admin_layout')
 @section('content')
 <style>

 </style>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container">

            <!-- SECTION 1 -->
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mt-5">New Plot Inquiry</h4>
                </div>
                <div class="col-lg-12">
                    <div class="card mt-2 shadow-sm rounded-0" >
                        <div class="card-body" >
                        <p class="card-text">Search for a plot to confirm its availability. You can also refine your search through filters.</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <form>
                                    <div class="row">
                                        <div class="form-group col-lg-4">
                                            <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Project Name</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option value="">Select</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Block/SECTOR</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option value="">Select</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Plot size</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option value="">Select</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>
                                          <div class="form-group col-lg-4">
                                            <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Plot Number</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option value="">Plot#</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="col-sm-2 col-6" style="padding-left: 0px;">
                                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.END SECTION 1 -->

            <!-- SECTION 2 RESULTS -->
            <div class="row my-5">
                <div class="col-lg-12">
                    <h4>Results</h4>
                </div>
                <div class="col-lg-12 mt-2" id="cb" style="padding-bottom: 0px">
                    <div class="row text-center" style="padding-bottom: 0px !important; ">
                        <div class="col-2">
                          <p class="text-muted" id="custlabel"> PLOT NUMBER </p>
                        </div>
                        <div class="col-2">
                           <p class="text-muted" id="custlabel"> PROJECT </p>
                        </div>
                        <div class="col-2">
                           <p class="text-muted" id="custlabel"> BLOCK/SECTOR </p>
                        </div>
                        <div class="col-2">
                           <p class="text-muted" id="custlabel" > SIZE </p>
                        </div>
                        <div class="col-2">
                           <p class="text-muted" id="custlabel" > AVAILABILITY </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mt-2 shadow-sm rounded-0" >
                        <div class="card-body" id="cb" >
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-2">
                                      <p id="p3" class="text-muted" style="padding-right: 20px;"> K310/N </p>
                                    </div>
                                    <div class="col-2">
                                       <p id="p3" style="padding-right: 10px;"> PHASE III </p>
                                    </div>
                                    <div class="col-2">
                                       <p id="p3"> M </p>
                                    </div>
                                    <div class="col-2">
                                       <p id="p3" style="padding-left: 5px;"> 10 M </p>
                                    </div>
                                    <div class="col-2">
                                       <p id="p3" style="padding-left: 10px;"> Available </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3"> <a href="#"> Register </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2 shadow-sm rounded-0" >
                        <div class="card-body" id="cb" >
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-2">
                                      <p id="p3" class="text-muted" style="padding-right: 20px;"> K310/N </p>
                                    </div>
                                    <div class="col-2">
                                       <p id="p3" style="padding-right: 10px;"> PHASE III </p>
                                    </div>
                                    <div class="col-2">
                                       <p id="p3"> M </p>
                                    </div>
                                    <div class="col-2">
                                       <p id="p3" style="padding-left: 5px;"> 10 M </p>
                                    </div>
                                    <div class="col-2">
                                       <p id="p3" style="padding-left: 10px;"> Available </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3"> <a href="#"> Register </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.END SECTION 2 -->

            <!-- SECTION 3 Other Plots -->
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mt-5">Other available plots in Block M</h4>
                </div>
                <div class="col-lg-12 mt-2" id="cb" style="padding-bottom: 0px">
                    <div class="row text-center" style="padding-bottom: 0px !important; ">
                        <div class="col-2">
                            <p class="text-muted" id="custlabel"> PLOT NUMBER </p>
                        </div>
                        <div class="col-2">
                            <p class="text-muted" id="custlabel"> PROJECT </p>
                        </div>
                        <div class="col-2">
                            <p class="text-muted" id="custlabel"> BLOCK/SECTOR </p>
                        </div>
                        <div class="col-2">
                            <p class="text-muted" id="custlabel" > SIZE </p>
                        </div>
                        <div class="col-2">
                            <p class="text-muted" id="custlabel" > AVAILABILITY </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mt-2 shadow-sm rounded-0" >
                        <div class="card-body" id="cb" >
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-2">
                                        <p id="p3" class="text-muted" style="padding-right: 20px;"> K310/N </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3" style="padding-right: 10px;"> PHASE III </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3"> M </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3" style="padding-left: 5px;"> 10 M </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3" style="padding-left: 10px;"> Available </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3"> <a href="#"> Register </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2 shadow-sm rounded-0" >
                        <div class="card-body" id="cb" >
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-2">
                                        <p id="p3" class="text-muted" style="padding-right: 20px;"> K310/N </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3" style="padding-right: 10px;"> PHASE III </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3"> M </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3" style="padding-left: 5px;"> 10 M </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3" style="padding-left: 10px;"> Available </p>
                                    </div>
                                    <div class="col-2">
                                        <p id="p3"> <a href="#"> Register </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5"></div>
                </div>
            </div><!-- /.END SECTION 3 -->


        </div>
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

@endsection