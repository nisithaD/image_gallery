@extends('layout.header_footer')

@section('title', 'Page Title')

@section('content')
<div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>Contact <em>us</em></h1>
            </div>
        </div>
    </div>


    <div class="blog-entries">
        <div class="container">
            <div class="col-md-12">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-blog-post">
                                <img src="img/blog_post_1.png" alt="">
                                <div class="text-content">
                                    <h2>Sed sit amet viverra augue</h2>
                                    <span><a href="#">Admin</a> / <a href="#">16 September 2018</a> / <a href="#">Branding</a></span>
                                    <p>Nullam et justo pharetra, commodo eros ac, pharetra justo. Donec vel vehicula urna. Proin sodales ligula vitae lacus elementum, at tempor nisl congue. Pellentesque nec lacus velit. Vestibulum tincidunt hendrerit ante id sagittis. Phasellus sodales nibh mattis neque interdum viverra. Nam accumsan arcu id fringilla auctor.
                                    <br><br>Suspendisse et rutrum nisl. Phasellus porttitor metus vel justo blandit, in finibus neque elementum. Nullam semper, turpis quis egestas consequat, dui eros tristique lectus, ac euismod ex quam id mauris. Nunc sit amet nibh sollicitudin, interdum nunc in, eleifend est.

                                	<br><br>Pellentesque vel dignissim libero, et sagittis elit. Nulla dignissim eleifend tellus, sed molestie risus rutrum non. Etiam lorem odio, convallis a arcu vel, bibendum molestie metus. Pellentesque imperdiet nisl ante, eu congue nisl suscipit id.
                                    <br></p>
                                    <button id="modBtn" class="btn btn-primary btn-lg">Send us a message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!-- Modal -->
                   <div id="modal" class="modal">
                     <!-- Modal Content -->
                     <div class="modal-content">
                       <!-- Modal Header -->
                       <div class="modal-header">
                         <h3 class="header-title">Say hello to <em>Highway</em></h3>
                         <div class="close-btn"><img src="img/close_contact.png" alt=""></div>
                       </div>
                       <!-- Modal Body -->
                       <div class="modal-body">
                         <div class="col-md-6 col-md-offset-3">
                           <form id="contact" action="" method="post">
                               <div class="row">
                                   <div class="col-md-12">
                                     <fieldset>
                                       <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                     </fieldset>
                                   </div>
                                   <div class="col-md-12">
                                     <fieldset>
                                       <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                     </fieldset>
                                   </div>
                                   <div class="col-md-12">
                                     <fieldset>
                                       <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                     </fieldset>
                                   </div>
                                   <div class="col-md-12">
                                     <fieldset>
                                       <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                                     </fieldset>
                                   </div>
                               </div>
                           </form>
                         </div>
                       </div>
                     </div>
                   </div>

                </div>
            </div>
        </div>
    </div>
@endsection
