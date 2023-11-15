@extends('main')
@section('content')
<main>

    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex align-items-center">

                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Sign Up</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="login_section py-8 py-md-15 fontAlter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-6">
                    <form action="javascript:void(0)" method="POST" id="signup_form" class="welcome-card request-form">
                        @csrf
                        <h2 class="text-center mb-5">Sign Up</h2>
                        <div id="show_error" style="color: red"> </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" >
                                    <span class="text-danger error-text first_name_error" style="color: red"></span>

                                    {{-- @error('first_name')
                                            <div class="text-danger">{{ $message }}
                                </div>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pass">Select Gender</label>
                                <div class="coolSelectWrapper">
                                    <select class="coolSelect form-control" id="gender" name="gender" >
                                        <option value="">Select an Gender</option>
                                        

                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female </option>
                                        <option value="Other"> Other </option>

                                    </select>
                                    <span class="text-danger error-text account_error" style="color: red"></span>

                                 
                            </div>
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pass">Country</label>
                        <div class="coolSelectWrapper">
                            <select class="coolSelect form-control" id="country" name="country" >
                                <option value="">Select an Country</option>
                                @foreach($countries as $country)

                                <option value=" {{ $country->id }} "> {{ $country->title }} </option>
                                @endforeach

                            </select>
                            <span class="text-danger error-text country_error" style="color: red"></span>
                             <div class="text-danger"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">City <span class="text-danger">*</span></label>
                        <input type="text" name="city" id="city" class="form-control" >
                        <span class="text-danger error-text city_name_error" style="color: red"></span>
                        <div class="text-danger"></div>
                    </div>
                </div>


            </div>


            <div class="form-group">
                <label for="email">Email Address <span class="text-danger">*</span></label>
                <input type="email" name="email" id="email" class="form-control" >
                <span style="display:none" id="" class="text-danger email_format_error">
                Please email must be following format 'example@gmail.com', etc
            </span>
                <span class="text-danger error-text email_error" style="color: red"></span>
                <span class="text-danger error-text email_exists_error" style="color: red"></span>

            
        </div>
        <div class="form-group" style="position: relative;">
            <label for="pass">Password <span class="text-danger">*</span></label>
            <input type="password" name="password" id="password" class="form-control" >
            <i class="fas fa-eye" id="togglePassword" style="cursor: pointer; position: absolute; top: 48px; left: 94%;"></i>
            <span class="text-danger error-text password_error" style="color: red"></span>
            <span style="display:none" id="passworderror" class="text-danger ">
                This field is Required
            </span>
            <span style="display:none" id="passworderror1" class="text-danger">
                Password should be at least 8 characters
            </span>
            <span style="display:none" id="passworderror2" class="text-danger">
            Pasword should be atleast 1 Digit, 1 Speical Character, 1 Capital and Small letter.
            </span>
            
        </div>
       
        <div class="form-group" style="position: relative;">
            <label for="pass">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >

            <i class="fas fa-eye" id="togglePassword2" style="cursor: pointer; position: absolute; top: 45px; left: 94%;"></i>
            <span class="text-danger error-text password_confirmation_error" style="color: red"></span>
            <span style="display:none" id="passworderror3" class="text-danger ">
                Password do not matched
            </span>
            <span style="display:none" id="cpassworderror" class="text-danger ">
                This field is Required
            </span>
            </div>


        <div class="d-flex justify-content-between">
            <div class="form-group mb-0" style="display: flex; align-items: baseline;">
                <input type="checkbox" name="cstatus" id="toption" value="0" >
                <label for="option" class="mb-0 signup-termsLbl ml-1">
                    <span>I have read, understood and agree the</span>
                    <div class="invalid-tooltip " style="color: red;"></div>
                    <a class="text-secondary" data-toggle="modal" data-target="#termsModal">Terms &amp; Conditions</a>
                </label>

            </div>

            <div class="">
                <a href="{{route('userlogin.form')}}" class="text-primary txtLink">Login</a>
            </div>
        </div>
        <span class="text-danger error-text tcheck_validate" id="tcheck_validation_error" style="color: red"></span>

        <button type="submit" id="submitBtn" class="mt-3 btn btnMinSmall btnThemeAlt text-capitalize position-relative border-0 p-0 w-100" data-hover="Sign Up">
            <span class="d-block btnText">Sign Up</span>
        </button>

        <!-- <button type="submit" id="submitBtn" class="border-0 btn btnHd btnThemeAlt ml-lg-1 ml-xxl-6 p-0 verify-btn w-100 mt-lg-3" data-hover="Sign Up">
            <span class="d-block btnText">Sign Up</span>
        </button> -->

        <button type="" id="loadingSpinner" style="display: none;" class="border-0 btn btnHd btnThemeAlt ml-lg-1 ml-xxl-6 p-0 verify-btn w-100 mt-lg-3" data-hover="Loading...">
            <span id="" class="d-block btnText" >Loading...</span>
        </button>
        </form>
        </div>
        </div>
        </div>
    </section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    // Handling form submission
    $(document).ready(function() {
        // Function to handle hiding errors
        function hideErrorOnKeyUp(inputElement, errorElement) {
            inputElement.on('input', function() {
                errorElement.text(''); // Clear the error message
            });
        }
        var validate = 0; // Initialize validate as 0

        $("#password").on('keyup', function() {
            var number = /([0-9])/;
            var alphabets = /([A-Z])/;
            var small = /([a-z])/;
            var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

            if ($('#password').val().length < 8) {
                $('#passworderror1').show();
                validate = 0; // Set validate to 0
            } else {
                $('#passworderror1').hide();
                if (
                    $('#password').val().match(number) &&
                    $('#password').val().match(alphabets) &&
                    $('#password').val().match(special_characters) &&
                    $('#password').val().match(small)
                ) {
                    $('#passworderror2').hide();
                    validate = 1; // Set validate to 1
                } else {
                    $('#passworderror2').show();
                    validate = 0; // Set validate to 0
                }
            }
            if ($('#password').val() !== "") {
                $('#passworderror').hide();
                validate = 1; // Set validate to 1
            }else{
                
                $('#passworderror2').hide();
                $('#passworderror1').hide();
                $('#passworderror').show();

            }

        });

        $("#password_confirmation").on('keyup', function() {
            var cpass = $('#password_confirmation').val();
            var pass = $('#password').val();
            if (cpass === "") {
                $('#cpassworderror').show();
                $('#passworderror3').hide();
                validate = 0; // Set validate to 0
            } else {
                $('#cpassworderror').hide();
                $('#passworderror3').hide();
                validate = 1; // Set validate to 1
            }
            if(cpass != ''){
            if (pass !== cpass) {
                $('#passworderror3').show();

                validate = 0;
            }
            else{
                $('#passworderror3').hide();
                validate = 1; // Set validate to 1
            }
}
        });

        $("#email").on('keyup', function() {
            $(".email_exists_error").text('');
            var email = $('#email').val();

            if (!validateEmail(email)) {
                $(".email_format_error").show();
                validate = 0; // Set validate to 0
            } else {
                $(".email_format_error").hide(); // Clear the error message when valid
                validate = 1; // Set validate to 1
            }
            if (email === '') {
                $(".email_format_error").hide();
                $(".email_error").text('Email field is required');
                validate = 0; // Set validate to 0
            }
        });
     
        // Apply the function to multiple fields
        hideErrorOnKeyUp($("#first_name"), $(".first_name_error"));
        hideErrorOnKeyUp($("#city"), $(".city_name_error"));
        hideErrorOnKeyUp($("#gender"), $(".account_error"));
        hideErrorOnKeyUp($("#country"), $(".country_error"));
        hideErrorOnKeyUp($("#email"), $(".email_error"));
        hideErrorOnKeyUp($("#password"), $(".password_error"));
        hideErrorOnKeyUp($("#password_confirmation"), $(".password_confirmation_error"));
        hideErrorOnKeyUp($("#toption"), $(".tcheck_validate"));

        // Handling form submission
        $('#signup_form').submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var first_name = $('#first_name').val();
            var city = $('#city').val();
            var gender = $('#gender').val();
            var country = $('#country').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();
            var toption = $('#toption').is(':checked');

            // Clear all previous error messages
            $(".first_name_error").text('');
            $(".city_name_error").text('');
            $(".account_error").text('');
            $(".country_error").text('');
            $(".email_error").text('');
            $(".password_error").text('');
            $(".password_confirmation_error").text('');
            $(".email_exists_error").text('');
            $(".tcheck_validate").text('');
            
           

            // Check for empty fields and display error messages
            var hasErrors = false; // Variable to track if any validation errors occur

            if (first_name === '') {
                $(".first_name_error").text('Name field is required');
                hasErrors = true;
            }
            if (gender === '') {
                $(".account_error").text('Gender field is required');
                hasErrors = true;
            }
            if (country === '') {
                $(".country_error").text('Country field is required');
                hasErrors = true;
            }
            if (city === '') {
                $(".city_name_error").text('City field is required');
                hasErrors = true;
            }
            if (email === '') {
                $(".email_format_error").hide();
                $(".email_error").text('Email field is required');
                hasErrors = true;
            }
            if (password === '') {
                $('#passworderror3').hide();

                $(".password_error").text('Password field is required');
                hasErrors = true;
            }
            if (password_confirmation === '') {
                $(".password_confirmation_error").text('Confirm Password field is required');
                hasErrors = true;
            }
            if (toption === false) {
                $(".tcheck_validate").text('Please accept the terms and conditions.');
                hasErrors = true;
            }
            if (password !== password_confirmation) {
                $('#passworderror3').show();

                hasErrors = true;
            }
            if (validate === 0) {
                return false;
            }
          
            if (email) {
               
                var errorSpan = $('.email_exists_error');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('check.email') }}",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'email': email
                    },
                    
                    success: function(response) {
                        if (response.exists) {
                            errorSpan.text('The Email is already exist.').fadeIn();
                            $('#email').val('');
                            hasErrors = true;
                            setTimeout(function() {
                                errorSpan.fadeOut();
                            }, 5000);
                        } else {
                            if (!hasErrors) { // Only submit if there are no validation errors
                                $('#submitBtn').hide();
                                $('#loadingSpinner').show();
                                $.ajax({
                                    url: "{{ route('user.register.store') }}",
                                    type: "POST",
                                    data: form.serialize(),
                                    beforeSend: function() {
                                        // Show loading element and hide submit button
                                        $('#submitBtn').hide();
                                        $('#loadingSpinner').show();
                                    },
                                    success: function(data) {
                                        if (data.status == 1) {
                                        
                                            Swal.fire({
                                                    title: "Congratulations!",
                                                    text: "Your Account has been created.",
                                                    icon: "success"
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                       
                                                        window.location.href = "{{ route('userlogin.form') }}"; 
                                                    }
                                                });

                                      
                                        } else {
                                            
                                            $("#show_error").text("Registration failed.");
                                        }
                                         // Clear the form values
                                         $('#first_name').val('');
                                            $('#account').val('');
                                            $('#email').val('');
                                            $('#password').val('');
                                            $('#password_confirmation').val('');
                                            $('#toption').prop('checked', false);
                                        $('#submitBtn').show();
                                        $('#loadingSpinner').hide();
                                    }
                                });
                            }
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });

        function validateEmail(email) {
            var emailReg = /^.*@.*\..*$/; // Check for "@" and "." in the email
            return emailReg.test(email);
        }

    });
</script>

<script type="text/javascript">
      const togglePassword = document.querySelector('#togglePassword');
      const togglePassword2 = document.querySelector('#togglePassword2');
      const password = document.querySelector('#password');
      const condirmpassword = document.querySelector('#password_confirmation');

      togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fas fa-eye-slash');
    });
    togglePassword2.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = condirmpassword.getAttribute('type') === 'password' ? 'text' : 'password';
        condirmpassword.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fas fa-eye-slash');
    });
</script>
@endsection