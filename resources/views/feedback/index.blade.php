@extends('main')

@section('content')

<style>
    .rating {
   width: 180px;
}

.rating__star {
   cursor: pointer;
   color: #dabd18b2;
}

.coolSelectWrapper:before {
  top: 70%;
}
</style>
<main>

    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex align-items-center">
                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>About</li>
                    <li>Feedback</li>
                </ol>
            </div>
        </div>
    </section>

    <article class="aboutBlock pt-7 pb-6 pb-sm-5 pt-sm-5 pb-md-7 pt-lg-8 pb-lg-8 pt-xl-10 pb-xl-10">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-6 order-lg-2">
                    <div class="imgHolder position-relative mx-auto mb-6 mb-sm-15 mb-lg-0 mx-lg-0">
                        <img src="{{asset('images/1774850075843079.png')}}" class="w-100 img-fluid" alt="image description">
                        <span class="bgPattern bgPatternv1 position-absolute">
                        <img src="{{asset('assets/images/bgPattern01.png')}}" class="img-fluid" alt="pattern">
                        </span>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6 d-flex align-items-lg-center order-lg-1">
                    <div class="align pr-lg-10 pr-xl-15">
                        <header class="headingHead mb-5">
                            <h2>
                                <!-- <strong class="d-block text-uppercase hTitle fwMedium mb-4">Never Buy </strong> -->
                                <span class="d-block"> Give us Your Feedback</span>
                            </h2>
                        </header>
                        <p></p>
                        <ul class="list-unstyled servicesList Hatchbacks">
                            
                            <li>You can give your feedback about our blog and services. Your feedback is very important to us.</li>

                            <li>We consider your feedback for the improvement of our services. You can send your feedback through email and comments.</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </article>
  
    <div class="contactFormBlock pt-0 pt-sm-10 pb-10">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <header class="headingHead mb-5">
                    <h2>
                        <!-- <strong class="d-block text-uppercase hTitle fwMedium mb-4">Never Buy </strong> -->
                        <span class="d-block">Feedback</span>
                    </h2>
                </header>
               
                <div class="col-12 col-md-12 col-lg-12">
                    <form class="contactForm welcome-card" id="ratingForm" method="POST" action="{{route('feedback-store')}}" enctype="multipart/form-data">
                        @csrf
                        <h4 class="h4 mb-5 text-center">Give your Feedback</h4>
                        <div class="row mx-n2">
                            <div class="col-12 col-sm-6 px-2">

                                <div class="form-group">

                                    <label class="colFormLabel fontAlter">Title <span class="text-danger fsSmall">*</span></label>
                                    <input type="text" class="form-control d-block w-100" name="title" >
                                      <span class="name_error" style="color: red;" id="name_error"></span>
                                </div>
                           
                              
                            </div>
                            <div class="col-12 col-sm-6 px-2">
                               
                                <div class="coolSelectWrapper ">
                                        <label class="coolSelect fontAlter" for="category">Category <span class="text-danger fsSmall">*</span></label>

                                            <select class="coolSelect form-control" id="category" name="category">
                                                <option value="">Select a category</option>
                                                <option value="Bug Report">Bug Report</option>
                                                <option value="Feature Request">Feature Request</option>
                                                <option value="Improvement">Improvement</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    <span class="category_error" style="color: red;" id="category_error"></span>

                            </div>
                            <div class="col-12 px-2">
                                <div class="form-group">
                                    <label class="colFormLabel fontAlter">Write Your Review:</label>
                                    <textarea class="form-control w-100 d-block ckeditor" rows="3" name="feedback" id="feedback-text" ></textarea>
                                    <div id="feedback-text-error" style="color: red;" class="error"></div>
                                </div>
                            </div>
                           
                        </div>
                        <button type="submit" class="btn btnThemeAlt mx-auto d-flex font-weight-bold text-capitalize position-relative border-0 p-0 mt-2 btnWidthSmall" data-hover="Send Review">
                        <span class="d-block btnText">Send Review</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
@if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ Session::get('success') }}",
        });
    </script>
@endif

@if (Session::has('Failed'))
    <script>
        Swal.fire({
            icon: 'Failed',
            title: 'Failed!',
            text: "{{ Session::get('Failed') }}",
        });
    </script>
@endif



<script>
    $(document).ready(function () {
        $("#ratingForm").validate({
            rules: {
                title: "required",
                category: "required",
            },
            messages: {
                title: "Please enter a title",
                category: "Please select a category",
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") === "category") {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                if (CKEDITOR.instances['feedback-text'].getData().trim() === "") {
                    $('#feedback-text-error').text('Please write your review').show();
                } else {
                    form.submit();
                }
            },
        });

        CKEDITOR.replace('feedback-text', {
            on: {
                change: function () {
                    $('#feedback-text-error').hide();
                }
            }
        });
    });
</script>





@endsection