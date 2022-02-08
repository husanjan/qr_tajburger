<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if ($request->id==1)
        {
          return
              '<div class="form-group col-md-6  ">
        <label for="star1" class="text-white">

            Качество обслуживания оператора
        </label>
        <div class="rating" id="star1" style="margin-top: -30px">

            <input type="radio" name="rating" value="5"  id="r1">
            <label for="r1"></label>

            <input type="radio"  value="4" name="operator" id="r2">
            <label for="r2"></label>

            <input type="radio"  value="3"name="operator" id="r3">
            <label for="r3"></label>

            <input type="radio"  value="2" name="operator" id="r4">
            <label for="r4"></label>

            <input type="radio"  value="1"name="operator" id="r5">
            <label for="r5"></label>

        </div>
        <!-- partial -->


    </div>
    <div class="form-group col-md-6  " style="margin-top: 100px">
        <label for="star1" class="text-white">
            Качество обслуживания курьера </label>
        <div class="rating2" id="star2" style="margin-top: -30px">

            <input type="radio"  value="5" name="delevery" id="r6">
            <label for="r6"></label>

            <input type="radio"  value="4" name="delevery" id="r7">
            <label for="r7"></label>

            <input type="radio"  value="3"name="delevery" id="r8">
            <label for="r8"></label>

            <input type="radio" value="2" name="delevery" id="r9">
            <label for="r9"></label>

            <input type="radio" value="1" name="delevery" id="r10">
            <label for="r10"></label>

        </div>
        <!-- partial -->


    </div>
    <div class="form-group col-md-6  " style="margin-top: 100px">
        <label for="star1" class="text-white">
            Качество продукта </label>
        <div class="rating3" id="star2" style="margin-top: -30px">

            <input type="radio"  value="5" name="products" id="r11">
            <label for="r11"></label>

            <input type="radio"  value="4"name="products" id="r12">
            <label for="r12"></label>

            <input type="radio"  value="3"name="products" id="r13">
            <label for="r13"></label>

            <input type="radio"  value="2"name="products" id="r14">
            <label for="r14"></label>

            <input type="radio" value="1" name="products" id="r15">
            <label for="r15"></label>

        </div>
        <div style="margin-top: 100px">
            <div class="form-group text-white">
        <label for="exampleFormControlTextarea1" >Подскажите что нам улушить?</label>
        <textarea  name="comment"class="form-control col-md-6 bg-dark text-white " id="exampleFormControlTextarea1" rows="3"></textarea>


    </div>
            <center>  <button class="btn btn-outline-danger">
                    OK
                </button></center>
        </div>

        <!-- partial -->


    </div>';
        }elseif($request->id==2)
        {
            return
                '<div class="form-group col-md-6  ">
        <label for="star1" class="text-white">

            Качество обслуживания кассира
        </label>
        <div class="rating" id="star1" style="margin-top: -30px">

            <input type="radio" value="5" name="kassir" id="r1">
            <label for="r1"></label>

            <input type="radio" value="4" name="kassir" id="r2">
            <label for="r2"></label>

            <input type="radio" value="3" name="kassir" id="r3">
            <label for="r3"></label>

            <input type="radio"value="2" name="kassir" id="r4">
            <label for="r4"></label>

            <input type="radio" value="1" name="kassir" id="r5">
            <label for="r5"></label>

        </div>
        <!-- partial -->


    </div>



    </div>
    <div class="form-group col-md-6  " style="margin-top: 100px">
        <label for="star1" class="text-white">
            Качество продукта </label>
        <div class="rating3" id="star2" style="margin-top: -30px">

            <input type="radio" value="5" name="product" id="r11">
            <label for="r11"></label>

            <input type="radio" value="4" name="product" id="r12">
            <label for="r12"></label>

            <input type="radio"  value="3"name="product" id="r13">
            <label for="r13"></label>

            <input type="radio" value="2" name="product" id="r14">
            <label for="r14"></label>

            <input type="radio"  value="1"name="product" id="r15">
            <label for="r15"></label>

        </div>
        <div style="margin-top: 100px">
            <div class="form-group text-white">
        <label for="exampleFormControlTextarea1" >Подскажите что нам улушить?</label>
        <textarea name="comment" class="form-control col-md-6 bg-dark text-white " id="exampleFormControlTextarea1" rows="3"></textarea>


    </div>
            <center>  <button class="btn btn-outline-danger">
                    OK
                </button></center>
        </div>аул

        <!-- partial -->


    </div>';
        }else{
            return
                '<div class="form-group col-md-6  ">
        <label for="star1" class="text-white">

            Качество обслуживания оператора
        </label>
        <div class="rating" id="star1" style="margin-top: -30px">

              <input type="radio" name="rating" value="5"  id="r1">
            <label for="r1"></label>

            <input type="radio"  value="4" name="operator" id="r2">
            <label for="r2"></label>

            <input type="radio"  value="3"name="operator" id="r3">
            <label for="r3"></label>

            <input type="radio"  value="2" name="operator" id="r4">
            <label for="r4"></label>

            <input type="radio"  value="1"name="operator" id="r5">
            <label for="r5"></label>

        </div>
        <!-- partial -->


    </div>



    </div>
    <div class="form-group col-md-6  " style="margin-top: 100px">
        <label for="star1" class="text-white">
            Качество продукта </label>
        <div class="rating3" id="star2" style="margin-top: -30px">
    <input type="radio" value="5" name="kassir" id="r5">
            <label for="r5"></label>

            <input type="radio" value="4" name="product" id="r44">
            <label for="r44"></label>

            <input type="radio" value="3" name="product" id="r33">
            <label for="r33"></label>

            <input type="radio"value="2" name="product" id="r22">
            <label for="r22"></label>

            <input type="radio" value="1" name="product" id="r11">
            <label for="r11"></label>

        </div>
        <div style="margin-top: 100px">
            <div class="form-group text-white">
        <label for="exampleFormControlTextarea1" >Подскажите что нам улушить?</label>
        <textarea class="form-control col-md-6 bg-dark text-white" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>


    </div>
            <center>  <button class="btn btn-outline-danger">
                    OK
                </button></center>
        </div>

        <!-- partial -->


    </div>';

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
    public  function insert_client(Request  $request)
     {


         $product = new cr;
        $product->Name_Client=$request->name;
        $product->LastName=$request->lastname;
        $product->Telephone_Client=$request->tel;
        $product->Type=$request->type;
        $product->Operator=$request->operator;
        $product->Type=$request->delevery;
        $product->products=$request->products;
        $product->Cashier=$request->kassir;
        $product->Delivery=$request->delevery;
        $product->comment=$request->comment;

         $product->save();

//           dd($request->name);
//           dd($request->lastname);
//           dd($request->operator);
//           dd($request->delevery);
//           dd($request->comment);
//           dd($request->kassir);
//           dd($request->comment);
    }
}
