


<div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="ms-2 mb-0 mt-2">Direct Income</h3>
                        <div class="header-right">
                            <div class="input-group search-area ms-auto d-inline-flex">
                                <input type="text" class="form-control" placeholder="Search here">
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
                                        <th scope="col">Date</th>
                                        <th scope="col">amount</th>
                                        <th scope="col">Remark</th>
                                        <th scope="col">payment system</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if (is_array($level_income) || is_object($level_income)) { ?>

                                        <?php date_default_timezone_set('UTC');
                                        $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                        @foreach ($level_income as $value)
                                        <tr>

                                            <td data-label="Date">{{ date('D, d M Y H:i:s', strtotime($value->created_at)) }}</td>
                                            <td data-label="Amount">
                                                <span class="fontBold text-success">+{{ $value->comm }}
                                                    {{ generalDetail()->cur_text }}</span>
                                            </td>
                                            <td data-label="operation"> {{ $value->remarks }} </td>
                                            <td data-label="payment system">USDT</td>
                                        </tr>
                                        @endforeach

                                    <?php } ?>

                                </tbody>
                            </table>
                            {{ $level_income->withQueryString()->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>