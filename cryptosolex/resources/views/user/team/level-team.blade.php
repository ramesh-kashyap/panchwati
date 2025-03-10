<div class="container-fluid main-content px-2 px-lg-4">
    <!-- Tables -->
    <div class="row my-2 g-3 g-lg-4 pb-3  ">
        <div class="col-12">
            <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
                <div class="activity">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <h5 class="mb-0"><label for=""></label>Level Team</h5>
                        </div>

                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="price" role="tabpanel" tabindex="0">
                                <div class="recent-contact pb-2 pt-3">
                                    
                                       <form action="{{ route('user.level-team') }}" method="GET" style="    width: 100%;">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" style="" Placeholder="Search Users"
                                                        name="search" class="form-control" value="{{ @$search }}">
                                                </div>
                                            </div>
                
                
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <select name="limit" style="" class="form-control">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group mb-3">
                                                    <input type="submit" style="font-size: 12px; padding-left: 18px;" name="submit"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Search" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group mb-3">
                                                    <a href="{{ route('user.level-team') }}" style="font-size: 12px; padding-left: 18px;"
                                                        name="reset"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Reset">Reset</a>
                                                </div>
                                            </div>
                
                
                                        </div>
                                    </form>
                                    
                                    <table id="example" class="display">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>User ID</th>
                                                <th>Email ID</th>
                                                {{-- <th>Mobile No</th> --}}
                                                <th>Level</th>
                                                <th>Joining Date</th>
                                                <th>Sponsor ID</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                                            <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                                            @foreach ($direct_team as $value)
                                                <tr>
                                                    <td><?= $cnt += 1 ?></td>

                                                    <td>{{ $value->name }}</td>
                                                    <td>{{ $value->username }}</td>
                                                    <td>{{ $value->email }}</td>
                                                    {{-- <td>{{ $value->phone }}</td> --}}
                                                    <td>{{ $value->level - Auth::user()->level }}</td>
                                                    <td>{{ date('D, d M Y', strtotime($value->created_at)) }} </td>
                                                    <td>{{ $value->sponsor_detail->username }}</td>
                                                    <td><span
                                                            class="{{ $value->active_status == 'Active' ? 'green' : 'red' }}-tag">{{ $value->active_status }}</span>
                                                    </td>

                                                </tr>
                                            @endforeach

                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <br>

                                    {{ $direct_team->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
