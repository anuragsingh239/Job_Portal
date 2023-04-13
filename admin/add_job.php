<?php
include('include/header.php');
include('include/sidebar.php');
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="job_create.php">Jobs</a></li>
            <li class="breadcrumb-item"><a href="#"> Add Job</a></li>

            </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Job</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>
            </div>
          </div>
          <div style="width:50%;margin-left:20%;background-color:#F2F4F4">
          <div id="msg"></div>
            <form action="" method="post" style="margin: 3%;padding:3%" name="customer_form" id="customer_form">
                <!-- <div class="form-group">
                    <label for="Customer Email">Enter Customer Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Customer Email">
                </div> -->
                <div class="form-group">
                    <label for="job_title">Enter Job Title</label>
                    <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Enter Job Title">
                </div>
                <div class="form-group">
                    <label for="des">Enter Description</label>
                    <input type="text" name="des" id="des" class="form-control" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="country">Enter Country</label>
                    <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country">
                </div>
                <div class="form-group">
                    <label for="Last name">Enter State</label>
                    <input type="text" name="state" id="state" class="form-control" placeholder="Enter State">
                </div>
                <div class="form-group">
                    <label for="des">Enter City</label>
                    <input type="text" name="city" id="city" class="form-control" placeholder="Enter City">
                </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
                </div>
                
            </form>
          </div>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>


        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <!-- datatables plugin -->
    <!-- from datatable.net -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
      <?php
include('connection/db.php');
$customer_email=$_SERVER['email'];
$job_title=$_POST['job_title'];
$des=$_POST['des'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
$query=mysqli_query($conn,"insert into all_jobs(customer_email,job_title,des,country,state,city)values('$customer_email','$job_title','$des','$country','$state','$city')");
if($query){
    echo "Data has been successfully inserted";
    header("Location: job_create.php");
}
  }
?>
  </body>
</html>
