@extends('index')

@section('content')
    <div class="w3ls_banner_section">
        <div class="container">
            <h2 class="mcnp" style="color: maroon">Medical College of Northern Philippines</h2>
            <h2 class="isap">International School of Asia and the Pacific</h2>
            <!--        <p>School Management System</p>-->

            <div class="wthree-counter-agile">
                <img src="./images/mcnp.png" alt="" width="210">
                <img src="./images/isap.png" alt="" width="200">

            </div>

            <div class="agileits_more">
                <ul>
                    <li>
                        <a href="{{ route('step-one') }}" class="w3ls_banner_more hvr-icon-hang ">Click here to start</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection


