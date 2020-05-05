@extends('portfolioMain')

@section('portfolioTitle', 'All Categories')

@section('portfolioContent')  

<h3>Categories</h3>

    <div class="row">
        <div class="col-md-6 col-sm-12">            
            <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category Filter</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->category_filter }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- // end col-md-6 col-sm-12 --}}

        <div class="col-md-6 col-sm-12">
            <form action="{{ route('categories.store') }}" method="POST" data-parsley-validate>
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
                        <div class="card-header text-uppercase">Category Filter</div>
                            <div class="card-body">            
                                <div class="form-group">
                                    <input type="text" name="category_filter" placeholder="Category Filter" class="form-control" required maxlength="255">
                                </div>                
                            </div>
                        </div>
                    </div>
                </div><!--End Row-->

                <button type="submit" class="btn btn-light waves-effect waves-light m-1">Add Category</button>
            </form>
        </div>

    </div>

@endsection