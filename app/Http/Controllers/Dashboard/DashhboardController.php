<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Product;
use App\Models\RejectProduct;
use App\Models\Profile;
use App\Models\User;
use App\Models\Buyers;
use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Barryvdh\DomPDF\Facade\Pdf;

class DashhboardController extends Controller
{
    public function index()
    {

        $product = Product::all();
        $reject = RejectProduct::all();
        $todayProfit = Product::get('pprice');
        $todayReject = RejectProduct::get('prprice');
        $total = 0;
        $totalloss = 0;
        foreach ($todayProfit as $value) {
            $total = $total + $value->pprice;
        }


        foreach ($todayReject as $value) {
            $totalloss = $totalloss + $value->prprice;
        }


        $count = Product::count();

        return view('dashboard.index', compact('total', 'product', 'reject', 'totalloss', 'count'));
    }


    public function chart_apex()
    {
        return view('dashboard.chart-apex');
    }


    public function client_add()
    {
        $Country = Country::all();
        return view('dashboard.client-add', compact('Country'));
    }


    public function user_add()
    {
        $country = Country::all();
        return view('dashboard.add-user',compact('country'));
    }

    public function client_adds(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->age = $request->input('age');
        $client->country = $request->input('country');
        $client->email = $request->input('email');
        $client->number = $request->input('number');
        $client->address = $request->input('address');
        $client->manager_role = $request->input('manager_role');
        $client->staff_role = $request->input('staff_role');


        // Generate a random 13-digit number
        $client->client_id = random_int(1000000000000, 9999999999999);

        $client->save();

        return redirect()->back()->with('message', 'Inserted Successfully');
    }




    public function buyers_adds(Request $request)
    {
        $client = new Buyers();
        $client->cname = $request->input('cname');
        $client->pname = $request->input('pname');
        $client->price = $request->input('price');
        $client->cemail = $request->input('cemail');
        $client->cphone = $request->input('cphone');
        $client->caddress = $request->input('caddress');
        $client->cpincode = $request->input('cpincode');

        $client->dicount = $request->input('dicount');
        $client->quantity = $request->input('quantity');
        $client->payment = $request->input('payment');
        $client->total_price = $request->input('total_price');
        $client->manager_role = $request->input('manager_role');
        $client->staff_role = $request->input('staff_role');
        $client->date = $request->input('date');
        $client->emi_amount = $request->input('emi_amount');
        $client->transaction_id = $request->input('transaction_id');
        $client->no_installments = $request->input('no_installments');
         // Generate a random 13-digit number
         $client->order_id = 'OMS-' . random_int(1000000000000, 9999999999999);

        $client->save();
        return redirect()->back()->with('message', 'Inserted Successfully');
    }

    public function client_list()
    {
        $client = Client::all();
        return view('dashboard.client-list', compact('client'));
    }

    public function buyers_list()
    {
        $client = Buyers::all();
        return view('dashboard.buyers-list', compact('client'));
    }

    public function user_list()
    {
        $userlist = User::all();
        return view('dashboard.user-list',compact('userlist'));
    }




    public function client_edit($id)
    {
        $client = Client::find($id);
        return view('dashboard.client-edit', compact('client'));
    }

    public function user_edit($id)
    {
        $country = Country::all();
        $user = User::find($id);
        return view('dashboard.user-edit', compact('user','country'));
    }


    public function generatePDF($id){
        $client = Buyers::find($id);

        $data = [
            'title' => 'Welcome to OMS',
            'date' => date('m/d/Y'),
            'client' => $client
          
        ];

        $pdf = PDF::loadView('dashboard.buyerPdf', $data);
        return $pdf->download('O-M-S.pdf');
    }



    public function buyers_edit($id)
    {
        $client = Buyers::find($id);
        return view('dashboard.buyers-edit', compact('client'));
    }
    public function buyers_show($id)
    {
        $client = Buyers::find($id);
        return view('dashboard.buyers-show', compact('client'));
    }





    public function client_update(Request $request, $id)
    {
        $client =  Client::find($id);
        $client->name = $request->input('name');
        $client->age = $request->input('age');
        $client->country = $request->input('country');

        $client->email = $request->input('email');
        $client->number = $request->input('number');
        $client->address = $request->input('address');



        $client->update();
        return redirect('client_list');
    }

    public function user_update(Request $request, $id)
    {

        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'age' => 'required',

            'number' => 'required',
           
            'join_date' => 'required',
          


        ])->validate();

        $client =  User::find($id);
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->age = $request->input('age');
        $client->role = $request->input('role');
        $client->status = $request->input('status');
        $client->country = $request->input('country');
        $client->password = $request->input('password');
        $client->number = $request->input('number');
        $client->address = $request->input('address');
        $client->about = $request->input('about');
        $client->join_date = $request->input('join_date');



        $client->update();
        return redirect('user_list');
    }






    public function buyers_update(Request $request, $id)
    {


        $client =  Buyers::find($id);
        $client->cname = $request->input('cname');
        $client->pname = $request->input('pname');
        $client->price = $request->input('price');
        $client->cemail = $request->input('cemail');
        $client->cphone = $request->input('cphone');
        $client->caddress = $request->input('caddress');
        $client->cpincode = $request->input('cpincode');

        $client->dicount = $request->input('dicount');
        $client->quantity = $request->input('quantity');
        $client->payment = $request->input('payment');
        $client->installment_amount = $request->input('installment_amount');
        $installments = $request->input('installments', []); // default to empty array if none selected
        $client->installments = json_encode($installments); 


        $client->update();

        return redirect('buyers_list');
    }


    public function client_delete($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('client_list');
    }

    public function user_delete($id)
    {
        $client = User::find($id);
        $client->delete();
        return redirect('user_list');
    }




    public function buyers_delete($id)
    {
        $client = Buyers::find($id);
        $client->delete();
        return redirect('buyers_list');
    }







    public function form_input_group()
    {
        return view('dashboard.form-input-group');
    }

    public function form_layout()
    {
        return view('dashboard.form-layout');
    }

    public function privacy_policy()
    {
        return view('dashboard.privacy-policy');
    }

    public function product_add_category()
    {
        return view('dashboard.product-add-category');
    }

    public function product_reject_add_category()
    {
        return view('dashboard.add-rejected-products');
    }

    public function product_add_categorys(Request $request)
    {
        $product = new Product();
        $product->pname = $request->input('pname');
        $product->pprice = $request->input('pprice');
        $product->pdiscount = $request->input('pdiscount');
        $product->manager_id = $request->input('manager_id');
        $product->pdescription = $request->input('pdescription');


        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $product->photo = $filename;
        }

        $product->save();
        return redirect('product_list');
    }

    // <-----------------------rejected project  --------------------->  
    public function reject_product_add_categorys(Request $request)
    {
        $reject = new RejectProduct();
        $reject->prname = $request->input('prname');
        $reject->prprice = $request->input('prprice');
        $reject->prdiscount = $request->input('prdiscount');
        $reject->manager_id = $request->input('manager_id');

        $reject->prdescription = $request->input('prdescription');


        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $reject->photo = $filename;
        }
        $reject->save();
        return redirect('reject_product_list');
    }

    public function reject_product_list()
    {
        $product = RejectProduct::all();
        return view('dashboard.reject-product-list', compact('product'));
    }


    public function reject_product_delete($id)
    {
        $product = RejectProduct::find($id);
        $product->delete();
        return redirect('reject_product_list');
    }

    public function reject_product_edit($id)
    {
        $product = RejectProduct::find($id);
        return view('dashboard.reject-product-edit', compact('product'));
    }


    public function reject_product_update(Request $request, $id)
    {
        $product =  RejectProduct::find($id);
        $product->prname = $request->input('prname');
        $product->prprice = $request->input('prprice');
        $product->prdiscount = $request->input('prdiscount');

        $product->prdescription = $request->input('prdescription');


        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $product->photo = $filename;
        }
        $product->save();
        return redirect('reject_product_list');
    }


    public function search_reject_product(Request $request)
    {
        $search = $request->search;

        $product = RejectProduct::where(function ($query) use ($search) {

            $query->where('prname', 'like', "%$search%");
        })
            ->get();

        return view('dashboard.reject-product-list', compact('product', 'search'));
    }



    public function search_client(Request $request)
    {
        $search = $request->search;
    
        $client = Client::where(function ($query) use ($search) {
            $query->where('client_id', 'like', "%$search%")
                  ->orWhere('name', 'like', "%$search%");
        })->get();
    
        return view('dashboard.client-list', compact('client', 'search'));
    }


    public function search_buyer(Request $request)
    {
        $search = $request->search;
    
        $client = Buyers::where(function ($query) use ($search) {
            $query->where('order_id', 'like', "%$search%")
                  ->orWhere('cname', 'like', "%$search%")
                  ->orWhere('pname', 'like', "%$search%")
                  ->orWhere('payment', 'like', "%$search%");
        })->get();
    
        return view('dashboard.buyers-list', compact('client', 'search'));
    }


    public function search_user(Request $request)
    {
        $search = $request->search;
    
        $userlist = User::where(function ($query) use ($search) {
            $query->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('role', 'like', "%$search%");
        })->get();
    
        return view('dashboard.user-list', compact('userlist', 'search'));
    }
    




    //  <--------------------------------end reject Project---------------------------------------------->

    public function add_products()
    {
        return view('dashboard.add-products');
    }


    public function add_buyers()
    {
        $data = Client::all();
        $product = Product::all();

        return view('dashboard.add-buyers', compact('data', 'product'));
    }

    public function product_list()
    {
        $product = Product::all();
        $adminproduct = Product::all();
        return view('dashboard.product-list', compact('product', 'adminproduct'));
    }



    public function searchproduct(Request $request)
    {
        $search = $request->search;

        $product = Product::where(function ($query) use ($search) {

            $query->where('pname', 'like', "%$search%");
        })
            ->get();

        return view('dashboard.product-list', compact('product', 'search'));
    }



    public function product_edit($id)
    {
        $product = Product::find($id);
        return view('dashboard.product-edit', compact('product'));
    }



    public function product_update(Request $request, $id)
    {
        $product =  Product::find($id);
        $product->pname = $request->input('pname');
        $product->pprice = $request->input('pprice');
        $product->pdiscount = $request->input('pdiscount');

        $product->pdescription = $request->input('pdescription');


        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $product->photo = $filename;
        }
        $product->save();
        return redirect('product_list');
    }


    public function product_delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('product_list');
    }





    public function table_data()
    {
        return view('dashboard.table-data');
    }

    public function table_editable()
    {
        return view('dashboard.table-editable');
    }

    public function table_basic()
    {
        return view('dashboard.table-basic');
    }





    public function terms_of_service()
    {
        return view('dashboard.terms-of-service');
    }


    public function user_account_setting()
    {
        return view('dashboard.user-account-setting');
    }


    public function user_privacy_setting()
    {
        return view('dashboard.user-privacy-setting');
    }


    public function user_profile_edit()
    {
        return view('dashboard.user-profile-edit');
    }


    public function user_profile_edits(Request $request)
    {
        $profile = new  Profile();
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->email = $request->input('email');

        $profile->number = $request->input('number');
        $profile->about = $request->input('about');
        $profile->country = $request->input('country');
        $profile->address = $request->input('address');


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/product/', $filename);
            $profile->image = $filename;
        }
        $profile->save();
        return redirect('user_profile_edit');
    }


    public function user_profile()
    {
        $profile = Profile::get();
        return view('dashboard.user-profile', compact('profile'));
    }


    public function auth_confirm_mail()
    {
        return view('dashboard.auth-confirm-mail');
    }

    public function auth_lock_screen()
    {
        return view('dashboard.auth-lock-screen');
    }

    public function auth_login()
    {
        return view('dashboard.auth-login');
    }

    public function auth_recover_pwd()
    {
        return view('dashboard.auth-recover-pwd');
    }

    public function auth_recoverpw()
    {
        return view('dashboard.auth-recoverpw');
    }


    public function userregisterPost(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'age' => 'required',

            'number' => 'required',
           
            'join_date' => 'required',
          


        ])->validate();
        // Check if the email already exists in the users table
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // If email exists, redirect back with an error message
            return redirect()->back()->with('error', 'Email already exists. Please use a different email.');
        }

        // Create a new user if the email doesn't exist
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'role' => $request->role,
            'country' => $request->country,
            'number' => $request->number,
            'address' => $request->address,
            'about' => $request->about,
            'join_date' => $request->join_date,
            'manager_role' => $request->manager_role,
            'status' => $request->status,

            // 'level' => 'Admin', // Uncomment if you need this field
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }


    public function auth_sign_in()
    {
        return view('dashboard.auth-sign-in');
    }

    public function auth_sign_up()
    {
        return view('dashboard.auth-sign-up');
    }

    public function registerPost(Request $request)
    {
        // Validate incoming request
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ])->validate();

        // Check if the email already exists in the users table
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // If email exists, redirect back with an error message
            return redirect()->back()->with('error', 'Email already exists. Please use a different email.');
        }

        // Create a new user if the email doesn't exist
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'level' => 'Admin', // Uncomment if you need this field
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    }



    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/dashboard')->with('success', 'Login Success');
        }

        return back()->with('error', 'Error Email or Password');
    }


    public function logout()
    {
        Auth::logout();

        return redirect('');
    }
}
