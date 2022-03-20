@extends('layouts.app')
@section('content')
<style>
p {
  color: white;
 
  margin-left: 70px;
  margin-top: 20px;
}
span{
  border: 1px solid #4CAF50;
     background-color: #2F4F4F;
}



</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                     <form action="{{url('store_comment/'.$posts->id)}}" method="post" data-parsley-validate>
                    @csrf
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
                            <label>Previous Comments</label><br>
                            @if(isset($prev_comments))
                                @foreach($prev_comments as $key=> $comm)
                                <p><span>{{$key+1}}. {{$comm->comment}}</span></p>
                                @endforeach
                            @endif
                        </div>

                         <div class="form-group mb-3">
                            <label>Add a comment</label>
                            <textarea name="comment" class="form-control"  >
                                
                            </textarea>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="{{url('posts')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection