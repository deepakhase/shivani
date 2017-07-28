@extends('layouts.master')

@section('content')
<!--Banner Wrap Start-->
        <div class="kf_inr_banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--KF INR BANNER DES Wrap Start-->
                        <div class="kf_inr_ban_des">
                            <div class="inr_banner_heading">
                                <h3>My Account</h3>
                            </div>
                           
                            <div class="kf_inr_breadcrumb">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--KF INR BANNER DES Wrap End-->
                    </div>
                </div>
            </div>
        </div>

        <!--Banner Wrap End-->

        <!--Content Wrap Start-->
        <div class="kf_content_wrap">   
           <section class="topmargin80">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-4">
                            <form action="#">
                            <div class="sidebar_register_wrap">
                                <!--TEACHER THUMB START-->
                                <div class="teacher_thumb bottommargin20">
                                    <figure>
                                        <img src="images/profile-icon.jpg" alt=""/>
                                    </figure>
                                </div>
                                <!--TEACHER THUMB END-->
                                <div class="teacher_bio_des">
                                    <h4>Deepak Hase</h4>
                                    <ul>
                                        <li><i class="fa fa-calendar"></i>Last Login : 01 Jan, 2017</li><br>
                                    </ul>                                    
                                </div>
                                <div class="clearfix"></div>
                                    <a class="apply" href="/edit-profile">Edit Profile</a>
                                </div>
                            </form>
                        </div>

                        <div class=" col-lg-8 col-md-8">
                            <div class="about_autor">
                                <div class="kf_courses_tabs">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#myProfile" aria-controls="myProfile" role="tab" data-toggle="tab"> My Profile</a></li>
                                        <li role="presentation"><a href="#educationInfo" aria-controls="educationInfo" role="tab" data-toggle="tab"> Educational Information</a></li>
                                        <li role="presentation"><a href="#myActivity" aria-controls="myActivity" role="tab" data-toggle="tab"> My Activity</a></li>
                                        <li role="presentation"><a href="#changePass" aria-controls="changePass" role="tab" data-toggle="tab"> Change Password</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="myProfile">
                                            <table class="table no-border">
                                                <tr>
                                                    <th>Name</th>
                                                     <th>:</th>
                                                    <td>Deepak Chandrabhan Hase</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>:</th>
                                                    <td>deepakhase1989@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth</th>
                                                    <th>:</th>
                                                    <td>4 Oct 1989</td>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <th>:</th>
                                                    <td>Male</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone No.</th>
                                                    <th>:</th>
                                                    <td>9833223689</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <th>:</th>
                                                    <td>Caspiana D-103, Casa Rio, Palava City, Dombivali East</td>
                                                </tr>                                            
                                            </table>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="educationInfo">
                                            <table class="table no-border">
                                                <tr>
                                                    <th>School Name</th>
                                                    <th>:</th>
                                                    <td>Pawar Public School</td>
                                                </tr>
                                                <tr>
                                                    <th>Class</th>
                                                    <th>:</th>
                                                    <td>10 th</td>
                                                </tr>
                                                <tr>
                                                    <th>Board</th>
                                                    <th>:</th>
                                                    <td>CBSC</td>
                                                </tr>
                                                <tr>
                                                    <th>Percentage</th>
                                                    <th>:</th>
                                                    <td>89.05%</td>
                                                </tr>
                                                <tr>
                                                    <th>Year of Passing</th>
                                                    <th>:</th>
                                                    <td>2015</td>
                                                </tr>
                                                <tr>
                                                    <th>Location</th>
                                                    <th>:</th>
                                                    <td>Dombivali East</td>
                                                </tr>                                            
                                            </table>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="myActivity">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="changePass">
                                            <div class="col-md-12">
                                                <form action="#" method="post">
                                                    <div class="contact_des">
                                                        <div class="inputs_des">
                                                            <span>Old Password</span>
                                                            <input type="password" class="form-textbox">
                                                        </div>

                                                        <div class="inputs_des">
                                                            <span>New Password</span>
                                                            <input type="password" class="form-textbox">
                                                        </div>

                                                        <div class="inputs_des">
                                                            <span>Confirm Password</span>
                                                            <input type="text" class="form-textbox">
                                                        </div>
                                                        <div class="col-md-3 noallpadding">
                                                            <button>Submit</button>
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
            </section> 
        </div>
        <!--Content Wrap End-->
@endsection
