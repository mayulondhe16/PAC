@extends('layouts.app')
@section('content')


<style>
body {
  font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #fff;
}

.dataTables_filter {margin-bottom: 50px;}</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{url('/')}}/add_post" class="btn btn-primary btn-sm" style="float: right;">Add Post</a>
            </div>
            <br><br> <br><br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Post title</th>
                    <th>Date</th>
                    <th>Author Name</th>
                    <th>Total Comments</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($posts as $key=>$post)
                 <?php 
                  $total_comments = \DB::table('comments')->where('post_id',$post->id)->count();
                 ?>
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->date}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$total_comments}}</td>
                    <td>
                        @if($user->id==$post->created_by)
                        <a href="{{url('edit_post/'.$post->id)}}" title="Edit" class="btn btn-success btn-sm">Edit</a>&nbsp;&nbsp;
                        <a href="{{url('delete_post/'.$post->id)}}" title="Delete" class="btn btn-danger btn-sm">Delete</a>
                        @endif
                        <a href="{{url('/')}}/add_comment/{{$post->id}}" class="btn btn-primary btn-sm" title="Comment">
                         Add Comment
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection