 
 @extends('layouts.admin_layouts.admin_layout')
 @section('content')

 <style>


  #p2 {
    font-size: 28px;
    line-height: 32px;
    margin-bottom: 5px;
  }
 </style>
     
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h3 class="mt-5">Salam, Amir.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere perferendis sed ab saepe ducimus quam a ad quis possimus similique. Accusamus debitis eveniet asperiores quasi consequuntur esse excepturi atque voluptatem?</p>
                </div>
            </div>

            <div class="row" >
                <div class="col-md-6" >
                <div class="card" >
                    <div class="card-body" style="background-color: white;">
                    <div class="row">
                        <div class="col-6 text-center" id = "col-6">
                        <img src="{{asset('images/admin_images/imgholder.png')}}" class="img-fluid" alt="" width="180px">
                        <p class="text-muted">INSTALLMENTS DUE THIS WEEK</p>
                        </div>
                        <div class="col-6" id = "col-6">
                        <p id="p2" class="mt-3"> Let’s leave ‘em reminders.</p>
                        <p  class="text-muted">6th-13th September, 2020</p>
                        <button class="btn btn-primary btn-block">Reminder <i class="fas fa-long-arrow-alt-right ml-1"></i></button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                    <div class="card" >
                        <div class="card-body" >
                        <p class="card-text text-uppercase text-muted" >Plot Inquiries</p>
                        <div class="row">
                            <div class="col-4">
                            <h2>73</h2>
                            <p>-7.6%</p>
                            </div>
                            <div class="col-8">
                            <p>Inquiries were made today</p>
                            <button class="btn btn-primary btn-sm btn-block"> <i class="fas fa-plus mr-1"></i> New Inquiry</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="card" >
                        <div class="card-body">
                        <p class="card-text text-uppercase text-muted" >Plot Sales</p>
                        <div class="row">
                            <div class="col-4">
                            <h2>73</h2>
                            <p>-7.6%</p>
                            </div>
                            <div class="col-8">
                            <p>Inquiries were made today</p>
                            <button class="btn btn-primary btn-sm btn-block"> <i class="fas fa-plus mr-1"></i> New Sale</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6" >
                <div class="card" >
                    <div class="card-body" style="background-color: white;">
                    <p class="card-text text-uppercase text-muted" >Plots sold in September</p>
                    <canvas id="myChart"></canvas>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

@endsection


@section('scripts')
    
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: 'line',
  
      // The data for our dataset
      data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
          datasets: [{
              label: 'My First dataset',
              backgroundColor: 'rgb(255, 99, 132)',
              borderColor: 'rgb(255, 99, 132)',
              data: [0, 10, 5, 2, 20, 30, 45]
          }]
      },
  
      // Configuration options go here
      options: {}
  });
  </script>
  
@endsection


