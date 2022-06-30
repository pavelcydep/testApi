<?php

namespace App\Http\Controllers;

use App\Models\DateBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
     * @OA\Post(
     * path="/api/v1/notebook/",
     * summary="Post",
     * description="name,company,email,number,data,foto",
     * operationId="authLogin",
     * tags={"datebook"},
     * @OA\RequestBody(
     *    required=true,
     *  
     *    @OA\JsonContent(
     *       required={"name","email","number"},
     *  @OA\Property(property="name", type="string", format="text", example="Иванов Иван Иванович"),
     *   @OA\Property(property="company", type="string", format="text", example="Гейзер"),
     *  @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     * @OA\Property(property="number", type="string", format="number", example="+79503199999"),
     * @OA\Property(property="data", type="string", format="date", example="01.01.2022"),
     * @OA\Property(property="foto", type="string", format="text", example="https://obrazovan.online/blog/oformlenie-ssyilok-po-gostu.jpg"),
     *  ),    
     *      
     *       
     * ),
     * @OA\Response(
     *    response=201,
     *    description="201: Created",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="201: Created")
     *        )
     *     )
     * ),
     * 
     * 
     * @OA\Get(
     * path="/api/v1/notebook/",
     * summary="Get",
     * description="name,company,email,number,data,foto",
     *
     * tags={"datebook"},
     * @OA\RequestBody(
     *    required=true,
     *  
     *    @OA\JsonContent(
     *      required={"name","email","number"},
     *  @OA\Property(property="name", type="string", format="text", example="Иванов Иван Иванович"),
     *   @OA\Property(property="company", type="string", format="text", example="Гейзер"),
     *  @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     * @OA\Property(property="number", type="string", format="number", example="+79503199999"),
     * @OA\Property(property="data", type="string", format="date", example="01.01.2022"),
     * @OA\Property(property="foto", type="string", format="text", example="https://obrazovan.online/blog/oformlenie-ssyilok-po-gostu.jpg"),
     *  ),    
     *      
     *       
     * ),
     * @OA\Response(
     *    response=200,
     *    description="200: OK",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="OK")
     *        )
     *     ),
     * @OA\Response(
     *    response=400,
     *    description="400:Not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Not found")
     *        )
     *     )
     * 
     * 
     * ),
     * @OA\Get(
     * path="/api/v1/notebook/id",
     * summary="GetId",
     * description="name,company,email,number,data,foto",
     *
     * tags={"datebook"},
     * @OA\RequestBody(
     *    required=true,
     *  
     *    @OA\JsonContent(
     *       required={"name","company","email","number","data","foto"},
     *  @OA\Property(property="name", type="string", format="text", example="Иванов Иван Иванович"),
     *   @OA\Property(property="company", type="string", format="text", example="Гейзер"),
     *  @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     * @OA\Property(property="number", type="string", format="number", example="+79503199999"),
     * @OA\Property(property="data", type="string", format="date", example="01.01.2022"),
     * @OA\Property(property="foto", type="string", format="text", example="https://obrazovan.online/blog/oformlenie-ssyilok-po-gostu.jpg"),
     *  ),    
     *      
     *       
     * ),
     * @OA\Response(
     *    response=200,
     *    description="200: OK",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="OK")
     *        )
     *     ),
     * @OA\Response(
     *    response=400,
     *    description="400:Not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Not found")
     *        )
     *     )
     * 
     * 
     * ),
     * 
     *  @OA\Put(
     * path="/api/v1/notebook/id",
     * summary="Put",
     * description="name,email,number",
     *
     * tags={"datebook"},
     * @OA\RequestBody(
     *    required=true,
     *  
     *  @OA\JsonContent(
     * required={"name","email","number"},
     * @OA\Property(property="name", type="string", format="text", example="Иванов Иван Иванович"),
     * @OA\Property(property="company", type="string", format="text", example="Гейзер"),
     * @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     * @OA\Property(property="number", type="string", format="number", example="+79503199999"),
     * @OA\Property(property="data", type="string", format="date", example="01.01.2022"),
     * @OA\Property(property="foto", type="string", format="text", example="https://obrazovan.online/blog/oformlenie-ssyilok-po-gostu.jpg"),
     *  ),    
     *      
     *       
     * ),
     * @OA\Response(
     *    response=200,
     *    description="200: OK",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="OK")
     *        )
     *     ),
     * @OA\Response(
     *    response=400,
     *    description="400:Not found",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Not found")
     *        )
     *     )
     * 
     * 
     * ),
     *  @OA\Delete(
     * path="/api/v1/notebook/id",
     * summary="Delete",
     * description="name,company,email,number,data,foto",
     *
     * tags={"datebook"},
     * @OA\RequestBody(
     *    required=true,
     *  
     *  @OA\JsonContent(
     * required={"name","email","number"},
     * @OA\Property(property="name", type="string", format="text", example="Иванов Иван Иванович"),
     * @OA\Property(property="company", type="string", format="text", example="Гейзер"),
     * @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     * @OA\Property(property="number", type="string", format="number", example="+79503199999"),
     * @OA\Property(property="data", type="string", format="date", example="01.01.2022"),
     * @OA\Property(property="foto", type="string", format="text", example="https://obrazovan.online/blog/oformlenie-ssyilok-po-gostu.jpg"),
     *  ),    
     *      
     *       
     * ),
     * @OA\Response(
     *    response=204,
     *    description="204: No Content ",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="No Content ")
     *        )
     *     ),
     * 
     * 
     * 
     * ),
     * 
     */



class DateBookController extends Controller
{

public function tabelTask()
  {
    $data = Datebook::paginate(request()->all());
    return response()->json($data, 200);
  }
  public function tabelTaskById($id)
  {



    $tabel = DateBook::find($id);
    if (is_null($tabel)) {
      return response()->json(['error' => true, 'message' => 'Not found'], 404);
    }
    return response()->json($tabel, 200);
  }

  public function tabelTaskSave(Request $req)
  {

    



    $tabel = DateBook::create($req->all());
    return response()->json($tabel, 201);
  }

  public function tabelTaskEdit(Request $req, $id)
  {
    $tabel = DateBook::find($id);
    if (is_null($tabel)) {
      return response()->json(['error' => true, 'message' => 'Not found'], 404);
    }

    $tabel->update($req->all());
    return response()->json($tabel, 200);
  }
  public function tabelTaskDelete(Request $req, $id)
  {
    $tabel = DateBook::find($id);
    if (is_null($tabel)) {
      return response()->json(['error' => true, 'message' => 'Not found'], 404);
    }
    $tabel->delete();
    return response()->json('', 204);
  }
}
