<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts.head')
    <style>
        #header{
            min-height: 55vh;
            /* background-image: linear-gradient(to right , #4286f4, #32adff); */
            background : linear-gradient(45deg, #5B86E5, #36D1DC)
        }

        .linear{
            /* background-image: linear-gradient(to right , #4286f4, #32adff); */
            background : linear-gradient(45deg, #5B86E5, #36D1DC)
        }

        .row.display-flex {
            display: flex;
            flex-wrap: wrap;
        }
        .row.display-flex > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }

        #navbarDropdown.pakeP:after{
            vertical-align: 1rem;
        }

        .grey{
            background-color: rgb(240, 238, 238);
        }

        #itemProfile:active p, #itemProfile:active h1{
            color: white !important;
        }

        @media (max-width: 768px)
        {

            .navbar{
                position: static;
            }
            #navbarDropdown{
                display:none;
            }

            #navbarDropdown+.dropdown-menu{
                display:block
            }

            #profile p{
                text-align: right;
                /* justify-content: start !important; */
            }
        }

         /* supaya image height di card sama semua */
         .card-img-top {
            width: 100%;
            height: 13vw;
            object-fit: cover;
        }

        /* supaya heightnya select2 kalo lagi mode single selection ga penyet */
        .select2-selection__rendered {
            line-height: 31px !important;
        }
        .select2-container .select2-selection--single {
            height: 35px !important;
        }
        .select2-selection__arrow {
            height: 34px !important;
        }

        /* supaya z-index suggestion yg muncul dr auto complete ga ketutupan navbar */
        .ui-autocomplete {
            position: absolute;
            cursor: default;
            z-index:99999 !important;
        }
    </style>
    @yield('style')
</head>
<body>
    @include('layouts.user.header')
    @auth
        @if(Auth::user()->email_verified_at == null)
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
            Email has not been verified yet, please click <a href="{{route('send.verification')}}">here</a> to verify your email
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    @endauth
    <div class="min-vh-100 grey">
        @yield('content')
    </div>
    @include('layouts.user.footer')
    <script>
        $("#navbarDropdown").has("h1").after().toggleClass('pakeP');
        $(document).on('click', '#navbarAccount .dropdown-menu', function (e) {
            e.stopPropagation();
        });
        $("#clickProfile").click(function(){
            $("#collapseProfile").slideToggle("slow");
        });
        $("#clickMember").click(function(){
            $("#collapseMember").slideToggle("slow");
        });
        $("#clickQuiz").click(function(){
            $("#collapseQuiz").slideToggle("slow");
        });

        // search auto complete -> on key up
        $(document).on('keyup', '.cari', function (e) {
            e.preventDefault();
            var inputsearch = $(this);

            var keywordjudul = $(inputsearch).val();;
            if (keywordjudul == "") {
                keywordjudul = "CONST_SHOW_ALL"
            }

            $.ajax({
               type:'GET',
               url:"{{ url('/searchseries') }}",
               data:{
                   q : keywordjudul
               },
               success:function(response) {
                    var availableTags = [];

                    response.data.forEach(element => {
                        availableTags.push(element.nama);
                    });

                    $(inputsearch).autocomplete({
                        source: availableTags
                    });
               },
               select: function( event, ui ) {}
            });
        });

        //event ini bakalan ketrigger waktu salah 1 item autocomplete dipilih
        $(document).on("autocompleteselect", ".cari", function(event, ui ) {
            //lakukan hal default yaitu ngubah value textnya
            $(this).val(ui.item.label);

            //trus submit form search
            let formsearch = $(this).parent().parent();
            $(formsearch).submit();
        });


    </script>
    @yield('script')
</body>
</html>

