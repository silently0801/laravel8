<div class="cart_header">
    <h2 class="card-title ">購物車</h2>
    <div class="d-flex progress-block pb-4 mb-4">
        <!-- 進度條 -->
        <div class="d-flex flex-column align-items-center w-25 position-relative">
            <div class="progress position-absolute">
                <div class="progress-bar bg-success" role="progressbar" style="width: @if($step > 1)100% @elseif($step == 1)30%@else 0% @endif" aria-valuenow="30"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-center align-items-center step @if($step >= 1)active @endif">1</div>
            <span>確認購物車</span>
        </div>
        <div class="d-flex flex-column align-items-center w-25  position-relative">
            <div class="progress position-absolute">
                <div class="progress-bar bg-success" role="progressbar" style="width: @if($step > 2)100% @elseif($step == 2)30%@else 0% @endif" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-center align-items-center step @if($step >= 2)active @endif">2</div>
            <span>付款與運送方式</span>
        </div>
        <div class="d-flex flex-column align-items-center w-25  position-relative">
            <div class="progress position-absolute">
                <div class="progress-bar bg-success" role="progressbar" style="width: @if($step > 3)100% @elseif($step == 3)30%@else 0% @endif" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-center align-items-center step @if($step >= 3)active @endif">3</div>
            <span>填寫資料</span>
        </div>
        <div class="d-flex flex-column align-items-center w-25  position-relative">
            <div class="d-flex justify-content-center align-items-center step @if($step >= 4)active @endif">4</div>
            <span>完成訂購</span>
        </div>
    </div>
</div>