@extends('portfolioMain')

@section('portfolioTitle', 'Edit Tag')

@section('portfolioContent')

<div class="row">
    <div class="col-sm-12">
        <h3> {{ $tag->name }} Tag</h3>
    </div>
</div>


<form action="{{ route('tags.update', $tag->id) }}" method="POST" data-parsley-validate>

    @csrf

    @method('PUT')

    <div class="row">    
        <div class="col-md-6 col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Name</div>
                <div class="card-body">            
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" class="form-control" required maxlength="255" value="{{ $tag->name }}">
                    </div>                
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Tag Filter</div>
                <div class="card-body">            
                    <div class="form-group">
                        <input type="text" name="tag_filter" placeholder="Tag Filter" class="form-control" required maxlength="255" value="{{ $tag->tag_filter }}">
                    </div>                
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-light waves-effect waves-light m-1">Save changes</button>
        </div>
    </div>
</form>


@endsection