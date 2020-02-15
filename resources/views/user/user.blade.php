<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link
      href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900"
      rel="stylesheet"
    />

        <link href="{{ asset('css/default.css') }}" rel="stylesheet">

        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!--[if IE 6
      ]><link href="default_ie6.css" rel="stylesheet" type="text/css"
    /><![endif]-->
  </head>
  <body>
    <div id="header-wrapper">
      <div id="header" class="container1">
        <div id="logo">
          <h1><a href="#">Frontline Nepal</a></h1>
        </div>
        <div id="menu">
          <ul>
            <li class="current_page_item">
              <a href="#" accesskey="1" title="">Homepage</a>
            </li>
            <!-- <li><a href="#" accesskey="2" title="">Our Clients</a></li>
            <li><a href="#" accesskey="3" title="">About Us</a></li>
            <li><a href="#" accesskey="4" title="">Careers</a></li>
            <li><a href="#" accesskey="5" title="">Contact Us</a></li> -->
            <ul>
              <li><a href="#">About Us</a>
             <ul>
                  <li><a href="#">About Parbat District</a></li>
                  <li><a href="#">About Nepal</a></li>
                </ul>
              </li>
              
              <li><a href="#">What We Do?</a>
                <ul>
                  <li><a href="#">Grids</a></li>
                  <li><a href="#">Frameworks</a></li>
                </ul>
              </li>
              <li><a href="#">Our Publication</a>               
              <li><a href="#">Opportunities</a>               
              <li><a href="#">Members Community</a>               
              <li><a href="#">Contact Us</a>               
              </li>
            </ul>
          </ul>
        </div>
      </div>
      <div id="header-featured">
        <div id="banner-wrapper">
          <div id="banner" class="container">
            <h2>Frontline Nepal</h2>
            <p>
              The Entrepreneurship & Development Foundation
            </p>
            <a href="#" class="button">Learn More</a>
          </div>
        </div>
      </div>
    </div>


    <div id="wrapper">
      <div id="page" class="container">
        @foreach($posts as $post)

        <div id="content">
          <div class="title">
            <h2>{{ $post->title}}</h2>
            <span class="byline">Mauris vulputate dolor sit amet nibh</span>
          </div>
          <p><img src="images/banner.jpg" alt="" class="image image-full" /></p>
          <p>
             {{ $post->body }} 
          </p>
          <p>
            Donec condimentum, urna non molestie semper, ligula enim ornare
            nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl
            nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis.
            Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet
            nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget,
            placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris
            aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies
            quis, justo. Donec nonummy magna quis risus. Quisque eleifend.
            Phasellus tempor vehicula justo.
          </p>
          <p>
            Donec condimentum, urna non molestie semper, ligula enim ornare
            nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl
            nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis.
            Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet
            nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget,
            placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris
            aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies
            quis, justo. Donec nonummy magna quis risus. Quisque eleifend.
            Phasellus tempor vehicula justo.
          </p>
        </div>
    @endforeach

        <div id="sidebar">
          <ul class="style1">
            <li class="first">
              <h3>Amet sed volutpat mauris</h3>
              <p>
                <a href="#"
                  >In posuere eleifend odio. Quisque semper augue mattis wisi.
                  Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a
                >
              </p>
            </li>
            <li>
              <h3>Sagittis diam dolor sit amet</h3>
              <p>
                <a href="#"
                  >In posuere eleifend odio. Quisque semper augue mattis wisi.
                  Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a
                >
              </p>
            </li>
            <li>
              <h3>Maecenas ac quam risus</h3>
              <p>
                <a href="#"
                  >In posuere eleifend odio. Quisque semper augue mattis wisi.
                  Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a
                >
              </p>
            </li>
          </ul>
          <div id="stwo-col">
            <div class="sbox1">
              <h2>Etiam rhoncus</h2>
              <ul class="style2">
                <li><a href="#">Semper quis egetmi dolore</a></li>
                <li><a href="#">Quam turpis feugiat dolor</a></li>
                <li><a href="#">Amet ornare hendrerit lectus</a></li>
                <li><a href="#">Quam turpis feugiat dolor</a></li>
              </ul>
            </div>
            <div class="sbox2">
              <h2>Integer gravida</h2>
              <ul class="style2">
                <li><a href="#">Semper quis egetmi dolore</a></li>
                <li><a href="#">Quam turpis feugiat dolor</a></li>
                <li><a href="#">Consequat lorem phasellus</a></li>
                <li><a href="#">Amet turpis feugiat amet</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div id="copyright" class="container">
      <p>
        &copy; Untitled. All rights reserved. | Photos by
        <a href="http://fotogrph.com/">Fotogrph</a> | Design by
        <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.
      </p>
    </div>
  </body>
</html>
