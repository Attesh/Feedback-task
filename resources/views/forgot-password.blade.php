@extends('main')
@section('content')


<main>
	
	<section class="breadcrumbs">
        <div class="container">
            <div class="d-flex align-items-center">

                <ol>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Forgot Password</li>
                </ol>
            </div>
        </div>
    </section>

	<!-- Mmy_Account-Section -->
	<section class="login_section py-8 py-md-15 fontAlter">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
					<div class="tab-content" id="loginTabContent">
						<form class="welcome-card">
							<h2 class="text-center mb-5">Forgot Password</h2>
							<div class="form-group mb-0 forgetP">
								<label for="email">Email <span class="text-danger">*</span></label>
								<input type="email" id="email" class="form-control">
                                <span class="error-message" id="errorSpan"></span>
                                <span class="success-message" id="successSpan"></span>

							</div>
							<div class="d-flex justify-content-end mb-3">
								<a href="{{ route('register.form') }}" class="text-body txtLink">Sign up</a>
							</div>
							<!-- <a type="submit" class="btn btnThemeAlt forgetpassword fwMedium w-100 mx-auto d-block text-capitalize position-relative border-0 p-0" data-hover="Reset Password">
							<span class="d-block btnText">Reset Password</span>
                                </a> -->
                                <a type="submit" class=" forgetpassword btn btnMinSmall btnThemeAlt text-capitalize position-relative border-0 p-0 w-100" data-hover="Reset Password">
							<span class="d-block btnText">Reset Password</span>
                                </a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    $('.forgetpassword').click(function(e) {
        e.preventDefault();

        let email = $('#email').val();
        $(".error-message").text("");

        let isValid = true;

        if (email === "") {
            isValid = false;
            $("#errorSpan").text("Please enter Email");
        }

        if (isValid) {
            // Disable the button or link to prevent multiple requests
            $(this).prop('disabled', true);

            // Get the CSRF token value from the meta tag
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{ route('check.email') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
                },
                data: {
                    email: email,
                },
                success: function(response) {
                    console.log(response.exists);
                    if (response.exists == true) {
                        $.ajax({
                            url: "{{ route('forgot-email') }}",
                            method: "POST",
                            headers: {
                                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
                            },
                            data: {
                                email: email,
                            },
                            success: function(response) {
                                if (response.status_code) {
                                    // email ='Password reset url sent to your email';
                                    // $("#successSpan").text(email);
                                    // setTimeout(function() {
                                    //     $("#successSpan").text(''); // Clear the success message after 5 seconds
                                    // }, 5000);
                                    Swal.fire({
                                            title: 'Success',
                                            text: 'Password reset URL sent to your email',
                                            icon: 'success',
                                            timer: 5000, // Automatically close after 5 seconds
                                            showConfirmButton: false
                                        });
                                } else {
                                    errorMessage = "Invalid verification code"; // Customize the error message
                                    $("#errorSpan").text(errorMessage);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                                errorMessage ='You have already requested a password reset. Check your email.';
                                $("#errorSpan").text(errorMessage);
                            },
                            complete: function() {
                                // Re-enable the button or link after the AJAX request is complete
                                $('.forgetpassword').prop('disabled', false);
                            }
                        });
                    } else {
                        errorMessage = "Email not found"; // Customize the error message
                        $("#errorSpan").text(errorMessage);
                        // Re-enable the button or link when there's an error
                        $('.forgetpassword').prop('disabled', false);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    // Re-enable the button or link when there's an error
                    $('.forgetpassword').prop('disabled', false);
                }
            });
        }
    });
});

</script>