@extends('portfolioMain')

@section('portfolioTitle', 'Portolfio Entries')

@section('portfolioContent')  

  <div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">All Portfolio Entries</h4>        
    </div>
    <div class="col-sm-3">
      <div class="btn-group float-sm-right">
        <a href="{{ route('portfolio.create') }}" class="btn btn-light waves-effect waves-light m-1">New Entry</a>    
      </div>
    </div>
  </div>
    
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
      
        <div class="card-header"><i class="fa fa-table"></i> Manage All Portfolio Entries Here</div>
          <div class="card-body">
            <div class="table-responsive">

            <table id="default-datatable" class="table table-bordered">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Created at</th>
                      <th>Show</th>
                      <th>Edit</th>
                      <th>Destroy</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($portfolioEntries as $portfolioEntry)

                  <tr>
                    <th>{{ $portfolioEntry->id }}</th>
                    <td>{{ $portfolioEntry->title }}</td>                    
                    <td>{{ substr(strip_tags($portfolioEntry->description), 0, 50) }} {{ strlen(strip_tags($portfolioEntry->description)) > 50 ? "[...]" : "" }}</td>
                    <td>{{ date('j M, Y', strtotime($portfolioEntry->created_at)) }}</td>
                    <td><a href="{{ route('portfolio.show', $portfolioEntry->id) }}" class="btn btn-info btn-block">Show</a></td>
                    <td><a href="{{ route('portfolio.edit', $portfolioEntry->id) }}" class="btn btn-primary btn-block">Edit</a></td>
                    <td>
                      <form action="{{ route('portfolio.destroy', $portfolioEntry->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                      </form>
                    </td>
                  </tr>

                @endforeach                                  
              </tbody>                 
              <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created at</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Destroy</th>
                  </tr>
              </tfoot>
          </table>

          {{-- Pagination --}}
          <div class="row">

            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="default-datatable_info" role="status" aria-live="polite">
                Showing Entries:
                {{ $portfolioEntries->count() }}
                of
                {{ $portfolioEntries->total() }}
              </div>
            </div>

            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="default-datatable_paginate">
                <ul class="pagination">                                 
                  <li class="paginate_button">{!! $portfolioEntries->links() !!}</li>
                  {{-- <li class="paginate_button"> {{ $portfolioEntries->appends(['sort' => 'votes'])->links() }}</li> --}}
                </ul>
              </div>
            </div>

          </div>
          {{-- Pagination end --}}

          </div>
        </div>

      </div>
    </div>
  </div><!-- End Row-->
@endsection