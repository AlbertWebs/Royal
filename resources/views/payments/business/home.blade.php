@extends('front.master-pesapal')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach($SiteSettings as $Settings)

<main>

<br><br><br>



    <div class="bg_color_1">
        <div class="container margin_80_55" style="min-height:520px">

            <center>
                <h1 class="text-success">Payment Success:<i class="ti-check"></i></h1>
                <h2>Tracking ID:</h2>{{ Request::get('tracking_id') }}
                <h2>Merchant Reference:</h2>{{ Request::get('merchant_reference') }}
            </center>

        </div>
        <!--/container-->
    </div>
    <!--/bg_color_1-->

</main>
<!--/main-->
@endforeach

@endsection
