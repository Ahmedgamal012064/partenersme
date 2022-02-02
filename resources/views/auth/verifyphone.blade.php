<!DOCTYPE html>
<html>
    <head>
<!-------------------------------------------------------------basic html------------------------------------------------->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/ ">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-------------------------------------------------------title & css------------------------------------------------->
        <title>PartenersMe | OTP</title>
    </head>
<style>
    .card {
        width: 350px;
        padding: 10px;
        border-radius: 20px;
        background: #fff;
        border: none;
        height: 350px;
        position: relative
    }

    .container {
        height: 100vh
    }

    body {
        background: #eee
    }

    .mobile-text {
        color: #989696b8;
        font-size: 15px
    }

    .form-control {
        margin-right: 12px
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #be632d;
        outline: 0;
        box-shadow: none
    }

    .cursor {
        cursor: pointer
    }
</style>
    <body>
<!--------------------------form OTP------------------------------------->


<div class="d-flex justify-content-center align-items-center container">
    <div class="card py-5 px-3">
        @if ($errors->any())
        @foreach($errors->all() as $error)
        <span class="alert alert-danger" role="alert">
            <strong>{{ $error }}</strong>
        </span>
        @endforeach
        @endif

        <h5 class="m-0">تفعيل رقم الهاتف</h5><span class="mobile-text">ادخل كود التفعيل لتأكيد حسابك عل الرقم <b class="text-info"  dir="ltr">{{session('phone')}}</b></span>
        <form action="{{route('verifyotp')}}" method="post">
            @csrf
        <div class="d-flex flex-row mt-5" id="containerotp">
            <input type="hidden" name="phone" value="{{session('phone')}}">
            <input type="tel" class="form-control" autofocus="" maxlength="1"  name="verification_code[]">
            <input type="tel" class="form-control" maxlength="1"  name="verification_code[]">
            <input type="tel" class="form-control"maxlength="1"  name="verification_code[]">
            <input type="tel" class="form-control" maxlength="1"  name="verification_code[]">
            <input type="tel" class="form-control" maxlength="1"  name="verification_code[]">
            <input type="tel" class="form-control" maxlength="1"  name="verification_code[]">
        </div>
        <button type="submit" class="btn btn-info btn-sm btn-block  mt-2"> تفعيل</button>
        </form>
        <div class="text-center mt-5 resend"><span class="d-block mobile-text">لم يتم ارسال الكود</span><span class="font-weight-bold text-info cursor">اعادة الارسال</span></div>
    </div>
</div>



<!------------------------------------------------------------script------------------------------------------------>
    <!----------------------------------------------------------------jquery------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--**************************************nice sceoll**************************************-->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
   <script>
    $("html").niceScroll({
   cursorcolor: "#424242",
});


let otp = document.querySelector('#containerotp');

for(let pin of otp.children) {
    pin.onkeyup = function() {
        if(pin.nextElementSibling) {
            pin.nextElementSibling.focus();
        }
    }

}

$(document).ready(function(){

    $(".resend").click(function(event){
        event.preventDefault();

        let phone    = $("input[name=phone]").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{route('resend')}}",
            type:"POST",
            data:{
                phone:phone,
                _token: _token
            },
            success:function(response){
                console.log(response);
                toastr.info('تم اعادة الارسال برجاء الانتظار...');
            },
        });
    });
});

</script>

    </body>
</html>
