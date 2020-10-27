@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            @include('layouts.episode.layout-content-episode-admin')
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $(".reply").hide();
            $(".formAddReply").hide();

            $(".btnViewReply").click(function(){
                let replies = $(this).parent().parent().siblings(".reply");

                if ($(replies).is(":visible")) {
                    // $(this).html("View Replies");
                    $(replies).slideUp();
                }
                else{
                    // $(this).html("Hide Replies");
                    $(replies).slideDown();
                }
            });

            $(".btnAddReply").click(function(){
                let form = $(this).siblings(".formAddReply");

                if ($(form).is(":visible")) {
                    $(form).slideUp();
                }
                else{
                    $(form).slideDown();
                }
            });

            $(".btnCancel").click(function(){
                let btnAddReply = $(this).parent().parent().siblings(".btnAddReply")[0];
                let form = $(this).parent().parent();

                $(form).slideUp();
            })
        })
    </script>
@endsection
