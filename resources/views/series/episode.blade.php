@extends('layouts.user')

@section('title')
    {{ $dataEpisode->judul }}
@endsection

@section('content')
    {{--  breadcrumbs --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb grey small">
            <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
            <li class="breadcrumb-item">
                <a href="{{ url('series/category/' .
                    $dataEpisode->series->category->slug) }}">
                    {{ $dataEpisode->series->category->nama }}
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('series/' .
                    $dataEpisode->series->slug) }}">
                    {{ Str::limit($dataEpisode->series->judul, 30, '...') }}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ Str::limit($dataEpisode->judul, 30, '...') }}
            </li>
        </ol>
    </nav>
    
    @include('layouts.episode.layout-content-episode')
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


