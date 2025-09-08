
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />
    <title>Adveritse Business</title>
    <!-- Apply dark theme early to avoid white flash -->
    <script>
        if (localStorage.toggled === "dark-theme") {
            document.documentElement.classList.add('dark-theme');
        }
    </script>
</head>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        {{-- <div class="logo-img">
            <img src="images/logo/logo-dark2.png" alt="">
        </div> --}}
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->
     
    <div class="header fixed-top">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.88986 12.2951L1.60986 7.00008L6.88986 1.70508" stroke="#121927" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
        <h3>Create A business Ad</h3>
    </div>
    <div class="app-content style-3">
        <div class="tf-container">
            <div class="text-center mx-auto d-block">
     
@if ($errors->any())
 <ul class="alert alert-danger light alert-dismissible fade show mb-10" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.25 12.75V7.50001C11.25 7.3011 11.329 7.11033 11.4697 6.96968C11.6103 6.82903 11.8011 6.75001 12 6.75001C12.1989 6.75001 12.3897 6.82903 12.5303 6.96968C12.671 7.11033 12.75 7.3011 12.75 7.50001V12.75C12.75 12.9489 12.671 13.1397 12.5303 13.2803C12.3897 13.421 12.1989 13.5 12 13.5C11.8011 13.5 11.6103 13.421 11.4697 13.2803C11.329 13.1397 11.25 12.9489 11.25 12.75ZM21.75 8.58282V15.4172C21.7506 15.6143 21.7121 15.8095 21.6366 15.9915C21.5611 16.1735 21.4502 16.3387 21.3103 16.4775L16.4775 21.3103C16.3387 21.4502 16.1735 21.5611 15.9915 21.6366C15.8095 21.7121 15.6143 21.7506 15.4172 21.75H8.58282C8.38577 21.7506 8.19055 21.7121 8.00852 21.6366C7.8265 21.5611 7.66129 21.4502 7.52251 21.3103L2.6897 16.4775C2.5498 16.3387 2.43889 16.1735 2.36341 15.9915C2.28792 15.8095 2.24938 15.6143 2.25001 15.4172V8.58282C2.24938 8.38577 2.28792 8.19055 2.36341 8.00852C2.43889 7.8265 2.5498 7.66129 2.6897 7.52251L7.52251 2.6897C7.66129 2.5498 7.8265 2.43889 8.00852 2.36341C8.19055 2.28792 8.38577 2.24938 8.58282 2.25001H15.4172C15.6143 2.24938 15.8095 2.28792 15.9915 2.36341C16.1735 2.43889 16.3387 2.5498 16.4775 2.6897L21.3103 7.52251C21.4502 7.66129 21.5611 7.8265 21.6366 8.00852C21.7121 8.19055 21.7506 8.38577 21.75 8.58282ZM20.25 8.58282L15.4172 3.75001H8.58282L3.75001 8.58282V15.4172L8.58282 20.25H15.4172L20.25 15.4172V8.58282ZM12 15C11.7775 15 11.56 15.066 11.375 15.1896C11.19 15.3132 11.0458 15.4889 10.9606 15.6945C10.8755 15.9001 10.8532 16.1263 10.8966 16.3445C10.94 16.5627 11.0472 16.7632 11.2045 16.9205C11.3618 17.0778 11.5623 17.185 11.7805 17.2284C11.9988 17.2718 12.225 17.2495 12.4305 17.1644C12.6361 17.0792 12.8118 16.935 12.9354 16.75C13.059 16.565 13.125 16.3475 13.125 16.125C13.125 15.8266 13.0065 15.5405 12.7955 15.3295C12.5845 15.1185 12.2984 15 12 15Z" fill="#E10000"></path>
                                </svg>
    @foreach ($errors->all() as $error)
        
    <li> <span>{{ $error }}</span></li>
     
    @endforeach
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="icon-close2"></i>
                                </button>
                            </ul>
@endif


                               
                           
   

       @if(Session::has('success'))
    <div class="alert alert-success light alert-dismissible fade show mb-10" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.2806 9.21937C16.3504 9.28903 16.4057 9.37175 16.4434 9.46279C16.4812 9.55384 16.5006 9.65144 16.5006 9.75C16.5006 9.84856 16.4812 9.94616 16.4434 10.0372C16.4057 10.1283 16.3504 10.211 16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3718 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937ZM21.75 12C21.75 13.9284 21.1782 15.8134 20.1068 17.4168C19.0355 19.0202 17.5127 20.2699 15.7312 21.0078C13.9496 21.7458 11.9892 21.9389 10.0979 21.5627C8.20656 21.1865 6.46928 20.2579 5.10571 18.8943C3.74215 17.5307 2.81355 15.7934 2.43735 13.9021C2.06114 12.0108 2.25422 10.0504 2.99218 8.26884C3.73013 6.48726 4.97982 4.96451 6.58319 3.89317C8.18657 2.82183 10.0716 2.25 12 2.25C14.585 2.25273 17.0634 3.28084 18.8913 5.10872C20.7192 6.93661 21.7473 9.41498 21.75 12ZM20.25 12C20.25 10.3683 19.7661 8.77325 18.8596 7.41655C17.9531 6.05984 16.6646 5.00242 15.1571 4.37799C13.6497 3.75357 11.9909 3.59019 10.3905 3.90852C8.79017 4.22685 7.32016 5.01259 6.16637 6.16637C5.01259 7.32015 4.22685 8.79016 3.90853 10.3905C3.5902 11.9908 3.75358 13.6496 4.378 15.1571C5.00242 16.6646 6.05984 17.9531 7.41655 18.8596C8.77326 19.7661 10.3683 20.25 12 20.25C14.1873 20.2475 16.2843 19.3775 17.8309 17.8309C19.3775 16.2843 20.2475 14.1873 20.25 12Z" fill="#54B24C"></path>
                                </svg>
                                <span> {{Session::get('success')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="icon-close2"></i>
                                </button>
</div>
 @endif
</div>
            <form method="POST" action="{{route('ad.create')}}" class="mt-10">
                @csrf
                <div class="form-field form-2">
                    <div class="label h7">Name of business</div>
                    <fieldset class="mt-12">
                        <input type="text" name="busname" value="{{ old('busname') }}" placeholder="Type registered business name" class="form-control">
                    </fieldset>
                </div>
<div class="form-field form-2 mt-24">
    <div class="label h7">Type of Business</div>
                <select name="bustype" value="{{ old('bustype') }}" class="form-select mt-1" aria-label="Default select example">
  <option selected>Select Business Type</option>
    <optgroup label="Agriculture & Natural Resources">
        <option value="farming">Farming</option>
        <option value="forestry">Forestry</option>
        <option value="fishing">Fishing</option>
        <option value="mining">Mining & Quarrying</option>
      </optgroup>

      <optgroup label="Manufacturing & Production">
        <option value="food_beverage">Food & Beverage</option>
        <option value="textiles">Textiles & Apparel</option>
        <option value="chemicals">Chemicals</option>
        <option value="machinery">Machinery & Equipment</option>
        <option value="construction_materials">Construction Materials</option>
      </optgroup>

      <optgroup label="Construction & Real Estate">
        <option value="building_construction">Building & Civil Works</option>
        <option value="real_estate">Real Estate</option>
        <option value="architecture">Architecture & Design</option>
      </optgroup>

      <optgroup label="Trade & Commerce">
        <option value="wholesale">Wholesale</option>
        <option value="retail">Retail</option>
        <option value="ecommerce">E-commerce</option>
      </optgroup>

      <optgroup label="Transportation & Logistics">
        <option value="road_transport">Road Transport</option>
        <option value="air_transport">Air Transport</option>
        <option value="shipping">Shipping & Ports</option>
        <option value="courier">Courier & Delivery</option>
        <option value="warehousing">Warehousing</option>
      </optgroup>

      <optgroup label="Hospitality & Tourism">
        <option value="hotels">Hotels & Lodging</option>
        <option value="restaurants">Restaurants & Catering</option>
        <option value="travel_agencies">Travel Agencies</option>
        <option value="events">Events & Entertainment</option>
      </optgroup>

      <optgroup label="Financial & Professional Services">
        <option value="banking">Banking</option>
        <option value="insurance">Insurance</option>
        <option value="accounting">Accounting & Auditing</option>
        <option value="consulting">Consulting</option>
        <option value="legal">Legal Services</option>
      </optgroup>

      <optgroup label="Information & Communication Technology">
        <option value="software">Software Development</option>
        <option value="hardware">Hardware & Electronics</option>
        <option value="telecom">Telecommunications</option>
        <option value="it_services">IT Services & Support</option>
        <option value="digital_media">Digital Media & Marketing</option>
      </optgroup>

      <optgroup label="Healthcare & Life Sciences">
        <option value="hospitals">Hospitals & Clinics</option>
        <option value="pharmaceuticals">Pharmaceuticals</option>
        <option value="medical_devices">Medical Devices</option>
        <option value="fitness">Fitness & Wellness</option>
      </optgroup>

      <optgroup label="Education & Training">
        <option value="schools">Schools</option>
        <option value="universities">Universities</option>
        <option value="vocational">Vocational Training</option>
        <option value="edtech">EdTech</option>
      </optgroup>

      <optgroup label="Media & Creative Industries">
        <option value="publishing">Publishing</option>
        <option value="film_tv">Film & TV</option>
        <option value="music">Music</option>
        <option value="advertising">Advertising & PR</option>
        <option value="design">Design & Creative Arts</option>
      </optgroup>

      <optgroup label="Public & Nonprofit">
        <option value="government">Government</option>
        <option value="ngo">NGOs & Nonprofits</option>
        <option value="religious">Religious Institutions</option>
        <option value="community">Community Services</option>
      </optgroup>
</select>
</div>
                <div class="form-field form-2 mt-24">
                    <div class="label h7">Short Description of Business</div>
                    <fieldset class="mt-12">
                        <input type="text" name="shortdesc" value="{{ old('shortdesc') }}" placeholder="Describe your business" class="form-control">
                    </fieldset>
                </div>

                 <div class="form-field form-2 mt-24">
                    <div class="label h7">Services (list your services and separate them by commas)</div>
                    <fieldset class="mt-12">
                        <input type="text" name="services" value="{{ old('services') }}" placeholder="List your services" class="form-control">
                    </fieldset>
                </div>
                {{-- <div class="form-field form-2 mt-24">
                    <div class="label h7">Upload CV</div>
                    <div class="box-uploadfile mt-12">
                        <label class="uploadfile">
                            <input type="file" class="ip-file">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                    <path
                                        d="M9 10C10.1046 10 11 9.10457 11 8C11 6.89543 10.1046 6 9 6C7.89543 6 7 6.89543 7 8C7 9.10457 7.89543 10 9 10Z"
                                        stroke="#121927" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M13 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V10"
                                        stroke="#121927" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M18 8V2L20 4" stroke="#121927" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M18 2L16 4" stroke="#121927" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001"
                                        stroke="#121927" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>
                            <div class="text body-4">Format DOC, PDF, JPG</div>
                            <div class="file button-1 text-primary">Browse Files</div>
                        </label>
                    </div>
                </div> --}}
                <div class="form-field mt-24">
                    <div class="label h7">Long Description of Business</div>
                    <fieldset class="mt-12">
                        <textarea name="longdesc" value="{{ old('longdesc') }}" placeholder="Write something..."></textarea>
                    </fieldset>
                </div>
                <div class="">
                    <button class="tf-btn primary" type="submit">Post Ad</button>
                </div>
              
            </form>
              <div class="mt-24">
                    <a href="list-advertise" class="tf-btn btn-lg outline-btn-primary" type="submit">View Ads</a>
                </div>

        </div>

    </div>



    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>