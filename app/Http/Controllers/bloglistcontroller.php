<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bloglistcontroller extends Controller
{
    function bloglist(Request $request)
    {
        //return $request->input();
        $data = new blog();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        if ($data) {
            //echo "Data Added";
            return redirect('list');
        } else {
            echo "Data Not Added";
        }
    }

    function list()
    {
        $data = DB::table("blogs")->get();
        return view('bloglist', ['data' => $data]);
        $data = blogs::all();
        return $data;
    }
    function deletedata($id)
    {
        $isDeleted = blog::destroy($id);
        if ($isDeleted) {
            echo 'Data Deleted';
            return redirect('list');
        } else {
            echo 'Data Not Deleted';
        }
    }

    function edit($id)
    {
        $data = blog::find($id);
        return view('edit', ['data' => $data]);
    }

    function updatedata(Request $request, $id)
    {
        $data = blog::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        if ($data) {
            return redirect('update');
        } else {
            echo 'Data not updated';
        }
    }
}
