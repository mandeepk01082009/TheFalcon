@extends('admin.layout.app')                

@section('styles')  
@endsection

@section('content')    
    <!-- Begin Page Content -->


    <div class="row clearfix mt-5">
        <div class="col-lg-9">
            <div class="card p-3 mt-5">        
                <div class="header">             
                    <h2>Services</h2>            
                </div>
                <div class="body">    
                    <form action="{{ route('createservices') }}" method="POST" enctype="multipart/form-data">
                        @csrf    
                        
                        <div class="form-group form-float"> 
                            <div class="form-line"> 
                            <label for="name" class="col-md-4 col-form-label">Name</label>
                            <input type="text" class="form-control" name="name">    
                            </div>        
  
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif        

                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="content" class="col-md-4 col-form-label">Content</label>
                                <textarea id="content" type="text" class="form-control" rows="4" name="content" autocomplete="content"
                                    autofocus>{{ old('content') }} </textarea>    
                            </div>

                            @if ($errors->has('content'))        
                                <span class="text-danger">{{ $errors->first('content') }}</span>
                            @endif

                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="sort_col" class="col-md-4 col-form-label">Sort_col</label>
                                <input type="number" class="form-control" name="sort_col">
                            </div>
    
                           
                            @if ($errors->has('sort_col'))     
                                <span class="text-danger">{{ $errors->first('sort_col') }}</span>      
                            @endif          
    
                        </div>    

                        <div class="form-group form-float"> 
                            <div class="form-line"> 
                            <label for="image" class="col-md-4 col-form-label">Post Image</label>
                            <input type="file" class="form-control" name="image">    
                            </div>        
  
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
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
