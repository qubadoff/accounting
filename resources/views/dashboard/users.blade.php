@include('dashboard.header')
@include('dashboard.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List Group</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">List Group</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default List Group</h5>

              

              <!-- Default List group -->
              <ul class="list-group">
                @foreach($users as $user)
                <li class="list-group-item">{{$user->full_name}}</li>
                @endforeach
              </ul><!-- End Default List group -->

            </div>
          </div>
        </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->





@include('dashboard.footer')