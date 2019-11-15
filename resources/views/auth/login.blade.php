@extends('layouts.app')

@section('content')


<div class="pageheader">
    <div class="container">
    
                        
            
                <div class="row">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="pageheader-caption">
                            <h1 class="pageheader-caption-title">Login Form</h1>
                            <p class="pageheader-caption-text">Bootstrap Login Examples. Nunc varius nibh nisl, ut rhoncus quam efficitur quis. Donec viverra tellus antonvallis eu. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pagheader close -->
        <!-- breadcrumb start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="custom-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Login</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb close -->
        <div class="space-lg space-md space-xs">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- login form start -->
                        <div class="login-form">
                            <div class="login-form-body">
                                <h4 class="login-form-title">Login</h4>
                                <form method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div> 

                                
                                        
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label id="password">Password</label>
                                        <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="*************">
                                        <span toggle="#password-field" class="fa fa-fw fa-eye password-hide-icon showhidepassword"></span>
                                        <small>Must be 8-20 characters long.</small>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    </div>



                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </form>
                                <div class="login-remember-password-block">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="rememberme" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                       
                                        <label class="custom-control-label" for="rememberme">Remember Me</label>
                                    </div>
                                    <div class="forgot-password-link">
                                            <a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="login-form-footer">
                                <p class="login-form-footer-text">Don’t have a Spacely account? <a href="{{ route('register') }}">Create Account</a> and we’ll set you up so you can list your space.</p>
                            </div>
                        </div>
                        <!-- login form close -->
                    </div>
                </div>
            </div>
        </div>
             <!-- footer section start -->
        <div class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                          <!-- footer widget  -->
                        <div class="footer-widget">
                            <div class="brand-logo"><img src="assets/images/primary-white-logo.png" alt="Spacely - Realtor Directory & Listing Bootstrap Template"></div>
                            <p class="footer-widget-text">Welcome to the largest office space marketplace in the world. This is your one-stop shop for renting coworking space, serviced offices, shared office space and virtual offices in World. </p>
                            <div class="footer-location">
                                <p class="phone-numbers">1800 123 345 789</p>
                                <p class="address">3 Doris St, North Sydney, NSW 2060</p>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                      <!-- footer widget  -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Type of spaces</h3>
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                    <li><a href="#">Coworking space</a></li>
                                    <li><a href="#">Meeting space</a></li>
                                    <li><a href="#">Office space</a></li>
                                    <li><a href="#">Retail Space</a></li>
                                    <li><a href="#">Event space</a></li>
                                    <li><a href="#">Virtual Space</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- footer widget  -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Company</h3>
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Team</a> </li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Press</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- footer widget  -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Language</h3>
                            <div class="footer-langauge">
                                <select class="form-control" id="select2-flag-icons">
                                      <option value="AK" data-flag="ad"> Alaska</option>
                                        <option value="HI" data-flag="ae"> Hawaii</option>
                                        <option value="in" data-flag="in"> India</option> 
                                        <option value="CA" data-flag="af"> California</option>
                                        <option value="NV" data-flag="ag"> Nevada</option>
                                        <option value="OR" data-flag="ao"> Oregon</option>
                                        <option value="WA" data-flag="at"> Washington</option>
                                        <option value="AZ" data-flag="gm"> Arizona</option>
                                        <option value="CO" data-flag="az"> Colorado</option>
                                        <option value="ID" data-flag="be"> Idaho</option>
                                        <option value="MT" data-flag="bi"> Montana</option>
                                        <option value="NE" data-flag="bn"> Nebraska</option>
                                        <option value="NM" data-flag="aw"> New Mexico</option>
                                        <option value="ND" data-flag="bj"> North Dakota</option>
                                        <option value="UT" data-flag="bh"> Utah</option>
                                        <option value="WY" data-flag="bm"> Wyoming</option>
                                        <option value="AL" data-flag="br"> Alabama</option>
                                        <option value="AR" data-flag="bs"> Arkansas</option>
                                        <option value="IL" data-flag="au"> Illinois</option>
                                        <option value="IA" data-flag="ba"> Iowa</option>
                                        <option value="KS" data-flag="bt"> Kansas</option>
                                        <option value="KY" data-flag="bq"> Kentucky</option>
                                        <option value="LA" data-flag="ci"> Louisiana</option>
                                        <option value="MN" data-flag="cn"> Minnesota</option>
                                        <option value="MS" data-flag="cz"> Mississippi</option>
                                        <option value="MO" data-flag="ec"> Missouri</option>
                                        <option value="OK" data-flag="dk"> Oklahoma</option>
                                        <option value="SD" data-flag="cz"> South Dakota</option>
                                        <option value="TX" data-flag="ee"> Texas</option>
                                        <option value="TN" data-flag="cl"> Tennessee</option>
                                        <option value="WI" data-flag="cf"> Wisconsin</option>                                   
                                        <option value="CT" data-flag="co"> Connecticut</option>
                                        <option value="DE" data-flag="cy"> Delaware</option>
                                        <option value="FL" data-flag="cu"> Florida</option>
                                        <option value="GA" data-flag="cn"> Georgia</option>
                                        <option value="IN" data-flag="cz"> Indiana</option>
                                        <option value="ME" data-flag="dm"> Maine</option>
                                        <option value="MD" data-flag="ec"> Maryland</option>
                                        <option value="MA" data-flag="cw"> Massachusetts</option>
                                        <option value="MI" data-flag="ee"> Michigan</option>
                                        <option value="NH" data-flag="hm"> New Hampshire</option>
                                        <option value="NJ" data-flag="gu"> New Jersey</option>
                                        <option value="NY" data-flag="hr"> New York</option>
                                        <option value="NC" data-flag="gr"> North Carolina</option>
                                        <option value="OH" data-flag="hn"> Ohio</option>
                                        <option value="PA" data-flag="hk"> Pennsylvania</option>
                                        <option value="RI" data-flag="ht"> Rhode Island</option>
                                        <option value="SC" data-flag="hu"> South Carolina</option>
                                        <option value="VT" data-flag="il"> Vermont</option>
                                        <option value="VA" data-flag="im"> Virginia</option>
                                        <option value="WV" data-flag="gi"> West Virginia</option>
                                </select>
                            </div>
                        </div>
                          <!-- footer widget  -->
                    </div>
                </div>
            </div>
              <!-- tiny footer  -->
            <div class="tiny-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="tiny-footer-text">Copyright © 2020 Spacely Companies Inc. All rights reserved</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="tiny-footer-links">
                                <ul>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- footer section close  -->
        </div>
         <!-- footer section close -->
    </div>

@endsection
