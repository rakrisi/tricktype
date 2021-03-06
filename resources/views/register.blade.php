@extends('layout.master')
@section('content')
<!--register-->
<section class="section pt-55 mb-50">
    <div class="container-fluid">
        <div class="sign widget">
            <div class="section-title">
                <h5>Sign up</h5>
            </div>
            
            <form  class="sign-form widget-form contact_form " method="post">
                <div class="form-group">
                
                <input type="text" class="form-control" placeholder="Username*" name="username" value="">
                </div>
                <div class="form-group">
                
                <input type="email" class="form-control" placeholder="Email Address*" name="email" value="">
                </div>
                <div class="form-group">
                
                <input type="password" class="form-control" placeholder="Password*" name="password" value="">
                </div>
                <div class="sign-controls form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                    <label class="custom-control-label" for="rememberMe">Agree to our <a href="#" class="btn-link">terms & conditions</a> </label>
                </div>
                </div>
                <div class="form-group">
                <button type="submit" class="btn-custom">Sign Up</button>
                </div>
                <p class="form-group text-center">Already have an account? <a href="login" class="btn-link">Login</a> </p>
            </form>
        </div> 
           
       
    </div>
</section>        

@endsection