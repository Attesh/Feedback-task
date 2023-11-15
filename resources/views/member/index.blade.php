
@extends('main')

@section('content')

<style type="text/css">
    .text-line {
        text-decoration: line-through;
    }

    .ratingCont i {
        color: #F9BD38;
        padding-right: 3px;
    }

    #example thead tr,
    .package-history thead tr {
        background: #065989;
        color: white;
    }

    .rupees {
        font-size: 35px !important;
    }

    .package .plansBlock {
        box-shadow: rgba(0, 0, 0, 0.16) 1px 2px 4px 2px !important;
    }

    .pricing-heading {
        background: #c3e3f5 !important;
        padding: 15px !important;
        border-radius: 10px !important;
        border: 2px solid !important;
    }

    .icons-divs i {
        font-size: 15px;
    }

    ul li a,
    .cardList li {
        line-height: 30px;
    }

    .ratingCont i {
        font-size: 15px;
    }

    .tab-content .form-control {
        height: 40px !important;
        padding: 0.3375rem 1.0625rem !important;
        line-height: 1.5 !important;
        border: 1px solid #c1bebe !important;
        margin: auto;
        font-size: 16px;
    }

    .tab-content {
        border-bottom: none !important;
        box-shadow: rgba(0, 0, 0, 0.16) 1px 2px 4px 2px;
        padding: 25px;
    }

    .tab-content .tab-pane p {
        font-size: 16px;
    }

    .nav-tabs .nav-link.active {
        color: white;
        background-color: #fff;
        border-color: #fff #605353 #fff #fff;
    }

    .nav-tabs .nav-link {
        color: #605353;
        background-color: #fff;
        border-color: #fff #dee2e6 #fff #fff;
    }

    .nav-tabs .nav-link:hover {
        border-color: #fff #605353 #fff #fff;
        color: #065989;
    }

    .tabCont h3.aboutTitle {
        margin-bottom: 10px;
        font-size: 18pt;
    }

    .tabCont p {
        font-size: 20px;
        line-height: 1.5;
        color: #000000;
    }

    table td,
    table td {
        font-size: 15px;
    }

    .tabCont .cardList li {
        font-size: 17px;
        line-height: 1.7;
        color: #000000;
        list-style: circle;

    }

    .profile-card {
        width: 100%;
        min-height: 110px;
        /*min-height: 460px;*/
        margin: 16px 0;
        box-shadow: 3px -2px 40px -20px rgb(13 28 39 / 50%);
        /*box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);*/
        background: #fff;
        border-radius: 12px;
        max-width: 700px;
        position: relative;
        display: flex;
        align-items: center;
    }

    .profile-card:hover {
        -webkit-transform: translate3d(0, -5px, 0);
        transform: translate3d(0, -5px, 0);
        box-shadow: 0 1rem 3rem rgba(149, 163, 199, 0.5), 0 .5rem 1rem -.75rem rgba(22, 28, 45, .05) !important;
    }

    .profile-card .active .profile-card__cnt {
        filter: blur(6px);
    }

    .profile-card .active .profile-card-message,
    .profile-card__overlay {
        opacity: 1;
        pointer-events: auto;
        transition-delay: 0.1s;
    }

    .profile-card__img {
        width: 75px;
        height: 75px;
        margin-left: 12px;
        border-radius: 50%;
        overflow: hidden;
        position: relative;
        z-index: 4;
    }

    .profile-card__img img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-card__cnt {
        padding: 0 10px 0 20px;
        transition: all 0.3s;
    }

    .profile-card__name {
        font-weight: 600;
        font-size: 19px;
        color: #048398;
    }

    .profile-card__txt {
        font-size: 18px;
        font-weight: 500;
        color: #324e63;
        margin-bottom: 15px;
    }

    .profile-card__txt strong {
        font-weight: 700;
    }

    .profile-card-loc {
        display: flex;
        align-items: center;
        font-size: 18px;
        font-weight: 600;
    }

    .profile-card-loc__icon {
        display: inline-flex;
        font-size: 22px;
        margin-right: 8px;
        color: #048398;
    }

    .profile-card-inf {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        align-items: flex-start;
        margin-top: 35px;
    }

    .profile-card-inf__item {
        padding: 10px 35px;
        min-width: 150px;
    }

    .profile-card-inf__title {
        font-weight: 700;
        font-size: 27px;
        /* //color: #6944ff; */
        color: #324e63;
    }

    .profile-card-inf__txt {
        font-weight: 500;
        margin-top: 7px;
    }

    .icon-font {
        display: inline-flex;
    }

    .profile-card-ctr {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
    }

    textarea {
        width: 100%;
        resize: none;
        height: 210px;
        margin-bottom: 20px;
        border: 2px solid #dcdcdc;
        border-radius: 10px;
        padding: 15px 20px;
        color: #324e63;
        font-weight: 500;
        outline: none;
        transition: all 0.3s;
    }

    textarea:focus {
        outline: none;
        border-color: #8a979e;
    }

    .profile-card__overlay {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        pointer-events: none;
        opacity: 0;
        background: rgba(22, 33, 72, 0.35);
        border-radius: 12px;
        transition: all 0.3s;
    }

    .card-title {
        font-size: 17px;
    }

    .btnWidth_Auto {
        background: #144172 !important;
        border: 2px solid #144172;
        text-transform: capitalize !important;
        border-radius: 20px !important;
    }

    .btnWidth_Auto:hover {
        border-radius: 20px !important;
        background: white !important;
        border: 2px solid #144172 !important;
        color: #144172 !important;
    }

    .coursess-cards .info-heading {
        background: #065989;
        color: white;
        text-align: center;
        padding: 10px;
        box-shadow: rgba(0, 0, 0, 0.16) 1px 2px 4px 2px;
    }

    .coursess-cards {
        padding: 15px;
        box-shadow: rgba(0, 0, 0, 0.16) 1px 2px 4px 2px;
        margin-bottom: 35px;
        /*opacity: 0.86;*/
        min-height: 200px;
    }

    .myAccountBanner .text_bannerWraper {
        height: 90px !important;
    }

    .nav-tabs .nav-link {
        border: none !important;
    }

    .nav-tabs .nav-link:hover {
        color: #065989;
        border: none !important;
    }

    .nav-tabs .nav-link.active {
        color: #ffffff !important;
        background-color: #065989;
        border: none !important;
        margin-left: -10px;
    }

    .nav-tabs {
        border-bottom: none !important;
        box-shadow: rgba(0, 0, 0, 0.16) 1px 2px 4px 2px;
        padding: 25px 0;
    }

    .nav-tabs .nav-item .nav-link {
        padding: 10px;
    }

    .nav-tabs .nav-item {
        margin-bottom: 0 !important;
        width: 90%;
    }

    @media (min-width: 450px) and (max-width: 576px) {
        .text_bannerWraper h2 {
            font-size: 16px !important;
        }

        .btn-div {
            margin-top: 20px;
        }

        .coursess-cards {
            margin-bottom: 15px;
        }

        .cards2 {
            margin-top: 15px;
        }

        .nav-tabs .nav-item .nav-link {
            padding: 5px 10px !important;
        }

        .coursenavs .nav-item {
            padding: 0;
        }

        .coursenavs .nav-link {
            font-size: 13px;
        }

        .nav-tabs {
            padding: 15px 0;
        }

        .nav-tabs .nav-item .nav-link {
            padding: 0;
        }

        .coursess-cards {
            padding: 5px;
        }

        .btnWidth_Auto {
            font-size: 12px;
        }

        .coursess-cards tr td,
        .coursess-cards tr th {
            font-size: 12px !important;
        }

        .details h3 {
            font-size: 16px !important;
        }

        .aboutTitle {
            font-size: 16px !important;
        }

        .tabCont h3.aboutTitle {
            font-size: 16px !important;
        }

    }

    @media (min-width: 320px) and (max-width: 450px) {
        .text_bannerWraper h2 {
            font-size: 16px !important;
        }

        .btn-div {
            margin-top: 20px;
        }

        .cards2 {
            margin-top: 5px;
        }

        .nav-tabs {
            padding: 15px 0;
        }

        .nav-tabs .nav-item .nav-link {
            padding: 5px 10px !important;
        }

        .coursess-cards {
            padding: 5px !important;
        }

        .coursess-cards tr td,
        .coursess-cards tr th {
            font-size: 10px !important;
        }

        .profile-card__name {
            font-size: 16px;
        }

        .faq .faq-list i {
            font-size: 13px;
        }

        .faq .faq-list .question {
            font-size: 14px !important;
        }

        #card-course td {
            font-size: 10px !important;
        }

        .tabCont h3.aboutTitle {
            font-size: 16px !important;
        }

        .details h3 {
            font-size: 16px !important;
        }

        .aboutTitle {
            font-size: 16px !important;
        }

        .tab-content .tab-pane p {
            font-size: 14px;
        }

        .tabCont .cardList li {
            font-size: 14px;
        }

        .cards2 td,
        .cards2 th {
            font-size: 10px !important;
        }

        .coursenavs .nav-item {
            padding: 0;
        }

        .coursenavs .nav-link {
            font-size: 13px;
        }

        .btnWidth_Auto {
            font-size: 9px;
        }

    }

    .blog-slider {
        width: 95%;
        position: relative;
        max-width: 800px;
        margin: auto;
        background: #94d04c24;
        box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
        padding: 25px;
        border-radius: 25px;
        height: 354px;
        transition: all 0.3s;
    }

    .blog-slider__item {
        display: block;
        align-items: center;
    }

    .blog-slider__img {
        width: 300px;
        flex-shrink: 0;
        height: 300px;
        background-image: linear-gradient(147deg, #065989 0%, #1560bd 74%);
        box-shadow: 4px 13px 30px 1px rgba(252, 56, 56, 0.2);
        border-radius: 20px;
        transform: translateX(-80px);
        overflow: hidden;
    }

    .blog-slider__img:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(147deg, #000000 0%, #065989 74%);
        border-radius: 20px;
        opacity: 0.8;
    }

    .blog-slider__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        opacity: 1;
        border-radius: 20px;
    }

    .blog-slider__content {
        padding-right: 25px;
    }

    .blog-slider__code {
        color: #fff;
        margin-bottom: 15px;
        display: block;
        font-weight: 500;
    }

    .blog-slider__title {
        font-size: 24px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
    }

    .blog-slider__text {
        color: #4e4a67;
        margin-bottom: 30px;
        line-height: 1.5em;
    }

    .blog-slider__button {
        display: inline-flex;
        background-image: linear-gradient(147deg, #000000 0%, #065989 74%);
        ;
        padding: 15px 35px;
        border-radius: 50px;
        color: #fff;
        box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);
        text-decoration: none;
        font-weight: 500;
        justify-content: center;
        text-align: center;
        letter-spacing: 1px;
    }

    .blog-slider .blog-slider__img h2 {
        color: white;
        position: absolute;
        z-index: 999;
        top: 27%;
        left: 25%;
        font-size: 60px;
    }

    .blog-slider .blog-slider__img h3 {
        color: white;
        position: absolute;
        z-index: 999;
        top: 55%;
        left: 18%;
        font-size: 45px;
    }

    .blog-slider__text .pcFeaturesList li {
        color: #ffffff;
    }

    .blog-slider__text .pcFeaturesList>li:before {
        color: #000000;
    }
    .rating__star {
    cursor: pointer;
    color: #dabd18b2;
}
    @media screen and (max-width: 992px) {
        .blog-slider {
            max-width: 680px;
            height: 354px;
        }
    }

    @media screen and (max-width: 768px) {
        .blog-slider {
            min-height: 500px;
            height: auto;
            margin: 180px auto;
        }

        .blog-slider__item {
            flex-direction: column;
        }

        .blog-slider__img {
            transform: translateY(-50%);
            width: 90%;
        }

        .blog-slider__content {
            margin-top: -80px;
            text-align: center;
            padding: 0 30px;
        }
    }

    @media screen and (max-width: 576px) {
        .blog-slider__img {
            width: 95%;
        }

        .blog-slider__content {
            padding: 0;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .blog-slider {
            height: 350px;
        }

        .blog-slider__img {
            height: 270px;
        }
    }
</style>


<main>
   <section class="breadcrumbs">
      <div class="container">
         <div class="d-flex align-items-center">
            <ol>
               <li><a href="{{ url('/') }}">Home</a></li>
               <li>Member Profile</li>
            </ol>
         </div>
      </div>
   </section>
   <!-- ======= F.A.Q Section ======= -->
   <section id="faq" class="faq">
      <div class="container">
         <div class="row my-5" data-aos="fade-right">
            <div class="col-lg-3">
               <ul class="nav nav-tabs flex-column coursenavs">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#dashboard">Dashboard</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#aboutusTab">My Profile</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#overviewTab">Change Password</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#cmeTab">Feedback</a>
                  </li>
                  <li class="nav-item" style="display:none">
                     <a class="nav-link" data-toggle="tab" href="#comment"> comment</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('click-logout') }}" class="nav-link">Logout</a>
                  </li>
               </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
               <div class="tab-content">
                  <div class="tab-pane pt-0 active" id="dashboard">
                     <div class="row">
                        <div class="col-md-12">
                           @if (session('status'))
                           <script>
                              Swal.fire({
                                  title: 'Success',
                                  text: "{{ session('status') }}",
                                  icon: 'success',
                                  timer: 3000, // Adjust the timer as needed
                                  showConfirmButton: false
                              });
                           </script>
                           @endif
                           <div class="d-flex justify-content-between">
                              <h3 class="mb-3">Dashboard</h3>
                              <div>
                                 <table class="table table-responsive w-100">
                                    <thead>
                                       <tr>
                                          <th class="text-primary">Registered on:</th>
                                          <td>{{ auth()->user()->created_at->format('Y-m-d H:i:s') }}</td>
                                       </tr>
                                       <tr>
                                          <th class="text-primary">Last Login Date:</th>
                                          <td>
                                             {{ auth()->user()->last_login_at }}
                                          </td>
                                       </tr>
                                    </thead>
                                 </table>
                              </div>
                           </div>
                           <hr>
                           <div class="row mt-3">
                              <div class="col-lg-6">
                                 <div class="card coursess-cards p-0" id="card-course">
                                    <h5 class="info-heading">YOUR INFO</h5>
                                    <div class="card-body">
                                       <table class="w-100">
                                          <thead>
                                             <tr>
                                                <th>Name</th>
                                                <td>{{ auth()->user()->first_name }}</td>
                                             </tr>
                                             <tr>
                                                <th>Email </th>
                                                <td>{{ auth()->user()->email }}</td>
                                             </tr>
                                          </thead>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="card coursess-cards p-0">
                                    <h5 class="info-heading">Feedback</h5>
                                    <div class="card-body">
                                       <table class="w-100">
                                          <thead>
                                             <tr>
                                                <th>Feedback</th>
                                                <td>{{ count($feedback) }} </td>
                                             </tr>
                                          </thead>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane pt-0" id="aboutusTab">
                     <div class="d-flex justify-content-between">
                        <h3 class="mb-3">My Profile</h3>
                        <div>
                           <table class="table table-responsive w-100">
                              <thead>
                                 <tr>
                                    <th class="text-primary">Registered on:</th>
                                    <td>{{ auth()->user()->created_at->format('Y-m-d H:i:s') }}</td>
                                 </tr>
                                 <tr>
                                    <th class="text-primary">Last Login Date:</th>
                                    <td>
                                       {{ auth()->user()->last_login_at }}
                                    </td>
                                 </tr>
                              </thead>
                           </table>
                        </div>
                     </div>
                     <form method="POST" enctype="multipart/form-data" action="{{ route('member.udateProfile') }}" enctype="multipart/form-data" id="profile-form">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                           <label for="profileImage" class="col-md-4 col-lg-3 col-form-label profilelabel">Profile
                           Image</label>
                           <div class="col-md-8 col-lg-9">
                              <img src="{{ $user->image ? asset('Backend/images/' . $user->image) : asset('Backend/images/dummy_image.jpg') }}" class="img-fluid img-thumbnail rounded-circle" id="output-img" style="width: 120px; height: 120px;" alt="Profile">
                              <div class="pt-2 iconsection">
                                 <a style="width: 54%;" href="#" class="" title="Upload new profile image">
                                 <input name="image" type="file" accept="image/*" onchange="loadFile(event)">
                                 <i class="bi bi-upload"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3 col-sm-4 ">
                              <label for="fullName" class="col-form-label profilelabel">First Name <span class="text-danger">*</span></label>
                           </div>
                           <div class="col-md-6 col-sm-8">
                              <input name="first_name" type="text" class="form-control" id="fullName" value="{{ $user->first_name }}">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3 col-sm-4 ">
                              <label for="fullName" class="col-form-label profilelabel">Last Name <span class="text-danger">*</span></label>
                           </div>
                           <div class="col-md-6 col-sm-8">
                              <input name="last_name" type="text" class="form-control" id="last_name" value="{{ $user->last_name }}">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3 col-sm-4 ">
                              <label for="Email" class="col-form-label profilelabel">Email <span class="text-danger">*</span></label>
                           </div>
                           <div class="col-md-6 col-sm-8">
                              <input name="email" type="email" class="form-control" id="Email" value="{{ $user->email }}" disabled="">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3 col-sm-4">
                              <label for="Phone" class="col-form-label profilelabel">Phone <span class="text-danger">*</span></label>
                           </div>
                           <div class="col-md-6 col-sm-8">
                              <input name="phone" type="text" class="form-control" id="Phone" value="{{ $user->phone }}">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <div class="col-md-3 col-sm-4">
                              <label for="address" class="col-form-label profilelabel">City <span class="text-danger">*</span></label>
                           </div>
                           <div class="col-md-6 col-sm-8">
                              <input name="city" type="text" class="form-control" value="{{ $user->city }}">
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="inputDate" class="col-md-3 col-sm-4 col-form-label">Gender 
                           <span class="text-danger">*</span></label>
                           <div class="col-md-6 col-sm-8">
                              <div class="coolSelectWrapper">
                                 <select class="coolSelect form-control" id="account" name="gender">
                                    <option value="">Select a account</option>
                                    <option value="2" {{ $user->gender === 'Male' ? 'selected' : '' }}>
                                    Male</option>
                                    <option value="3" {{ $user->gender === 'Female' ? 'selected' : '' }}>
                                    Female</option>
                                    <option value="3" {{ $user->gender === 'other' ? 'selected' : '' }}>
                                    other</option>
                                 </select>
                                 <span class="text-danger error-text account_error" style="color: red"></span>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-3">
                           <label for="inputCountry" class="col-md-3 col-sm-4 col-form-label">Country
                           <span class="text-danger">*</span>
                           </label>
                           <div class="col-md-6 col-sm-8">
                              <div class="coolSelectWrapper">
                                 <select class="coolSelect form-control" id="country" name="country">
                                    <option value="">Select a country</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $user->country === $country->id ? 'selected' : '' }}>
                                    {{ $country->title }}
                                    </option>
                                    @endforeach
                                 </select>
                                 <span class="text-danger error-text country_error" style="color: red"></span>
                              </div>
                           </div>
                        </div>
                        <div class="profile text-right">
                           <button type="submit" id="submitBtn" class=" btn btn-primary py-2 profilebtn">Save
                           Changes</button>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane pt-0" id="overviewTab">
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="profile">
                              <h3 class="mb-3">Change Password</h3>
                              <div class="card-body pt-3">
                                 <!-- Change Password Form -->
                                 <form method="POST" action="{{ route('change.password') }}" id="passwordChangeForm">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-3">
                                       <div class="form-group col-md-6">
                                          <label class="mb-1" for="old_password">Old Password</label>
                                          <div class="input-group">
                                             <input id="old_password" class="form-control" type="password" name="old_password">
                                             <div class="input-group-append">
                                                <span class="input-group-text show-password-toggle" data-field="old_password">
                                                <i class="fa fa-eye"></i>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="error-message" id="oldPasswordError"></div>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label class="mb-1" for="password">New Password</label>
                                          <div class="input-group">
                                             <input id="password" class="form-control" type="password" name="password">
                                             <div class="input-group-append">
                                                <span class="input-group-text show-password-toggle" data-field="password">
                                                <i class="fa fa-eye"></i>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="error-message" id="passwordError"></div>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label class="mb-1" for="password_confirmation">Confirm
                                          Password</label>
                                          <div class="input-group">
                                             <input id="password_confirmation" class="form-control" type="password" name="password_confirmation">
                                             <div class="input-group-append">
                                                <span class="input-group-text show-password-toggle" data-field="password_confirmation">
                                                <i class="fa fa-eye"></i>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="error-message" id="passwordConfirmationError">
                                          </div>
                                       </div>
                                       <div id="passwordStrength"></div>
                                    </div>
                                    <div class="profile text-right">
                                       <button type="Submit" class="btn btn-primary py-2 profilebtn" id="submitButton" disabled>Reset Password</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane pt-0" id="cmeTab">
                     <div class="row">
                        <div class="col-lg-12 details">
                           <h3 class="mb-3">Feedback</h3>
                           <div class="table-responsive">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>Sr</th>
                                       <th>description</th>
                                       <th>category</th>
                                       <th>user </th>
                                       <th>vote_count  </th>
                                       <th style="width: 16% !important;" class="text-center">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($feedback as $key => $feedback)
                                    <tr>
                                       <td>{{ $key +1  }}</td>
                                       <td>{!! $feedback->feedback ?? 'N/A' !!}</td>
                                       <td>{{ $feedback->category ?? 'N/A' }}</td>
                                       <td>{{ $feedback->name ?? 'N/A' }}</td>
                                       <td>{{ $feedback->vote_count ?? 'N/A' }}</td>
                                       @if($feedback->status === '1')
                                       <td>
                                          <div class="d-flex justify-content-center icons-divs">
                                             <i class="fas fa-comment-slash fa-solid ml-2 mr-2 text-primary" data-data="" ></i>
                                          </div>
                                       </td>
                                       @else
                                       <td>
                                          <div class="d-flex justify-content-center icons-divs">
                                             <i class="fa-comment fa-solid ml-2 mr-2 text-primary comment_clik_id" data-data="{{$feedback->id}}" ></i>
                                          </div>
                                       </td>
                                       @endif
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane pt-0" id="comment">
                     <div class="row">
                        <div class="col-sm-12 details">
                           <div id="app"></div>
                           <div class="d-flex justify-content-between">
                              <i class=""   id="main_feedback_tab">
                                 <h3 class="aboutTitle mb-3"> Go back</h3>
                              </i>
                           </div>
                           <div class="col-sm-12">
                              <!-- Display Main Feedback Item Description -->
                              <div class="blog-slider">
                                 <div class="blog-slider__wrp swiper-wrapper">
                                    <div class="blog-slider__item swiper-slide" id="main_feedback_data">
                                       <!-- Display Main Feedback Item Description Here -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="col-sm-12 details mt-5">
                           <div class="d-flex justify-content-between">
                              <h3 class="aboutTitle mb-3">Comment</h3>
                           </div>
                           <div class="padding">
                              <div class="row container d-flex justify-content-center">
                                 <div class="col-md-12">
                                    <div class="card card-bordered" id="get_comment_across_feedback">
                                    </div>
                                 </div>
                                 <div class="mt-3 col-md-12">
                                    <form method="POST" action="{{ route('save.comment') }}" id="form_sumit_commit">
                                       @csrf
                                       <input type="hidden" name="feedback_id" id = "feedback_id">                         
                                       <textarea type="text" class="form-control ckeditor" id="inputName5" name="description" required ></textarea>
                                       <div class="form-group">
                                          <label class="colFormLabel fontAlter mt-1">Rating:</label>
                                          <div class="rating">
                                             <input type="hidden" name="rating" id="ratingValue" value="">
                                             <i class="rating__star far fa-star" data-rating="1"></i>
                                             <i class="rating__star far fa-star" data-rating="2"></i>
                                             <i class="rating__star far fa-star" data-rating="3"></i>
                                             <i class="rating__star far fa-star" data-rating="4"></i>
                                             <i class="rating__star far fa-star" data-rating="5"></i>
                                          </div>
                                       </div>
                                       <div class="profile text-right mt-2">
                                          <button type="button" class="btn btn-primary py-2 " id="comment_Save" >Submit</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <!--  </section> -->
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane pt-0" id="activeContTab">
                     <div class="row">
                        <div class="col-sm-12 details">
                           <h3 class="aboutTitle mb-3">Logout Functionality</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>


<!-- Example using the emoji-mart CDN -->
<link rel="stylesheet" href="https://unpkg.com/emoji-mart@3.0.0/css/emoji-mart.css" />
<script src="https://unpkg.com/emoji-mart@3.0.0"></script>


<!-- Add the following script to your HTML -->
<script>
  $(document).ready(function () {
    $('#inputName5').emojiPicker({
      height: '200px',
      width: '100%',
    });
  });
</script>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'colvis']
        });

 

    function loadFile(event) {
        var outputImg = document.getElementById('output-img'); // Corrected ID to 'output-img'
        outputImg.src = URL.createObjectURL(event.target.files[0]);
    }
});

    var csrfToken = "{{ csrf_token() }}";

    $(document).ready(function() {
      
        $("#main_feedback_tab").click(function() {
            $("#comment").removeClass("show active");
            
            $("#cmeTab").addClass("show active");
        });


        $(".comment_clik_id").click(function() {
            var tabId = $(this).data("data");
            $('#feedback_id').val(tabId);
            

            $("#cmeTab").removeClass("show active");
            
            $("#comment").addClass("show active");
            $.ajax({
                type: "GET",
                url: "/single/feedback/" + tabId,
                success: function(response) {
                    console.log(response);

                    $('#main_feedback_data').html(response.html);
                    $('#get_comment_across_feedback').html(response.comment);
                    
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });





        });

        const ratingStars = [...document.getElementsByClassName("rating__star")];
        const ratingValueField = document.getElementById("ratingValue");

        function executeRating(stars) {
            const starClassActive = "rating__star fas fa-star";
            const starClassInactive = "rating__star far fa-star";
            const starsLength = stars.length;
            let i;

            stars.forEach((star) => {
                star.onclick = () => {
                    i = stars.indexOf(star);
                    const selectedRating = i + 1;

                    if (star.className === starClassInactive) {
                        for (i; i >= 0; --i) stars[i].className = starClassActive;
                    } else {
                        for (i; i < starsLength; ++i) stars[i].className = starClassInactive;
                    }

                    ratingValueField.value = selectedRating;
                    $('#rating_required').text(""); 
                };
            });
      
        }

        executeRating(ratingStars);
        CKEDITOR.replace('inputName5');

$('#comment_Save').click(function (event) {
    event.preventDefault();

    var editorContent = CKEDITOR.instances.inputName5.getData();
    var rating = $('#ratingValue').val();

    if (editorContent.trim() === '') {
        alert('Please enter a description.');
        return;
    }

    if (rating === '') {
        alert('Please provide a rating.');
        return;
    } else {
        $('#comment_Save').attr('type', 'submit');
        $('#form_sumit_commit').submit();
        
    }
});


        

    });
</script>

<script>
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });
    $(document).ready(function() {
        $('.show-password-toggle').on('click', function() {
            var fieldId = $(this).data('field');
            var passwordField = $('#' + fieldId);
            var icon = $(this).find('i');

            if (passwordField.attr('type') === 'password') {
                passwordField.attr('type', 'text');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
        $('#old_password').on('keyup', function() {
            var oldPassword = $(this).val();
            $.ajax({
                type: 'POST',
                url: "{{ route('check-old-password') }}",
                data: {
                    old_password: oldPassword
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#oldPasswordError').text('Old password is correct.');
                    } else {
                        $('#oldPasswordError').text('Old password is incorrect.');
                    }
                },
                error: function() {
                    $('#oldPasswordError').text('Error occurred during password check.');
                }
            });
        });

        $('#password').on('keyup', function() {
            var password = $(this).val();
            var message = checkPasswordStrength(password) ? 'Password meets all requirements' :
                'Password should be at least 8 characters long and contain at least 1 digit, 1 special character, 1 capital letter, and 1 small letter.';

            $('#passwordStrength').text(message);
            updateSubmitButtonState();
        });

        $('#password_confirmation').on('keyup', function() {
            var password = $('#password').val();
            var confirmPassword = $(this).val();
            var matchMessage = '';

            if (password === confirmPassword) {
                matchMessage = 'Passwords match';
            } else {
                matchMessage = 'Passwords do not match';
            }

            $('#passwordStrength').text(matchMessage);

            updateSubmitButtonState();
        });


        function updateSubmitButtonState() {
            var password = $('#password').val();
            var confirmPassword = $('#password_confirmation').val();
            var isPasswordValid = checkPasswordStrength(password);
            var passwordsMatch = password === confirmPassword;
            var submitButton = $('#submitButton');

            if (isPasswordValid && passwordsMatch) {
                submitButton.prop('disabled', false);
            } else {
                submitButton.prop('disabled', true);
            }
        }

        function checkPasswordStrength(password) {
            var minLength = password.length >= 8;
            var hasDigit = /[0-9]/.test(password);
            var hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(password);
            var hasCapitalLetter = /[A-Z]/.test(password);
            var hasSmallLetter = /[a-z]/.test(password);

            return minLength && hasDigit && hasSpecialChar && hasCapitalLetter && hasSmallLetter;
        }
    });


    $(document).ready(function() {
    
        function showSweetAlert(message) {
            Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: message,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        }

        $('#viewIcon, #pdfIcon, #printIcon').on('click', function() {
            var message = $(this).data('message');
            showSweetAlert(message);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#profile-form').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var formData = new FormData(form[0]);
         
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: formData,
                processData: false, 
                contentType: false,
                success: function(response) {
                   
                    Swal.fire({
                        icon: 'success',
                        title: 'Profile Updated',
                        text: 'Your profile has been updated successfully!',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {}
                    });
                },
                error: function(xhr, status, error) {
                }
            });
        });
    });
</script>




@endsection