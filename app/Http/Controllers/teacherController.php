<?php

namespace App\Http\Controllers;
use App\Models\teacher;
use Illuminate\Http\Request;
use Validator;


class teacherController extends Controller
{
    function index(){
         return "stub";
    }
    function showteacher(Teacher $key){
         return $key;
    }

      function addteacher(Request $req){
           $teacher = new teacher();
           $teacher->name = $req->name ;
           $teacher->age = $req->age;
           $teacher->salary= $req->salary;
           $result = $teacher->save();

           if($result){

           return ["Result"=>" teacher data added successfully "];
           }else{

                return ["Result"=>"something error"];
     }
      }

      function updateMember(Request $req){
          //  return "update successfully";
           $teacher = teacher::find($req->id);
           $teacher->name = $req->name ;
           $teacher->age = $req->age;
           $teacher->salary= $req->salary ;
           $result = $teacher->save();

           if($result){
               return ["Result"=>" teacher data updated successfully "];
         }else{
              return ["Result"=>"something error"];
         }
      }

function deleteMember($id){

     $teacher = teacher::find($id);
     $result = $teacher ->delete();
     if($result){
          return ["Result"=>" teacher data".$id." deleted successfully "];
    }else{
         return ["Result"=>"something error"];
    }
}

function searchMember($name){
     return teacher::where("name","like","%" .$name."%")->get();

}
// function saveMember(Request $req){
//      $rules = array(
//            "name"=>"required"
//      );
//      $validator = Validator::make($req->all(),$rules)

// //      if($validator->fails()){
// //              retuen
// //      }




// }
}




?>