@extends('portfolioMain')

@section('portfolioTitle', 'Portolfio Show')

@section('portfolioContent')  


<div class="row">

    <div class="col-md-8">
        <h1>{{ $portfolio->title }}</h1>

       
        <a href="{{ route('photos.show', $portfolio->id) }}">
            <img src="{{ url('cover_images/' . $portfolio->cover_image) }}" alt="" style="width: 100%; height: auto; max-width: 400px;">
        </a>
     
        
        {{-- Curly bang-bang removes HTML tags --}}
        <p>{!! $portfolio->description !!}</p>
        
        <p>Video Link: 
            <a href="https://www.youtube.com/embed/{{ $portfolio->video_link }}" style="text-decoration: underline;">https://www.youtube.com/embed/{{ $portfolio->video_link }}</a>
        </p>
        <div class="row">
            <div class="col-sm-12 col-md-10">
                <div class="video-responsive">
                    <iframe class="video" width="560" height="475" src="https://www.youtube.com/embed/{{ $portfolio->video_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <hr>
        {{-- Object of the Portfolio Model ->  Category Method in the model -> Name of the column --}}
        <p>Category: {{ $portfolio->category->name }}</p>
        <p>Tags:
            @foreach ($portfolio->tags as $tag)
                <span class="label label-default">{{ $tag->name }}</span>
            @endforeach
        </p>

        <p>PLugins: {{ $portfolio->plugins }}</p>

        <p>Software: {{ $portfolio->software }}</p>

        <p>Runtime: {{ $portfolio->runtime }}</p>
        <div class="gallery">
            Gallery:
            @foreach ($portfolio->photo as $file)
                @foreach (json_decode($file->filenames) as $name)
                     <img width="150px" src="{{ url('album_images/' . $name) }}"  class="label label-default"  />
                @endforeach  
            @endforeach           
        </div>       
    </div>

    <div class="col-md-4">
        <div class="well">

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
            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-primary btn-block m-1">Edit</a>
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('portfolio.destroy',$portfolio->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-block m-1">Delete</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('portfolio.index') }}" class="btn btn-info btn-block m-1">View All</a>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('portfolio.create') }}" class="btn btn-light waves-effect waves-light m-1" style="width: 100%;">New Entry</a>
                </div>
            </div>
            
        </div>
    </div>

</div>
{{-- row end --}}



@endsection