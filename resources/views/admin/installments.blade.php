 
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
                    <h4 class="mt-5">Installments</h4>
                </div>
                <div class="col-lg-12">
                    <div class="card mt-2 shadow-sm rounded-0" >
                        <div class="card-body" >
                        <p class="card-text">Search for a plot to view its payment history or to add new payments</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <form>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Plot Number</label>
                                            <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1" placeholder="Plot#">
                                        </div>
                                        <div class="form-group col-md-4">
                                        <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Customer Name</label>
                                        <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1" placeholder="Name">

                                        </div>
                                        <div class="form-group col-md-4">
                                        <label for="exampleFormControlSelect1" class="text-uppercase text-muted">CNIC</label>
                                        <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1" placeholder="1234-1234567-1">

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

            <div class="col-lg-12">
                <h4 class="mt-4">Payments due this week</h4>
            </div>


        </div>
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

@endsection