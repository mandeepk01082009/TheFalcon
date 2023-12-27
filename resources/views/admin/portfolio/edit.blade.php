@extends('admin.layout.app')

@section('styles')
@endsection

@section('content')
    <!-- Begin Page Content -->


    <div class="row clearfix">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 mx-5">
            <div class="card p-3">
                <div class="header">
                    <h2>Edit portfolio</h2>
                </div>
                <div class="body">
                    <form action="{{ route('update_portfolio', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')                 


                        <input type="hidden" name="id" id="id" value="{{ $portfolio->id }}">                                       
                     
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="sort_col" class="col-md-4 col-form-label">Sort_col</label>
                                <input type="text" value="{{ $portfolio->sort_col }}" class="form-control" name="sort_col">
                            </div>

                           
                            @if ($errors->has('sort_col'))     
                                <span class="text-danger">{{ $errors->first('sort_col') }}</span>      
                            @endif          

                        </div> 
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="name" class="col-md-4 col-form-label">Name</label>
                                <select class="form-control" id="type" name="name">
                                    <option value="">Select name</option>
                                    <option value="swimming_pool" {{ $portfolio->name == 'swimming_pool' ? 'selected' : '' }}>Swimming Pool</option>
                                    <option value="heat_pump" {{ $portfolio->name == 'heat_pump' ? 'selected' : '' }}>Heat Pump</option>
                                    <option value="sauna_room" {{ $portfolio->name == 'sauna_room' ? 'selected' : '' }}>Sauna Room</option>
                                    <option value="steam_room" {{ $portfolio->name == 'steam_room' ? 'selected' : '' }}>Steam Room</option>
                                    <option value="foutain" {{ $portfolio->name == 'foutain' ? 'selected' : '' }}>Foutain</option>
                                    <option value="pressure_pump" {{ $portfolio->name == 'pressurepump' ? 'selected' : '' }}>Pressure Pump</option>

                                </select>
                            </div>

                            @if ($errors->has('name'))     
                            <span class="text-danger">{{ $errors->first('name') }}</span>      
                        @endif 
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                                <input type="file" value="{{ $portfolio->image }}" class="form-control" name="image">
                            </div>

                                <img src="{{ asset('storage/' . $portfolio->image) }}" class="img-fluid"
                                    style="max-width:70; height:70px;">
                           
                            {{-- @if ($errors->has('image'))     
                                <span class="text-danger">{{ $errors->first('image') }}</span>      
                            @endif           --}}

                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts')            
@endsection
