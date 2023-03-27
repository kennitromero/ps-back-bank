<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transfer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function history(int $accountId): JsonResponse
    {
        // Leer sobre queries de los modelos
        $transfers = Transfer::where('account_origin_id', '=', $accountId)
            ->orWhere('account_destination_id', '=', $accountId)
            ->get();

        return response()->json([
            'data' => [
                'history' => $transfers
            ]
        ], 200);
    }

    public function listAccountWithBalance(int $userId): JsonResponse
    {
        $accounts = Account::where('user_id', '=', $userId)->get();


        $accountWithBalance = [];
        foreach ($accounts as $account) {

            $transfersDeposit = Transfer::where('account_destination_id', '=', $account->id)
                ->where('type', '=', 'deposit')
                ->sum('amount');

            $transfersWithdraw = Transfer::where('account_destination_id', '=', $account->id)
                ->where('type', '=', 'withdraw')
                ->sum('amount');


            $accountWithBalance[] = [
                'account_id' => $account->id,
                'balance' => $transfersDeposit - $transfersWithdraw
            ];
        }

        return response()->json(['data' => $accountWithBalance], 200);
    }
}
