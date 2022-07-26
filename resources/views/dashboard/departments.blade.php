@include('dashboard.header')
@include('dashboard.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Departments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Departments</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><button type="button" class="btn btn-primary">Add Departments</button></h5>
            
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td> Maliye </td>
                  <td>Designer</td>
                  <td>
                    <button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button>
                    <button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button>
                </td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->


<script src="{{asset('/')}}jsFiles/dashboard/departments/main.js"></script>


@include('dashboard.footer')