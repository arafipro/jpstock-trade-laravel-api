<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TradeResource;
use App\Models\Trade;

class TradeListController extends Controller
{
		// コード検索
    public function getCode(string $code)
    {
        // SELECT * FROM trades WHERE code = $code ORDER BY trading_date
        // return TradeResource::collection(Trade::all()->where("code", "=", $code)->sortBy("trading_date"));
				$trades = TradeResource::collection(Trade::all());
        $filled = $trades->where("code", "=", $code);
        $sorted = $filled->sortBy("trading_date");
        return $sorted;
    }

		// 売買別・コード検索
    public function getCodeBuyOrSell(string $code, string $buy_sell)
    {
        // SELECT * FROM trades WHERE code = $code && buy_sell = $buy_sell ORDER BY trading_date;
        // return TradeResource::collection(Trade::all()->where("code", "=", $code)->where("buy_sell", "=", $buy_sell)->sortBy("trading_date"));
				$trades = TradeResource::collection(Trade::all());
        $filled = $trades->where("code", "=", $code)->where("buy_sell", "=", $buy_sell);
        $sorted = $filled->sortBy("trading_date");
        return $sorted;
    }

		// 売買別・取引証券会社別・コード検索
    public function getCodeByDealingWithCompanies(string $code, string $buy_sell, string $company_id)
    {
        // SELECT * FROM trades WHERE code = $code && buy_sell = $buy_sell && company_id = $company_id ORDER BY trading_date;
        // return TradeResource::collection(Trade::all()->sortBy("trading_date")->where("code", "=", $code)->where("buy_sell", "=", $buy_sell)->where("company_id", "=", $company_id));
        $trades = TradeResource::collection(Trade::all());
        $filled = $trades->where("code", "=", $code)->where("buy_sell", "=", $buy_sell)->where("company_id", "=", $company_id);
        $sorted = $filled->sortBy("trading_date");
        return $sorted;
    }
		
		// 売買別・取引証券会社別・コード検索・合計株数
    public function getCodeByDealingWithCompaniesSum(string $code, string $buy_sell, string $company_id)
    {
        // SELECT * FROM trades WHERE code = $code && buy_sell = $buy_sell && company_id = $company_id ORDER BY trading_date;
        // return TradeResource::collection(Trade::all()->sortBy("trading_date")->where("code", "=", $code)->where("buy_sell", "=", $buy_sell)->where("company_id", "=", $company_id)->count());
        $trades = TradeResource::collection(Trade::all());
        $filled = $trades->where("code", "=", $code)->where("buy_sell", "=", $buy_sell)->where("company_id", "=", $company_id);
				$sorted = $filled->sortBy("trading_date");
        return $sorted->sum("shares");
    }
}
