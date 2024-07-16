@extends('layout')

@section('title', 'Home Page')

@section('content')
        <!-- Services Start -->
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Searvices</h5>
                    <h1 class="mb-0">Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            @foreach ($services as $service)
                                <div class="col-12 col-md-6">
                                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                        <div class="service-content text-end">
                                            <h5 class="mb-4">{{ $service->title }}</h5>
                                            <p class="mb-0">{{ $service->description }}
                                            </p>
                                        </div>
                                        <div class="service-icon p-4">
                                            <i class="fa fa-globe fa-4x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Testimonial Start -->
         <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Our Clients Say!!!</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="{{ asset('img/client.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Ilyas</h5>
                            <p class="mb-0">Ahmedabad, India</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="{{ asset('img/client.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Anas</h5>
                            <p class="mb-0">Ahmedabad, India</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="{{ asset('img/client.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Mohtasim</h5>
                            <p class="mb-0">Ahmedabad, India</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center rounded pb-4">
                        <div class="testimonial-comment bg-light rounded p-4">
                            <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                            </p>
                        </div>
                        <div class="testimonial-img p-1">
                            <img src="{{ asset('img/client.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                        </div>
                        <div style="margin-top: -35px;">
                            <h5 class="mb-0">Farhaan</h5>
                            <p class="mb-0">Ahmedabad, India</p>
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection
