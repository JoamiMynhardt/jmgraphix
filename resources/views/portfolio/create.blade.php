@extends('portfolioMain')

@section('portfolioTitle', 'Portolfio Create')

@section('portfolioContent')  

<h3>Create a new entry</h3>

    <form action="{{ route('portfolio.store') }}" method="POST" data-parsley-validate enctype="multipart/form-data">
        @csrf
        <div class="row">    
            <div class="col-sm-12">
                <div class="card">
                <div class="card-header text-uppercase">Title</div>
                    <div class="card-body">            
                        <div class="form-group">
                            <input type="text" name="title" placeholder="Title" class="form-control" required maxlength="255">
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
                            <input type="text" name="slug" placeholder="Enter Slug - a unique Url. No spaces only dashes" class="form-control" required minlength="5" maxlength="255">
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
                            <input type="text" name="video_link" placeholder="Paste video link" class="form-control" minlength="5" maxlength="255">
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
                            <input type="text" name="plugins" placeholder="Plugins used" class="form-control" minlength="5" maxlength="255">
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
                            <input type="text" name="software" placeholder="Software used" class="form-control" minlength="5" maxlength="255">
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
                            <input type="text" name="video_link" placeholder="Video Runtime" class="form-control" minlength="5" maxlength="255">
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
                        <select class="form-control single-select" name="category_id" id="category">
                            <option value="slect">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                <div class="card-header text-uppercase">Category and tag filter</div>
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
                <div class="card-header text-uppercase">Upload Cover image</div>
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
                            <textarea name="description" id="description" rows="10" required placeholder="Enter Description"></textarea>
                        </div>                
                    </div>
                </div>
            </div>
        </div><!--End Row-->       
    
        <button type="submit" class="btn btn-light waves-effect waves-light m-1">Add Entry</button>
    </form>

    {{-- <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Multiple Form Uploads</div>
            <div class="card-body">                  
                <div class="fallback">                  
                    <form method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data" class="dropzone dz-clickable" id="dropzone">
                        @csrf
                        <div class="dz-message">
                            <span>Drop files here to upload</span>
                        </div>
                    </form>                    
                </div>                  
            </div>
          </div>
        </div>
      </div><!--End Row--> --}}

      
      {{-- <div class="row">    
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header text-uppercase">Gallery</div>
            <div class="card-body">            
                <div class="form-group">                        
                    <input type="file" name="gallery[]" class="form-control" required multiple>
                    <button type="submit" class="btn btn-light waves-effect waves-light m-1">Add Gallery Files</button>
                </div>           
            </div>
            </div>
        </div>
    </div><!--End Row--> --}}








{{-- <input type="submit" class="btn btn-light waves-effect waves-light m-1" value="Create Portfolio Entry"> --}}
{{-- {{ Form::submit('Create Portfolio Entry', array('class' => 'btn btn-light waves-effect waves-light m-1', 'style' => 'margin-top:1px;')) }} --}}


@endsection

@section('scripts')

<script type="text/javascript">
    $('multiple-select').select2();
</script>

<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
</script>

{{-- <script type="text/javascript">
    $("div#dropzone").dropzone({ url: "/images" });
</script> --}}

{{-- <script type="text/javascript">
    <script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file) 
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                    type: 'POST',
                    url: '{{ url("image/delete") }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ? 
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
       
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
</script> --}}

    
@endsection


   
   
 





{{-- 
Installation of Laravel form helpers installer 
In the termanil, run this command: composer require laravelcollective/html 
In app.php under providers, add this: Collective\Html\HtmlServiceProvider::class, 
In app.php under aliases, add this: 'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class, 
--}}