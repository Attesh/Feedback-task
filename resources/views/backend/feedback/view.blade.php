@include('backend.include.head')
@include('backend.include.header')
@include('backend.include.asidebar')
<main id="main" class="main">
<div class="pagetitle">
      <h1>Feedback</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Feedback</li>
          <li class="breadcrumb-item active">View Feedback</li>
        </ol>
      </nav>
    </div>
   <!-- End Page Title -->
  


   <section class="section addEvent">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <!-- <ul class="nav nav-pills mb-1 mt-3" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active buttnview" id="detailTab-tab" data-bs-toggle="pill" data-bs-target="#detailTab" type="button" role="tab" aria-controls="detailTab" aria-selected="true">Member Record</button>
                     </li>
                  </ul> -->
                  <div class="tab-content pt-2" id="myTabContent">
                     <div class="tab-pane fade show active" id="detailTab" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
                           <div class="col-lg-12">
                              <div class="card eventDetailCard">
                                 <!-- <div class="card-header profpicname">
                                 Submitted Record
                                 </div> -->
                                 <div class="card-body">

                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="viewMemberContent">
                                             <p class="mb-1">
                                             <strong>Name:</strong><br>
                                                
                                                   {{$feedback->name}}
                                                
                                             </p>
                                             <p class="mt-2">
                                             <strong>Email:</strong><br>

                                             {{$feedback->email}}
                                             </p>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col-md-8">
                                          <p class="mb-1">
                                                   <strong>Title:</strong><br>
                                                   
                                             {{$feedback->title}}
                                             
                                               
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <p class="mb-1">
                                                   <strong>Category:</strong><br>
                                                   
                                             {{$feedback->category}}
                                             
                                               
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <p class="mb-1">
                                                   <strong>Vote Count:</strong><br>
                                                   
                                             {{$feedback->vote_count}}
                                             
                                               
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <p class="mb-1">
                                                   <strong>Feedback:</strong><br>
                                                   
                                             {!! $feedback->feedback !!}
                                             
                                               
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> 

                  <div class="row">
      <div class="col-lg-12">

        <div class="card">

          <div class="card-body">  
            <!-- Table with stripped rows -->
            <h3>Comments</h3>

            <div class="table-responsive">
              <table class="table table1 " id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">content</th>
                    <th scope="col">rating</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($comment as $key => $record)
                  <tr>
                    
                    <th scope="row">{{$key+1}}</th>
                    <td>
                        @if ($record->user)
                            {{ $record->user->first_name . ' ' . $record->user->last_name }}
                        @else
                            A walking customer
                        @endif
                    </td>
                    <td>{{ $feedback->title ?? 'N/A' }}</td>
                    <td>{!! $record->content ?? 'N/A' !!}</td>
                    <td>{{ $record->rating ?? 'N/A' }}</td>
                    <td>{{ optional($record->created_at)->format('Y-m-d') ?? 'N/A' }}</td>


                 
                
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
                  <div class="col-lg-12">
                        <div class="d-flex justify-content-end align-items-end">
                           <a href="{{url('/admin/feedback')}}" class="btn btn-primary m-1 backbtnn">Back</a>
                           <!-- <a href="#" class="btn btn-primary m-1">Save</a> -->
                           
                        </div>
                     </div>  
               </div>
            </div>
         </div>
      </div>

     
      
</section>
</main>

@include('backend.include.footer')
@include('backend.include.script')