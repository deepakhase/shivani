<!-- register Modal -->
@extends('layouts.master')

@section('content')
<div class="modal fade" id="verify" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-content">
            <!--SIGNIN AS USER START-->
            <div class="user-box">
                <h2>Code Verification</h2>
                <!--FORM FIELD START-->
                <form action="{{route('register.verify.otp')}}" method="post">
                    {{csrf_field()}}
                    <div class="form">
                        <div class="input-container">
                            <input type="hidden" value="{{$data['id']}}" name="id">
                            <input type="hidden" value="{{$data['code']}}" name="code">
                            <input type="text" placeholder="code" name="newcode">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="input-container">
                            <button class="btn-style">Verify</button>
                        </div>
                    </div>
                    <!--FORM FIELD END-->
                </form>
            </div>
            <!--SIGNIN AS USER END-->
            <div class="user-box-footer">
                Resend OTP? <a href="#">Resend</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- register Modal end-->
@endsection
@section('script')
    <script>
        $(window).on('load',function(){
            $('#verify').modal('show');
        });

    </script>
@endsection