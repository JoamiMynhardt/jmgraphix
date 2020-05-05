@extends('portfolioMain')

@section('portfolioTitle', " $tag->name Tag")

@section('portfolioContent')

<div class="row">
    <div class="col-md-8 col-sm-12">
        <h3> {{ $tag->name }} <small> Tag {{ $tag->portfolio()->count() }}</small> </h3>
    </div>
    <div class="col-md-2 col-sm-6">
        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-light waves-effect waves-light m-1" style="width: 100%;">Edit</a>
    </div>
    <div class="col-md-2 col-sm-6">
        <form action="{{ route('tags.destroy',$tag->id) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger btn-block m-1">Delete</button>
        </form>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-sm-12">                   
        <table id="default-datatable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Tags</th>
                    <th>View Project</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tag->portfolio as $portfolio)
                <tr>
                    <th>{{ $portfolio->id }}</th>
                    <td>{{ $portfolio->title }}</td>
                    <td>@foreach ($portfolio->tags as $tag)
                            <span class="label label-default">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td><a href="{{ route('portfolio.show', $portfolio->id) }}" class="btn btn-info btn-block m-1 btn-sm">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- // col-sm-12 --}}
</div>
{{-- row --}}

@endsection