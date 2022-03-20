@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Post
                    <a href="{{url('posts')}}" class="btn btn-danger btn-sm float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('store_post')}}" method="post" data-parsley-validate>
                        @csrf
                        <div class="form-group mb-3">
                            <label>Title<span style="color:red;" >*</span></label>
                            <input type="text" name="title" class="form-control" required="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Date<span style="color:red;" >*</span></label>
                            <input type="date" name="date" class="form-control" required="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Author<span style="color:red;" >*</span></label>
                            <input type="text" name="author" class="form-control" required="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Description<span style="color:red;" >*</span></label>
                            <textarea name="description" class="form-control" required="">
                                
                            </textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Tags<span style="color:red;" >*</span></label>
                            <input type="text" name="tags" class="form-control" required="">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection