<div class="contentLk">


    <h2 class="titleLk">Dashboard</h2>
    <div class="desktopCab">
        <div class="left">
            <span class="title">Personal statistics</span>
            
            
           
            <div class="list">
                <div class="item">
                    <span class="desktopCabName">Deposits :  {{ currency() }}
                        {{ number_format(Auth::user()->investment->sum('amount'), 2) }}</span>
                    <div class="desktopCabList">
                        <ul>
                        </ul>
                    </div>
                </div>
                <div class="item">
                    <span class="desktopCabName">Balance : {{ currency() }}
                        {{ number_format((Auth::user()->available_balance()>0)?Auth::user()->available_balance():0, 2) }} </span>
                    
                </div>
                <div class="item">
                    <span class="desktopCabName">Staking Bonus : {{ currency() }}
                        {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }}       &nbsp; &nbsp; &nbsp;<a href="{{route('user.tradeOn')}}?remarks=Staking Bonus"  style="padding: 6px;" class="btn btnBlue" >Swap {{ number_format(Auth::user()->dailyIncentive->where('is_swaped',0)->sum('comm'), 2) }}</a> </span>
                        
                    
                 
                </div>
                <div class="item">
                    <span class="desktopCabName">Direct Bonus : {{ currency() }}
                        {{ number_format(Auth::user()->sponsorship_bonus->sum('comm'), 2) }}  &nbsp; &nbsp; &nbsp;<a href="{{route('user.tradeOn')}}?remarks=Direct Bonus"  style="padding: 6px;" class="btn btnBlue">Swap {{ number_format(Auth::user()->sponsorship_bonus->where('is_swaped',0)->where('credit_type',0)->sum('comm'), 2) }}</a>  </span>
                   
                </div>
                <div class="item">
                    <span class="desktopCabName">Matching Bonus : {{ currency() }}
                        {{ number_format(Auth::user()->matchingBonus->sum('comm'), 2) }}  &nbsp; &nbsp; &nbsp;<a href="{{route('user.tradeOn')}}?remarks=Matching Bonus"  style="padding: 6px;" class="btn btnBlue">Swap {{ number_format(Auth::user()->matchingBonus->where('is_swaped',0)->where('credit_type',0)->sum('comm'), 2) }}</a>  </span>
                   
                </div>
                <div class="item">
                    <span class="desktopCabName">Royalty Bonus : {{ currency() }}
                        {{ number_format(Auth::user()->reward_bonus->sum('comm'), 2) }}   &nbsp; &nbsp; &nbsp;<a href="{{route('user.tradeOn')}}?remarks=Royalty Bonus"  style="padding: 6px;" class="btn btnBlue">Swap {{ number_format(Auth::user()->reward_bonus->where('is_swaped',0)->where('credit_type',0)->sum('comm'), 2) }}</a>  </span>
                    
                </div>
                 <div class="item">
                    <span class="desktopCabName">Left Team :
                        {{ $left_team }}</span>
                   
                </div>
                 <div class="item">
                    <span class="desktopCabName">Left Business : {{ currency() }}
                        {{ number_format($left_business, 2) }}</span>
                    
                </div>
                 <div class="item">
                    <span class="desktopCabName">Right Team : 
                        {{ $right_team }}</span>
                   
                </div>
                <div class="item">
                    <span class="desktopCabName">Right Business : {{ currency() }}
                        {{ number_format($right_business, 2) }}</span>
                    
                </div> 
                
                <div class="item">
                    <span class="desktopCabName">Remaining Income : {{ currency() }} {{ number_format(($remaining_amount>0)?$remaining_amount:0, 2) }}</span>
                    
                </div>
                
                
            </div>
        </div>
        <style>
            @media only screen and (min-width: 600px) {
                .slideBlock .line .name {
                width: 44% !important;
            }
            .tablePartners .thead .tit:nth-child(1) {
            width: 44% !important;
            padding-left: 138px;
            text-align: left;
        }
            }

            

        </style>
        
        <div class="right">
            <div class="tabsDep tabs">
                <ul class="listLinks">
                    <li><a href="#tabs-1">Recent Transactions</a></li>
                
                </ul>
                <div id="tabs-1" class="tabsBody">
                    <div class="listDeposit">
                        <div class="emptyDeposit">
                            <div class="tablePartners">
                                <div class="thead">
                                    <span class="tit">Date </span>
                                   
                                    <span class="tit">Amount</span>
                              
                                    <span class="tit">Description</span>
                                </div>
                                <?php if(is_array($transaction_data) || is_object($transaction_data)){ ?>
                    
                                 
                                    @foreach ($transaction_data as $value)
                                <div id="el830">
                                    <div class="slideBlock branch1">
                                        <div class="slideTitle" onclick="return clickRef(2, 1074);" id="el1074" data-level="1">
                                            <div class="line">
                                                <span class="name"> <span class="mobileTiTPart">Date</span> {{ date('D, d M Y', strtotime($value->created_at)) }}</span>
                                             
                                                <span class="txt"> <span class="mobileTiTPart">Amount</span> {{currency()}} {{ $value->comm }}</span>
                                             
                                                <span class="txt"> <span class="mobileTiTPart">Description</span> {{ $value->remarks }}</span>
                                            </div>
                                        </div>
                                        <div class="slideContent"></div>
                                    </div>
                                </div>
                    
                                @endforeach
                    
                                <?php }?>
                    
                                
                    
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
   
</div>
