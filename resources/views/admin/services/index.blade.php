@extends('admin.layout.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid mt-5">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                
            </div>   
            <div class="card-body">
                {{-- <a href="{{ URL::to('img_type/create') }}"><i class="fa fa-plus-square" style="font-size: 40px;float:right;"></i></a> --}}
                <a href="{{ route('addservices') }}"><button class="btn btn-primary" style="float:right;">Add</button></a><br><br>
                <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($image as $key => $images)  
                                    <tr>
                                        <td>{{ $images->sort_col }}</td>
                                        <td>{{ $images->name }}</td>
                                        <td>{{ $images->content }}</td>
                                        <td>  
                                            <center>    
                                            <div
                                                style="background: #2487ce; width:70px; height:70px;">
                                                <span class="et_pb_image_wrap et_pb_only_image_mode_wrap"><img
                                                        loading="lazy" decoding="async" width="60"
                                                        height="60" style="padding: 5px;"
                                                        src="{{ asset('storage/' . $images->image) }}"
                                                        alt=""
                                                        class="et-waypoint et_pb_animation_top et_pb_animation_top_tablet et_pb_animation_top_phone wp-image-5463 et-animated"></span>

                                            </div>  
                                            </center>     
                                                {{-- <img src="{{ asset('storage/' . $images->image) }}" class="img-fluid"
                                                style="max-width:70; height:70px;"> --}}
                                        </td>
                                        {{-- <td><img src="{{ asset('storage/' . $images->image) }}" class="img-fluid"
                                                style="max-width:70; height:70px;"></td> --}}
                                        <td class="text-center">
                                            
                                            <a href="{{ route('editservices', $images->id) }}"
                                                class="btn btn-info btn-sm waves-effect">
                                                <i class="fa fa-edit" style="font-size:20px">
                                                </i>
                                            </a>
                                            <form method="POST" action="{{ route('deleteservices', $images->id) }}">
                                                @csrf 
                                                @method('delete')
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm waves-effect show_confirm"
                                                    data-toggle="tooltip" title='Delete'> <i class="fa fa-trash" style="font-size:20px">
                                                    </i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    @endsection

    @section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $('.show_confirm').click(function(e) {
            if (!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
    @endsection
