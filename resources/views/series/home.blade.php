@extends('layouts.user')

@section('title')
    All Series
@endsection

@section('content')
    @include('series.layout-list')
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        });
    });
</script>
@endsection
