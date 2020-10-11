@extends('layouts.user')
@section('content')
    <div class="container-fluid linear">
        <div class="container py-4 text-center">
            <h1 class="text-light mt-5 font-weight-bold">Choose the membership plan you need</h1>
            <h5 class="text-light mt-3 font-weight-normal">If you enjoy SqueeCourse, you will save a lot of money by choosing <br> <b>Platinum</b> membership plan, because you will get Rp. 198.000 discount <br> from the monthly payments.</h5>
            <div class="card-deck mt-5 mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Silver</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp. 120.000 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li><b>1 month</b> full access to <b>all</b>. of our series</li>
                        <li>No limitations</li>
                        <li>Join on our Discord group!</li>
                        <li>Make and keep your watchlist</li>
                        <li>No discount</li>
                        </ul>
                        <a href="/payment/Silver" class="btn btn-lg btn-block btn-outline-primary">Buy Now</a>
                    </div>
                </div>

                <div class="card mb-4 shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Gold</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp. 288.000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><b>3 month</b> full access to <b>all</b>. of our series</li>
                            <li>No limitations</li>
                            <li>Join on our Discord group!</li>
                            <li>Make and keep your watchlist</li>
                            <li>20% discount from the monthly payments</li>
                        </ul>
                        <a href="/payment/Gold" class="btn btn-lg btn-block btn-primary">Buy Now</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Platinum</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp. 504.000</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><b>6 month</b> full access to <b>all</b>. of our series</li>
                            <li>No limitations</li>
                            <li>Join on our Discord group!</li>
                            <li>Make and keep your watchlist</li>
                            <li>30% discount from the monthly payments</li>
                        </ul>
                        <a href="/payment/Platinum" class="btn btn-lg btn-block btn-outline-primary">Buy Now</a>
                    </div>
                </div>
            <p class="container-sm text-light mt-3 font-weight-normal">If you still have any question about the membership plans that our website offers, you can contact us on our <a href="https://wa.me/628172984750" style="color: #00ff80">Whatsapp</a>, or you might want to visit our <a href="http://telegram.me/SqueeSupportBot" style="color: #dfdfdf">frequently asked questions</a> page.
                </p>
            </div>
        </div>
    </div>
@endsection
