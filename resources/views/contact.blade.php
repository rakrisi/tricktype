@extends('layout.master')
@section('content')

    <!--contact us-->
    <section class="section pt-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Contact us</h5>
                    </div>
                </div>
            </div>
            
            <div class="row mb-20">
                <div class="col-lg-8 mt-30">
                    <div class="contact">
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.5761533072873!2d-78.19644468515456!3d38.91080675375955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b5c5dc680d0b2b%3A0x1e9ff0b6bb7a2f87!2s1000%20Proctor%20Ln%2C%20Front%20Royal%2C%20VA%2022630%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sma!4v1578068093888!5m2!1sfr!2sma"
                                allowfullscreen="">
                            </iframe>
                        </div>
                        <form action="https://noonpost.netlify.app/template/assets/php/mail.php" class="widget-form contact_form " method="POST" id="main_contact_form">
                            <h6>Feel free to contact any time.</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, repudiandae.</p>
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name*" required="required">
                            </div>
                        
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email*" required="required">
                            </div>
                        
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject*" required="required">
                            </div>
                        
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your Message*" required="required"></textarea>
                            </div>
                        
                            <button type="submit" name="submit" class="btn-custom">Send Message</button>
                        </form>
                    </div> 
                </div>
                <div class="col-lg-4 max-width">
                <!--widget-latest-posts-->
                <div class="widget ">
                    <div class="section-title">
                        <h5>Latest Posts</h5>
                    </div>
                    <ul class="widget-latest-posts">
                        <li class="last-post">
                            <div class="image">
                                <a href="post-default">
                                    <img src="assets/img/latest/1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="nb">1</div>
                            <div class="content">
                                <p>
                                    <a href="post-default">5 Things I Wish I Knew Before Traveling to Malaysia</a>
                                </p>
                                <small>
                                    <span class="icon_clock_alt"></span> January 15, 2021</small>
                            </div>
                        </li>
                        <li class="last-post">
                            <div class="image">
                                <a href="post-default">
                                    <img src="assets/img/latest/2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="nb">2</div>
                            <div class="content">
                                <p>
                                    <a href="post-default">Everything you need to know about visiting the Amazon.</a>
                                </p>
                                <small>
                                    <span class="icon_clock_alt"></span> January 15, 2021</small>
                            </div>
                        </li>
                        <li class="last-post">
                            <div class="image">
                                <a href="post-default">
                                    <img src="assets/img/latest/3.jpg" alt="...">
                                </a>
                            </div>
                            <div class="nb">3</div>
                            <div class="content">
                                <p>
                                    <a href="post-default">How to spend interesting vacation after hard work?</a>
                                </p>
                                <small>
                                    <span class="icon_clock_alt"></span> January 15, 2021</small>
                            </div>
                        </li>
                        <li class="last-post">
                            <div class="image">
                                <a href="post-default">
                                    <img src="assets/img/latest/4.jpg" alt="...">
                                </a>
                            </div>
                            <div class="nb">4</div>
                            <div class="content">
                                <p>
                                    <a href="post-default">10 Best and Most Beautiful Places to Visit in Italy</a>
                                </p>
                                <small>
                                    <span class="icon_clock_alt"></span> January 15, 2021</small>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/-->
                    
                    <!--widget-instagram-->
                    <div class="widget">
                        <div class="section-title">
                            <h5>Instagram</h5>
                        </div>
                        <ul class="widget-instagram">
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/1.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/2.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/3.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/4.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/5.jpg" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="image" href="#">
                                    <img src="assets/img/instagram/6.jpg" alt="">
                                </a>
                            </li>
                        </ul>
                    
                    </div>
                    <!--/-->
                </div>
            </div>
           
        </div>
    </section>        
@endsection