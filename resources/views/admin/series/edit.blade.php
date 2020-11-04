@extends('layouts.admin')

@section('title')
    Edit Series
@endsection

@section('content')
    <div class="container my-5">
        @include('layouts.alert')
        <h1 class="h1 text-center">Edit Series</h1>
        <div class="row">
            <div class="col-12 text-center">
                <img class="img-responsive w-75" src="{{
                    strpos($dataSeries->url_foto_banner, 'https://') === false ?
                    asset("storage/images/$dataSeries->url_foto_banner") : $dataSeries->url_foto_banner  }}">
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-4">
                <label>Banner Picture </label>
                <input type="file" name="picture" class="form-control my-2">
            </div>
            <div class="form-group my-4">
                <label>Title</label>
                <input type="text" name="judul" required class="form-control my-2" value="{{ $dataSeries->judul }}">
            </div>
            <div class="form-group my-4">
                <label>Category</label>
                <select name="kategori" required class="form-control">
                    @if (isset($dataNavigasiCategory) && count($dataNavigasiCategory) > 0)
                        @foreach ($dataNavigasiCategory as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $dataSeries->category->id ? 'selected' : '' }}>
                                {{ $category->nama }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group my-4">
                <label>Labels</label>
                <select name="labels[]" class="form-control select2" multiple="yes">
                    @if (isset($dataLabels) && count($dataLabels) > 0)
                        @foreach ($dataSeries->labels as $label)
                            <option value="{{ $label->id }}" selected>
                                {{ $label->nama }}
                            </option>
                        @endforeach
                        @foreach ($dataLabels as $label)
                            <option value="{{ $label->id }}">
                                {{ $label->nama }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
            {{-- <div class="form-group my-4">
                <label>Duration (in seconds) :</label>
                <input type="number" name="durasi" required class="form-control my-2">
            </div> --}}
            <div class="form-group my-4">
                <label>Difficulty Level</label>
                <select name="tingkat_kesulitan" class="form-control my-2" required>
                    <option value="1" {{ $dataSeries->tingkat_kesulitan == 1 ? 'selected' : '' }}>Beginner</option>
                    <option value="2" {{ $dataSeries->tingkat_kesulitan == 2 ? 'selected' : '' }}>Intermediate</option>
                    <option value="3" {{ $dataSeries->tingkat_kesulitan == 3 ? 'selected' : '' }}>Advanced</option>
                </select>
            </div>
            <div class="form-group my-4">
                <label>Series Type</label>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_berbayar"
                        value="0" required {{ $dataSeries->status_berbayar == 0 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Free</label>
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_berbayar" value="1" {{ $dataSeries->status_berbayar == 1 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Premium</label>
                </div>
            </div>
            <div class="form-group my-4">
                <label>Completion Status</label>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_complete" value="0" required {{ $dataSeries->status_complete == 0 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Ongoing</label>
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_complete" value="1" required {{ $dataSeries->status_complete == 1 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Completed</label>
                </div>
            </div>
            <div class="form-group my-4">
                <label>Description</label>
                <textarea name="deskripsi" class="form-control my-2" rows="5"
                    style="resize: none">{{ $dataSeries->deskripsi }}</textarea>
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
