@extends('.admin.adminpage')
@section('title', 'CPFAUSTRALIA: Admin')
@section('content')

<div class="col-md-3"></div>
<div class="col-md-8">
<br><br>
<div class="alert alert-primary" role="alert">
<h4>Branch Dashboard </h4>
</div>

<canvas id="myChart" width="50%"></canvas>
<hr>
<div class="row">

<div class="col-md-3">
<div class="alert alert-success" role="alert">
 
  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
  Branch No. 1</p>
</div> 
</div>

<div class="col-md-3">
<div class="alert alert-success" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
  Branch No. 2</p>
</div>
</div>

<div class="col-md-3">
<div class="alert alert-success" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
  Branch No. 3</p>
</div>
</div>

<div class="col-md-3">
<div class="alert alert-success" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
  Branch No. 4</p>
</div>
</div>



<div class="col-md-3">
<div class="alert alert-success" role="alert">
 
  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
  Branch No. 5</p>
</div> 
</div>

<div class="col-md-3">
<div class="alert alert-success" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
  Branch No. 6</p>
</div>
</div>

<div class="col-md-3">
<div class="alert alert-warning" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
  Branch No. 7</p>
</div>
</div>

<div class="col-md-3">
<div class="alert alert-danger" role="alert">

  <h4 class="list-group-item-heading count">
    1000</h4>
  <p class="list-group-item-text">
  Branch No. 8</p>
</div>
</div>








 </div>



<div class="row">

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>Product sales</strong> <br>
    <h4 class="list-group-item-heading count">
    1000</h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>Total Damaged Items</strong> <br>
    <h4 class="list-group-item-heading count">
    1000</h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

<div class="col-md-4">
  <div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>Gross income Not Vat</strong> <br>
    <h4 class="list-group-item-heading count">
    1000</h4>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>



</div>

<br><br>
<div class="col-12">
<div class="alert alert-primary" role="alert">
<h3>Bestsellers in the week </h3> 
</div>
<!-- 
<br><br>
<h3>Lemon : 250</h3>

<div class="progress">
<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br><br>
<h3>Strawberry : 500</h3>

<div class="progress">
<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br><br>
<h3>Cantaloupe : 700</h3>

<div class="progress">
<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br><br>
<h3>Orange : 1000</h3>

<div class="progress">
<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br><br>
<h3>Apple : 1500</h3>

<div class="progress">
<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br> -->


<canvas id="FruitChart" width="50%"></canvas>




<br>
<br>
</div>


<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Branch No. 1', 'Branch No. 2', 'Branch No. 3', 'Branch No. 4', 'Branch No. 5', 'Branch No. 6', 'Branch No. 7', 'Branch No. 8'],
        datasets: [{
            label: '# Best Of Branch',
            data: [40, 20, 15, 15, 10, 10, 5, 4],
            backgroundColor: [
                'rgba(162, 235, 54, 0.5)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(162,235,54, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>



<script>
var ctx = document.getElementById('FruitChart').getContext('2d');
var FruitChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Lemon', 'Strawberry', 'Cantaloupe', 'Orange', 'Apple', 'banana'],
        datasets: [{
            label: '# Best Selling products',
            data: [100, 50, 20, 20, 10, 5],
            backgroundColor: [
                'rgba(162,235,54, 0.7)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(162,235,54, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>







</div>


@endsection
