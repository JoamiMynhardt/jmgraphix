@extends('portfolioMain')

@section('portfolioTitle', 'Edit Portfolio Entry')

@section('portfolioContent')  

<dl class="dl-horizontal">
    <label>Url</label>
    <p>
        <a href="{{ url('portfolio/' . $portfolio->id) }}" style="text-decoration: underline;">{{ url('portfolio/' . $portfolio->id) }}</a>
    </p>
</dl>
<dl class="dl-horizontal">
    <label>Created At:</label>
    <p>{{ date('j M, Y h:ia',strtotime($portfolio->updated_at)) }}</p>
</dl>
<dl class="dl-horizitonal">
    <label>Last Uptaded:</label>
    <p>{{ date('j M, Y h:ia',strtotime($portfolio->created_at)) }}</p>
</dl>

<form action="{{ route('portfolio.update',$portfolio->id) }}" method="POST" data-parsley-validate enctype="multipart/form-data">

@csrf

@method('PUT')

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Title</div>
                <div class="card-body">            
                    <div class="form-group">
                        <input type="text" name="title" value="{{ $portfolio->title }}" class="form-control input-lg" required maxlength="255">
                    </div>                
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Slug</div>
                <div class="card-body">            
                    <div class="form-group">
                        <input type="text" name="slug" value="{{ $portfolio->slug }}" class="form-control input-lg" required minlength="5" maxlength="255">
                    </div>                
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Video link</div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="video_link" value="{{ $portfolio->video_link }}" placeholder="Paste video link" class="form-control" minlength="5" maxlength="255">
                    </div>                
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Plugins</div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="plugins" value="{{ $portfolio->plugins }}" placeholder="Plugins used" class="form-control" minlength="5" maxlength="255">
                    </div>                
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Software Used</div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="software" value="{{ $portfolio->software }}" placeholder="Software used" class="form-control" minlength="5" maxlength="255">
                    </div>                
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Video Runtime</div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="runtime" value="{{ $portfolio->runtime }}" placeholder="Video Runtime" class="form-control" minlength="5" maxlength="255">
                    </div>                
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header text-uppercase">Select Category</div>
            <div class="card-body">         
                <div class="form-group">
                    <label for="category_id">Select type</label>
                    <select class="form-control single-select" name="category_id" id="type">
                        <option value="{{ $portfolio->category->id }}" <?php if(isset($_GET['category_id']) == '{{ $portfolio->category->id }}') echo 'selected'; ?>>{{ $portfolio->category->name }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                    </select>
                </div>         
            </div>
          </div>
        </div>
    </div>

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">
                <p>Category and tag filter</p>
                <p>
                    @foreach ($portfolio->tags as $tag)
                        <span class="label label-default">{{ $tag->name }}</span>
                    @endforeach
                </p>
            </div>
            <div class="card-body">            
                <div class="form-group">                        
                    <select class="form-control multiple-select" name="tags[]" id="tags" multiple="multiple">                            
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>           
            </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Update Cover image</div>
            <div class="card-body">            
                <div class="form-group">                        
                    <input type="file" name="cover_image" class="form-control" required>
                </div>           
            </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Upload gallery images</div>
            <div class="card-body">            
                <div class="form-group">                        
                    <input type="file" name="filenames[]" class="form-control" required multiple>
                </div>           
            </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Description</div>
                <div class="card-body">            
                    <div class="form-group">
                        <textarea name="description" id="description" rows="10" required>{{ $portfolio->description}}</textarea>
                    </div>                
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <div class="row">
        <div class="col-sm-6">
            <a href="{{ route('portfolio.show', $portfolio->id) }}" class="btn btn-info btn-block">Cancel</a>
        </div>
        <div class="col-sm-6">
            {{-- <a href="{{ route('portfolio.update', $portfolio->id) }}" class="btn btn-success btn-block">Save Changes</a> --}}
            <button type="submit" class="btn btn-success btn-block">Save Changes</button>
        </div>
    </div>

</form>

@endsection

@section('scripts')

<script type="text/javascript">
    $('multiple-select').select2();    
    //$('multiple-select').select().val JSON.parse('{!! json_encode($portfolio->tags()->allRelatedIds()) !!}').trigger("change");
    $('multiple-select').select().val( {!! json_encode($portfolio->tags()->allRelatedIds()) !!} ).trigger("change");
    
</script>
    
@endsection