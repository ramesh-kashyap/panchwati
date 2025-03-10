
     
     <div class="contentLk">



      <h2 class="titleLk">Deposit History</h2>
      <div class="historyPage">
          <form id="filter-form" class="filterBl" action="{{ route('user.roi-bonus') }}" method="GET">
             
              <span class="iconBl icon-filtration"></span>
              <div class="col">
                  <div class="inputLine">
                      <label for="">date from:</label>
                      <input type="text" name="from" id="from" class="setDate" value="">
                      <span class="iconArrow"></span>
                  </div>
              </div>
              <div class="col">
                  <div class="inputLine">
                      <label for="">to:</label>
                      <input type="text" name="to" id="to" class="setDate" value="">
                      <span class="iconArrow"></span>
                  </div>
              </div>
              <div class="col">
                  <div class="inputLine">
                      <?php 
                      $segments=request()->segments(); 
                      $page= end($segments);?>
  
                      <label for="">type:</label>
                      <select name="type" class="selectricBl" onchange="location = this.value;">
                          <option value="">--SELECT--</option>
                          <option <?php ($page=="roi-bonus")?'selected':'';?> value="{{route('user.roi-bonus')}}">Staking Bonus</option>
                         
                          <option <?php ($page=="level-income")?'selected':'';?> value="{{route('user.level-income')}}" >Direct Bonus</option>
                          <option <?php ($page=="matching-bonus")?'selected':'';?> value="{{route('user.matching-bonus')}}">Matching Bonus</option>
                          <option  <?php ($page=="reward-bonus")?'selected':'';?> value="{{route('user.reward-bonus')}}">Royalty Bonus</option>
                        
                          <option  <?php ($page=="DepositHistory")?'selected':'';?> value="{{route('user.DepositHistory')}}" >Deposit </option>
                   
                          <option  <?php ($page=="WithdrawHistory")?'selected':'';?> value="{{route('user.Withdraw-History')}}" >Withdrawal</option>
                      </select>
                  </div>
              </div>
              
              <button type="submit" class="btn btnBlue">Filter</button>
          </form>
          <div class="tablePartners">
              <div class="thead">
                  <span class="tit">SR</span>
             
                  <span class="tit">Amount</span>
                  <span class="tit">Date</span>
                  <span class="tit"> Transaction ID</span>
                 
                  <span class="tit">Status</span>
              </div>
              <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

                <?php $cnt = 0; ?>
                @foreach($deposit_list as $value)
              <div id="el830">
                  <div class="slideBlock branch1">
                      <div class="slideTitle" onclick="return clickRef(2, 1074);" id="el1074" data-level="1">
                          <div class="line">
                              <span class="name"> <span class="mobileTiTPart">SR</span> <?= $cnt += 1 ?></span>
  
                              <span class="txt"> <span class="mobileTiTPart">Amount</span> {{currency()}} {{ $value->amount }}</span>
                              <span class="txt"> <span class="mobileTiTPart">Date</span> {{ date('D, d M Y', strtotime($value->created_at)) }}</span>
                              <span class="txt"> <span class="mobileTiTPart">Transaction ID</span>  {{ substr($value->transaction_id,0,8)."*****".substr($value->transaction_id,9,8)  }}</span>
        
                              <span class="txt"> <span class="mobileTiTPart">Status</span> <span
                              class="badge badge-{{ ($value->status=='Active')?'success':'danger' }}">{{ $value->status }}</span></span>
                          </div>
                      </div>
                      <div class="slideContent"></div>
                  </div>
              </div>
  
              @endforeach
  
              <?php }?>
  
              
  
          </div>
          
      </div>
      <div class="pagination">
  <br>
          {{ $deposit_list->withQueryString()->links() }}
      </div>
  
  </div>
  
  
  
  
  </div>

  
