@extends('layout')

@section('title', 'About Page')

@section('content')

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Contact Us</h5>
                    <h1 class="mb-0">Contact For Any Query</h1>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="bg-white rounded p-4">
                            <div class="text-center mb-4">
                                <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                <h4 class="text-primary"><Address></Address></h4>
                                <p class="mb-0">Nasheman Society, <br> Ahmedabad, INDIA</p>
                            </div>
                            <div class="text-center mb-4">
                                <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Mobile</h4>
                                <p class="mb-0"><a href="tel:9825430012">+91 98254 30012</a></p>
                            </div>
                           
                            <div class="text-center">
                                <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Email</h4>
                                <p class="mb-0">info@tairaan.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-2">Send us a message</h3>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form method="POST" action="{{url(route('sendmail'))}}">
                        @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" name="username" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" name="usermail" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" name="message" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <div class="rounded">
                            <iframe class="rounded w-100" 
                            style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.29979901577!2d72.41459178458852!3d23.020157733892948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1720434746499!5m2!1sen!2sin" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection
