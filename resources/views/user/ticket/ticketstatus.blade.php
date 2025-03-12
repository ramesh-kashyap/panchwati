@include('layouts.upnl.header')
<div class="content-body">
    <div class="container-fluid">



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ticket Status</h4>
                        <div class="header-right">
                            <div class="input-group search-area ms-auto d-inline-flex">
                                <input type="text" class="form-control"id="search-input" placeholder="Search here">
                                <div class="input-group-append">
                                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                    <th>No. </th>
                                        <th>User Id</th>
                                        
                                            <th>Category</th>
                                        
                                        <th>Massege</th>
                                        <th>Status</th>
                                        <th>Date</th>

                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @foreach ($tickets as $key => $withdraw)


                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $withdraw->user_id_fk }}</td>
                                        <td> {{ $withdraw->category }}</td>
                                        <td> {{ $withdraw->msg }}</td>
                                        <td>{{ $withdraw->status}}</td>
                                        <td>{{ $withdraw->created_at}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $tickets->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.upnl.footer')
