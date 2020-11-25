@extends('layouts.admin')

@section('title')
    Edit Episode
@endsection

@section('content')
    <div class="container my-5">
        @include('layouts.alert')
        <h1 class="h1 text-center">Edit Episode</h1>
        <div class="container-fluid text-left ml-0 p-0">
            <a class="btn btn-danger ml-0" href="{{ route('admin.episodes') }}">
                <i class="fas fa-chevron-left mr-2"></i>Back
            </a>
        </div>
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-4">
                <label>Title</label>
                <input type="text" name="judul" required class="form-control my-2" value="{{ $episode->judul }}" placeholder="Let's start learning">
            </div>
            <div class="my-4 text-danger text-left">
                @error('judul')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group my-4">
                <label>Series</label>
                <select name="series" class="form-control select2 py-2" style="width: 100%">
                    @if (isset($dataSeries) && count($dataSeries) > 0)
                        @foreach ($dataSeries as $series)
                            <option value="{{ $series->id }}"
                                {{ $episode->series->id == $series->id ? 'selected':'' }}>
                                {{ $series->judul }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="my-4 text-danger text-left">
                @error('series')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group my-4">
                <label>Youtube Embed URL</label>
                <input type="text" name="url" required class="form-control my-2" value="{{ $episode->url_youtube }}" placeholder="https://www.youtube.com/embed/-82XvDLsGKc">
            </div>
            <div class="my-4 text-danger text-left">
                @error('url')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group my-4">
                <label>Duration (in seconds)</label>
                <input type="number" name="durasi" min="0" required class="form-control my-2" value="{{ $episode->durasi }}" placeholder="375">
            </div>
            <div class="my-4 text-danger text-left">
                @error('durasi')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group my-4">
                <label>Episode Type</label>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_berbayar"
                        value="0" required {{ $episode->status_berbayar == 0 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Free</label>
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_berbayar" value="1" {{ $episode->status_berbayar == 1 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Premium</label>
                </div>
            </div>
            <button type="submit" class="btn btn-dark w-100 mb-4 float-right">
                Save
            </button>
        </form>
    </div>
@endsection


@section('script')
    <script>
        $(".select2").select2();
    </script>
@endsection
