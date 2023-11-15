@extends('main')
@section('content')
<main>

    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex align-items-center">

                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Login</li>
                </ol>
            </div>
        </div>
    </section>


   
    <section class="login_section py-8 py-md-15 fontAlter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-6">
                    <div class="tab-content" id="loginTabContent">
                        <form action="javascript:void(0)" method="POST" id="login_form" class="welcome-card request-form">
                            <h2 class="text-center mb-5">Login</h2>
                            
                            <div id="show_error" style="color: red"> </div>
                            <div class="form-group col-12">
                                <label for="email">Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email01" class="form-control" required>

                                <span class="text-danger error-text email_error" style="color: red"></span>
                                {{-- @error('email')
                                        <div class="text-danger">{{ $message }}
                            </div>
                            @enderror --}}
                    </div>



                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password" name="password" class="form-control password01" id="pass01" required="">
                      <i class="fas fa-eye" id="togglePassword" style="cursor: pointer; position: absolute; top: 63%; left: 91%;"></i>
                      
                      <span class="text-danger error-text password_error" style="color: red"></span>
                       {{-- @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>


               

                <div class="d-flex justify-content-between align-items-baseline col-12">
                    <div class="form-check p-0">
                        <span class="customCheckboxLabel">
                            <input class="form-check-input fakeInput remember_me_error " type="checkbox" id="save-password">
                            <label class="form-check-label cuFakeLabel" for="save-password">Remember Me</label>
                        </span>

                    </div>
                   

                    <a href="{{route('forgot-password')}}" class="float-right text-primary txtLink">Forgot
                        password?</a>
                </div>


                <div class="d-flex justify-content-end mb-5 col-12">
                    <a href="{{route('register.form')}}" class="text-primary text-primary txtLink">Sign up</a>

                </div>
                <div class="col-12">
                    <button type="submit" class="mt-3 btn btnMinSmall btnThemeAlt text-capitalize position-relative border-0 p-0 w-100" data-hover="Login">
                        <span class="d-block btnText">Login</span>
                    </button>

          
                </div>
                </form>


            </div>
        </div>
        </div>
        </div>
    </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    const savePasswordCheckbox = document.getElementById("save-password");
    const emailInput = document.getElementById("email01");
    const passwordInput = document.getElementById("pass01");
    const submitButton = document.getElementById("submitButton");

    // Check if credentials are saved in local storage and populate the form
    const savedEmail = localStorage.getItem("rememberedEmail");
    const savedPassword = localStorage.getItem("rememberedPassword");

    if (savedEmail && savedPassword) {
        emailInput.value = savedEmail;
        passwordInput.value = savedPassword;
        savePasswordCheckbox.checked = false;
    }

    $('#login_form').submit(function(e) {
        e.preventDefault();
        $(".email_error").text('');
        $(".password_error").text('');
      
        $("#show_error").text('');

        email = $('#email01').val();
        let password = $('#pass01').val();
        if (email === "") {
            $('.email_error').text('Email is required');
            return false;
        }
        if (password === "") {
            $('.password_error').text('password is required');
            return false;
        }
        if (savePasswordCheckbox.checked) {
            localStorage.setItem("rememberedEmail", email);
            localStorage.setItem("rememberedPassword", password);
        } else {
            localStorage.removeItem("rememberedEmail");
            localStorage.removeItem("rememberedPassword");
        }

        var token = $('meta[name="csrf-token"]').attr('content');
        var all = $(this).serialize();

        $.ajax({
            url: "{{ route('user.login.store') }}",
            type: "POST",
            data: all,
            headers: {
                'X-CSRF-Token': token
            },
            success: function(data) {
                console.log(data);
              

                if (data.status == 1) {
                    console.log('fdsfds');
                    // return false;
                    window.location.replace("{{ route('member.index') }}");
                } else if (data.status == 2) {
                    $("#show_error").text("Invalid login details");
                }
            }
        });
    });

   
    
</script>



<script type="text/javascript">
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#pass01');

      togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fas fa-eye-slash');
    });
</script>


@endsection