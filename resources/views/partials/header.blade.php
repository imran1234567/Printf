<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="{{ route('user.signup')}}">SIGN-UP</a></li>
  <li class="divider"></li>
  <li><a href="{{ route('user.signin')}}">LOGIN</a></li>
</ul>
<nav class="bar">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><span style="font-size:50px; color:#ff6600;">O</span><span>XEDENT</span></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{ route('product.index')}}">HOME</a></li>
      <li><a href="#">SERVICES</a></li>
      <li><a href="#">OUR WORK</a></li>
      <li><a href="#">CONTACT</a></li>
      <li><a href="#">ABOUT</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#" data-activates="dropdown1">ACCOUNT<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>