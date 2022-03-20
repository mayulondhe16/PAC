@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" readonly='true' value='{{$posts->title}}'>
                        </div>
                        <div class="form-group mb-3">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" readonly='true' value='{{$posts->date}}'>
                        </div>
                        <div class="form-group mb-3">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" readonly='true' value='{{$posts->author}}'>
                        </div>
                        <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" readonly='true' >
                                {{$posts->description}}
                            </textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Tags</label>
                            <input type="text" name="tags" class="form-control" readonly="true"  value='{{$posts->tags}}' >
                        </div>
                        <div class="form-group mb-3">
                            <a href="{{url('/')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection