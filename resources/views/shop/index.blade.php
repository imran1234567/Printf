@extends('layouts.master')


@section('title')
Web Development,ERP and Digital Marketing Company In Kolkata-Oxedent Technologies
@endsection

@section('meta')
<meta name="og_title" content="ERP For Medicine Shop, Digital Marketing Services In Kolkata, Web Designing Company In Kolkata">
<meta name="Description" content="Oxident Technologies is a Website Development in Kolkata.We Offer Complete Solution for ERP Software, Web Development, Digital Marketing, PPC & Social Media Marketing. Request a Free Quote Now!"/>
@endsection

@section('content1')
<img src="img/erp.jpg" height="50%" width="50%" style="position:center;">
@endsection


@section('content')
 <!-- <div class="slider " data-indicators="true">
    <div class="carousel-fixed-item center ">
      <a class="btn waves-effect  white-text darken-text-2" style="color:darkcyan;">CONTACT US:9679692408</a>
    </div>
    <div class="carousel-item " href="#one!">
      <h1>Website Development</h1>
      <p style="color:darkcyan;">Our Website Development Specialists Transform Visions Into Reality, User-Friendly<br>
      Moblie Responsive And Engagging Websites That Converts Visitors Into Customers. </p>
      
    </div>
    <div class="carousel-item " href="#two!">
      <h1>Digital Marketing</h1>
      <p style="color:darkcyan;">Our Google Certified Digital Markting Experts Spacialise in PPC(Google AdWards & Bing Ads), <br>SEO ,Fcaebook Ads, Social Media Marketing, Online Reputation Management(ORM), Email-Marketing & Lead Generation.</p>
    </div>
    <div class="carousel-item " href="#three!">
      <h1>GST Ready Accounting Software</h1>
      <p style="color:darkcyan;">A Comprehensive GST Ready Accounting Software For Small And Medium Size Businesses <br>
        For Easy Inventory Management And GST Return File</p>
    </div>
    <div class="carousel-item " href="#four!">
      <h1>Fourth Panel</h1>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div> -->
  <div class="slider">
    <ul class="slides" style="background-color:#D6F0E8;">
      <li>
        <img src="img/kk.jpg"> 
        <div class="caption center-align">
          <h3 style="color:black;">Website Development</h3>
          <p style="color:darkcyan;">Our Website Development Specialists Transform Visions Into Reality, User-Friendly<br>
      Moblie Responsive And Engagging Websites That Converts Visitors Into Customers.</p>
      <a class="btn waves-effect  white-text darken-text-2" style="color:darkcyan;">CONTACT US: 7557086391</a>
        </div>
      </li>
      <li>
        <img src="img/kk.jpg"> 
        <div class="caption center-align">
          <h3 style="color:black;">Digital Marketing</h3>
          <p  style="color:darkcyan;">Our Google Certified Digital Markting Experts Spacialise in PPC(Google AdWards & Bing Ads), <br>SEO ,Fcaebook Ads, Social Media Marketing, Online Reputation Management(ORM), Email-Marketing & Lead Generation.</p>
          <a class="btn waves-effect  white-text darken-text-2" style="color:darkcyan;">CONTACT US: 7557086391</a>
        </div>
      </li>
      <li>
        <img src="img/kk.jpg"> 
        <div class="caption center-align">
          <h3 style="color:black;">GST Ready Accounting Software</h3>
          <p  style="color:darkcyan;">A Comprehensive GST Ready Accounting Software For Small And Medium Size Businesses <br>
        For Easy Inventory Management And GST Return File.</p>
          <a class="btn waves-effect  white-text darken-text-2" style="color:darkcyan;">CONTACT US: 7557086391</a>
        </div>
      </li>
      <!-- <li> -->
        <!-- <img src="https://lorempixel.com/580/250/nature/2">  -->
        <!-- <div class="caption center-align">
          <h3 style="color:black;">Digital Marketing</h3>
          <p  style="color:darkcyan;">Our Google Certified Digital Markting Experts Spacialise in PPC(Google AdWards & Bing Ads), <br>SEO ,Fcaebook Ads, Social Media Marketing, Online Reputation Management(ORM), Email-Marketing & Lead Generation.</p>
          <a class="btn waves-effect  white-text darken-text-2" style="color:darkcyan;">CONTACT US:9679692408</a>
        </div> -->
      <!-- </li> -->
    </ul>
  </div>

@endsection

@section('cards')
<div class="row">
      <div class="col s4 card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="{{ URL::to('img/tax.png')}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">ERP<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Download Here</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">ERP<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  <div class="col s4 card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="{{ URL::to('img/browser.png')}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">WEBSITE DESIGN<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Call Us -></a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">WEBSITE DESIGN<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  <div class="col s4 card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="{{ URL::to('img/charts.png')}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">SEO<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Call Us-></a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">SEO/DIGITAL MARKETING<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
</div>
@endsection

@section('review')
 <h3 style="text-align:center;">CLIENTS REVIEW</h3>
  <ul class="collapsible  popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">record_voice_over</i>Grace Seely(grayfords.co.uk)</div>
      <div class="collapsible-body"><p style="text-align:center;">Working with Oxedent Technologies was a delight from start to finish. They worked hard to
fulfil our requests and we are very happy with our end website! I highly recommend.</p><br><p style="text-align:right;">-Grace Seely(grayfords.co.uk)</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">record_voice_over</i>James Clerk(www.cheappartyshop.co.uk)</div>
      <div class="collapsible-body"><p style="text-align:center;">I would like to say a big thank you to Web Development team of Oxedent Technologies for their
assistance with my recent project. I would certainly recommend Oxedent Technologies to
anyone for Web Development &amp; Digital Marketing and will definitely be using them again for
future projects.</p><br><p style="text-align:right;">-James Clerk(www.cheappartyshop.co.uk)</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">record_voice_over</i>Rae Albert(https://nyafashion.com)</div>
      <div class="collapsible-body"><p style="text-align:center;">I got many quotes, several hundred pounds more - and I know I would have never found such a
professional company who did an amazing job for me. I have given the name &quot;Oxedent
Technologies&quot; to many people.</p><br><p style="text-align:right;">-Rae Albert, https://nyafashion.com</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">record_voice_over</i>Rick Gonzales</div>
      <div class="collapsible-body"><p style="text-align:center;">Oxedent&#39;s digital marketing has been a force in growing our online business. Their team of
results-driven professionals bring their &quot;A&quot; game on everything from big picture planning
right down to the daily tactics.</p><br><p style="text-align:right;">-Rick Gonzales</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">record_voice_over</i>Prateek-Co- Founder of Y Scouts</div>
      <div class="collapsible-body"><p style="text-align:center;">Oxidant has grown our website from 0 visits to just over 25,000 monthly visits. Their digital marketing
services are very effective in growing your brand online.</p><br><p style="text-align:right;">-Prateek-Co- Founder of Y Scouts</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">record_voice_over</i>Nicole Spracale</div>
      <div class="collapsible-body"><p style="text-align:center;">Oxedent’s Google AdWords (PPC)Set Up &amp; Optimisation Work has improved our ROI 300% . Highly
Recommend their service, Will be using them Again.</p><br><p style="text-align:right;">-Nicole Spracale</p></div>
    </li>
  </ul>
        
           
@endsection

@section('scripts')
<script>
    // $('.carousel.carousel-slider').carousel({fullWidth: true});
     $(document).ready(function(){
      $('.slider').slider();
    });
        
</script>
 
@endsection