@extends('layouts.app')
@section('content')


<style>

body,html
{
   height: 100%;
}

body {
  font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-image: url("/frontend/image/abstract-geometric-banner-free-vector.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.dataTables_filter {margin-bottom: 50px;}</style>
<div class="content-wrapper bg">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Posts List</h3>
            </div>
            <hr>
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
                    <th>Add Comment</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($posts as $key=> $post)
                 <?php 
                  $total_comments = \DB::table('comments')->where('post_id',$post->id)->count();
                 ?>
                <tr>
                    <td>{{$key+1}}</td>
                    <td><a href="{{url('view_post/'.$post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->date}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$total_comments}}</td>
                    <td>
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