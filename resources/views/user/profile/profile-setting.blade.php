
<div class="content-body">
    <div class="container-fluid">
        
        <style>
            .text-info {
    --bs-text-opacity: 1;
    color: rgb(240 240 240) !important;
}
        </style>
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Profile</h4>
                </div>
                <div class="card-body">
                    <div>
                        <p>Referal ID-<span class="text-info"></span></p>
                        <p>Registration Date -<span class="text-info">{{ date('m/d/Y h:i:s a',strtotime($profile_data->created_at)) }}</span></p>
                       
                        
                        <form action="" method="post">
                              {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label">User Name-</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name"  >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address-</label>
                                <input type="text" class="form-control" placeholder="Enter Email Address" name="email"  readonly>

                            </div>
                           
                            <button type="submit" class="btn btn-primary mt-3" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
