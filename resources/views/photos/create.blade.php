@extends('portfolioMain')

@section('portfolioTitle', 'Portolfio Create')

@section('portfolioContent')  

<h3>Add Photos</h3>
<form action="{{ route('photos.store') }}" method="POST" data-parsley-validate enctype="multipart/form-data">
    
    @csrf   

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Add Photos</div>
            <div class="card-body">            
                <div class="form-group">                        
                    <input type="text" name="name" class="form-control">
                    {{-- <button type="submit" class="btn btn-light waves-effect waves-light m-1">Add Gallery Files</button> --}}
                </div>           
            </div>
            </div>
        </div>
    </div><!--End Row-->

    <input type="hidden" name="portfolio_entires_id" value="{{$portfolio->id}}">

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Add Photos</div>
            <div class="card-body">            
                <div class="form-group">                        
                    <input type="file" name="photo[]" class="form-control" accept=".png, .jpg, .jpeg" required multiple>
                    {{-- <button type="submit" class="btn btn-light waves-effect waves-light m-1">Add Gallery Files</button> --}}
                </div>           
            </div>
            </div>
        </div>
    </div><!--End Row-->

    <button type="submit" class="btn btn-light waves-effect waves-light m-1">Add Entry</button>

</form>
@endsection