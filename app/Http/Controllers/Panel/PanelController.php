<?php

namespace App\Http\Controllers\Panel;


use Illuminate\Http\Request;

class PanelController
{
    public function index()
    {
        return view('panel.panel.index');
    }

//    public function popAlertMsg(Request $request)
//    {
//        return view('panel.block.alert_msg',[
//            'is_error'	=> filter_var($request->is_error, FILTER_VALIDATE_BOOLEAN),
//            'text'		=> $request->text,
//        ])->render();
//    }
//
//    public function deleteMediaBack( Media $media )
//    {
//        $media->delete();
//
//        return redirect()->back()->with('success', 'Файл удален');
//    }
//
//    public function configs()
//    {
//        $excel_template = Panels::excelTemplate()->first();
//
//        return view('panel.settings.index', [
//            'excel_template' => $excel_template ? $excel_template->getFirstMedia('configs') : ''
//        ]);
//    }
//
//    public function saveExcel( Request $request )
//    {
//        if ($request->has('excel')) {
//            $excel_template = Panels::firstOrCreate([ 'name' => 'excel_template' ]);
//
//            $excel_template->setExcelTemplate($request->file('excel'), 'configs');
//        }
//
//        return redirect()->back()->with('success', 'Файл успешно загружен');
//    }
}