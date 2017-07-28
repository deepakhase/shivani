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
                                
                                    <input id="user_profile" name="user_profile" type="file" class="file-loading bottommargin20">
                                    <a class="apply" href="#">Apply Now</a>
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
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="myProfile">
                                            <table class="table no-border">
                                                <tr>
                                                    <th>Name</th>
                                                     <th>:</th>
                                                    <td><input type="text" class="form-textbox" value="Deepak Chandrabhan Hase"></td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>:</th>
                                                    <td><input type="text" class="form-textbox" value="deepakhase1989@gmail.com"></td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth</th>
                                                    <th>:</th>
                                                    <td>
                                                        <div class="input-group date" data-date-format="mm-dd-yyyy">
                                                            <input class="form-textbox" id="datepicker" type="text" />
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <th>:</th>
                                                    <td>
                                                        <label class="radio-inline">
                                                        <input name="radioGroup" id="radio1" value="option1" type="radio"> Male
                                                      </label>
                                                      <label class="radio-inline">
                                                          <input name="radioGroup" id="radio2" value="option2" checked="" type="radio"> 
                                                          Female
                                                      </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Phone No.</th>
                                                    <th>:</th>
                                                    <td><input type="text" class="form-textbox" value="9833223689"> </td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <th>:</th>
                                                    <td>
                                                    <textarea class="form-textbox" placeholder="Caspiana D-103, Casa Rio, Palava City, Dombivali East"></textarea>
                                                    </td>
                                                </tr>                                            
                                            </table>
                                            <div class="col-md-3 pull-right">
                                            <button class="theam-button">Save Next</button>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="educationInfo">
                                            <table class="table no-border">
                                                <tr>
                                                    <th>School Name</th>
                                                    <th>:</th>
                                                    <td><input type="text" class="form-textbox" value="Pawar Public School"></td>
                                                </tr>
                                                <tr>
                                                    <th>Class</th>
                                                    <th>:</th>
                                                    <td><input type="text" class="form-textbox" value="10 th"></td>
                                                </tr>
                                                <tr>
                                                    <th>Board</th>
                                                    <th>:</th>
                                                    <td>
                                                        <select class="form-textbox">
                                                            <option>ICSE</option>
                                                            <option selected="selected">CBSC</option>
                                                            <option>IGCSE</option>
                                                            <option>IB</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Percentage</th>
                                                    <th>:</th>
                                                    <td><input type="text" class="form-textbox" value="89.05%"></td>
                                                </tr>
                                                <tr>
                                                    <th>Year of Passing</th>
                                                    <th>:</th>
                                                    <td>
                                                        <select class="form-textbox">
                                                            <option>2001</option>
                                                            <option selected="selected">2002</option>
                                                            <option>2003</option>
                                                            <option>2004</option>
                                                            <option>2005</option>
                                                            <option>2006</option>
                                                            <option>2007</option>
                                                            <option>2008</option>
                                                            <option>2009</option>
                                                            <option>2010</option>
                                                            <option>2011</option>
                                                            <option>2012</option>
                                                            <option>2013</option>
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                            <option>2017</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Location</th>
                                                    <th>:</th>
                                                    <td><input type="text" class="form-textbox" value="Dombivali East"></td>
                                                </tr>                                            
                                            </table>
                                            <div class="col-md-3 pull-right">
                                            <button class="theam-button">Save Next</button>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="myActivity">
                                            <textarea class="form-textbox" rows="15" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."></textarea>
                                            <div class="col-md-3 noallpadding topmargin20 pull-right">
                                            <button class="theam-button">Submit</button>
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
