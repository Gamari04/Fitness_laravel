<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Http\Requests\StoreExpendituresRequest;
use App\Http\Requests\UpdateExpendituresRequest;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *      title="Expenses API",
 *      version="1.0.0",
 *      description="API to manage expenses",
 * )
 */
class ExpenseController extends Controller
{
   /**
     * @OA\Get(
     *     path="/api/expenses",
     *     tags={"Expenses"},
     *     summary="Get all expenses",
     *     description="Retrieve a list of all expenses",
     *     security={{"sanctum": {}}},
     *     @OA\Response(response="200", description="List of expenses"),
     *     @OA\Response(response="404", description="No expense found"),
     *   
     * )
     */



     public function index(Request $request)
     {
         $expenses = Expense::where('user_id', $request->user()->id)->get();
         $response = [
             'status' => 'ok',
             'data' => \App\Http\Resources\ExpenseResource::collection($expenses)
         ];
 
         return response()->json($response, 200);
 
     }

   
    public function create()
    {
        //
    }
/**
 * @OA\Post(
 *     path="/api/expenses",
 *     tags={"Expenses"},
 *     summary="Create a new expense",
 *     description="Create a new expense with provided name, description and price ",
 *     security={{"sanctum": {}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name", "description", "price", "user_id"},
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="description", type="string"),
 *             @OA\Property(property="price", type="string"),
 *             @OA\Property(property="user_id", type="integer")
 *         )
 *     ),
 *     @OA\Response(response="201", description="expenditure created"),
 *     @OA\Response(response="400", description="Bad request")
 * )
 */

 public function store(Request $request)
 {
     // $userId = $request->user()->id;
 
     $expense = Expense::create([
         'name' => $request->name,
         'description' => $request->description,
         'price' => $request->price,
         'user_id' => $request->user_id,
       
     ]);
     return response()->json(['expense' => $expense], 201);
 }
 

   
/**
     * @OA\Put(
     *     path="/api/expenses/{id}",
     *     tags={"Expenses"},
     *     summary="Update a expense",
     *     description="Update the details of a expense",
     *    security={{"sanctum": {}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the expense to update",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "description","price"},
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="description", type="string"),
     *             @OA\Property(property="price", type="integer")
     *         )
     *     ),
     *     @OA\Response(response="200", description="expense updated"),
     *     @OA\Response(response="400", description="Bad request"),
     *     @OA\Response(response="404", description="expense not found")
     * )
     */
    public function update(Request $request,Expense $expense)
    {
        $this->authorize('update', $expense);
        $expense = Expense::find($expense->id);
        $expense->update($request->all());
        return response()->json(['message' => 'expense updated successfully', 'expense' => $expense]);
    }

   /**
 * @OA\Delete(
 *     path="/api/expenses/{id}",
 *     tags={"Expenses"},
 *     summary="Delete a expense",
 *     description="Delete a expense by its ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the expense to delete",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response="204", description="expense deleted"),
 *     @OA\Response(response="404", description="expense not found")
 * )
 */
    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();
        return response()->json(['message' => 'expense updated successfully', 'expense' => $expense]);
    }
}
