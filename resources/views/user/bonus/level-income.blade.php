<!-- main --><div class="content-body" style="min-height: 732px;">
    <div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="header-text-full">
                <h3 class="ms-2 mb-0 mt-2">Referral Income</h3>
            </div>
        </div>
    </div>
    <div class="main row">
        <div class="col-12">
   
            <!-- table -->
            <div class="table-parent table-responsive mt-4">
            <div class="table-search-bar mb-3">
    <form action="{{ route('user.level-income') }}" method="get">
        <div class="row g-3 align-items-center">
            <!-- Search Input -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <input type="text" name="search" value="{{ @$search }}" class="form-control" placeholder="Enter keyword">
            </div>

            <!-- Remark Input -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <input type="text" name="remark" value="" class="form-control" placeholder="Enter remark">
            </div>

            <!-- Search Button -->
            <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">
                    <i class="flaticon-381-search-2"></i> Search
                </button>
            </div>
        </div>
    </form>
</div>

                <table class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">amount</th>
                            <th scope="col">operation</th>
                            <th scope="col">payment system</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if(is_array($level_income) || is_object($level_income)){ ?>

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

                        <?php }?>

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
</div>
