<?php include_once 'headerIn.php'; ?>
      
<style>
  .parent-container{
    display: flex;
  }
    .parent-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        display: flex;
        flex-direction: row;
        align-items: center;
        height: 100%;
    }

    .image-container {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .image-container img{
      width: 95%;
      height: 95%;
    }

    .text-container {
        flex: 2;
        display: flex;
        flex-direction: column;
        padding-left: 20px;
    }

    .fit-cover {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: row;
            text-align: center;
            height: auto;
        }

        .text-container {
            padding-left: 0;
        }

        .fit-cover {
            width: 75%;
            height: auto;
        }
    }

</style>

<div class="parent-container">
   
<!-- product/rcbn5.jpg -->
    <section class="py-xxl-10 pb-0" id="home" style="background-image:url(assets/img/wpp.jpg); background-position:top center; background-size: 100%; width:100%; background-repeat: no-repeat;">
 
       
    <div class="bg-holder bg-size">
    </div>
    <!--/.bg-holder-->

    
    <div class="parent-container" style="display: flex; justify-content: center; align-items: center;">
    <div class="container" style="height: 50%; display: flex; align-items: center; justify-content: center;">
        <div class="row" style="display: flex; width: 50%;">
            <div class="image-container" style="flex: 1; display: flex; justify-content: center;">
                <img src="assets/product/rcb.png" alt="...">
            </div>

        </div>
    </div>
</div>


</section>



      <section class="py-5" id="departments" style="display:none;">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/product/rcbn1.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">We Offer</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <section class="py-0" style="display:none;">

        <div class="container">
          <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" ><img class="mb-3 deparment-icon" src="assets/product/rcb3.jpg" style="height:80px;width:100px;border-radius:10px;" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/product/rcb3.jpg" alt="..." style="height:40px;width:40px;border-radius:10px;" />
                    <p class="fs-5 fs-xxl-2 text-center">MCC  Spheres</p>
                  </a></div>
              </div>
            </div>
             <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/product/rcb1.jpg" style="height:80px;width:100px;border-radius:10px;" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/product/rcb1.jpg" alt="..." style="height:40px;width:40px;border-radius:10px;" />
                    <p class="fs-5 fs-xxl-2 text-center">Sugar spheres</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/product/rcb4.jpg" style="height:80px;width:100px;border-radius:10px;" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/product/rcb4.jpg" alt="..." style="height:40px;width:40px;border-radius:10px;" />
                    <p class="fs-5 fs-xxl-2 text-center">Lactose starch spheres</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/product/rcb8.jpg" style="height:80px;width:100px;border-radius:10px;" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/product/rcb8.jpg" alt="..." style="height:40px;width:40px;border-radius:10px;" />
                    <p class="fs-5 fs-xxl-2 text-center">Lactose cellulose spheres</p>
                  </a></div>
              </div>
            </div>
           
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/product/rcb7.jpg" style="height:80px;width:100px;border-radius:10px;" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/product/rcb7.jpg" alt="..." style="height:40px;width:40px;border-radius:10px;" />
                    <p class="fs-5 fs-xxl-2 text-center">Nutraceuticals coated spheres</p>
                  </a></div>
              </div>
            </div>
            <div class="col-auto col-md-4 col-lg-auto text-xl-start">
              <div class="d-flex flex-column align-items-center">
                <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="assets/product/rcb2.jpg" style="height:80px;width:100px;border-radius:10px;" alt="..." /><img class="mb-3 deparment-icon-hover" src="assets/product/rcb2.jpg" alt="..." style="height:40px;width:40px;border-radius:10px;" />
                    <p class="fs-5 fs-xxl-2 text-center">Acid Pellets (tartaric /Citric Acid)</p>
                  </a></div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="bg-secondary" style="display:none;">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/bg-eye-care.png);background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="assets/product/qqq.jpg" alt="..." style="height:300px;border-radius:10px;" /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">What Makes Us <br class="d-none d-sm-block" />Different.</h2>
              <p class="text-light">RCB Pvt. Ltd. is well known for its prominent quality and is the industry’s proven performance . We maintain the world’s highest certifications and are recognized for our meticulous manufacturing standards. We know your product needs and your customers’ expectations, and we are ready to deliver top results.
</p>
<ul>
<li class="lh-lg" style="color:#fff;">World-Class Infrastructure</li>
<li class="lh-lg" style="color:#fff;">Latest Machines</li>
<li class="lh-lg" style="color:#fff;">Highly Skilled And Innovative Team</li>
<li class="lh-lg" style="color:#fff;">Top-Notch Technical Support</li>
<li class="lh-lg" style="color:#fff;">Innovation</li>
<li class="lh-lg" style="color:#fff;">Quality & Customer Satisfaction</li>

</ul>
              <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Learn more </a></div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!--<section class="pb-0" id="about">-->

      <!--  <div class="container">-->
      <!--    <div class="row">-->
      <!--      <div class="col-12 py-3">-->
      <!--        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/about-us.png);background-position:top center;background-size:contain;">-->
      <!--        </div>-->
            

      <!--        <h1 class="text-center">ABOUT US</h1>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
     
      <!--</section>-->
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        <div class="bg-holder bg-size">
        </div>
        <!--/.bg-holder-->


        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" style="display:none;">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-us.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">OUR VALUS</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5"  style="display:none;">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/doctors-bg.png);background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xl-10 px-0">
              <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5">
                              <!--<img src="assets/img/gallery/anita.png" width="128" alt="..." />-->
                            <h5 class="mt-3">Vision</h5>
                            <p class="mb-0 fs-xxl-1">Our vision is to be the most upright chemical and biotech  company providing superiority, Modest and innovative products which extrapolate for adding value to develop the formulations which can be beneficial for society.
</p>
                            <!--<div class="text-center">-->
                            <!--  <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>-->
                            <!--</div>-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5">
                              <!--<img src="assets/img/gallery/jane.png" width="128" alt="..." />-->
                            <h5 class="mt-3">Mission</h5>
                            <p class="mb-0 fs-xxl-1">Our venture is to grace the lives of people by providing affordable technologies along with a global association with people, communities and businesses, uplifting outstanding leadership and focusing highly productive operations and workplaces.
</p>
                            <!--<div class="text-center">-->
                            <!--  <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>-->
                            <!--</div>-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-8 mb-md-0">
                        <div class="card card-span h-100 shadow">
                          <div class="card-body d-flex flex-column flex-center py-5">
                              <!--<img src="assets/img/gallery/leo-mario.png" width="128" alt="..." />-->
                            <h5 class="mt-3">Our capabilities</h5>
                            <p class="mb-0 fs-xxl-1">Manufacturing Operations
RMG 250 Liter (image)
Extrusion Spheronization (image)
FBD 250 Kg (Image)
Wurster Coating  250 Kg (Image)
Plant (image)

Research and Development
Analytical lab (image)
R & D processing lab (image)</p>
                            <!--<div class="text-center">-->
                            <!--  <button class="btn btn-secondary hover-top rounded-pill border-0" type="submit">View Profile</button>-->
                            <!--</div>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
</div></div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" style="display:none;">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">PEOPLE WHO LOVE US</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-8"  style="display:none;">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people-bg-1.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center offset-sm-1">
            <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="assets/img/gallery/people-who-loves.png" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Edward Newgate</h5>
                      <p class="fw-normal mb-0">Founder Circle</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="assets/img/gallery/people-who-loves.png" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Jhon Doe</h5>
                      <p class="fw-normal mb-0">UI/UX Designer</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100">
                    <div class="col-sm-3 text-center"><img src="assets/img/gallery/people-who-loves.png" width="100" alt="" />
                      <h5 class="mt-3 fw-medium text-secondary">Jeny Doe</h5>
                      <p class="fw-normal mb-0">Web Designer</p>
                    </div>
                    <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                      <h2>Fantastic Response!</h2>
                      <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star-half-alt me-2"></i><i class="far fa-star"></i></div>
                      <p>This medical and health care facility distinguishes itself from the competition by providing technologically advanced medical and health care. A mobile app and a website are available via which you can easily schedule appointments, get online consultations, and see physicians, who will assist you through the whole procedure. And all of the prescriptions, medications, and other services they offer are 100% genuine, medically verified, and proved. I believe that the Livedoc staff is doing an outstanding job. Highly recommended their health care services.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="position-relative z-index-2 mt-5">
                  <ol class="carousel-indicators">
                    <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5"  style="display:none;">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/people.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">APPOINTMENT</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-8"  style="display:none;">
        <div class="container">
          <div class="row">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:bottom right;background-size:auto;">
            </div>
            <!--/.bg-holder-->

            <div class="col-lg-6 z-index-2 mb-5"><img class="w-100" src="assets/img/gallery/appointment.png" alt="..." /></div>
            <div class="col-lg-6 z-index-2">
              <form class="row g-3">
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputName">Name</label>
                  <input class="form-control form-livedoc-control" id="inputName" type="text" placeholder="Name" />
                </div>
                <div class="col-md-6">
                  <label class="visually-hidden" for="inputPhone">Phone</label>
                  <input class="form-control form-livedoc-control" id="inputPhone" type="text" placeholder="Phone" />
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputCategory">Category</label>
                  <select class="form-select" id="inputCategory">
                    <option selected="selected">Category</option>
                    <option> Category One</option>
                    <option> Category Two</option>
                    <option> Category Three</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label visually-hidden" for="inputEmail">Email</label>
                  <input class="form-control form-livedoc-control" id="inputEmail" type="email" placeholder="Email" />
                </div>
                <div class="col-md-12">
                  <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                  <textarea class="form-control form-livedoc-control" id="validationTextarea" placeholder="Message" style="height: 250px;" required="required"></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary rounded-pill" type="submit">Sign in</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" style="display:none;">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">Explore Product's</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section  style="display:none;">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/product/rcb8.jpg" alt="news" />
                <div class="card-body">
                  <!--  <span class="fs--1 text-primary me-3">Health</span>-->
                  <!--<svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">-->
                  <!--  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>-->
                  <!--  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>-->
                  <!--</svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>-->
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">MCC Spheres</h5><a class="stretched-link" href="#!">View & Order</a>
                </div>
              </div>
            </div>
             <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/product/rcb9.jpg" alt="news" />
                <div class="card-body">
                  <!--  <span class="fs--1 text-primary me-3">Health</span>-->
                  <!--<svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">-->
                  <!--  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>-->
                  <!--  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>-->
                  <!--</svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>-->
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Lactose starch spheres</h5><a class="stretched-link" href="#!">View & Order</a>
                </div>
              </div>
            </div>
             <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/product/rcb7.jpg" alt="news" />
                <div class="card-body">
                  <!--  <span class="fs--1 text-primary me-3">Health</span>-->
                  <!--<svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">-->
                  <!--  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>-->
                  <!--  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>-->
                  <!--</svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>-->
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Lactose cellulose spheres</h5><a class="stretched-link" href="#!">View & Order</a>
                </div>
              </div>
            </div>
           <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/product/rcb8.jpg" alt="news" />
                <div class="card-body">
                  <!--  <span class="fs--1 text-primary me-3">Health</span>-->
                  <!--<svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">-->
                  <!--  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>-->
                  <!--  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>-->
                  <!--</svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>-->
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Sugar spheres</h5><a class="stretched-link" href="#!">View & Order</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/product/rcb8.jpg" alt="news" />
                <div class="card-body">
                  <!--  <span class="fs--1 text-primary me-3">Health</span>-->
                  <!--<svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">-->
                  <!--  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>-->
                  <!--  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>-->
                  <!--</svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>-->
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Nutraceuticals coated spheres</h5><a class="stretched-link" href="#!">View & Order</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/product/rcb8.jpg" alt="news" />
                <div class="card-body">
                  <!--  <span class="fs--1 text-primary me-3">Health</span>-->
                  <!--<svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">-->
                  <!--  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>-->
                  <!--  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>-->
                  <!--</svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>-->
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Nutraceuticals Beadlets</h5><a class="stretched-link" href="#!">View & Order</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3"><img class="card-img-top rounded-top-3" src="assets/product/rcb8.jpg" alt="news" />
                <div class="card-body">
                  <!--  <span class="fs--1 text-primary me-3">Health</span>-->
                  <!--<svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">-->
                  <!--  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>-->
                  <!--  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>-->
                  <!--</svg><span class="fs--1 text-900">Nov 21, 2021</span><span class="fs--1"></span>-->
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">Acid Pellets (tartaric /Citric Acid)</h5><a class="stretched-link" href="#!">View & Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><br>
      <div class="container" style="text-align: center; margin: auto; width: 60%;">
    <p style="font-family: Gentium; font-size: larger; text-align: left;" class="text-justify">
        RCB Pvt. Ltd. is involved in the manufacturing and supplying of starter pellets, like Microcrystalline cellulose spheres, Sugar spheres, Tartaric acid spheres, Citric acid spheres, Lactose cellulose spheres etc.
        <br/>Nutraceutical pellets and nutraceutical formulations. Our manufacturing units are located in Raipur, Chhattisgarh.
        <br/>Apart from starter pellets, we are committed to supporting the development of the best pharmaceutical, nutraceutical, and cosmeceutical formulations with pellet technology.
        <br/>We have always focused on improving the community by offering safe, efficacious, and quality products.
        <br/>Our goal is to set the industry standard in honesty and innovation. We are constantly looking at new products and ideas and welcome inquiries on any pharmaceuticals, nutritional, and cosmeceutical subjects of need.
        <br/>We aim to become the most reliable name in pellet technology by excelling in the manufacturing of the best quality products as per international standards.
        <br/>RCB Pvt. Ltd. offers an unrivaled partnership in customer service, materials procurement, product formulation and development, laboratory testing, and supplement manufacturing and packaging.
        <br/>Equipped with cutting-edge research and development standards and scientific skills, we deliver better outcomes for patients through science-based innovation.
    </p>
</div>


     <?php include_once 'footer.php'; ?>