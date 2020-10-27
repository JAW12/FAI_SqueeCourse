@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <h1 class="display-4 text-center">Add Series</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group my-4">
                <label>Banner Picture </label>
                <input type="file" name="picture" required class="form-control my-2">
            </div>
            <div class="form-group my-4">
                <label>Title</label>
                <input type="text" name="judul" class="form-control my-2">
            </div>
            <div class="form-group my-4">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    @if (isset($dataCategory) && count($dataCategory) > 0)
                        @foreach ($dataCategory as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->nama }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="form-group my-4">
                <label>Duration (in seconds) :</label>
                <input type="text" name="durasi" class="form-control my-2">
            </div>
            <div class="form-group my-4">
                <label>Difficulty Level</label>
                <select name="tingkat_kesulitan" class="form-control my-2">
                    <option value="1">Beginner</option>
                    <option value="2">Intermediate</option>
                    <option value="3">Advanced</option>
                </select>
            </div>
            <div class="form-group my-4">
                <label>Series Type</label>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_berbayar" value="0">
                        </div>
                    </div>
                    <label class="form-control">Free</label>
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_berbayar" value="1">
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
                        <input type="radio" name="status_complete" value="0">
                        </div>
                    </div>
                    <label class="form-control">Ongoing</label>
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name="status_complete" value="1">
                        </div>
                    </div>
                    <label class="form-control">Completed</label>
                </div>
            </div>
            <div class="form-group my-4">
                <label>Description</label>
                <textarea name="deskripsi" class="form-control my-2" rows="5"
                    value="{{ old("deskripsi") }}" style="resize: none"></textarea>
            </div>
            <button type="submit" class="btn btn-dark w-100 mb-4 float-right">
                Save
            </button>
        </form>
    </div>
@endsection
