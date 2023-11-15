@include('backend.include.head')
@include('backend.include.header')
@include('backend.include.asidebar')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">User</a></li>
          <li class="breadcrumb-item active">Manage User</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1 " id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Last login</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
               
                  @foreach($user as $key => $record)
               
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$record->first_name}} </td>
                    <td>{{$record->email}}</td>
                    <td>{{$record->phone}}</td>
                    <td>{{$record->gender}}</td>
                    <td>{{$record->last_login_at}}</td>
                  
                 
                   
                </td>
                   <!-- <td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>-->
                    <td>
                         <div class="d-flex">
                         <a onclick="return confirm('Are you sure you want to delete?');" href="{{route('user.delete',$record->id)}}"><span class="fa fa-trash text-danger"> </span></a>
                          
                        </div> 
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>  
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
    </section>  

  </main><!-- End #main -->
  @include('backend.include.footer')
  @include('backend.include.script')