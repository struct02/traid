
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
        <h3>My Ads</h3>
    </div>
    <div class="app-content style-3">
        <div class="tf-container">
           
   <table class="table table-striped table-hover">
<thead>

<tr>
            <th>ID</th>
            <th>Business Name</th>
            <th>Business Type</th>
            <th>Services</th>
            <th>Business Details (Short)</th>
            <th>Business Details (Long)</th>
            <th>Edit</th>
</tr>
</thead>
<tbody>


</tbody>
<tbody>
    @foreach ($businessAdvertise as $post)
    
<tr>
    <td>{{$post->id}}</td>
    <td>{{$post->busname}}</td>
    <td>{{$post->bustype}}</td>
    <td>{{$post->services}}</td>
    <td>{{$post->shortdesc}}</td>
    <td>{{$post->longdesc}}</td>
    {{-- <td><a href="{{ route('ourteam.editparticipant'), $post->id }}">Edit</a></td> --}}
    <td>
{{-- <form action="{{route('', $post->id) }}" method="POST">
    @csrf

@method('delete')
<button type="submit" onclick="return confirm('Are you sure you want to delete')">Del</button>
</form> --}}

    </td>
</tr>
@endforeach
</tbody>

    </table>
        

        </div>

    </div>



    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>