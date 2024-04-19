<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Models\InsurancePlan;
use App\Models\PolicyHolder;

class InsuranceController extends Controller
{
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPlans(Request $request) {
        return response()->json(InsurancePlan::all());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPlan(Request $request, $id) {
        $plan = InsurancePlan::findOrFail($id);
        return response()->json($plan);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPolicyHolders(Request $request) {
        return response()->json(PolicyHolder::all());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPolicyHolder(Request $request, $id) {
        $holder = PolicyHolder::findOrFail($id);
        return response()->json($holder);
    }
}