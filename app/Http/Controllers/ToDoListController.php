<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    //

    public function index(Request $request)
    {
        // \Log::info(json_encode($request->all()));
        return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }


    public function saveItem(Request $request)
    {

        if ($request->name) {

            $newListItem = new ListItem;
            $newListItem->name = $request->listItem;
            $newListItem->is_complete = 0;
            $newListItem->save();
        }

        return redirect("/");
    }

    public function markComplete($id)
    {


        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();

        // \Log::info($listItem);

        return redirect("/");
    }
}
