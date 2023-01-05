@extends('frontand.layouts.master')

@section('content')
    
    <div class="col-lg-12">
        <div class="blog-post">
            <div class="blog-thumb">
                <img src="{{asset('frontand/assets/images/blog-post-01.jpg')}}" alt="">
            </div>
            <div class="down-content">
                <div class="next-content">
                    <ul class="post-info" style="padding-bottom: 20px;">
                        <li><a style="color:#000; font-size: 24px;" href="#"><i class="fa fa-user"> By Jone</i></a></li>
                        <li><a style="color:#000; font-size: 24px;" href="#"><i class="fa fa-calendar"> 16 Dec, 2022</i></a></li>
                        <li><a style="color:#000; font-size: 24px;" href="#"><i class="fa fa-caret-square-o-up"> Digital marketing</i></a></li>
                        <li><a style="color:#000; font-size: 24px;" href="#"><i class="fa fa-eye"> 52143</i></a></li>
                        </ul>
                        <p>It is a long established fact that a reader will be ditracted by the readable content of a page when looking
                            at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal ditribution o letters, as
                            opposed to using content here content here marketing it look like readable Engilsh.</p>
                        <a href="post-details.html"><h4 style="padding-top: 15px;">Delivering the best digital marketing</h4></a>
                        <p style="padding-bottom: 20px;">It is a long established fact that a reader will be ditracted by the readable content of a page when looking
                        at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal ditribution o letters, as
                        opposed to using content here content here marketing it look like readable Engilsh.</p>
                        <div class="row">
                            <div class="blog-img">
                                <img style="float:left; padding-left: 10px" width="50%" height="80%" src="{{asset('frontand/assets/images/blog-post-01.jpg')}}" alt="">
                                <img style="float:left; padding-left: 10px" width="50%" height="80%" src="{{asset('frontand/assets/images/blog-post-01.jpg')}}" alt="">
                            </div>
                        </div>
                        <a href="post-details.html"><h4>Delivering the best digital marketing</h4></a>
                        <p style="padding-bottom: 20px;">It is a long established fact that a reader will be ditracted by the readable content of a page when looking
                        at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal ditribution o letters, as
                        opposed to using content here content here marketing it look like readable Engilsh.</p>
                        <div class="row" style="padding-top: 20px;">
                            <div class="col-lg-12 card" style="color: black;  border-left: 1px black; background-color: #f9f9f9">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                
                                                    <div class="font-weight-bold text-gray-800">
                                                        <p style="color: black;">"It is a long established fact that a reader will be ditracted by the readable content of a page when looking
                                                            at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal ditribution o letters, as
                                                            opposed to using content here content here marketing it look like readable Engilsh?"</p>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                    
                                
                            </div>
                        </div>
                        <div class="row" style="padding-top: 37px;">
                            <p style="padding-bottom: 20px;">It is a long established fact that a reader will be ditracted by the readable content of a page when looking
                                at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal ditribution o letters, as
                                opposed to using content here content here marketing it look like readable Engilsh.</p>
                        </div>
                        
                        
                </div>
            </div>
            
        </div>
       
    </div>
    <div class="col-lg-12">
        <div class="sidebar-item comments">
          <div class="sidebar-heading">
            <h2>4 comments</h2>
          </div>
          <div class="content">
            <ul>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-01.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Charles Kate<span>May 16, 2020</span></h4>
                  <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                </div>
              </li>
              <li class="replied">
                <div class="author-thumb">
                  <img src="assets/images/comment-author-02.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Thirteen Man<span>May 20, 2020</span></h4>
                  <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/images/comment-author-03.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>
              <li class="replied">
                <div class="author-thumb">
                  <img src="assets/images/comment-author-02.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Thirteen Man<span>May 22, 2020</span></h4>
                  <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    <div class="col-lg-12">
        <div class="sidebar-item submit-comment">
          <div class="sidebar-heading">
            <h2>Your comment</h2>
          </div>
          <div class="content">
            <form id="comment" action="#" method="post">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" id="name" placeholder="Your name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" id="email" placeholder="Your email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" id="subject" placeholder="Subject">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <a type="submit" class="btn btn-outline-success">Submit</a>
                    {{-- <button type="submit" id="form-submit" class="main-button">Submit</button> --}}
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

@endsection