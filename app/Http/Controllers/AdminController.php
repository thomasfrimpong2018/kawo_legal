<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;
use App\StartUp;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        
         
    
 }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //for deleting users
    public function ConfirmDestroy($id)
    {
       $user=User::find($id);
       

       return view('admin.deleteUser')->with('user',$user);
    }

    public function destroy($id)
    {
       $user=User::find($id);
       $user->delete();

       return redirect('/userlist')->with('success',$user->name.' is successfully Removed');
    }
    //for deleting admins

    public function admindestroy($id)
    {
       $admin=User::find($id);
       $admin->delete();

       return redirect('/adminlist')->with('success',$admin->name.' is successfully Removed');
    }

    public function confirmAdminDestroy($id)
    {
       $admin=User::find($id);
       

       return view('admin.deleteAdmin')->with('admin',$admin);
    }







    public function userList(){

        if(auth()->check() && auth()->user()->admin == 1){
      $users=User::where('admin','0')->paginate(10);

      return view('admin.userList')->with('users',$users);

    }else{
        return view('404');
    }

}
    public function adminList(){

        if(auth()->check() && auth()->user()->admin == 1){

        
        $admins=User::where('admin','1')->paginate(10);
  
        return view('admin.adminList')->with('admins',$admins);
        
      }else{
        return view('404');
    }

}
      public function addStartup(){

        if(auth()->check() && auth()->user()->admin == 1){
        return view('admin.addStartup');

    }else{
        return view('404');
    }
      }


      public function approvedStartUps(){
        if(auth()->check() && auth()->user()->admin == 1){ 

        $startups=StartUp::where('status','Approved')->paginate(10);
        return view('admin.approvedStartups')->with('startups', $startups) ;

     }else{
        return view('404');
     }

      }

      public function unapprovedStartUps(){
        if(auth()->check() && auth()->user()->admin == 1){ 

        $startups=StartUp::where('status','Unapproved')->paginate(10);
        return view('admin.unapprovedStartups')->with('startups', $startups) ;

    }else{
        return view('404');
     }
      }


      public function changeUser($id)
    {
        if(auth()->check() && auth()->user()->admin == 1){ 

        $user=User::find($id);
        return view('admin.makeAdmin')->with('user',$user);

    }else{
        return view('404');
     }
    }

    public function newadmin(Request $request, $id)
    {
        if(auth()->check() && auth()->user()->admin == 1){ 
        $user=User::find($id);
       $user->admin=$request->input('admin');
       $user->save();

        return redirect('/userlist')->with('success',$user->name.'  is now an administrator ');

    }else{
        return view('404');
     }
    }

    public function approveStartup($id)
    {
        if(auth()->check() && auth()->user()->admin == 1){
        $startup=Startup::find($id);
        return view('admin.approve')->with('startup',$startup);
    }else{
        return view('404');
     }

    }

    public function confirmApproval(Request $request, $id)
    {
        if(auth()->check() && auth()->user()->admin == 1){
        $startup=Startup::find($id);
       $startup->status=$request->input('status');
       $startup->save();

        return redirect('/unapprovedstartup')->with('success', $startup->business_name.'  is now an approved ');
     }else{
        return view('404');
     }

    }


    public function showDetails($id){
        
        if(auth()->check() && auth()->user()->admin == 1){
        $startup=Startup::find($id);
        $comments=$startup->comment;

        return view('admin.detailed',compact('startup','comments'));

   }else{
    return view('404');
     }

    }
    

    
}
