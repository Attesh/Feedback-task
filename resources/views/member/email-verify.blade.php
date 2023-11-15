@extends('frontend.main')

@section('content')
    <main>
        <!-- introBlock -->
        <div class="introBlock innerPagesBanner pt-8 pt-md-10">
            <!-- ibsColumn -->
            <div class="alignHolder w-100 d-flex align-items-center"
                style="background-image: url({{ asset('assets/images/bgPattern07.jpg') }});">
                <div class="align w-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mmy_Account-Section -->
        <section class="login_section py-8 fontAlter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                        <div class="welcome-card">
                            <h4>Verify Email</h4>
                            <p class="mb-3"><small>A one-time password has been sent on the email. Please enter it below
                                    to verify your email</small></p>
                            <form action="#">
                                <div class="form-group mb-5">
                                    <!-- <label for="email" class="fLabel">Username or Email <span class="text-danger">*</span></label> -->
                                    <input type="text" placeholder="Enter code here" id="ver-code" class="form-control">
                                    <input type="hidden" id="email" class="form-control" value="{{ $e_mail }}">
                                    <span class="error-message" id="codeError"></span>
                                    <span class="error-message" id="errorSpan"></span>

                                </div>
                                <a type="submit"
                                    class="verfiy-chase-number-email-code btn btnThemeAlt fwMedium w-50 d-block position-relative border-0 p-0 m-auto lineHgt1"
                                    data-hover="Verfiy">
                                    <span class="d-block btnText">Verfiy</span>
                                </a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.verfiy-chase-number-email-code').click(function(e) {

                e.preventDefault();

                let ver_code = $('#ver-code').val();
                let email = $('#email').val();
                $(".error-message").text("");


                let isValid = true;

                if (ver_code.trim() === "") {
                    isValid = false;
                    $("#codeError").text("Please enter code");
                }

                if (isValid) {
                    // Get the CSRF token value from the meta tag
                    let csrfToken = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        url: "{{ route('email-code') }}",
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
                        },
                        data: {
                            ver_code: ver_code,
                            email: email,

                        },
                        success: function(response) {
                            console.log(response)
                            if (response.status_code) {
                                id = response.id;
                                window.location.href =
                                    "https://fisdemoprojects.com/auctionsheetcheck/payment/" +
                                    id;
                            } else {
                                errorMessage =
                                "Invalid verification code"; // Customize the error message
                                $("#errorSpan").text(errorMessage);
                            }

                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });
    </script>
@endsection
