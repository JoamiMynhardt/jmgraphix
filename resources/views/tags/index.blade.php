@extends('portfolioMain')

@section('portfolioTitle', 'All Tags')

@section('portfolioContent')  

<h3>Tags</h3>

    <div class="row">
        <div class="col-md-6 col-sm-12">            
            <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Tag Filter</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <th>{{ $tag->id }}</th>
                        <td><a href="{{ route('tags.show', $tag->id) }}" class="btn btn-info btn-block m-1 btn-sm">{{ $tag->name }}</a></td>
                        <td>{{ $tag->tag_filter }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- // end col-md-6 col-sm-12 --}}

        <div class="col-md-6 col-sm-12">
            <form action="{{ route('tags.store') }}" method="POST" data-parsley-validate>
                @csrf

                <div class="row">    
                    <div class="col-sm-12">
                        <div class="card">
                        <div class="card-header text-uppercase">Name</div>
                            <div class="card-body">            
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" class="form-control" required maxlength="255">
                                </div>                
                            </div>
                        </div>
                    </div>
                </div><!--End Row-->

                <div class="row">    
                    <div class="col-sm-12">
                        <div class="card">
                        <div class="card-header text-uppercase">Tag Filter</div>
                            <div class="card-body">            
                                <div class="form-group">
                                    <input type="text" name="tag_filter" placeholder="Tag Filter" class="form-control" required maxlength="255">
                                </div>                
                            </div>
                        </div>
                    </div>
                </div><!--End Row-->

                <button type="submit" class="btn btn-light waves-effect waves-light m-1">Add Tag</button>
            </form>
        </div>

    </div>

@endsection