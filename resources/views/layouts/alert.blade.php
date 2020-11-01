<div class="row">
    @if(session()->has('success'))
    <div class="col-12 alert alert-success alert-dismissible fade show mb-0" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if(session()->has('error'))
    <div class="col-12 alert alert-danger alert-dismissible fade show mb-0" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    </div>
