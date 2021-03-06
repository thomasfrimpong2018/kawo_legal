<?php

namespace App\Http\Controllers;
use Auth;
use App\StartUp;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Comment;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

         //Conditional redirecting whether user is admin or not
         if(Auth::user()->admin == 0){

         $user_id=auth()->user()->id;
         $user=User::find($user_id);

      return view('dashboard')->with('startups',$user->startup);
         }else{

          $startups=StartUp::orderBy('created_at','desc')->paginate(10);
            return view('admin.dashboard')->with('startups', $startups) ;
         }
    }



    public function create(){
      return view('users.addStartup');

    }

    public function store(Request $request){

          $this->validate($request, [
              'cover_image'=>'image|nullable|max:1999'
          ]);


        //Handle File Upload
        if($request->hasFile('cover_image')){

            //Get Filename with extension
            $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get just file
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get the ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);

        }else{
              $fileNameToStore='noimage.jpg';
        }
       
        $startup=new StartUp;
        $startup->user_id=auth()->user()->id;
        $startup->fullname=$request->input('fullname');
        $startup->email =$request->input('email');
        $startup->password=md5($request->input('password'));
        $startup->business_name=$request->input('business_name');
        $startup->business_location=$request->input('business_location');
        $startup->business_website=$request->input('business_website');
        $startup->phone =$request->input('phone');
        $startup->facebook =$request->input('facebook');
        $startup->twitter =$request->input('twitter');
        $startup->linkedin =$request->input('linkedin');
        $startup->industry =$request->input('industry');
        $startup->description =$request->input('editor1');
        $startup->business_logo =$fileNameToStore;
        $startup->founder_1=$request->input('fullname1');
        $startup->facebook_1=$request->input('facebook1');
        $startup->twitter_1=$request->input('twitter1');
        $startup->linkedin_1=$request->input('linkedin1');
        $startup->founder_2=$request->input('fullname2');
        $startup->facebook_2=$request->input('facebook2');
        $startup->twitter_2=$request->input('twitter2');
        $startup->linkedin_2=$request->input('linkedin2');
        $startup->founder_3=$request->input('fullname3');
        $startup->facebook_3=$request->input('facebook3');
        $startup->twitter_3=$request->input('twitter3');
        $startup->linkedin_3=$request->input('linkedin3');
        $startup->founder_4=$request->input('fullname4');
        $startup->facebook_4=$request->input('facebook4');
        $startup->twitter_4=$request->input('twitter4');
        $startup->linkedin_4=$request->input('linkedin4');
        $startup->founder_5=$request->input('fullname5');
        $startup->facebook_5=$request->input('facebook5');
        $startup->twitter_5=$request->input('twitter5');
        $startup->linkedin_5=$request->input('linkedin5');

        $startup->save();
       
        
        return redirect('/dashboard')->with('success',$startup->business_name.' is Created Successfully');



    }

    //confirm deleting startups
    public function show($id){
   
    $startup=StartUp::find($id);

    if(auth()->user()->id == $startup->user_id){   
   return view('users.confirmdelete')->with('startup',$startup);
    }else{
        return view('404');
    }

    }
    //deleting a startup
    public function destroy($id){

        $startup=StartUp::find($id);
        

        if($startup->business_logo!='noimage.jpg'){
            //Delete Image
            Storage::delete('public/cover_image/'.$startup->business_logo);
 
        }

      $startup->delete();
        return redirect('/dashboard')->with('success',$startup->business_name.' is Deleted Successfully');
        

    }


    public function edit($id){
   $startup=StartUp::find($id);

   //checking unauthorised edit
        if(auth()->user()->id == $startup->user_id){

        return view('users.edit')->with('startup',$startup);
    }else{
        return view('404');
    }
}

    //updating startup details

    public function update(Request $request, $id){

        if($request->hasFile('cover_image')){

            //Get Filename with extension
            $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get just file
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get the ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);

        }

        $startup=StartUp::find($id);
        $startup->user_id=auth()->user()->id;
        $startup->fullname=$request->input('fullname');
        $startup->email =$request->input('email');
        $startup->password=md5($request->input('password'));
        $startup->business_name=$request->input('business_name');
        $startup->business_location=$request->input('business_location');
        $startup->business_website=$request->input('business_website');
        $startup->phone =$request->input('phone');
        $startup->facebook =$request->input('facebook');
        $startup->twitter =$request->input('twitter');
        $startup->linkedin =$request->input('linkedin');
        $startup->industry =$request->input('industry');
        $startup->description =$request->input('editor1');
       // $startup->business_logo =$fileNameToStore;
        $startup->founder_1=$request->input('fullname1');
        $startup->facebook_1=$request->input('facebook1');
        $startup->twitter_1=$request->input('twitter1');
        $startup->linkedin_1=$request->input('linkedin1');
        $startup->founder_2=$request->input('fullname2');
        $startup->facebook_2=$request->input('facebook2');
        $startup->twitter_2=$request->input('twitter2');
        $startup->linkedin_2=$request->input('linkedin2');
        $startup->founder_3=$request->input('fullname3');
        $startup->facebook_3=$request->input('facebook3');
        $startup->twitter_3=$request->input('twitter3');
        $startup->linkedin_3=$request->input('linkedin3');
        $startup->founder_4=$request->input('fullname4');
        $startup->facebook_4=$request->input('facebook4');
        $startup->twitter_4=$request->input('twitter4');
        $startup->linkedin_4=$request->input('linkedin4');
        $startup->founder_5=$request->input('fullname5');
        $startup->facebook_5=$request->input('facebook5');
        $startup->twitter_5=$request->input('twitter5');
        $startup->linkedin_5=$request->input('linkedin5');

        $startup->save();




        if($request->hasFile('cover_image')){

            $startup->cover_image=$fileNameToStore;
        }


        return redirect('/dashboard')->with('success',$startup->business_name.' is Updated Successfully');
    }

    public function showDetails($id){
       $startup=StartUp::find($id);
       $comments=$startup->comment;

       return view('users.detailed',compact('startup','comments'));

    }

    public function addComment(Request $request,$id){
       $comment=new Comment;
        $comment->body=$request->input('comment');
        $comment->start_up_id=$request->input('startup_id');
        $comment->save();

       $person= $comment->startup;

        return redirect('/showdetailed/'.$id);

       

    }

    public function filter(Request $request ) {


        
        $sql="SELECT  * FROM startups WHERE business_name LIKE ' %".$_POST['search']." %' ";
        $array=$db->query($sql);
        
        foreach($array as $key){ ?>
        
           
        <div id="user"> 
            <img src="<?php echo $key['business_logo'] ?>" id="pics" />
            $nbsp;<span><?php echo $key['business_name']; ?></span>
        </div>
       
        <?php
        
        }
        
       

      }
     }
    
