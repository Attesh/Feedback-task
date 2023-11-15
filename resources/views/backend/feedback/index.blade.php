@include('backend.include.head')
@include('backend.include.header')
@include('backend.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Feedback</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</a></li>
          <li class="breadcrumb-item active">Manage Feedback</a></li>
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
                    <th scope="col">Category</th>
                    <th scope="col">Title</th>
                    <th scope="col">Vote count</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($feedback as $key => $record)
                  <tr>
                    
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$record->name}}</td>
                    <td>{{$record->category}}</td>
                    <td>{{$record->title}}</td>
                    <td>{{$record->vote_count}}</td>
                  @if($record->status === '0')
                   <td>
                      <div class="">
                        <a href="{{route('feedback.comment-disabled',$record->id)}}" title="Click to disabled">
                          <span class="badge bg-warning text-dark">Allowed</span>
                        </a>
                      </div>
                    </td>
                    @else

                    <td>
                      <div class="">
                        <a href="{{route('feedback.comment-disabled',$record->id)}}" title="Click to allowed">
                          <span class="badge bg-warning text-dark">disabled</span>
                        </a>
                      </div>
                    </td>
                    @endif
                
                    <td>
                       <div class="d-flex">
                        <a href="{{route('feedback.view',$record->id)}}"><span class="fa fa-eye"> </span></a>&nbsp;
                        <a onclick="return confirm('Are you sure you want to delete?');" href="{{route('feedback.delete',$record->id)}}""><span class="fa fa-trash text-danger"> </span></a>
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