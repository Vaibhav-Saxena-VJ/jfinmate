<?php

namespace App\Http\Controllers;

use App\Services\CreditScoreService;
use Illuminate\Http\Request;

class CibilController extends Controller
{
    protected $creditScoreService;

    public function __construct(CreditScoreService $creditScoreService)
    {
        $this->creditScoreService = $creditScoreService;
    }

    public function fetchCreditScore()
    {

        $result = $this->creditScoreService->getCreditScore();

        return response()->json($result);
    }
        
 }

