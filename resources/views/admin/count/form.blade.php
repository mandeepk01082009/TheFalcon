@extends('admin.layout.app')                

@section('styles')  
@endsection

@section('content')    
    <!-- Begin Page Content -->


    <div class="row clearfix mt-5">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-5">
            <div class="card p-3">
                <div class="header">
                    <h2>Counts</h2>
                </div>
                <div class="body">    
                    <form action="{{ route('countstore') }}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        
                        <div class="form-group form-float"> 
                            <div class="form-line"> 
                            <label for="title" class="col-md-4 col-form-label">Number</label>
                            <input type="number" class="form-control" name="numbers">  
                            </div>        
  
                            @if ($errors->has('numbers'))
                                <span class="text-danger">{{ $errors->first('numbers') }}</span>
                            @endif        

                        </div>
                        
                        <div class="form-group form-float"> 
                            <div class="form-line"> 
                            <label for="title" class="col-md-4 col-form-label">Title</label>
                            <input type="text" class="form-control" name="title">  
                            </div>        
  
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif        

                        </div>
                            
                        <button type="submit" class="btn btn-primary mt-2"> Submit </button>        

                    </form>           
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->      
@endsection

@section('scripts')
@endsection
