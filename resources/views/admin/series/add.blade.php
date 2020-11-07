@extends('layouts.admin')

@section('title')
    Add Series
@endsection

@section('content')
    <div class="container my-5">
        @include('layouts.alert')
        <h1 class="h1 text-center">Add Series</h1>
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-4">
                <label>Banner Picture </label>
                <input type="file" name="picture" required class="form-control my-2">
            </div>
            <div class="my-4 text-danger text-left">
                @error('picture')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group my-4">
                <label>Title</label>
                <input type="text" name="judul" required class="form-control my-2" value="{{ old('judul') }}" placeholder="Learn Laravel 8">
            </div>
            <div class="my-4 text-danger text-left">
                @error('judul')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group my-4">
                <label>Category</label>
                <select name="kategori" required class="form-control">
                    @if (isset($dataNavigasiCategory) && count($dataNavigasiCategory) > 0)
                        @foreach ($dataNavigasiCategory as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->nama }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group my-4">
                <label>Labels</label>
                <select name="labels[]" class="form-control select2" multiple="yes" style="width: 100%">
                    @if (isset($dataLabels) && count($dataLabels) > 0)
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
                    <option value="1" {{ old('tingkat_kesulitan') == 1 ? 'selected' : '' }}>Beginner</option>
                    <option value="2" {{ old('tingkat_kesulitan') == 2 ? 'selected' : '' }}>Intermediate</option>
                    <option value="3" {{ old('tingkat_kesulitan') == 3 ? 'selected' : '' }}>Advanced</option>
                </select>
            </div>
            <div class="form-group my-4">
                <label>Series Type</label>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_berbayar"
                        value="0" required {{ old('status_berbayar') == 0 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Free</label>
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_berbayar" value="1" {{ old('status_berbayar') == 1 ? 'checked' : '' }}>
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
                        <input type="radio" name="status_complete" value="0" required {{ old('status_complete') == 0 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Ongoing</label>
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_complete" value="1" required {{ old('status_complete') == 1 ? 'checked' : '' }}>
                        </div>
                    </div>
                    <label class="form-control">Completed</label>
                </div>
            </div>
            <div class="form-group my-4">
                <label>Description</label>
                <textarea name="deskripsi" class="form-control my-2" rows="5"
                    style="resize: none">{{ old('deskripsi') }}</textarea>
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
