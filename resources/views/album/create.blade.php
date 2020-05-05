@extends('portfolioMain')

@section('portfolioTitle', 'Portolfio Create')

@section('portfolioContent')  

<h3>Create album</h3>
<form action="{{ route('albums.store') }}" method="POST" data-parsley-validate enctype="multipart/form-data">
    @csrf

    

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
</form>
@endsection