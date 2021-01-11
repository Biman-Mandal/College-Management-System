@extends('home')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('Css/About/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Css/About/css.css')}}">
</head>
<body class="AboutBody">
<div class="container">
            <div class="row">
            <div class="col-sm-4 c">
                <h3 class="head">Contact info</h3>
                <p><a href="">(033) 2680 2389</a></p>
                <p><a href="">(033) 2680 2389</a></p>
                <p><a href="">info@technoindiahooghly.org </a></p>
                <p><a href="">@TIHooghly </a></p>
                
            </div>
            
            <div class="col-sm-7 c">
                <h3 class="head">About Techno India Group </h3>
                <img src="Css/About/tig.jpg" alt="" id="tig">
                <p class="r">
                    Techno India Group (TIG) is one of the largest knowledge management groups in India, dedicated to the cause of development of Education, Research and Entrepreneurship in Science, Technology, Management and Medicine and has a mission to support the entire knowledge path from Nursery to Ph.D. <br>
Techno India Group, commenced its operations way back in 1983 and has now evolved into a constellation of knowledge campuses spread across various geographical locations of the country. The Group is destined to play a pivotal role in delivering quality education, through these knowledge campuses from nursery level to the postgraduate and doctoral level, thereby producing country's best human resource in the fields of Science, Technology, Medicine and Management. <br>
Techno India Group is exclusively focused on creating, sustaining and managing knowledge that is designed to enrich and empower humanity. Since its inception, the group has progressed from a regional presence in the state to a national presence in India and now all but set for a global presence. With twenty state of the art campuses in all major cities in India delivering about fifty different programmes, a vibrant student body of approximately forty thousands and proposed future campuses and operations overseas, TIG today has acquired a global identity.</p>

                    <p class="r">The spectacular growth of Techno India in the last two decades could be attributed to two core complementary philosophies: <br>
                        Technological growth is the source of all economic growth, and there must be dissemination of technical know how among all members of the society. <br>
                         Thus our mission is also two fold:</p>
                        
                    <ul>
                        <li>Help create an environment that fosters technology growth relevant for the next generation</li>
                        <li>Help create a system that makes this technology accessible to everyone in the society</li>

                    </ul>

                    <p class="r">To know more about Techno India Group visit: <a href="#"> www.technoindiagroup.com</a></p>

            </div>

        </div>

    </div>
</body>
@endsection