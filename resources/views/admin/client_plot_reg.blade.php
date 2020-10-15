 
 @extends('layouts.admin_layouts.admin_layout')
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

<style>
#fg1 {
    margin-bottom: .6rem;
}

</style>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container">

            <section id="tabs" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="project-tab">
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">01. Client’s Info</a>
                                    <a class="nav-item nav-link " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">02. Payment Details</a>
                                    <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">03. Confirmation</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">

                                <!-- 01. Client’s Info Tab -->
                                <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <form>
                                    <!--  Plot Information -->
                                    <div class="row">
                                        <div class="col-lg-12 mt-3">
                                            <div class="card mt-3 shadow-sm rounded-0" >
                                                <div class="card-body" >
                                                <p class="card-text text-muted  text-uppercase">PLOT INFORMATION</p>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Project Name</label>
                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                    <option value="">Select</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Block/SECTOR</label>
                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                    <option value="">Select</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Plot size</label>
                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                    <option value="">Select</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Plot Number</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                    <span class="text-sm float-right text-success"><i class="fas fa-check fa-sm mr-1"></i>Available</span>
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.END  Plot Information -->

                                    <!-- SECTION Applicant’s information -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mt-3 shadow-sm rounded-0" >
                                                <div class="card-body" >
                                                <p class="card-text text-muted text-uppercase">Applicant’s information</p>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">FULL NAME</label>
                                                                <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Father/ husband’s Name</label>
                                                                <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">CNIC</label>
                                                                <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                            <div class="form-group col-lg-12">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Permanent address</label>
                                                                <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                            <div class="form-group col-lg-12">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Postal address</label>
                                                                <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                        </div>                                                         
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.END SECTION Applicant’s information -->

                                    <!-- SECTION Contact information -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mt-3 shadow-sm rounded-0" >
                                                <div class="card-body" >
                                                <p class="card-text text-muted text-uppercase">Contact information</p>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Cell no</label>
                                                                <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Email</label>
                                                                <input type="email" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Home</label>
                                                                <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Office</label>
                                                                <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.END SECTION Contact information -->

                                    <!-- SECTION Contact information -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mt-3 shadow-sm rounded-0" >
                                                <div class="card-body" >
                                                    <p class="card-text text-muted text-uppercase">Next of kin</p>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Name</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Father/ husband’s Name</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">CNIC</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Relation with applicant</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.END SECTION Contact information -->
                                    <div class="row my-4 text-center">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary col-4">Register and Continue</button>
                                        </div>
                                        <div class="col-12 mt-2" >
                                            <a href="#" style="font-size: 15px;">Terms and Conditions</a>
                                        </div>
                                    </div>
                                </form>

                                    
                                </div><!-- /.END  Client’s Info Tab -->

                                <!-- 02. Client’s Info Tab -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <form>
                                    <!-- SECTION  Payment-->
                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            <div class="card mt-3 shadow-sm rounded-0" style="max-width: 336px; min-height:161.59px;" >
                                                <div class="card-body" >
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6" id="fg1">
                                                                        <input type="radio" name="" id="" class="mr-2 "> Cash 
                                                                    </div>
                                                                    <div class="form-group col-md-6" id="fg1">
                                                                        <b> PKR 18,00,000</b>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p class="ml-4  text-muted">
                                                                            Receive the lump-sum and generate a receipt right away.
                                                                        </p>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <div class="card mt-3 shadow-sm rounded-0" style="max-width: 336px; min-height:161.59px;">
                                                <div class="card-body" >
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6" id="fg1">
                                                                        <input type="radio" name="" id="" class="mr-2 "> Installments
                                                                    </div>
                                                                    <div class="form-group col-md-6" id="fg1">
                                                                        <b> PKR 30,000</b>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p class="ml-4 text-muted">
                                                                            Receive the payment in monthly instalments based on client’s budget
                                                                        </p>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-3">
                                            <div class="card mt-3 shadow-sm rounded-0" style="max-width: 336px; min-height:161.59px;">
                                                <div class="card-body" >
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="form-group col-md-6" id="fg1">
                                                                        <input type="radio" name="" id="" class="mr-2 "> Transfer 
                                                                    </div>
                                                                    <div class="form-group col-md-6" id="fg1">
                                                                        <b> PKR 18,00,000</b>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <p class="ml-4 text-muted">
                                                                            This plot is being transferred to someone else and hence doesn’t require any payment.                                                                        </p>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.END SECTION Payment-->

                                    <!-- SECTION Witness -->
                                    <div class="row">
                                        <div class="col-lg-12 mt-1">
                                            <div class="card mt-3 shadow-sm rounded-0" >
                                                <div class="card-body" >
                                                <p class="card-text text-muted text-uppercase">WITNESS</p>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">FULL NAME</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Father/ husband’s Name</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">CNIC</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                </div>
                                                                <div class="form-group col-lg-4">
                                                                    <label for="exampleFormControlSelect1" class="text-uppercase text-muted">Address</label>
                                                                    <input type="text" name="paddress" class="form-control" id="exampleFormControlSelect1">
                                                                </div>
                                                            </div>             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.END SECTION Witness-->

                                    <div class="row my-4 text-center">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary col-2 mr-2">Generate Affidavit</button>
                                            <button type="submit" class="btn btn-primary col-2">Continue</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.END  Client’s Info Tab -->

                                <!-- 03. Confirmation Tab -->
                                <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <!--  Session -->
                                    <div class="row">
                                        <div class="col-lg-12 mt-3">
                                            <div class="card mt-3 shadow-none rounded-0" style="border: 2px solid #2CC2A5" >
                                                <div class="card-body text-center">
                                                    <p class="card-text ">Done! <b> Plot # K510/N </b> has been successfully registered for <b> Gul Khan </b></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.END  Session-->

                                    <!-- SECTION Witness -->
                                    <div class="row">
                                        <div class="col-lg-12 mt-1">
                                            <div class="card mt-3 shadow-sm rounded-0" >
                                                <div class="card-body" >
                                                    <p class="card-text text-muted">Please print out the following documents and hand them over to Gul Khan.</p>
                                                    <div class="container">
                                                        <div class="row text-center">
                                                            <div class="col-6 my-2">
                                                                
                                                                Terms & Conditions
                                                            </div>
                                                            <div class="col-6 my-2">
                                                                Transaction Receipt 
                                                            </div>
                                                            <div class="col-6 my-2">
                                                                Certificate of ownership
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.END SECTION Witness-->
                                    <div class="row my-4 text-center">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary col-2 mr-2">Done</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.END  Confirmation Tab -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

@endsection